@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Checkout</h1>
    <div class="grid md:grid-cols-2 gap-8">
        <div>
            <h2 class="text-xl font-semibold mb-4">Your order</h2>
            <table class="min-w-full bg-white border">
                <thead>
                    <tr>
                        <th class="border p-2">Product</th>
                        <th class="border p-2">Qty</th>
                        <th class="border p-2">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td class="border p-2">{{ $product->name }}</td>
                        <td class="border p-2">{{ $cart[$product->id]['quantity'] }}</td>
                        <td class="border p-2">${{ number_format($product->price * $cart[$product->id]['quantity'], 2) }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="2" class="text-right p-2">Total:</th>
                        <th class="border p-2">${{ number_format($total, 2) }}</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div>
            <h2 class="text-xl font-semibold mb-4">Shipping details</h2>
            <form method="POST" action="{{ route('checkout.store') }}">
                @csrf
                <div class="mb-4">
                    <label for="address" class="block">Address</label>
                    <input type="text" name="address" id="address" class="border p-2 w-full" required>
                </div>
                <div class="mb-4">
                    <label for="phone" class="block">Phone</label>
                    <input type="text" name="phone" id="phone" class="border p-2 w-full" required>
                </div>
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Place Order</button>
                <a href="{{ route('cart.index') }}" class="ml-2 bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back to Cart</a>
            </form>
        </div>
    </div>
</div>
@endsection
