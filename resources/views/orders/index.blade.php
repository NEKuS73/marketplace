@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">My Orders</h1>
    @forelse($orders as $order)
    <div class="border p-4 mb-4 rounded">
        <p><strong>Order #{{ $order->id }}</strong> - Status: {{ ucfirst($order->status) }} - Total: ${{ number_format($order->total, 2) }}</p>
        <p>Placed: {{ $order->created_at->format('Y-m-d H:i') }}</p>
        <a href="{{ route('checkout.success', $order) }}" class="text-blue-500">View details</a>
    </div>
    @empty
    <p>You have no orders yet.</p>
    @endforelse
</div>
@endsection
