@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Manage Products</h1>
        <a href="{{ route('admin.products.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Add Product</a>
    </div>
    @if(session('success'))
    <div class="bg-green-100 text-green-800 p-2 mb-4 rounded">{{ session('success') }}</div>
    @endif
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border">
            <thead>
                <tr>
                    <th class="py-2 px-4 border">ID</th>
                    <th class="py-2 px-4 border">Name</th>
                    <th class="py-2 px-4 border">Category</th>
                    <th class="py-2 px-4 border">Price</th>
                    <th class="py-2 px-4 border">Stock</th>
                    <th class="py-2 px-4 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td class="border p-2">{{ $product->id }}</td>
                    <td class="border p-2">{{ $product->name }}</td>
                    <td class="border p-2">{{ $product->category->name ?? 'None' }}</td>
                    <td class="border p-2">${{ number_format($product->price, 2) }}</td>
                    <td class="border p-2">{{ $product->stock }}</td>
                    <td class="border p-2">
                        <a href="{{ route('admin.products.edit', $product) }}" class="text-blue-500 hover:underline">Edit</a>
                        <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="inline" onsubmit="return confirm('Delete this product?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline ml-2">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">{{ $products->links() }}</div>
</div>
@endsection
