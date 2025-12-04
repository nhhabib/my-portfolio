<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Portfolio | @yield('title', 'Home')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>

    <header class="navbar">
        <div class="container nav-content">
            <div class="logo">
                <a href="#hero">my<span>Portfolio</span></a>
            </div>

            <nav class="nav-links">
                <a href="#hero">Home</a>
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container footer-content">
            <p>&copy; {{ date('Y') }} All rights reserved.</p>
            <div class="social-links">
                <a href="#" target="_blank">GitHub</a>
                <a href="#" target="_blank">LinkedIn</a>
                <a href="#" target="_blank">Facebook</a>
            </div>
        </div>
    </footer>
    <script>
    function reveal() {
        const reveals = document.querySelectorAll(".reveal");

        for (let i = 0; i < reveals.length; i++) {

            let windowHeight = window.innerHeight;
            let elementTop = reveals[i].getBoundingClientRect().top;
            let elementVisible = 100;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }

    window.addEventListener("scroll", reveal);

    // initial load
    reveal();
</script>
<script>
    let index = 0;
    let charIndex = 0;
    const speed = 100; 

    function type() {
        const text = typingTexts[index];
        document.getElementById("typing-text").innerHTML = text.substring(0, charIndex);

        charIndex++;

        if (charIndex <= text.length) {
            setTimeout(type, speed);
        } else {
            setTimeout(erase, 1500);
        }
    }

    function erase() {
        const text = typingTexts[index];
        document.getElementById("typing-text").innerHTML = text.substring(0, charIndex);

        charIndex--;

        if (charIndex >= 0) {
            setTimeout(erase, 60);
        } else {
            index = (index + 1) % typingTexts.length;
            setTimeout(type, 200);
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        if (typingTexts.length) setTimeout(type, 200);
    });
</script>



</body>
</html>
