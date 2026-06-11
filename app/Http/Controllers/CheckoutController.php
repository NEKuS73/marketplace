<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }
        $products = \App\Models\Product::whereIn('id', array_keys($cart))->get();
        $total = 0;
        foreach ($products as $product) {
            $total += $product->price * $cart[$product->id]['quantity'];
        }
        return view('checkout.index', compact('products', 'cart', 'total'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255',
            'phone'   => 'required|string|max:20',
        ]);

        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        $products = \App\Models\Product::whereIn('id', array_keys($cart))->get();

        // Проверка доступного количества на складе
        foreach ($products as $product) {
            $requestedQty = $cart[$product->id]['quantity'];
            if ($product->stock < $requestedQty) {
                return redirect()->route('cart.index')->withErrors("Not enough stock for {$product->name}. Only {$product->stock} left.");
            }
        }

        $total = 0;
        foreach ($products as $product) {
            $total += $product->price * $cart[$product->id]['quantity'];
        }

        $order = Order::create([
            'user_id' => Auth::id(),
            'total'   => $total,
            'status'  => 'pending',
            'address' => $request->address,
            'phone'   => $request->phone,
        ]);

        foreach ($products as $product) {
            OrderItem::create([
                'order_id'   => $order->id,
                'product_id' => $product->id,
                'quantity'   => $cart[$product->id]['quantity'],
                'price'      => $product->price,
            ]);

            // Уменьшаем количество товара на складе
            $product->decrement('stock', $cart[$product->id]['quantity']);
        }

        // очистка корзины
        session()->forget('cart');

        return redirect()->route('checkout.success', $order)->with('success', 'Order placed successfully!');
    }

    public function success(Order $order)
    {
        return view('checkout.success', compact('order'));
    }
}
