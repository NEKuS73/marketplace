@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8 text-center">
    <h1 class="text-3xl font-bold mb-4">Thank you for your order!</h1>
    <p class="mb-2">Order #{{ $order->id }} has been placed successfully.</p>
    <p>We will process it soon.</p>
    <a href="{{ route('home') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Continue Shopping</a>
</div>
@endsection
