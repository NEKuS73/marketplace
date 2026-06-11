@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Product Catalog</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @forelse($products as $product)
        <div class="border rounded-lg p-4 shadow">
            <h2 class="text-xl font-semibold">{{ $product->name }}</h2>
            <p class="text-gray-600">{{ $product->category->name ?? 'Uncategorized' }}</p>
            <p class="text-lg font-bold mt-2">${{ number_format($product->price, 2) }}</p>
            <p class="text-sm text-gray-500">Stock: {{ $product->stock }}</p>
            <div class="mt-3 flex space-x-2">
                <a href="{{ route('product.show', $product->id) }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</a>
                <a href="{{ route('cart.add', $product->id) }}" class="inline-block bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800">Add to Cart</a>
            </div>
        </div>
        @empty
        <p>No products yet. Run seeder.</p>
        @endforelse
    </div>
    <div class="mt-6">
        {{ $products->links() }}
    </div>
</div>
@endsection
