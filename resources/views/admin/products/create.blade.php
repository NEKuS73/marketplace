@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Create Product</h1>
    <form method="POST" action="{{ route('admin.products.store') }}">
        @csrf
        <div class="mb-4">
            <label for="name" class="block">Name</label>
            <input type="text" name="name" id="name" class="border p-2 w-full" value="{{ old('name') }}" required>
        </div>
        <div class="mb-4">
            <label for="slug" class="block">Slug</label>
            <input type="text" name="slug" id="slug" class="border p-2 w-full" value="{{ old('slug') }}" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block">Description</label>
            <textarea name="description" id="description" rows="4" class="border p-2 w-full">{{ old('description') }}</textarea>
        </div>
        <div class="mb-4">
            <label for="price" class="block">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="border p-2 w-full" value="{{ old('price') }}" required>
        </div>
        <div class="mb-4">
            <label for="stock" class="block">Stock</label>
            <input type="number" name="stock" id="stock" class="border p-2 w-full" value="{{ old('stock') }}" required>
        </div>
        <div class="mb-4">
            <label for="category_id" class="block">Category</label>
            <select name="category_id" id="category_id" class="border p-2 w-full" required>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded">Save</button>
        <a href="{{ route('admin.products.index') }}" class="ml-2 bg-gray-500 text-white px-4 py-2 rounded">Cancel</a>
    </form>
</div>
@endsection
