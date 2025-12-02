<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Portfolio | @yield('title', 'Developer')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    {{-- Navbar --}}
    <header class="navbar">
        <div class="container nav-content">
            <div class="logo">
                <a href="{{ route('home') }}">my<span>Portfolio</span></a>
            </div>
            <nav class="nav-links">
                <a href="#hero">Home</a>
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#projects">Projects</a>
                <a href="#experience">Experience</a>
                <a href="#blog">Blog</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="footer">
        <div class="container footer-content">
            <p>&copy; {{ date('Y') }} Your Name. All rights reserved.</p>
            <div class="social-links">
                <a href="#" target="_blank">GitHub</a>
                <a href="#" target="_blank">LinkedIn</a>
                <a href="#" target="_blank">Facebook</a>
            </div>
        </div>
    </footer>

</body>
</html>
