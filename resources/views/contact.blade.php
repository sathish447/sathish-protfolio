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
    
    <div class="mt-10 max-w-md">
        <h2 class="text-2xl font-semibold mb-4">Connect with me</h2>
        <div class="flex justify-center space-x-6 text-4xl">
            <a href="https://linkedin.com/in/YOUR_USERNAME" target="_blank" aria-label="LinkedIn" class="text-gray-600 hover:text-blue-700">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://github.com/YOUR_USERNAME" target="_blank" aria-label="GitHub" class="text-gray-600 hover:text-gray-900">
                <i class="fab fa-github"></i>
            </a>
            <a href="mailto:you@example.com" aria-label="Email" class="text-gray-600 hover:text-red-600">
                <i class="fas fa-envelope"></i>
            </a>
        </div>
    </div>
@endsection
