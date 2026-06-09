<?php
// about.php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: -1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icon Dental- Wembley | About Us</title>
    
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
            transition: color 0.3s ease;
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
            max-width: 560px;
            margin-bottom: 48px;
        }

        .hero-features {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }

        .hf-card {
            display: flex;
            align-items: flex-start;
            gap: 16px;
        }

        .hf-icon {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background-color: rgba(177, 152, 111, 0.1);
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .hf-title {
            font-size: 16px;
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 4px;
            font-family: var(--body-font);
            transition: color 0.3s ease;
        }

        .hf-desc {
            font-size: 13px;
            line-height: 1.5;
            color: var(--text-gray);
            margin: 0;
            transition: color 0.3s ease;
        }

        .hero-image-wrapper {
            border-radius: 24px;
            overflow: hidden;
            height: 500px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .hero-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Stats Section */
        .stats-section {
            padding: 40px 0 80px;
        }

        .stats-card {
            background: #f8fafc;
            border: 1px solid var(--border-color);
            border-radius: 24px;
            padding: 32px 40px;
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 20px;
            transition: background 0.3s ease, border-color 0.3s ease;
        }

        .stat-item {
            text-align: center;
            border-right: 1px solid var(--border-color);
            transition: border-color 0.3s ease;
        }

        .stat-item:last-child {
            border-right: none;
        }

        .stat-icon {
            font-size: 24px;
            color: var(--primary-blue);
            margin-bottom: 12px;
        }

        .stat-val {
            font-family: var(--body-font);
            font-size: 28px;
            font-weight: 700;
            color: var(--dark-navy);
            line-height: 1.2;
            margin-bottom: 4px;
            transition: color 0.3s ease;
        }

        .stat-label {
            font-size: 13px;
            color: var(--text-gray);
            transition: color 0.3s ease;
        }

        /* Values + Mission Section */
        .values-section {
            padding-bottom: 90px;
        }

        .section-heading {
            font-family: var(--heading-font);
            font-size: 52px;
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 40px;
            position: relative;
            display: inline-block;
            transition: color 0.3s ease;
        }

        .section-heading::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -8px;
            width: 60px;
            height: 3px;
            background-color: var(--primary-blue);
            border-radius: 2px;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 32px;
        }

        .value-card {
            display: flex;
            align-items: flex-start;
            gap: 16px;
        }

        .value-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background-color: rgba(177, 152, 111, 0.1);
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .value-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 8px;
            font-family: var(--body-font);
            transition: color 0.3s ease;
        }

        .value-desc {
            font-size: 14px;
            line-height: 1.6;
            color: var(--text-gray);
            margin: 0;
            transition: color 0.3s ease;
        }

        /* Mission Card */
        .mission-card {
            background: #f8fafc;
            border: 1px solid var(--border-color);
            border-radius: 24px;
            padding: 40px;
            display: flex;
            position: relative;
            overflow: hidden;
            height: 100%;
            min-height: 340px;
            transition: background 0.3s ease, border-color 0.3s ease;
        }

        .mission-content {
            position: relative;
            z-index: 2;
            max-width: 100%;
        }

        .mission-heading {
            font-family: var(--heading-font);
            font-size: 36px;
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
            transition: color 0.3s ease;
        }

        .mission-heading::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 40px;
            height: 2px;
            background-color: var(--primary-blue);
        }

        .mission-desc {
            font-size: 16px;
            line-height: 1.6;
            color: var(--text-gray);
            margin-bottom: 32px;
            transition: color 0.3s ease;
        }

        .mission-img-wrapper {
            position: absolute;
            right: 0;
            bottom: 0;
            width: 45%;
            height: 95%;
            z-index: 1;
            display: flex;
            align-items: flex-end;
            justify-content: flex-end;
        }

        .mission-img-wrapper img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            object-position: bottom right;
        }

        /* CTA Section */
        .cta-banner {
            background: #f8fafc;
            border-radius: 24px;
            padding: 32px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 90px;
            border: 1px solid transparent;
            transition: background 0.3s ease, border-color 0.3s ease;
        }

        .cta-left {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .cta-icon-circle {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background-color: #ffffff;
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            flex-shrink: 0;
            transition: background 0.3s ease, box-shadow 0.3s ease;
        }

        .cta-heading {
            font-family: var(--heading-font);
            font-size: 32px;
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 4px;
            transition: color 0.3s ease;
        }

        .cta-desc {
            font-size: 15px;
            color: var(--text-gray);
            margin: 0;
            transition: color 0.3s ease;
        }

        /* Dark Mode Updates */
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

        body.dark-theme .stats-card,
        body.dark-theme .mission-card,
        body.dark-theme .cta-banner {
            background: rgba(73, 87, 70, 0.75);
            border-color: rgba(255, 255, 255, 0.12);
        }

        body.dark-theme .stat-item {
            border-color: rgba(255, 255, 255, 0.12);
        }

        body.dark-theme .hf-title,
        body.dark-theme .value-title,
        body.dark-theme .stat-val,
        body.dark-theme .section-heading,
        body.dark-theme .mission-heading,
        body.dark-theme .cta-heading {
            color: #ffffff;
        }

        body.dark-theme .hf-desc,
        body.dark-theme .value-desc,
        body.dark-theme .stat-label,
        body.dark-theme .mission-desc,
        body.dark-theme .cta-desc {
            color: rgba(255, 255, 255, 0.75);
        }

        body.dark-theme .cta-icon-circle {
            background-color: #1e293b;
            box-shadow: 0 4px 15px rgba(0,0,0,0.5);
            color: #c3ab83;
        }

        body.dark-theme .hf-icon,
        body.dark-theme .value-icon {
            background-color: rgba(177, 152, 111, 0.15);
            color: #c3ab83;
        }

        @media (max-width: 1199.98px) {
            .about-title { font-size: 56px; }
            .stats-card {
                grid-template-columns: repeat(3, 1fr);
                gap: 32px 20px;
            }
            .stat-item:nth-child(3) { border-right: none; }
            .cta-banner {
                flex-direction: column;
                align-items: flex-start;
                gap: 24px;
            }
        }

        @media (max-width: 991.98px) {
            .about-hero { padding: 40px 0; }
            .hero-image-wrapper { margin-top: 40px; }
            .values-grid { gap: 24px; }
            .mission-card { margin-top: 40px; }
            .mission-content { max-width: 100%; }
            .mission-img-wrapper { opacity: 0.15; width: 100%; right: -20%; }
        }

        @media (max-width: 767.98px) {
            p { text-align: left !important; }
            .text-center p { text-align: center !important; }
            .about-title { font-size: 36px; }
            .about-desc { font-size: 16px; }
            .hero-features { grid-template-columns: 1fr; }
            .stats-card { grid-template-columns: 1fr; }
            .stat-item { border-right: none; border-bottom: 1px solid var(--border-color); padding-bottom: 24px; }
            body.dark-theme .stat-item { border-bottom-color: rgba(255,255,255,0.12); }
            .stat-item:last-child { border-bottom: none; padding-bottom: 0; }
            .values-grid { grid-template-columns: 1fr; }
            .cta-left { flex-direction: column; align-items: flex-start; }
            .btn-primary-custom { width: 100%; justify-content: center; }
            .custom-container { padding: 0 16px; }
            .about-hero { padding: 30px 0; }
            .section-heading { font-size: 36px; }
            .mission-card { padding: 24px; }
        }

        @media (max-width: 480px) {
            .about-title { font-size: 28px; }
            .section-heading { font-size: 28px; }
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
                <a href="index.php">Home</a>
                <i class="fa-solid fa-chevron-right" style="font-size:10px;"></i>
                <span>About</span>
            </div>

            <div class="row">
                <div class="col-lg-6 pe-lg-5">
                    <span class="about-label">ABOUT ICON DENTAL- WEMBLEY</span>
                    <h2 class="about-title">Exceptional Dental<br>Care<br>for Healthier,<br>Happier<br>Smiles.</h2>
                    <p class="about-desc" style="text-align: justify;">At Icon Dental- Wembley, we combine advanced technology with a personalised approach to deliver outstanding dental care for the whole family. Your comfort, health, and confidence are always our priority.</p>
                    
                    <div class="hero-features">
                        <div class="hf-card">
                            <div class="hf-icon"><i class="fa-solid fa-tooth"></i></div>
                            <div>
                                <h3 class="hf-title">State-of-the-Art Technology</h3>
                                <p class="hf-desc">Advanced tools for precise diagnosis and treatment.</p>
                            </div>
                        </div>
                        <div class="hf-card">
                            <div class="hf-icon"><i class="fa-solid fa-users"></i></div>
                            <div>
                                <h3 class="hf-title">Experienced Professionals</h3>
                                <p class="hf-desc">Highly skilled team dedicated to your care.</p>
                            </div>
                        </div>
                        <div class="hf-card">
                            <div class="hf-icon"><i class="fa-regular fa-heart"></i></div>
                            <div>
                                <h3 class="hf-title">Patient-Centred Approach</h3>
                                <p class="hf-desc">We listen, we care, and we put you first.</p>
                            </div>
                        </div>
                        <div class="hf-card">
                            <div class="hf-icon"><i class="fa-solid fa-shield-halved"></i></div>
                            <div>
                                <h3 class="hf-title">Trusted by Our Community</h3>
                                <p class="hf-desc">Proudly serving Wembley and surrounding areas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-wrapper">
                        <img src="assets/images/reception.png" alt="Luxury Dental Clinic Reception">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container custom-container">
            <div class="stats-card">
                <div class="stat-item">
                    <div class="stat-icon"><i class="fa-regular fa-face-smile"></i></div>
                    <div class="stat-val">2500+</div>
                    <div class="stat-label">Happy Patients</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon"><i class="fa-regular fa-star"></i></div>
                    <div class="stat-val">4.9/5</div>
                    <div class="stat-label">Google Rating</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon"><i class="fa-regular fa-calendar"></i></div>
                    <div class="stat-val">15+</div>
                    <div class="stat-label">Years Experience</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <div class="stat-val">100%</div>
                    <div class="stat-label">Patient Focused</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon"><i class="fa-solid fa-users"></i></div>
                    <div class="stat-val">20+</div>
                    <div class="stat-label">Dental Experts</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="stat-val">1</div>
                    <div class="stat-label">Convenient Location</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values + Mission Section -->
    <section class="values-section">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-6 pe-lg-5">
                    <h2 class="section-heading">Our Values</h2>
                    <div class="values-grid">
                        <div class="value-card">
                            <div class="value-icon"><i class="fa-solid fa-tooth"></i></div>
                            <div>
                                <h3 class="value-title">Integrity</h3>
                                <p class="value-desc">We believe in honesty, transparency, and ethical care in everything we do.</p>
                            </div>
                        </div>
                        <div class="value-card">
                            <div class="value-icon"><i class="fa-regular fa-star"></i></div>
                            <div>
                                <h3 class="value-title">Excellence</h3>
                                <p class="value-desc">We are committed to providing the highest standard of dental care.</p>
                            </div>
                        </div>
                        <div class="value-card">
                            <div class="value-icon"><i class="fa-solid fa-users"></i></div>
                            <div>
                                <h3 class="value-title">Compassion</h3>
                                <p class="value-desc">We treat every patient with kindness, respect and empathy.</p>
                            </div>
                        </div>
                        <div class="value-card">
                            <div class="value-icon"><i class="fa-solid fa-microscope"></i></div>
                            <div>
                                <h3 class="value-title">Innovation</h3>
                                <p class="value-desc">We embrace the latest technology and techniques for better outcomes.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mission-card">
                        <div class="mission-content">
                            <h2 class="mission-heading">Our Mission</h2>
                            <p class="mission-desc">To provide exceptional dental care in a comfortable environment, helping our patients achieve long-term oral health and beautiful smiles.</p>
                            <a href="about/meet-the-team.php" class="btn-primary-custom">
                                Meet The Team <i class="fa-solid fa-users ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section>
        <div class="container custom-container">
            <div class="cta-banner">
                <div class="cta-left">
                    <div class="cta-icon-circle"><i class="fa-regular fa-calendar-check"></i></div>
                    <div>
                        <h2 class="cta-heading">Ready to take the next step towards a healthier smile?</h2>
                        <p class="cta-desc">Book your appointment online in just a few clicks.</p>
                    </div>
                </div>
                <div class="cta-right">
                    <a href="#" class="btn-primary-custom">
                        <i class="fa-regular fa-calendar"></i> Book Online
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    


    <?php include $_SERVER['DOCUMENT_ROOT'] . '/icon-dental/includes/footer.php'; ?>
</body>
</html>




