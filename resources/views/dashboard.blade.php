@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Dashboard</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow text-center">
            <h2 class="text-xl font-semibold">Products</h2>
            <p class="text-4xl font-bold text-blue-600">{{ \App\Models\Product::count() }}</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow text-center">
            <h2 class="text-xl font-semibold">Orders</h2>
            <p class="text-4xl font-bold text-green-600">{{ \App\Models\Order::count() }}</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow text-center">
            <h2 class="text-xl font-semibold">Users</h2>
            <p class="text-4xl font-bold text-purple-600">{{ \App\Models\User::count() }}</p>
        </div>
    </div>
</div>
@endsection
