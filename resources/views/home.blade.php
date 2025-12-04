@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section id="hero" class="hero reveal">
    <div class="container hero-content">
        <div class="hero-image">
            <img src="{{ asset('images/profile.jpg') }}" alt="Profile Photo" class="profile-photo">
        </div>

        <div class="hero-text center">
            <p class="greeting">Hi, I am</p>
            <h1 class="hero-name">Nayeem Hasan Habib</h1>
            <h2 class="hero-title">
    <span id="typing-text"></span>
</h2>
<script>
    const typingTexts = [
        "Full-Stack Laravel Developer",
        "Web Application Builder",
        "Backend Problem Solver",
        "Tech Enthusiast"
    ];
</script>


            <p class="hero-description">
                I build clean, scalable web applications using Laravel, PHP, and modern frontend technologies.
            </p>

            <div class="hero-buttons">
                <a href="#projects" class="btn primary-btn">View Projects</a>
                <a href="#contact" class="btn secondary-btn">Contact Me</a>
            </div>
        </div>
    </div>
</section>

<section id="about" class="section reveal">
    <div class="container section-content center">
        <div class="section-header">
            <h2>About Me</h2>
            <div class="bar"></div>
        </div>

        <p class="about-text">
            I am a passionate web developer with a strong focus on backend development using Laravel.
            I love creating clean, maintainable and scalable applications that solve real-world problems.
        </p>

        <p class="about-text">
            When I'm not coding, I like to learn new technologies, contribute to open-source projects, and write technical blogs to share my knowledge.
        </p>

        <a href="#" class="btn primary-btn">Download CV</a>
    </div>
</section>

<section id="skills" class="section reveal">
    <div class="container section-content">
        <div class="section-header center">
            <h2>Skills</h2>
            <div class="bar"></div>
        </div>

        <div class="skills-grid">
            <div class="skill-card">
                <h3>Backend</h3>
                <ul><li>Laravel</li><li>PHP</li><li>REST API</li><li>Auth System</li></ul>
            </div>

            <div class="skill-card">
                <h3>Frontend</h3>
                <ul><li>HTML, CSS</li><li>JavaScript</li><li>Blade</li><li>Responsive UI</li></ul>
            </div>

            <div class="skill-card">
                <h3>Database</h3>
                <ul><li>MySQL</li><li>Migrations</li><li>Query Builder</li><li>Eloquent ORM</li></ul>
            </div>

            <div class="skill-card">
                <h3>Tools</h3>
                <ul><li>Git</li><li>Composer</li><li>Postman</li><li>VS Code</li></ul>
            </div>
        </div>
    </div>
</section>

<section id="projects" class="section reveal">
    <div class="container section-content">
        <div class="section-header center">
            <h2>Projects</h2>
            <div class="bar"></div>
        </div>

        <div class="projects-grid">
            <div class="project-card">
                <h3>Project Management System</h3>
                <p>Role-based app with tasks, teams, dashboard.</p>
                <div class="project-links"><a href="#">Live</a><a href="#">GitHub</a></div>
            </div>

            <div class="project-card">
                <h3>Blog Platform</h3>
                <p>Blog with categories, tags, admin dashboard.</p>
                <div class="project-links"><a href="#">Live</a><a href="#">GitHub</a></div>
            </div>

            <div class="project-card">
                <h3>Portfolio Website</h3>
                <p>Modern portfolio to showcase work.</p>
                <div class="project-links"><a href="#">Live</a><a href="#">GitHub</a></div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="section reveal">
    <div class="container section-content center">
        <div class="section-header">
            <h2>Contact Me</h2>
            <div class="bar"></div>
        </div>

        <p class="contact-text">
            Feel free to reach out for work or collaboration.
        </p>

        <a href="mailto:your@email.com" class="btn primary-btn">Send Email</a>
    </div>
</section>

@endsection
