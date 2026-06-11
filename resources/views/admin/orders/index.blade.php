@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Orders</h1>
    @if(session('success'))
    <div class="bg-green-100 text-green-800 p-2 mb-4 rounded">{{ session('success') }}</div>
    @endif
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border">
            <thead>
                <tr>
                    <th class="py-2 px-4 border">ID</th>
                    <th class="py-2 px-4 border">User</th>
                    <th class="py-2 px-4 border">Total</th>
                    <th class="py-2 px-4 border">Status</th>
                    <th class="py-2 px-4 border">Date</th>
                    <th class="py-2 px-4 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($orders as $order)
                <tr>
                    <td class="border p-2">{{ $order->id }}</td>
                    <td class="border p-2">{{ $order->user->name ?? 'Guest' }} ({{ $order->user->email ?? 'N/A' }})</td>
                    <td class="border p-2">${{ number_format($order->total, 2) }}</td>
                    <td class="border p-2">{{ ucfirst($order->status) }}</td>
                    <td class="border p-2">{{ $order->created_at->format('Y-m-d H:i') }}</td>
                    <td class="border p-2">
                        <a href="{{ route('admin.orders.show', $order) }}" class="text-blue-500 hover:underline">View</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center p-4">No orders yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-4">{{ $orders->links() }}</div>
</div>
@endsection
