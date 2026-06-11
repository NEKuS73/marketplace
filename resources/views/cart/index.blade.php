@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Shopping Cart</h1>

    @if(session('success'))
    <div class="bg-green-100 text-green-800 p-2 mb-4 rounded">{{ session('success') }}</div>
    @endif

    @if(isset($products) && count($products) > 0)
    <table class="min-w-full bg-white border">
        <thead>
            <tr>
                <th class="py-2 px-4 border">Product</th>
                <th class="py-2 px-4 border">Price</th>
                <th class="py-2 px-4 border">Quantity</th>
                <th class="py-2 px-4 border">Subtotal</th>
                <th class="py-2 px-4 border"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td class="border p-2">{{ $product->name }}</td>
                <td class="border p-2">${{ number_format($product->price, 2) }}</td>
                <td class="border p-2">
                    <form action="{{ route('cart.update', $product->id) }}" method="GET" class="inline">
                        <input type="number" name="quantity" value="{{ $cart[$product->id]['quantity'] }}" min="1" class="w-16 border rounded px-2 py-1">
                        <button type="submit" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">Update</button>
                    </form>
                </td>
                <td class="border p-2">${{ number_format($product->price * $cart[$product->id]['quantity'], 2) }}</td>
                <td class="border p-2">
                    <a href="{{ route('cart.remove', $product->id) }}" class="text-red-500 hover:underline">Remove</a>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3" class="text-right font-bold">Total:</td>
                <td class="font-bold">${{ number_format($total, 2) }}</td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <div class="mt-4">
        <a href="#" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Proceed to Checkout</a>
    </div>
    @else
    <p>Your cart is empty.</p>
    @endif
</div>
@endsection
