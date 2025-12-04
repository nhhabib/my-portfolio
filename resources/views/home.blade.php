@extends('layouts.app')

@section('title', 'Home')

@section('content')

{{-- Hero Section --}}
<section id="hero" class="hero">
    <div class="container hero-content">
        <div class="hero-text">
            <p class="greeting">Hi, I am</p>
            <h1>NAYEEM HASAN HABIB</h1>
            <h2>Full-Stack Laravel Developer</h2>
            <p class="hero-description">
                I build clean, scalable web applications using Laravel, PHP, and modern frontend technologies.
            </p>
            <div class="hero-buttons">
                <a href="#projects" class="btn primary-btn">View Projects</a>
                <a href="#contact" class="btn secondary-btn">Contact Me</a>
            </div>
        </div>
        <div class="hero-image">
    <img src="{{ asset('images/profile.jpg') }}" alt="Profile Photo" class="profile-photo">
</div>

    </div>
</section>

{{-- About Section --}}
<section id="about" class="section about">
    <div class="container section-content">
        <div class="section-header">
            <h2>About Me</h2>
            <p>Who am I?</p>
        </div>
        <div class="about-body">
            <p>
                I am a passionate web developer with a strong focus on backend development using Laravel.
                I love creating clean, maintainable and scalable applications that solve real-world problems.
            </p>
            <p>
                When I'm not coding, I like to learn new technologies, contribute to open-source projects,
                and write technical blogs to share my knowledge.
            </p>
            <a href="#" class="btn primary-btn">Download CV</a>
        </div>
    </div>
</section>

{{-- Skills Section --}}
<section id="skills" class="section skills">
    <div class="container section-content">
        <div class="section-header">
            <h2>Skills</h2>
            <p>What I work with</p>
        </div>
        <div class="skills-grid">
            <div class="skill-card">
                <h3>Backend</h3>
                <ul>
                    <li>PHP (OOP)</li>
                    <li>Laravel</li>
                    <li>REST API</li>
                    <li>Authentication & Authorization</li>
                </ul>
            </div>
            <div class="skill-card">
                <h3>Frontend</h3>
                <ul>
                    <li>HTML5, CSS3</li>
                    <li>JavaScript (ES6+)</li>
                    <li>Blade Templates</li>
                    <li>Responsive Design</li>
                </ul>
            </div>
            <div class="skill-card">
                <h3>Database & Tools</h3>
                <ul>
                    <li>MySQL</li>
                    <li>Git & GitHub</li>
                    <li>Composer</li>
                    <li>Postman</li>
                </ul>
            </div>
            <div class="skill-card">
                <h3>Soft Skills</h3>
                <ul>
                    <li>Problem Solving</li>
                    <li>Team Work</li>
                    <li>Communication</li>
                    <li>Time Management</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- Projects Section --}}
<section id="projects" class="section projects">
    <div class="container section-content">
        <div class="section-header">
            <h2>Projects</h2>
            <p>Some of my work</p>
        </div>

        <div class="projects-grid">
            {{-- Project 1 --}}
            <div class="project-card">
                <div class="project-image">
                    <span>Screenshot</span>
                </div>
                <div class="project-body">
                    <h3>Project Management System</h3>
                    <p>
                        A full-stack Laravel application to manage projects, tasks, and teams with
                        authentication and role-based access control.
                    </p>
                    <p class="project-tech">Laravel · MySQL · Bootstrap</p>
                    <div class="project-links">
                        <a href="#" target="_blank">Live Demo</a>
                        <a href="#" target="_blank">GitHub</a>
                    </div>
                </div>
            </div>

            {{-- Project 2 --}}
            <div class="project-card">
                <div class="project-image">
                    <span>Screenshot</span>
                </div>
                <div class="project-body">
                    <h3>Blog Application</h3>
                    <p>
                        A simple multi-user blog system with categories, tags, and admin panel for managing posts.
                    </p>
                    <p class="project-tech">Laravel · Blade · MySQL</p>
                    <div class="project-links">
                        <a href="#" target="_blank">Live Demo</a>
                        <a href="#" target="_blank">GitHub</a>
                    </div>
                </div>
            </div>

            {{-- Project 3 --}}
            <div class="project-card">
                <div class="project-image">
                    <span>Screenshot</span>
                </div>
                <div class="project-body">
                    <h3>Portfolio Website</h3>
                    <p>
                        A personal portfolio website to showcase projects, skills, and experience with a
                        clean and modern UI.
                    </p>
                    <p class="project-tech">Laravel · Vanilla CSS</p>
                    <div class="project-links">
                        <a href="#" target="_blank">Live Demo</a>
                        <a href="#" target="_blank">GitHub</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Experience Section --}}
<section id="experience" class="section experience">
    <div class="container section-content">
        <div class="section-header">
            <h2>Experience</h2>
            <p>Where I've worked</p>
        </div>

        <div class="timeline">

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h3>Junior Laravel Developer</h3>
                    <span class="timeline-date">2023 - Present</span>
                    <p>Company Name – Worked on building and maintaining web applications using Laravel.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h3>Freelance Web Developer</h3>
                    <span class="timeline-date">2021 - 2023</span>
                    <p>Worked with multiple clients to develop custom websites and web applications.</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Blog Section (Static for now) --}}
<section id="blog" class="section blog">
    <div class="container section-content">
        <div class="section-header">
            <h2>Blog</h2>
            <p>My latest articles</p>
        </div>

        <div class="blog-grid">
            <div class="blog-card">
                <h3>Getting Started with Laravel</h3>
                <p>Basic concepts of Laravel framework and how to quickly build your first app.</p>
                <a href="#">Read More</a>
            </div>
            <div class="blog-card">
                <h3>REST API with Laravel</h3>
                <p>How to design and build RESTful APIs using Laravel resources and routes.</p>
                <a href="#">Read More</a>
            </div>
            <div class="blog-card">
                <h3>Clean Code in PHP</h3>
                <p>Learn how to write maintainable and clean PHP code following best practices.</p>
                <a href="#">Read More</a>
            </div>
        </div>
    </div>
</section>

{{-- Contact Section --}}
<section id="contact" class="section contact">
    <div class="container section-content">
        <div class="section-header">
            <h2>Contact</h2>
            <p>Let's work together</p>
        </div>

        <div class="contact-grid">
            <div class="contact-info">
                <h3>Get in touch</h3>
                <p>Email: your.email@example.com</p>
                <p>Phone: +8801XXXXXXXXX</p>
                <p>Location: Dhaka, Bangladesh</p>
            </div>
            <div class="contact-form">
                <form action="#" method="POST">
                    {{-- @csrf (পরবর্তীতে route দিলে যোগ করবে) --}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" name="name" placeholder="Your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" placeholder="Your email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="4" placeholder="Write your message"></textarea>
                    </div>
                    <button type="submit" class="btn primary-btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
