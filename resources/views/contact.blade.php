@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Contact Me</h1>
    <form method="POST" action="{{ route('contact.submit') }}" class="space-y-4 max-w-md">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium mb-1">Name</label>
            <input type="text" name="name" id="name" class="w-full border-gray-300 rounded" required>
        </div>
        <div>
            <label for="email" class="block text-sm font-medium mb-1">Email</label>
            <input type="email" name="email" id="email" class="w-full border-gray-300 rounded" required>
        </div>
        <div>
            <label for="message" class="block text-sm font-medium mb-1">Message</label>
            <textarea name="message" id="message" rows="4" class="w-full border-gray-300 rounded" required></textarea>
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Send</button>
    </form>
@endsection
