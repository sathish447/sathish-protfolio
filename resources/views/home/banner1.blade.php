@section('content')
<section class="min-h-[70vh] flex items-center justify-center">
    <div class="w-full grid grid-cols-1 md:grid-cols-2 items-center gap-5">
        <!-- LEFT CONTENT -->
        <div>
            <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                Software Engineer,<br>
                Laravel Developer &<br>
                Open-source Maintainer
            </h1>
            <p class="mt-4 text-lg">
                I'm <strong>Sathish Kumar</strong>, a backend-focused developer with 9+ years of experience building robust Laravel applications, leading teams, and contributing to open-source projects.
            </p>

            <!-- SOCIAL LINKS -->
            <div class="mt-6 flex flex-wrap gap-5 text-2xl">

                <a href="#" class="hover:text-[var(--accent)]"><i class="fab fa-github"></i> GitHub</a>

                <a href="#" class="hover:text-[var(--accent)]"><i class="fab fa-linkedin"></i> Linkedin</a>

                <a href="#" class="hover:text-[var(--accent)]"><i class="fab fa-instagram"></i> Instagram</a>

                <a href="#" class="hover:text-[var(--accent)]"><i class="fab fa-youtube"></i> Youtube</a>

                <a href="#" class="hover:text-[var(--accent)]"><i class="fab fa-gitlab"></i> GitLab</a>

                <a href="https://codepen.io/yourusername" class="hover:text-[var(--accent)]"><i class="fab fa-codepen"></i> Codepen</a>

                <a href="https://dribbble.com/yourusername" class="hover:text-[var(--accent)]"><i class="fab fa-dribbble"></i> Dribbble</a>

                <a href="https://stackoverflow.com/users/youruserid" class="hover:text-[var(--accent)]" title="Stack Overflow">
                <i class="fab fa-stack-overflow"></i> Stackoverflow</a>

                <!-- External SVGs (Daily.dev, LeetCode, Codewars, StackOverflow) -->
                <a href="https://daily.dev/@yourusername" class="hover:text-[var(--accent)] hidden" title="Daily.dev">
                    <img src="https://api.iconify.design/simple-icons/dailydotdev.svg" alt="Daily.dev" class="w-6 h-6">  Daily.dev</a>

                <a href="https://leetcode.com/yourusername" class="hover:text-[var(--accent)] hidden" title="LeetCode">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/LeetCode_logo_black.png" alt="LeetCode" class="w-6 h-6"> LeetCode</a>

                <a href="https://www.codewars.com/users/yourusername" class="hover:text-[var(--accent)] hidden" title="Codewars">
                    <img src="https://www.codewars.com/packs/assets/logo.61192cf7.svg" alt="Codewars" class="w-6 h-6"> Codewars</a>
            </div>
        </div>

        <!-- RIGHT: Laravel Logo -->
        <div class="flex justify-center">
            <img src="{{ asset('images/laravel-logo.svg') }}" alt="Laravel Logo" class="w-60 h-60 animate-bounce">
        </div>

    </div>
</section>
@endsection
