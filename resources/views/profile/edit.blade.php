@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Edit Profile</h1>
    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PATCH')
        <div class="mb-4">
            <label for="name" class="block">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="border rounded p-2 w-full">
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="email" class="block">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="border rounded p-2 w-full">
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded">Save</button>
    </form>
</div>
@endsection
