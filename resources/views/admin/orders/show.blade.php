@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Order #{{ $order->id }}</h1>
    <div class="bg-white rounded shadow p-6 mb-6">
        <h2 class="text-xl font-semibold mb-2">Customer</h2>
        <p><strong>Name:</strong> {{ $order->user->name ?? 'Guest' }}</p>
        <p><strong>Email:</strong> {{ $order->user->email ?? 'N/A' }}</p>
        <p><strong>Address:</strong> {{ $order->address ?? 'Not provided' }}</p>
        <p><strong>Phone:</strong> {{ $order->phone ?? 'N/A' }}</p>
        <p><strong>Order placed:</strong> {{ $order->created_at->format('Y-m-d H:i') }}</p>
    </div>

    <div class="bg-white rounded shadow p-6 mb-6">
        <h2 class="text-xl font-semibold mb-2">Order Items</h2>
        <table class="min-w-full border">
            <thead>
                <tr>
                    <th class="border p-2">Product</th>
                    <th class="border p-2">Price</th>
                    <th class="border p-2">Quantity</th>
                    <th class="border p-2">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->items as $item)
                <tr>
                    <td class="border p-2">{{ $item->product->name ?? 'Product deleted' }}</td>
                    <td class="border p-2">${{ number_format($item->price, 2) }}</td>
                    <td class="border p-2">{{ $item->quantity }}</td>
                    <td class="border p-2">${{ number_format($item->price * $item->quantity, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-right p-2">Total</th>
                    <th class="border p-2">${{ number_format($order->total, 2) }}</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="bg-white rounded shadow p-6">
        <h2 class="text-xl font-semibold mb-2">Update Status</h2>
        <form method="POST" action="{{ route('admin.orders.updateStatus', $order) }}">
            @csrf
            <select name="status" class="border p-2 rounded">
                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="paid" {{ $order->status == 'paid' ? 'selected' : '' }}>Paid</option>
                <option value="shipped" {{ $order->status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                <option value="delivered" {{ $order->status == 'delivered' ? 'selected' : '' }}>Delivered</option>
                <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
            </select>
            <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded ml-2">Update</button>
        </form>
    </div>

    <div class="mt-4">
        <a href="{{ route('admin.orders.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Back to Orders</a>
    </div>
</div>
@endsection
