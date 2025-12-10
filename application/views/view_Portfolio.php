<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Glass Effect Components</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/inc/bootstrap/bootstrap.min.css') ?>">
    <script src="<?php echo base_url('assets\js\lib\lenis.min.js') ?>"></script>

    <style>
        /* CSS existing code tetap sama */
        @font-face {
            font-family: "Poppins";
            src: url("../css/Poppins/Poppins-Regular.ttf") format("truetype");
            font-weight: normal;
        }

        @font-face {
            font-family: "Poppins";
            src: url("../css/Poppins/Poppins-Bold.ttf") format("truetype");
            font-weight: bold;
        }

        html, body {
            font-family: "Poppins", sans-serif;
        }

		.waving-hand {
            display: inline-block;
            animation: wave 7s ease-in-out infinite;
            transform-origin: 70% 70%; /* Titik rotasi di bagian bawah tangan */
        }
        
        @keyframes wave {
            0% {
                transform: rotate(0deg);
            }
            10% {
                transform: rotate(14deg);
            }
            20% {
                transform: rotate(-8deg);
            }
            30% {
                transform: rotate(14deg);
            }
            40% {
                transform: rotate(-4deg);
            }
            50% {
                transform: rotate(10deg);
            }
            60% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(0deg);
            }
        }

        body {
            min-height: 100vh;
            background: linear-gradient(120deg, #121f63ff ,#075558ff, #0f172a);
            /* background: linear-gradient(120deg, #1e293b, #0f172a); */
            color: #fff;
            padding-bottom: 50px;
            cursor: none;
            overflow-x: hidden;

            background-size: 400% 400%;
            animation: gradientMove 15s ease infinite;
        }

		@keyframes gradientMove {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Hanya tambahkan CSS ini untuk smooth scroll */
        html.lenis {
            height: auto;
        }

        .lenis.lenis-smooth {
            scroll-behavior: auto;
        }

        .lenis.lenis-smooth [data-lenis-prevent] {
            overscroll-behavior: contain;
        }

        .lenis.lenis-stopped {
            overflow: hidden;
        }

        .lenis.lenis-scrolling iframe {
            pointer-events: none;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(15, 23, 42, 0.2);
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 4px;
            transition: background 0.3s ease;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.25);
        }

        /* CSS existing code tetap sama */
        .cursor {
            width: 28px;
            height: 28px;
            border: 2px solid #ffffffaa;
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            transform: translate(-50%, -50%);
            transition: all 0.12s ease-out;
            z-index: 9999;
            backdrop-filter: blur(3px);
        }

        /* Basic Glass */
        .glass-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.25);
        }

        /* Dark Mode */
        .glass-dark {
            background: rgba(0, 0, 0, 0.35);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            color: #fff;
        }

        /* Profile */
        .glass-profile {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(14px);
            border: 1px solid rgba(255, 255, 255, 0.25);
        }

        /* Pricing */
        .glass-pricing {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.25);
        }

        /* Info */
        .glass-info {
            background: rgba(255, 255, 255, 0.14);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.22);
        }

        /* Hover Animated */
        .glass-animate {
            background: rgba(255, 255, 255, 0.14);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.22);
            transition: transform .5s ease, box-shadow .5s ease;
        }

        .glass-animate:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 32px rgba(0,0,0,0.3);
        }

        .skill-title {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px; /* spasi antara icon & teks */
        }
    </style>
</head>

<body>
    <div class="cursor"></div>
    
    <!-- NAVBAR -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-transparent py-3">
        <div class="container">
            <a class="navbar-brand fw-semibold fs-4">MUHAMMAD KRISNA PASHA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="container py-5" style="margin-top:40px;">
        <div class="row align-items-center">
            <div class="col-lg-7 mt-4">
                <h1 class="fw-bold display-4 mb-3">
                    Hi, I'm <span class="text-primary">Krisna</span><span class="waving-hand"> 👋</span>
                </h1>
                <p class="fs-5 text-white-50 leading-relaxed">
                    A passionate <span class="fw-semibold text-white">Full Stack Developer</span> with experience
                    in building reliable, scalable, and modern applications.  
                    I specialize in <span class="fw-semibold text-white">PHP, Java, SQL Server, My SQL, Oracle, CodeIgniter, Java Spring,</span> and clean <span class="fw-semibold text-white">UI/UX implementation.</span>
                </p>
                <a href="#projects" class="btn btn-light px-4 py-2 rounded-pill mt-3">
                    View My Work →
                </a>
            </div>
            <div class="col-lg-5 text-center mt-4">
                <div class="card glass-animate glass-profile p-4 rounded-circle shadow-lg d-inline-block">
                    <img src="<?php echo base_url('assets/img/Muhammad Krisna Pasha_MI_0320220017 - Copy - 1.jpg')?>"
                         class="rounded-circle border border-3 border-white shadow-lg"
                         width="250" height="250">
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT ME -->
    <section id="about" class="container mt-5">
        <h2 class="fw-bold mb-4">About Me</h2>
        <div class="card glass-animate p-4 rounded-4">
            <p class="fs-5 text-white-50">
                I am a graduate of <a href="https://www.polytechnic.astra.ac.id/" class="text-white">Politeknik Astra</a> with a Diploma in Informatics Management (D3). 
                I have a strong interest in exploring and learning new things, especially in the field of technology. 
                I possess skills in database management, multimedia tools, and software programming. 
                I constantly seek opportunities to expand my knowledge and apply my abilities in innovative ways.
            </p>
        </div>
    </section>

    <!-- SKILLS -->
    <section id="skills" class="container mt-5">
        <h2 class="fw-bold mb-4">Skills</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card glass-info p-3 text-center rounded-4">
                    <h5 class="skill-title"><img style="width: 48px; height: 48px; margin-right: 10px;" class="rounded rounded-lg" src="<?php echo base_url('assets/img/java-icon-2.png');?>" alt="java-icon-2">Java</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card glass-info p-3 text-center rounded-4">
                    <h5 class="skill-title"><img style="width: 48px; height: 48px; margin-right: 10px;" class="rounded rounded-lg" src="<?php echo base_url('assets/img/php-icon-2.png');?>" alt="php-icon-2">PHP</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card glass-info p-3 text-center rounded-4">
                    <h5 class="skill-title"><img style="width: 48px; height: 48px; margin-right: 10px;" class="rounded rounded-lg" src="<?php echo base_url('assets/img/sql-server-icon.png');?>" alt="sql-server-icon">SQL Server</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card glass-info p-3 text-center rounded-4">
                    <h5 class="skill-title"><img style="width: 48px; height: 48px; margin-right: 10px;" class="rounded rounded-lg" src="<?php echo base_url('assets/img/my-sql-icon-2.png');?>" alt="my-sql-icon-2">My SQL</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card glass-info p-3 text-center rounded-4">
                    <h5 class="skill-title"><img style="width: 48px; height: 48px; margin-right: 10px;" class="rounded rounded-lg" src="<?php echo base_url('assets/img/oracle-icon-2.png');?>" alt="oracle-icon-2">Oracle</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card glass-info p-3 text-center rounded-4">
                    <h5 class="skill-title"><img style="width: 48px; height: 48px; margin-right: 10px;" class="rounded rounded-lg" src="<?php echo base_url('assets/img/codeigniter-icon.png');?>" alt="codeigniter-icon">CodeIgniter</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card glass-info p-3 text-center rounded-4">
                    <h5 class="skill-title"><img style="width: 48px; height: 48px; margin-right: 10px;" class="rounded rounded-lg" src="<?php echo base_url('assets/img/java-spring-icon.png');?>" alt="java-spring-icon">Java Spring</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card glass-info p-3 text-center rounded-4">
                    <h5 class="skill-title"><img style="width: 48px; height: 48px; margin-right: 10px;" class="rounded rounded-lg" src="<?php echo base_url('assets/img/ui-ux-icon.png');?>" alt="ui-ux-icon">UI/UX Implementation</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section id="projects" class="container mt-5">
        <h2 class="fw-bold mb-4">Featured Projects</h2>
        <div class="row g-4">
            <!-- PROJECT 1 -->
            <div class="col-md-4">
                <div class="card glass-animate p-4 rounded-4 h-100">
                    <span class="badge bg-light text-dark mb-2">Astra Polytechnic</span>
                    <h4 class="fw-bold mb-2">Tools Management Information System</h4>
                    <p class="text-white-50">
                        A system designed to manage and monitor tools and equipment, 
                        providing features for inventory tracking, usage monitoring, 
                        maintenance scheduling, and overall tool lifecycle management to ensure efficient and organized operations.
                    </p>
                    <div class="mt-auto">
                        <span class="badge bg-light text-dark">PHP</span>
                        <span class="badge bg-light text-dark">CodeIgniter</span>
                        <span class="badge bg-light text-dark">MySQL</span>
                    </div>
                </div>
            </div>
            <!-- PROJECT 2 -->
            <div class="col-md-4">
                <div class="card glass-animate p-4 rounded-4 h-100">
                    <span class="badge bg-light text-dark mb-2">PT Astra Honda Motor</span>
                    <h4 class="fw-bold mb-2">System Migration Maintain Tag Stock Taking Unit</h4>
                    <p class="text-white-50">
                        A web-based information system used to generate serial numbers and barcodes for motorcycle parts, 
                        supporting efficient tagging, tracking, and stock-taking processes throughout the system migration phase.
                    </p>
                    <div class="mt-auto">
                        <span class="badge bg-light text-dark">Java</span>
                        <span class="badge bg-light text-dark">Java Spring</span>
                        <span class="badge bg-light text-dark">Oracle</span>
                    </div>
                </div>
            </div>
            <!-- PROJECT 3 -->
            <div class="col-md-4">
                <div class="card glass-animate p-4 rounded-4 h-100">
                    <span class="badge bg-light text-dark mb-2">PT Aisin Indonesia</span>
                    <h4 class="fw-bold mb-2">Calibration Measurement Management Information System</h4>
                    <p class="text-white-50">
                        A web-based system designed to manage measurement tools, 
                        providing features for tool data administration, 
                        dashboard-based monitoring, and storing calibration records. 
                        This system supports efficient tracking of measurement instruments and 
                        ensures accurate documentation throughout the calibration process.
                    </p>
                    <div class="mt-auto">
                        <span class="badge bg-light text-dark">PHP</span>
                        <span class="badge bg-light text-dark">CodeIgniter</span>
                        <span class="badge bg-light text-dark">Microsoft SQL Server</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="container mt-5 mb-5">
        <h2 class="fw-bold mb-4">Contact</h2>
        <div class="card glass-animate p-4 rounded-4">
            <p class="mb-0">Email:</p>
            <h5 class="fw-semibold">mkrisnapasha@gmail.com</h5>
            <p class="mb-0 mt-3">LinkedIn:</p>
            <a href="#" class="text-white">linkedin.com/in/krisnapasha</a>
            <p class="mb-0 mt-3">GitHub:</p>
            <a href="#" class="text-white">github.com/krisnapasha</a>
        </div>
    </section>

    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script>
        // Cursor effect (tetap sama)
        const cursor = document.querySelector(".cursor");
        document.addEventListener("mousemove", (e) => {
            cursor.style.left = e.clientX + "px";
            cursor.style.top = e.clientY + "px";
        });

        // Setup Lenis untuk smooth scroll seperti Art Yakushev
        const lenis = new Lenis({
            duration: 1.4, // Sesuaikan kecepatan scroll
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // Easing yang smooth
            direction: 'vertical',
            gestureDirection: 'vertical',
            smooth: true,
            smoothTouch: true,
            touchMultiplier: 1.5,
        });

        // Update scroll
        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);

        // Smooth scroll untuk anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    lenis.scrollTo(targetElement, {
                        offset: -20, // Sesuaikan offset untuk navbar
                        duration: 1.8
                    });
                }
            });
        });

        // Update Lenis saat resize
        window.addEventListener('resize', () => {
            lenis.resize();
        });
    </script>
</body>
</html>