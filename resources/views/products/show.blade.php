@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow p-6 max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mb-4">{{ $product->name }}</h1>
        <p class="text-gray-600 mb-2">Category: {{ $product->category->name ?? 'Uncategorized' }}</p>
        <p class="text-2xl font-bold text-green-600 mb-4">${{ number_format($product->price, 2) }}</p>
        <p class="text-gray-700 mb-4">{{ $product->description ?: 'No description available.' }}</p>
        <p class="text-sm text-gray-500 mb-4">Stock: {{ $product->stock }}</p>
        <div class="flex space-x-4">
            <form action="{{ route('cart.add', $product->id) }}" method="GET">
                <button type="submit" class="bg-blue-700 text-white px-6 py-2 rounded hover:bg-blue-800">Add to Cart</button>
            </form>
            <a href="{{ route('home') }}" class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600">Back to Catalog</a>
        </div>
    </div>
</div>
@endsection
