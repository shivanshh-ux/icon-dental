<?php
// treatments/orthodontics.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bone Grafting | Icon Dental Wembley</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        :root {
            --primary-green: #495746;
            --dark-green: #0d2c1d;
            --luxury-gold: #b1986f;
            --light-gold: #d7c09a;
            --heading-font: 'Cormorant Garamond', serif;
            --body-font: 'Inter', sans-serif;
            --text-dark: #173a28;
            --text-muted: #6b7280;
            --bg-light: #ffffff;
            --transition: all 0.3s ease;
        }

        body {
            font-family: var(--body-font);
            margin: 0;
            padding: 0;
            background-color: #faf9f6; /* Very slight off-white for the body */
            color: var(--text-dark);
        }

        /* Nav Override for Active State */
        .navbar-nav .nav-link.active-treatments {
            color: var(--luxury-gold) !important;
            position: relative;
        }
        .navbar-nav .nav-link.active-treatments::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            height: 2px;
            background-color: var(--luxury-gold);
        }

        .container-custom {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Breadcrumb */
        .breadcrumb-custom {
            font-size: 13px;
            color: var(--text-muted);
            margin-top: 24px;
            margin-bottom: 40px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .breadcrumb-custom a {
            color: var(--text-muted);
            text-decoration: none;
            transition: var(--transition);
        }
        .breadcrumb-custom a:hover {
            color: var(--luxury-gold);
        }
        .breadcrumb-custom i {
            font-size: 10px;
            color: #d1d5db;
        }
        .breadcrumb-custom .current {
            color: var(--luxury-gold);
            font-weight: 500;
        }

        /* Hero Section */
        .hero-label {
            background: #f7f1e8;
            border: 1px solid #e7d8bc;
            color: var(--luxury-gold);
            border-radius: 50px;
            padding: 8px 18px;
            display: inline-block;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 1px;
            margin-bottom: 24px;
            text-transform: uppercase;
        }
        .hero-title {
            font-family: var(--heading-font);
            font-size: 72px;
            font-weight: 600;
            line-height: 1.05;
            color: var(--text-dark);
            margin-bottom: 16px;
        }
        .hero-title-line {
            width: 60px;
            height: 3px;
            background-color: var(--luxury-gold);
            margin-bottom: 24px;
            border-radius: 2px;
        }
        .hero-desc {
            font-size: 18px;
            line-height: 1.6;
            color: var(--text-muted);
            max-width: 580px;
            margin-bottom: 40px;
        }

        /* Features Grid */
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
            margin-bottom: 40px;
            max-width: 580px;
        }
        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 16px;
        }
        .feature-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            border: 1px solid var(--luxury-gold);
            color: var(--luxury-gold);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
            background: rgba(177, 152, 111, 0.05);
        }
        .feature-content h4 {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 4px;
            color: var(--text-dark);
        }
        .feature-content p {
            font-size: 13px;
            color: var(--text-muted);
            margin: 0;
            line-height: 1.5;
        }

        /* Buttons */
        .btn-primary-dark {
            background: var(--primary-green);
            color: #fff;
            border: none;
            padding: 14px 28px;
            border-radius: 8px;
            font-weight: 500;
            font-size: 15px;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }
        .btn-primary-dark:hover {
            background: var(--dark-green);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(73, 87, 70, 0.2);
        }
        .btn-outline-gold {
            background: #fff;
            color: var(--text-dark);
            border: 1px solid var(--luxury-gold);
            padding: 14px 28px;
            border-radius: 8px;
            font-weight: 500;
            font-size: 15px;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }
        .btn-outline-gold:hover {
            background: #fdfaf5;
            transform: translateY(-2px);
        }
        .btn-icon-circle {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 1px solid var(--luxury-gold);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            color: var(--luxury-gold);
        }

        /* Hero Image */
        .hero-image-container {
            position: relative;
            height: 520px;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
        }
        .hero-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .floating-card {
            position: absolute;
            bottom: -30px;
            right: 40px;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 20px 40px rgba(0,0,0,.08);
            padding: 24px 32px;
            display: flex;
            align-items: center;
            gap: 20px;
            z-index: 10;
        }
        .floating-icon {
            color: var(--luxury-gold);
            font-size: 32px;
        }
        .floating-text {
            font-family: var(--heading-font);
            font-size: 22px;
            font-weight: 600;
            line-height: 1.2;
            color: var(--text-dark);
            margin: 0;
        }
        .floating-line {
            width: 40px;
            height: 2px;
            background: var(--luxury-gold);
            margin-top: 12px;
        }

        /* Treatments Section */
        .treatments-section {
            padding: 120px 0 80px;
        }
        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }
        .tooth-icon {
            color: var(--luxury-gold);
            font-size: 28px;
            margin-bottom: 16px;
        }
        .section-title {
            font-family: var(--heading-font);
            font-size: 52px;
            font-weight: 600;
            color: var(--text-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            margin: 0;
        }
        .section-title::before, .section-title::after {
            content: '';
            height: 1px;
            width: 60px;
            background: var(--luxury-gold);
        }

        /* Cards Grid */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 20px;
            margin-bottom: 60px;
        }
        .treatment-card {
            background: #fff;
            border: 1px solid #ececec;
            border-radius: 18px;
            padding: 24px;
            text-align: center;
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            height: 100%;
            text-decoration: none;
            color: inherit;
        }
        .treatment-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(0,0,0,.08);
            border-color: #fff;
        }
        .card-img-wrapper {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #f1f1f1;
        }
        .card-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .treatment-card h3 {
            font-size: 16px;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 12px;
        }
        .treatment-card p {
            font-size: 13px;
            color: var(--text-muted);
            line-height: 1.5;
            margin-bottom: 20px;
            flex-grow: 1;
        }
        .learn-more {
            color: var(--luxury-gold);
            font-size: 13px;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }
        
        /* CTA Strip */
        .cta-strip {
            background: #f7f4ef;
            border-radius: 24px;
            padding: 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .cta-left {
            display: flex;
            align-items: center;
            gap: 24px;
        }
        .cta-icon {
            width: 64px;
            height: 64px;
            background: var(--dark-green);
            color: var(--luxury-gold);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            flex-shrink: 0;
        }
        .cta-text h3 {
            font-family: var(--heading-font);
            font-size: 28px;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 8px;
        }
        .cta-text p {
            font-size: 15px;
            color: var(--text-muted);
            margin: 0;
            max-width: 450px;
        }
        .cta-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .sparkle-icon {
            color: var(--light-gold);
            font-size: 24px;
        }

        /* ==================== THEME TOGGLE LOGIC ==================== */
        body.light-theme .dark-wrapper {
            display: none !important;
        }
        body.dark-theme .light-version {
            display: none !important;
        }
        body.dark-theme {
            background: linear-gradient(90deg, #3f4b3d, #495746, #3f4b3d);
        }

        /* ==================== DARK VERSION ==================== */
        .dark-wrapper {
            color: rgba(255, 255, 255, 0.78);
            padding-bottom: 80px;
        }
        .dark-wrapper .breadcrumb-custom { color: rgba(255, 255, 255, 0.5); }
        .dark-wrapper .breadcrumb-custom a { color: rgba(255, 255, 255, 0.5); }
        .dark-wrapper .breadcrumb-custom a:hover { color: var(--luxury-gold); }
        .dark-wrapper .breadcrumb-custom .current { color: var(--luxury-gold); }
        
        .dark-wrapper .hero-label {
            background: rgba(177, 152, 111, 0.1);
            border-color: rgba(177, 152, 111, 0.3);
            color: var(--luxury-gold);
        }
        .dark-wrapper .hero-title, 
        .dark-wrapper .section-title,
        .dark-wrapper .floating-text,
        .dark-wrapper .cta-text h3,
        .dark-wrapper .feature-content h4,
        .dark-wrapper .treatment-card h3 {
            color: #ffffff;
        }
        .dark-wrapper .hero-desc,
        .dark-wrapper .feature-content p,
        .dark-wrapper .treatment-card p,
        .dark-wrapper .cta-text p {
            color: rgba(255, 255, 255, 0.78);
        }
        
        .dark-wrapper .feature-icon {
            border-color: var(--luxury-gold);
            background: transparent;
        }
        
        .dark-wrapper .btn-primary-dark {
            background: var(--luxury-gold);
            color: var(--dark-green);
        }
        .dark-wrapper .btn-primary-dark:hover {
            background: var(--light-gold);
            box-shadow: 0 10px 20px rgba(177, 152, 111, 0.2);
        }
        .dark-wrapper .btn-outline-gold {
            background: transparent;
            color: #ffffff;
            border-color: var(--luxury-gold);
        }
        .dark-wrapper .btn-outline-gold:hover {
            background: rgba(177, 152, 111, 0.1);
        }

        .dark-wrapper .floating-card {
            background: rgba(73, 87, 70, 0.95);
            border: 1px solid var(--luxury-gold);
            box-shadow: 0 20px 40px rgba(0,0,0,0.5);
            backdrop-filter: blur(10px);
        }

        .dark-wrapper .treatment-card {
            background: rgba(63, 75, 61, 0.85);
            border: 1px solid rgba(177, 152, 111, 0.20);
        }
        .dark-wrapper .treatment-card:hover {
            border-color: var(--luxury-gold);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
            background: rgba(73, 87, 70, 0.95);
        }
        .dark-wrapper .card-img-wrapper {
            border-color: rgba(177, 152, 111, 0.2);
        }

        .dark-wrapper .cta-strip {
            background: rgba(63, 75, 61, 0.6);
            border: 1px solid rgba(177, 152, 111, 0.15);
        }
        .dark-wrapper .cta-icon {
            background: transparent;
            border: 1px solid var(--luxury-gold);
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .cards-grid { grid-template-columns: repeat(3, 1fr); }
            .hero-title { font-size: 56px; }
        }
        @media (max-width: 991px) {
            .hero-image-container { margin-top: 60px; height: 400px; }
            .floating-card { bottom: -20px; right: 20px; padding: 16px 24px; }
            .floating-text { font-size: 18px; }
            .section-title { font-size: 40px; }
            .cta-strip { flex-direction: column; text-align: center; gap: 30px; }
            .cta-left { flex-direction: column; }
        }
        @media (max-width: 767px) {
            .cards-grid { grid-template-columns: 1fr; }
            .feature-grid { grid-template-columns: 1fr; }
            .hero-title { font-size: 42px; }
            .section-title { font-size: 32px; }
            .section-title::before, .section-title::after { width: 30px; }
            .btn-group-custom { flex-direction: column; width: 100%; }
            .btn-group-custom a { width: 100%; justify-content: center; }
            .floating-card { position: static; margin-top: -20px; border-radius: 0 0 24px 24px; box-shadow: none; border: 1px solid #ececec; }
            .dark-wrapper .floating-card { border: 1px solid rgba(177,152,111,0.2); }
        }
    </style>
</head>
<body>

    <!-- Navbar Light (Simulated active state via JS below if needed, but handled mostly via CSS) -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/icon-dental/includes/navbar.php'; ?>

    <!-- ==================== LIGHT VERSION ==================== -->
    <main class="light-version">
        <div class="container container-custom">
            
            <!-- Breadcrumb -->
            <div class="breadcrumb-custom">
                <i class="fa-solid fa-house"></i>
                <a href="/icon-dental/">Home</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="/icon-dental/treatments.php">Treatments</a>
                <i class="fa-solid fa-chevron-right"></i>
                <span class="current">Bone Grafting</span>
            </div>

            <!-- Hero Section -->
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-label">BONE GRAFTING</div>
                    <h1 class="hero-title">Restoring Bone.<br>Building Foundations.<br>Securing Smiles.</h1>
                    <div class="hero-title-line"></div>
                    <p class="hero-desc">Our bone grafting treatments are designed to rebuild jawbone structure, providing a strong, healthy foundation for dental implants and restoring your natural facial contours.</p>
                    
                    <div class="feature-grid">
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-solid fa-tooth"></i></div>
                            <div class="feature-content">
                                <h4>Expert Orthodontists</h4>
                                <p>Specialist care from experienced professionals</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-solid fa-shield-halved"></i></div>
                            <div class="feature-content">
                                <h4>Advanced Technology</h4>
                                <p>Precision planning for predictable results</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-regular fa-face-smile"></i></div>
                            <div class="feature-content">
                                <h4>Discreet Solutions</h4>
                                <p>Clear aligners and aesthetic braces available</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-solid fa-heart-pulse"></i></div>
                            <div class="feature-content">
                                <h4>Better Oral Health</h4>
                                <p>Improved bite, easier cleaning and long-term benefits</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="hero-image-container">
                        <img src="../assets/images/orthodontics-hero.jpg" alt="Smiling woman holding aligners">
                        <div class="floating-card">
                            <div class="floating-icon"><i class="fa-solid fa-tooth"></i></div>
                            <div>
                                <h3 class="floating-text">Your Journey to a<br>Straighter Smile<br>Starts Here.</h3>
                                <div class="floating-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Treatments Section -->
            <section class="treatments-section">
                <div class="section-header">

                    <h2 class="section-title">Our Bone Grafting Procedures</h2>
                </div>

                <div class="cards-grid">
                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/invisalign-treatment.jpg" alt="Invisalign">
                        </div>
                        <h3>Invisalign®</h3>
                        <p>Clear, removable aligners that straighten your teeth discreetly and comfortably.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>
                    
                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/metal-braces.jpg" alt="Metal Braces">
                        </div>
                        <h3>Metal Braces</h3>
                        <p>Traditional braces that are reliable, effective and affordable.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>

                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/ceramic-braces.jpg" alt="Ceramic Braces">
                        </div>
                        <h3>Ceramic Braces</h3>
                        <p>Tooth-coloured braces that blend naturally with your smile.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>

                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/lingual-braces.jpg" alt="Lingual Braces">
                        </div>
                        <h3>Lingual Braces</h3>
                        <p>Hidden braces placed behind your teeth for a completely discreet option.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>

                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/early-orthodontics.jpg" alt="Early Orthodontics">
                        </div>
                        <h3>Early Orthodontics</h3>
                        <p>Interceptive treatments for children to guide healthy growth and alignment.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>

                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/retainers.jpg" alt="Retainers">
                        </div>
                        <h3>Retainers</h3>
                        <p>Custom retainers to maintain your new beautiful smile.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>
                </div>

                <!-- CTA Strip -->
                <div class="cta-strip">
                    <div class="cta-left">
                        <div class="cta-icon"><i class="fa-regular fa-calendar-check"></i></div>
                        <div class="cta-text">
                            <h3>Start Your Treatment Journey</h3>
                            <p>Book your consultation today and let our experts create a personalised treatment plan just for you.</p>
                        </div>
                    </div>
                    <div class="cta-right">
                        <a href="#" class="btn-primary-dark">
                            Book Your Consultation <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <div class="sparkle-icon">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>


    <!-- ==================== DARK VERSION ==================== -->
    <main class="dark-wrapper">
        <div class="container container-custom">
            
            <!-- Breadcrumb -->
            <div class="breadcrumb-custom">
                <i class="fa-solid fa-house"></i>
                <a href="/icon-dental/">Home</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="/icon-dental/treatments.php">Treatments</a>
                <i class="fa-solid fa-chevron-right"></i>
                <span class="current">Bone Grafting</span>
            </div>

            <!-- Hero Section -->
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-label">BONE GRAFTING</div>
                    <h1 class="hero-title">Restoring Bone.<br>Building Foundations.<br>Securing Smiles.</h1>
                    <div class="hero-title-line"></div>
                    <p class="hero-desc">Our bone grafting treatments are designed to rebuild jawbone structure, providing a strong, healthy foundation for dental implants and restoring your natural facial contours.</p>
                    
                    <div class="feature-grid">
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-solid fa-tooth"></i></div>
                            <div class="feature-content">
                                <h4>Expert Orthodontists</h4>
                                <p>Specialist care from experienced professionals</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-solid fa-shield-halved"></i></div>
                            <div class="feature-content">
                                <h4>Advanced Technology</h4>
                                <p>Precision planning for predictable results</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-regular fa-face-smile"></i></div>
                            <div class="feature-content">
                                <h4>Discreet Solutions</h4>
                                <p>Clear aligners and aesthetic braces available</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-solid fa-heart-pulse"></i></div>
                            <div class="feature-content">
                                <h4>Better Oral Health</h4>
                                <p>Improved bite, easier cleaning and long-term benefits</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="hero-image-container">
                        <img src="../assets/images/orthodontics-hero.jpg" alt="Smiling woman holding aligners">
                        <div class="floating-card">
                            <div class="floating-icon"><i class="fa-solid fa-tooth"></i></div>
                            <div>
                                <h3 class="floating-text">Your Journey to a<br>Straighter Smile<br>Starts Here.</h3>
                                <div class="floating-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Treatments Section -->
            <section class="treatments-section">
                <div class="section-header">

                    <h2 class="section-title">Our Bone Grafting Procedures</h2>
                </div>

                <div class="cards-grid">
                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/invisalign-treatment.jpg" alt="Invisalign">
                        </div>
                        <h3>Invisalign®</h3>
                        <p>Clear, removable aligners that straighten your teeth discreetly and comfortably.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>
                    
                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/metal-braces.jpg" alt="Metal Braces">
                        </div>
                        <h3>Metal Braces</h3>
                        <p>Traditional braces that are reliable, effective and affordable.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>

                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/ceramic-braces.jpg" alt="Ceramic Braces">
                        </div>
                        <h3>Ceramic Braces</h3>
                        <p>Tooth-coloured braces that blend naturally with your smile.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>

                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/lingual-braces.jpg" alt="Lingual Braces">
                        </div>
                        <h3>Lingual Braces</h3>
                        <p>Hidden braces placed behind your teeth for a completely discreet option.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>

                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/early-orthodontics.jpg" alt="Early Orthodontics">
                        </div>
                        <h3>Early Orthodontics</h3>
                        <p>Interceptive treatments for children to guide healthy growth and alignment.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>

                    <a href="#" class="treatment-card" data-bs-toggle="modal" data-bs-target="#treatmentModal" onclick="event.preventDefault(); populateModal(this)">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/retainers.jpg" alt="Retainers">
                        </div>
                        <h3>Retainers</h3>
                        <p>Custom retainers to maintain your new beautiful smile.</p>
                        <div class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></div>
                    </a>
                </div>

                <!-- CTA Strip -->
                <div class="cta-strip">
                    <div class="cta-left">
                        <div class="cta-icon"><i class="fa-regular fa-calendar-check"></i></div>
                        <div class="cta-text">
                            <h3>Start Your Treatment Journey</h3>
                            <p>Book your consultation today and let our experts create a personalised treatment plan just for you.</p>
                        </div>
                    </div>
                    <div class="cta-right">
                        <a href="#" class="btn-primary-dark" style="background: #b1986f; color: #173a28;">
                            Book Your Consultation <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <div class="sparkle-icon">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple script to set the active nav link to Treatments
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                if(link.textContent.includes('Treatments')) {
                    link.classList.add('active-treatments');
                }
            });
        });
        function populateModal(element) {
            const title = element.querySelector('h3').innerText;
            const desc = element.querySelector('p').innerText;
            const imgUrl = element.querySelector('img').src;
            
            document.getElementById('modalTitle').innerText = title;
            document.getElementById('modalDesc').innerText = desc + " We offer comprehensive procedures tailored to your needs. During your consultation, we will assess your oral health and provide a customized treatment plan.";
            document.getElementById('modalImg').src = imgUrl;
        }
    </script>
    
    <!-- Treatment Modal -->
    <style>
        /* Light Theme Modal Defaults */
        #treatmentModal .modal-content {
            background-color: #ffffff;
            border-radius: 18px;
            border: none;
            overflow: hidden;
        }
        #treatmentModal .modal-header, #treatmentModal .modal-footer {
            background-color: #faf9f6;
            border-color: #ececec;
        }
        #treatmentModal .modal-title {
            font-family: var(--heading-font);
            font-size: 28px;
            font-weight: 600;
            color: var(--text-dark);
        }
        #treatmentModal .btn-close {
            filter: none;
        }
        #treatmentModal #modalDesc {
            color: var(--text-muted);
            font-size: 15px;
            line-height: 1.6;
            padding: 0 10px;
        }
        #treatmentModal .image-wrapper {
            width: 140px; height: 140px; margin: 0 auto 24px;
            border-radius: 50%; overflow: hidden;
            border: 2px solid #f1f1f1;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }

        /* Dark Theme Modal Overrides */
        body.dark-theme #treatmentModal .modal-content {
            background-color: #232f28; /* slightly darker to match the theme */
        }
        body.dark-theme #treatmentModal .modal-header,
        body.dark-theme #treatmentModal .modal-footer {
            background-color: #1c2620; /* darker header/footer */
            border-color: #3b4d42;
        }
        body.dark-theme #treatmentModal .modal-title {
            color: #d8c3a5; /* Gold text */
        }
        body.dark-theme #treatmentModal #modalDesc {
            color: #aebdb5;
        }
        body.dark-theme #treatmentModal .btn-close {
            filter: invert(1) grayscale(100%) brightness(200%);
        }
        body.dark-theme #treatmentModal .image-wrapper {
            border-color: #3b4d42;
        }
        body.dark-theme #treatmentModal .modal-footer .btn-primary-dark {
            background: #b1986f; 
            color: #173a28;
            border: none;
        }
        body.dark-theme #treatmentModal .modal-footer .btn-primary-dark:hover {
            background: #d8c3a5;
        }
    </style>
    <div class="modal fade" id="treatmentModal" tabindex="-1" aria-labelledby="treatmentModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalTitle">Treatment Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center p-4">
            <div class="image-wrapper">
                <img id="modalImg" src="" alt="Treatment Image" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <p id="modalDesc"></p>
          </div>
          <div class="modal-footer" style="justify-content: center; padding: 20px;">
            <a href="/icon-dental/book-online.php" class="btn-primary-dark" style="text-decoration: none;">Book a Consultation <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/icon-dental/includes/footer.php'; ?>
</body>
</html>
