@extends('layouts.portfolio')

@section('title', 'Home')

@section('content')

{{-- ========================== HERO SECTION ========================== --}}
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

            <p class="hero-description">
                I build robust, optimized, and high-performance networks using Cisco technologies.
                Expertise in routing protocols, switching, VLAN, WAN architecture, firewall configuration, and network troubleshooting.
            </p>

            <div class="hero-buttons">
                <a href="#projects" class="btn primary-btn">View Projects</a>
                <a href="#contact" class="btn secondary-btn">Contact Me</a>
            </div>
        </div>

    </div>
</section>




{{-- ========================== ABOUT SECTION ========================== --}}
<section id="about" class="section reveal">
    <div class="container section-content center">

        <div class="section-header">
            <h2>About Me</h2>
            <div class="bar"></div>
        </div>

        <p class="about-text">
           I am a passionate Network Engineer with a strong foundation in designing, configuring, and securing modern network infrastructures.
My expertise includes routing & switching, WAN connectivity, VLAN management, subnetting, network troubleshooting, and essential security practices. I enjoy solving real-world networking problems, optimizing system performance, and ensuring reliable connectivity across environments.
<br><br>
I am comfortable working with Cisco devices, Packet Tracer, GNS3, Wireshark, and various network monitoring tools.
With a continuous learning mindset, I focus on building efficient, scalable, and secure network solutions.
<br><br>
I aim to grow as a professional Network Architect while contributing to organizations through technical expertise, teamwork, and dedication.
        </p>

    

        <a href="#" class="btn primary-btn">Download CV</a>

    </div>
</section>




{{-- ========================== SKILLS SECTION ========================== --}}
<section id="skills" class="section reveal">
    <div class="container section-content">

        <div class="section-header center">
            <h2>Skills</h2>
            <div class="bar"></div>
        </div>


        {{-- ------- Networking: Routing & Switching (Full Width Card) ------- --}}
        <div class="skill-card full-width">
            <h3>Routing & Switching</h3>
            <ul>
                <li>Static & Dynamic Routing (RIP, OSPF, EIGRP, BGP – basic)</li>
                <li>VLAN, Inter-VLAN Routing</li>
                <li>Subnetting & Supernetting</li>
                <li>WAN Technologies (PPP, Frame Relay, MPLS basics, Broadband)</li>
                <li>Default Routing & WAN Connectivity</li>
                <li>Access Control Lists (ACL)</li>
                <li>NAT, PAT Configuration</li>
                <li>DHCP, DNS, IP Address Management</li>
                <li>Network Topology Design</li>
                <li>Load Balancing & Redundancy Concepts</li>
                <li>Network Troubleshooting (Ping, Traceroute, Debug, Show Commands)</li>
            </ul>
        </div>


        {{-- ---------------------- Skills Grid ---------------------- --}}
        <div class="skills-grid">

            <div class="skill-card">
                <h3>Backend</h3>
                <ul>
                    <li>Laravel</li>
                    <li>PHP</li>
                    <li>REST API</li>
                    <li>Auth System</li>
                </ul>
            </div>

            <div class="skill-card">
                <h3>Frontend</h3>
                <ul>
                    <li>HTML, CSS</li>
                    <li>JavaScript</li>
                    <li>Blade</li>
                    <li>Responsive UI</li>
                </ul>
            </div>

            <div class="skill-card">
                <h3>Database</h3>
                <ul>
                    <li>MySQL</li>
                    <li>Migrations</li>
                    <li>Query Builder</li>
                    <li>Eloquent ORM</li>
                </ul>
            </div>

            <div class="skill-card">
                <h3>Networking Tools</h3>
                <ul>
                    <li>Cisco Packet Tracer</li>
                    <li>Cisco IOS CLI</li>
                    <li>GNS3</li>
                    <li>Wireshark</li>
                    <li>PuTTY / SecureCRT</li>
                    <li>Nmap</li>
                    <li>Angry IP Scanner</li>
                    <li>NetCat (nc)</li>
                    <li>OpenVPN / AnyConnect Basic</li>
                    <li>Traceroute Tools</li>
                </ul>
            </div>

            <div class="skill-card">
                <h3>Tools</h3>
                <ul>
                    <li>Git</li>
                    <li>Composer</li>
                    <li>Postman</li>
                    <li>VS Code</li>
                </ul>
            </div>

        </div>

    </div>
</section>




{{-- ========================== PROJECTS SECTION ========================== --}}
<section id="projects" class="section reveal">
    <div class="container section-content">
        <div class="section-header center">
            <h2>Projects</h2>
            <div class="bar"></div>
        </div>

        <div class="projects-grid">

            <!-- Attack on Finances -->
            <div class="project-card">
                <h3>Attack on Finances</h3>
                <p>
                    A cybersecurity-themed financial simulation created with strategic logic.
                    Designed to demonstrate vulnerability testing, risk handling, and digital security analysis.
                </p>
                <div class="project-links">
                    <a href="https://github.com/nhhabib/Attack-on-Finances" target="_blank">GitHub</a>
                </div>
            </div>

            <!-- Cisco Packet Tracer – Campus Network System -->
            <div class="project-card">
                <h3>Campus Network System (Cisco Packet Tracer)</h3>
                <p>
                    A complete campus network topology using Cisco Packet Tracer including VLAN, Routing,
                    Inter-VLAN Communication, DHCP & WAN concepts for enterprise-level networking.
                </p>
                <div class="project-links">
                    <a href="https://github.com/nhhabib/Cisco-Packet-Tracer-Project-2023-Campus-Network-System---Using-Cisco-Packet-Tracer-" target="_blank">GitHub</a>
                </div>
            </div>

            <!-- Inter-LAN Communication with DNS & HTTP Server -->
            <div class="project-card">
                <h3>Inter-LAN Communication with DNS & HTTP Server</h3>
                <p>
                    Cisco-based multi-LAN communication setup with DNS & HTTP server configuration. 
                    Includes routing, subnetting, ACL rules, and enterprise network design.
                </p>
                <div class="project-links">
                    <a href="https://github.com/nhhabib/Inter-LAN-Communication-with-DNS-HTTP-Server-Configuration-Network-System" target="_blank">GitHub</a>
                </div>
            </div>

        </div>
    </div>
</section>





{{-- ========================== CONTACT SECTION ========================== --}}
<section id="contact" class="section reveal">
    <div class="container section-content center">

        <div class="section-header">
            <h2>Contact Me</h2>
            <div class="bar"></div>
        </div>

        <p class="contact-text">
            Feel free to reach out for work or collaboration.
        </p>

        <a href="mailto:your@email.com" class="btn primary-btn">
            Send Email
        </a>

    </div>
</section>




{{-- ========================== TYPING ANIMATION SCRIPT ========================== --}}
<script>
    const typingTexts = [
        "Cisco Network Engineer",
        "Awesome Network Administrator",
        "AWS Cloud Practitioner",
        "NOC Specialist",
        "Full-Stack Laravel Developer",
        "Web Application Builder",
        "Backend Problem Solver",
        "Tech Enthusiast"
    ];

    let index = 0;
    let charIndex = 0;
    let isDeleting = false;

    function typeEffect() {
        const el = document.getElementById("typing-text");
        if (!el) return;

        const fullText = typingTexts[index];
        el.textContent = fullText.substring(0, charIndex);

        if (!isDeleting && charIndex < fullText.length) {
            charIndex++;
        } else if (isDeleting && charIndex > 0) {
            charIndex--;
        }

        if (charIndex === fullText.length) {
            isDeleting = true;
            setTimeout(typeEffect, 1200);
            return;
        }

        if (charIndex === 0 && isDeleting) {
            isDeleting = false;
            index = (index + 1) % typingTexts.length;
        }

        setTimeout(typeEffect, isDeleting ? 60 : 100);
    }

    document.addEventListener("DOMContentLoaded", typeEffect);
</script>

<script>
    const reveals = document.querySelectorAll('.reveal');

    function revealOnScroll() {
        for (let i = 0; i < reveals.length; i++) {
            const windowHeight = window.innerHeight;
            const elementTop = reveals[i].getBoundingClientRect().top;

            if (elementTop < windowHeight - 100) {
                reveals[i].classList.add("active");
            }
        }
    }

    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll();
</script>


@endsection
