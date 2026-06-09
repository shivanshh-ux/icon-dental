<?php
// about/smile-stories.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icon Dental- Wembley | Smile Stories</title>
    
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
            --primary-blue: #b1986f;
            --primary-hover: #9f875e;
            --dark-navy: #3f4b3d;
            --light-bg: #f8fafc;
            --text-gray: #64748b;
            --border-color: #e2e8f0;
            --heading-font: 'Cormorant Garamond', serif;
            --body-font: 'Inter', sans-serif;
            --transition: all 0.3s ease;
        }

        body {
            font-family: var(--body-font);
            color: var(--text-gray);
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            transition: background 0.3s ease, color 0.3s ease;
        }

        h1, h2, h3, h4, h5, h6, .brand-text {
            font-family: var(--heading-font);
            color: var(--dark-navy);
            transition: color 0.3s ease;
        }

        p {
            transition: color 0.3s ease;
        }

        .custom-container {
            max-width: 1400px;
            margin: 0 auto;
            padding-left: 24px;
            padding-right: 24px;
        }

        /* Navbar */
        .navbar-custom {
            background-color: #ffffff;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        .brand-icon {
            font-size: 42px;
            color: var(--primary-blue);
        }

        .brand-text {
            font-size: 42px;
            font-weight: 500;
            margin: 0;
            line-height: 1;
            color: #3f4b3d;
        }

        .nav-link {
            color: var(--dark-navy) !important;
            font-weight: 500;
            font-size: 15px;
            padding: 8px 18px !important;
            transition: var(--transition);
        }

        .nav-link:hover {
            color: var(--primary-blue) !important;
        }

        .nav-link.active {
            color: var(--primary-blue) !important;
            position: relative;
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 18px;
            right: 18px;
            height: 2px;
            background-color: var(--primary-blue);
        }

        .dropdown-menu {
            border: 1px solid var(--border-color);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            padding: 12px 0;
        }

        .dropdown-item {
            padding: 10px 24px;
            font-weight: 500;
            font-size: 14px;
            color: var(--dark-navy);
            transition: var(--transition);
        }

        .dropdown-item:hover, .dropdown-item:focus {
            background: var(--light-bg);
            color: var(--primary-blue);
        }

        /* Theme Toggle Button */
        .theme-toggle-btn {
            background: transparent;
            border: 1px solid var(--border-color);
            color: var(--text-gray);
            width: 42px;
            height: 42px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            font-size: 16px;
        }

        .theme-toggle-btn:hover {
            background: var(--light-bg);
            color: var(--dark-navy);
            transform: translateY(-2px);
        }

        /* Buttons */
        .btn-primary-custom {
            background-color: var(--primary-blue);
            color: #ffffff;
            border: none;
            padding: 14px 28px;
            border-radius: 12px;
            font-weight: 500;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
            font-size: 15px;
        }

        .btn-primary-custom:hover {
            background-color: var(--primary-hover);
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(177, 152, 111, 0.2);
        }

        /* Breadcrumb */
        .breadcrumb-nav {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
            font-weight: 500;
            color: #64748b;
            margin-bottom: 40px;
        }

        .breadcrumb-nav a {
            color: #64748b;
            text-decoration: none;
            transition: var(--transition);
        }

        .breadcrumb-nav a:hover {
            color: var(--primary-blue);
        }

        .breadcrumb-nav span {
            color: var(--dark-navy);
        }

        /* Hero Section */
        .about-hero {
            background: linear-gradient(90deg, #f8fafc, #f1f5f9);
            padding: 90px 0;
            transition: background 0.3s ease;
        }

        .about-label {
            color: var(--primary-blue);
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 24px;
            display: inline-block;
        }

        .about-title {
            font-size: 72px;
            line-height: 1.05;
            font-weight: 600;
            margin-bottom: 24px;
        }

        .about-desc {
            font-size: 18px;
            line-height: 1.6;
            max-width: 540px;
            margin-bottom: 40px;
        }

        .hero-image-wrapper {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            height: 420px;
            width: 100%;
        }
        
        .hero-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: relative;
            z-index: 1;
        }

        /* Stats Bar */
        .stats-bar {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 28px 40px;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 24px;
            margin-top: 40px;
            margin-bottom: 80px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.02);
            transition: background 0.3s ease, border-color 0.3s ease;
        }

        .stat-bar-block {
            display: flex;
            align-items: center;
            gap: 16px;
            border-right: 1px solid var(--border-color);
            padding-right: 24px;
            transition: border-color 0.3s ease;
        }

        .stat-bar-block:last-child {
            border-right: none;
            padding-right: 0;
        }

        .stat-bar-icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background-color: #eff6ff;
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .stat-bar-value {
            font-size: 20px;
            font-weight: 700;
            color: var(--dark-navy);
            font-family: var(--body-font);
            line-height: 1.2;
            transition: color 0.3s ease;
        }

        .stat-bar-label {
            font-size: 13px;
            color: var(--text-gray);
            transition: color 0.3s ease;
        }

        /* Transformations Section */
        .section-title {
            font-family: var(--heading-font);
            font-size: 46px;
            font-weight: 600;
            color: var(--dark-navy);
            margin: 0;
            transition: color 0.3s ease;
        }

        .view-more-link {
            color: var(--primary-blue);
            font-weight: 600;
            text-decoration: none;
            font-size: 15px;
            transition: var(--transition);
        }

        .view-more-link:hover {
            color: var(--primary-hover);
        }

        .transformation-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 32px;
            margin-bottom: 80px;
        }

        .trans-card {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: 18px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease, border-color 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .trans-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,.08);
        }

        .trans-img-container {
            display: flex;
            position: relative;
            height: 240px;
            border-bottom: 1px solid var(--border-color);
        }

        .trans-img-half {
            width: 50%;
            position: relative;
        }

        .trans-img-half:first-child {
            border-right: 2px solid #ffffff;
        }

        .trans-img-half img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .trans-badge {
            position: absolute;
            bottom: 12px;
            left: 12px;
            background-color: rgba(73, 87, 70, 0.7);
            color: #ffffff;
            font-size: 11px;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 20px;
            backdrop-filter: blur(4px);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .trans-content {
            padding: 24px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .trans-category {
            color: var(--primary-blue);
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 12px;
            transition: color 0.3s ease;
        }

        .trans-title {
            font-family: var(--heading-font);
            font-size: 24px;
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 12px;
            transition: color 0.3s ease;
        }

        .trans-desc {
            font-size: 14px;
            line-height: 1.6;
            color: var(--text-gray);
            margin-bottom: 24px;
            flex-grow: 1;
            transition: color 0.3s ease;
        }

        .patient-info {
            display: flex;
            align-items: center;
            gap: 12px;
            border-top: 1px solid var(--border-color);
            padding-top: 20px;
            transition: border-color 0.3s ease;
        }

        .patient-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .patient-details {
            display: flex;
            flex-direction: column;
        }

        .patient-name {
            font-size: 14px;
            font-weight: 600;
            color: var(--dark-navy);
            transition: color 0.3s ease;
        }

        .patient-location {
            font-size: 12px;
            color: var(--text-gray);
            display: flex;
            align-items: center;
            gap: 4px;
            transition: color 0.3s ease;
        }

        /* Testimonial Section */
        .testimonial-section {
            padding-top: 20px;
            padding-bottom: 80px;
        }

        .testi-left-content {
            max-width: 440px;
        }

        .quote-icon-large {
            font-size: 48px;
            color: var(--primary-blue);
            opacity: 0.2;
            margin-bottom: 24px;
            transition: color 0.3s ease;
        }

        .testi-heading {
            font-family: var(--heading-font);
            font-size: 46px;
            line-height: 1.1;
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 20px;
            transition: color 0.3s ease;
        }

        .testi-desc {
            font-size: 16px;
            line-height: 1.6;
            color: var(--text-gray);
            transition: color 0.3s ease;
        }

        .testi-card-wrapper {
            position: relative;
        }

        .testi-card {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.04);
            transition: background 0.3s ease, border-color 0.3s ease;
        }

        .testi-stars {
            color: var(--primary-blue);
            font-size: 14px;
            margin-bottom: 20px;
            display: flex;
            gap: 4px;
            transition: color 0.3s ease;
        }

        .testi-text {
            font-size: 18px;
            line-height: 1.6;
            color: var(--dark-navy);
            font-style: italic;
            margin-bottom: 32px;
            transition: color 0.3s ease;
        }

        .testi-controls {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: calc(100% + 48px);
            left: -24px;
            display: flex;
            justify-content: space-between;
            pointer-events: none;
        }

        .slider-btn {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background-color: #ffffff;
            border: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--dark-navy);
            cursor: pointer;
            pointer-events: auto;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            transition: var(--transition);
        }

        .slider-btn:hover {
            background: var(--light-bg);
            color: var(--primary-blue);
        }

        /* ---------------------------------------------------- */
        /* Dark Theme Styles Applied to body.dark-theme       */
        /* ---------------------------------------------------- */
        body.dark-theme {
            --light-bg: linear-gradient(135deg, #2c352a, #354032);
            background: linear-gradient(90deg, #3f4b3d, #495746, #3f4b3d);
            color: rgba(255, 255, 255, 0.75);
        }

        body.dark-theme h1, 
        body.dark-theme h2, 
        body.dark-theme h3, 
        body.dark-theme h4, 
        body.dark-theme h5, 
        body.dark-theme h6, 
        body.dark-theme .brand-text {
            color: #ffffff;
        }

        body.dark-theme .navbar-custom {
            background-color: #2c352a;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: none;
        }

        body.dark-theme .nav-link {
            color: rgba(255, 255, 255, 0.75) !important;
        }
        
        body.dark-theme .nav-link:hover, 
        body.dark-theme .nav-link.active {
            color: #ffffff !important;
        }

        body.dark-theme .nav-link.active::after {
            background-color: #b1986f;
        }

        body.dark-theme .dropdown-menu {
            background-color: #3f4b3d;
            border-color: rgba(255, 255, 255, 0.1);
        }

        body.dark-theme .dropdown-item {
            color: rgba(255, 255, 255, 0.8);
        }

        body.dark-theme .dropdown-item:hover {
            background-color: rgba(255, 255, 255, 0.05);
            color: #c3ab83;
        }

        body.dark-theme .theme-toggle-btn {
            color: #fbbf24;
            border-color: rgba(255, 255, 255, 0.3);
        }

        body.dark-theme .theme-toggle-btn:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        body.dark-theme .breadcrumb-nav {
            color: rgba(255, 255, 255, 0.5);
        }

        body.dark-theme .breadcrumb-nav a {
            color: rgba(255, 255, 255, 0.5);
        }

        body.dark-theme .breadcrumb-nav a:hover {
            color: #ffffff;
        }

        body.dark-theme .breadcrumb-nav span {
            color: #ffffff;
        }

        body.dark-theme .about-hero {
            background: transparent;
        }

        body.dark-theme .about-label {
            color: #b1986f;
        }

        body.dark-theme .about-desc {
            color: rgba(255, 255, 255, 0.75);
        }

        body.dark-theme .stats-bar {
            background: rgba(73, 87, 70, 0.75);
            border-color: rgba(255, 255, 255, 0.12);
        }

        body.dark-theme .stat-bar-block {
            border-color: rgba(255, 255, 255, 0.12);
        }

        body.dark-theme .stat-bar-icon {
            background-color: rgba(177, 152, 111, 0.15);
            color: #c3ab83;
        }

        body.dark-theme .stat-bar-value {
            color: #ffffff;
        }

        body.dark-theme .stat-bar-label {
            color: rgba(255, 255, 255, 0.75);
        }

        body.dark-theme .trans-card {
            background: rgba(73, 87, 70, 0.75);
            border-color: rgba(255, 255, 255, 0.12);
        }

        body.dark-theme .trans-card:hover {
            background: rgba(73, 87, 70, 0.95);
        }

        body.dark-theme .trans-category {
            color: #c3ab83;
        }

        body.dark-theme .section-title,
        body.dark-theme .trans-title,
        body.dark-theme .patient-name {
            color: #ffffff;
        }

        body.dark-theme .trans-desc,
        body.dark-theme .patient-location {
            color: rgba(255, 255, 255, 0.75);
        }

        body.dark-theme .patient-info {
            border-color: rgba(255, 255, 255, 0.12);
        }

        body.dark-theme .trans-img-container {
            border-bottom-color: rgba(255, 255, 255, 0.12);
        }
        
        body.dark-theme .trans-img-half:first-child {
            border-right-color: #3f4b3d;
        }

        body.dark-theme .quote-icon-large {
            color: #c3ab83;
            opacity: 0.3;
        }

        body.dark-theme .testi-heading {
            color: #ffffff;
        }

        body.dark-theme .testi-desc {
            color: rgba(255, 255, 255, 0.75);
        }

        body.dark-theme .testi-card {
            background: rgba(73, 87, 70, 0.75);
            border-color: rgba(255, 255, 255, 0.12);
        }

        body.dark-theme .testi-stars {
            color: #c3ab83;
        }

        body.dark-theme .testi-text {
            color: rgba(255, 255, 255, 0.9);
        }

        body.dark-theme .slider-btn {
            background-color: #1e293b;
            border-color: rgba(255, 255, 255, 0.12);
            color: #ffffff;
        }

        body.dark-theme .slider-btn:hover {
            background-color: #334155;
            color: #c3ab83;
        }

        /* Responsive Design */
        @media (max-width: 1199.98px) {
            .stats-bar {
                grid-template-columns: repeat(3, 1fr);
                row-gap: 32px;
            }
            .stat-bar-block:nth-child(3) {
                border-right: none;
                padding-right: 0;
            }
            .transformation-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .testi-controls {
                display: none;
            }
            .about-title {
                font-size: 56px;
            }
        }

        @media (max-width: 991.98px) {
            .about-title {
                font-size: 48px;
            }
            .about-hero {
                padding: 40px 0 60px;
            }
            .hero-image-wrapper {
                margin-top: 40px;
            }
            .testimonial-section .row {
                flex-direction: column;
                gap: 40px;
            }
            .testi-left-content {
                max-width: 100%;
                text-align: center;
                margin: 0 auto;
            }
        }

        @media (max-width: 767.98px) {
            .about-title {
                font-size: 40px;
            }
            .stats-bar {
                grid-template-columns: 1fr;
            }
            .stat-bar-block {
                border-right: none;
                border-bottom: 1px solid var(--border-color);
                padding-right: 0;
                padding-bottom: 24px;
            }
            body.dark-theme .stat-bar-block {
                border-bottom-color: rgba(255, 255, 255, 0.12);
            }
            .stat-bar-block:last-child {
                border-bottom: none;
                padding-bottom: 0;
            }
            .transformation-grid {
                grid-template-columns: 1fr;
            }
            .d-flex.justify-content-between.mb-4 {
                flex-direction: column;
                align-items: flex-start !important;
                gap: 16px;
            }
            .navbar-collapse .d-flex {
                flex-direction: column;
                align-items: stretch !important;
                margin-top: 15px;
            }
            .theme-toggle-btn {
                align-self: flex-start;
                margin-bottom: 10px;
            }
        }
        @media (max-width: 767.98px) {
            p { text-align: left !important; }
            .text-center p { text-align: center !important; }
        }
        @media (min-width: 768px) {
            p { text-align: justify; }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/icon-dental/includes/navbar.php'; ?>


    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container custom-container">
            
            <div class="breadcrumb-nav">
                <a href="../index.php">Home</a>
                <i class="fa-solid fa-chevron-right" style="font-size:10px;"></i>
                <a href="../about.php">About</a>
                <i class="fa-solid fa-chevron-right" style="font-size:10px;"></i>
                <span>Smile Stories</span>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <span class="about-label">SMILE STORIES</span>
                    <h2 class="about-title">Real People.<br>Real Stories.<br>Beautiful Smiles.</h2>
                    <p class="about-desc">Every smile has a story. Discover how our patients transformed their oral health, confidence, and lives with personalised care at Icon Dental- Wembley.</p>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-wrapper">
                        <img src="../assets/images/stories/hero.png" alt="Happy Patient at Dental Clinic">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section>
        <div class="container custom-container">
            
            <!-- Stats Bar -->
            <div class="stats-bar">
                <div class="stat-bar-block">
                    <div class="stat-bar-icon"><i class="fa-regular fa-face-smile"></i></div>
                    <div>
                        <div class="stat-bar-value">2500+</div>
                        <div class="stat-bar-label">Happy Patients</div>
                    </div>
                </div>
                <div class="stat-bar-block">
                    <div class="stat-bar-icon"><i class="fa-regular fa-star"></i></div>
                    <div>
                        <div class="stat-bar-value">4.9/5</div>
                        <div class="stat-bar-label">Google Rating</div>
                    </div>
                </div>
                <div class="stat-bar-block">
                    <div class="stat-bar-icon"><i class="fa-regular fa-calendar"></i></div>
                    <div>
                        <div class="stat-bar-value">15+</div>
                        <div class="stat-bar-label">Years Experience</div>
                    </div>
                </div>
                <div class="stat-bar-block">
                    <div class="stat-bar-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <div>
                        <div class="stat-bar-value">100%</div>
                        <div class="stat-bar-label">Patient Focused</div>
                    </div>
                </div>
                <div class="stat-bar-block">
                    <div class="stat-bar-icon"><i class="fa-regular fa-heart"></i></div>
                    <div>
                        <div class="stat-bar-value">Countless</div>
                        <div class="stat-bar-label">Confident Smiles</div>
                    </div>
                </div>
            </div>

            <!-- Transformations Grid -->
            <div class="d-flex justify-content-between align-items-end mb-4">
                <h2 class="section-title">Patient Transformations</h2>
                <a href="#" class="view-more-link">View more stories <i class="fa-solid fa-arrow-right ms-1"></i></a>
            </div>

            <div class="transformation-grid">
                <!-- Card 1 -->
                <div class="trans-card">
                    <div class="trans-img-container">
                        <div class="trans-img-half">
                            <img src="../assets/images/stories/sarah_before.png" alt="Before">
                            <span class="trans-badge">Before</span>
                        </div>
                        <div class="trans-img-half">
                            <img src="../assets/images/stories/sarah_after.png" alt="After">
                            <span class="trans-badge">After</span>
                        </div>
                    </div>
                    <div class="trans-content">
                        <div class="trans-category">SMILE MAKEOVER</div>
                        <h3 class="trans-title">From Uneasy to Unstoppable</h3>
                        <p class="trans-desc">Porcelain veneers and teeth whitening gave Sarah the confidence to smile without holding back.</p>
                        <div class="patient-info">
                            <img src="../assets/images/stories/avatar_sarah.png" alt="Sarah T." class="patient-avatar">
                            <div class="patient-details">
                                <div class="patient-name">Sarah T.</div>
                                <div class="patient-location"><i class="fa-solid fa-location-dot"></i> Wembley</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="trans-card">
                    <div class="trans-img-container">
                        <div class="trans-img-half">
                            <img src="../assets/images/stories/james_before.png" alt="Before">
                            <span class="trans-badge">Before</span>
                        </div>
                        <div class="trans-img-half">
                            <img src="../assets/images/stories/james_after.png" alt="After">
                            <span class="trans-badge">After</span>
                        </div>
                    </div>
                    <div class="trans-content">
                        <div class="trans-category">DENTAL IMPLANTS</div>
                        <h3 class="trans-title">A New Smile, A New Chapter</h3>
                        <p class="trans-desc">Dental implants restored James' smile and allowed him to enjoy life's little moments again.</p>
                        <div class="patient-info">
                            <img src="../assets/images/stories/avatar_james.png" alt="James R." class="patient-avatar">
                            <div class="patient-details">
                                <div class="patient-name">James R.</div>
                                <div class="patient-location"><i class="fa-solid fa-location-dot"></i> Wembley</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="trans-card">
                    <div class="trans-img-container">
                        <div class="trans-img-half">
                            <img src="../assets/images/stories/priya_before.png" alt="Before">
                            <span class="trans-badge">Before</span>
                        </div>
                        <div class="trans-img-half">
                            <img src="../assets/images/stories/priya_after.png" alt="After">
                            <span class="trans-badge">After</span>
                        </div>
                    </div>
                    <div class="trans-content">
                        <div class="trans-category">INVISALIGN</div>
                        <h3 class="trans-title">Straight Smile, Zero Brackets</h3>
                        <p class="trans-desc">Invisalign clear aligners helped Priya achieve a beautiful, straight smile discreetly.</p>
                        <div class="patient-info">
                            <img src="../assets/images/stories/avatar_priya.png" alt="Priya S." class="patient-avatar">
                            <div class="patient-details">
                                <div class="patient-name">Priya S.</div>
                                <div class="patient-location"><i class="fa-solid fa-location-dot"></i> Wembley</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial Section -->
            <div class="testimonial-section">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="testi-left-content">
                            <i class="fa-solid fa-quote-left quote-icon-large"></i>
                            <h2 class="testi-heading">Our patientsâ€™ happiness is our greatest achievement.</h2>
                            <p class="testi-desc">We're proud to be part of so many incredible smile journeys. Here's what our patients have to say.</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="testi-card-wrapper">
                            <div class="testi-card">
                                <div class="testi-stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="testi-text">"The team at Icon Dental- Wembley are amazing! From the moment I walked in, I felt cared for. My smile makeover has truly changed my life. I can't stop smiling!"</p>
                                <div class="patient-info border-0 pt-0 mt-0">
                                    <img src="../assets/images/stories/avatar_emma.png" alt="Emma L." class="patient-avatar">
                                    <div class="patient-details">
                                        <div class="patient-name">Emma L.</div>
                                        <div class="patient-location"><i class="fa-solid fa-location-dot"></i> Wembley</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="testi-controls">
                                <button class="slider-btn"><i class="fa-solid fa-chevron-left"></i></button>
                                <button class="slider-btn"><i class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    


    <?php include $_SERVER['DOCUMENT_ROOT'] . '/icon-dental/includes/footer.php'; ?>
</body>
</html>



