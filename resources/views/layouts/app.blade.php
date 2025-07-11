<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
    <!-- Include Tailwind CSS via CDN for quick styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for social icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}" />
</head>
<body class="min-h-screen" style="background-color: var(--bg); color: var(--text);">
    <nav class="shadow mb-8" style="background-color: var(--bg);">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-semibold hover:underline hover:text-[var(--accent)] focus:underline">Sathish Kumar</a>
            <div class="space-x-4 flex items-center">
                                <a href="{{ url('/about') }}" class="hover:text-[var(--accent)]">About</a>
                <a href="{{ url('/skills') }}" class="hover:text-[var(--accent)]">Skills</a>
                <a href="{{ url('/projects') }}" class="hover:text-[var(--accent)]">Projects</a>
                <a href="{{ url('/resume') }}" class="hover:text-[var(--accent)]">Resume</a>
                <a href="{{ url('/contact') }}" class="hover:text-[var(--accent)]">Contact</a>
                <button onclick="toggleTheme()" aria-label="Toggle theme" class="ml-2 text-xl focus:outline-none">
                    <i id="theme-icon" class="fas fa-moon"></i>
                </button>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4">
        @yield('content')
    </main>

    <footer class="mt-8 py-4 shadow-inner" style="background-color: var(--bg);">
        <div class="container mx-auto text-center text-sm">
            &copy; {{ date('Y') }} Sathish Kumar. All rights reserved.
        </div>
    </footer>
    <script src="{{ asset('js/theme.js') }}"></script>
</body>
</html>
