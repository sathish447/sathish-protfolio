<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
    <!-- Include Tailwind CSS via CDN for quick styling -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-white shadow mb-8">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-semibold">My Portfolio</a>
            <div class="space-x-4">
                <a href="{{ url('/') }}" class="hover:text-blue-500">Home</a>
                <a href="{{ url('/about') }}" class="hover:text-blue-500">About</a>
                <a href="{{ url('/skills') }}" class="hover:text-blue-500">Skills</a>
                <a href="{{ url('/projects') }}" class="hover:text-blue-500">Projects</a>
                <a href="{{ url('/resume') }}" class="hover:text-blue-500">Resume</a>
                <a href="{{ url('/contact') }}" class="hover:text-blue-500">Contact</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4">
        @yield('content')
    </main>

    <footer class="bg-white mt-8 py-4 shadow-inner">
        <div class="container mx-auto text-center text-sm">
            &copy; {{ date('Y') }} My Portfolio. All rights reserved.
        </div>
    </footer>
</body>
</html>
