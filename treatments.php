<?php
// treatments.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icon Dental- Wembley | Treatments</title>
    
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
        
        .btn-outline-custom {
            background-color: transparent;
            color: var(--primary-blue);
            border: 1px solid var(--primary-blue);
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

        .btn-outline-custom:hover {
            background: var(--light-bg);
            transform: translateY(-2px);
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
        .treatments-hero {
            background: linear-gradient(90deg, #f8fafc, #f1f5f9);
            padding: 90px 0;
            transition: background 0.3s ease;
        }

        .hero-label {
            color: var(--primary-blue);
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 24px;
            display: inline-block;
            transition: color 0.3s ease;
        }

        .hero-title {
            font-size: 72px;
            line-height: 1.05;
            font-weight: 600;
            margin-bottom: 24px;
        }

        .hero-desc {
            font-size: 18px;
            line-height: 1.6;
            max-width: 560px;
            margin-bottom: 48px;
        }

        .hero-features {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
            margin-bottom: 40px;
        }

        .hf-card {
            display: flex;
            align-items: flex-start;
            gap: 16px;
        }

        .hf-icon {
            width: 32px;
            height: 32px;
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: flex-start;
            font-size: 24px;
            flex-shrink: 0;
            transition: color 0.3s ease;
        }

        .hf-title {
            font-size: 15px;
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
            position: relative;
            border-radius: 140px 20px 20px 140px;
            overflow: hidden;
            height: 520px;
            width: 100%;
        }

        .hero-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .floating-quote-card {
            position: absolute;
            bottom: 40px;
            right: 40px;
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
            padding: 24px;
            display: flex;
            align-items: center;
            gap: 16px;
            z-index: 2;
            transition: background 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid transparent;
        }

        .quote-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background-color: #eff6ff;
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .quote-text {
            font-family: var(--heading-font);
            font-size: 22px;
            font-weight: 600;
            color: var(--dark-navy);
            line-height: 1.2;
            margin: 0;
            transition: color 0.3s ease;
        }

        /* Treatments Grid Section */
        .treatments-section {
            padding: 80px 0;
        }

        .treatments-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 24px;
            margin-bottom: 60px;
        }

        .treatment-card {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: 18px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease, border-color 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .treatment-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,.08);
        }

        .t-img-container {
            height: 220px;
            position: relative;
        }

        .t-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .t-icon-circle {
            position: absolute;
            bottom: -20px;
            left: 20px;
            width: 44px;
            height: 44px;
            background-color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-blue);
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            font-size: 18px;
            transition: background 0.3s ease, color 0.3s ease;
            border: 1px solid var(--border-color);
        }

        .t-content {
            padding: 32px 20px 24px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .t-title {
            font-family: var(--heading-font);
            font-size: 22px;
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 12px;
            transition: color 0.3s ease;
        }

        .t-desc {
            font-size: 14px;
            line-height: 1.6;
            color: var(--text-gray);
            margin-bottom: 24px;
            flex-grow: 1;
            transition: color 0.3s ease;
        }

        .t-link {
            font-size: 14px;
            font-weight: 600;
            color: var(--primary-blue);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: color 0.3s ease;
        }

        .t-link:hover {
            color: var(--primary-hover);
        }

        /* Benefits Strip */
        .benefits-strip {
            background: #f8fafc;
            border-radius: 20px;
            padding: 28px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 80px;
            border: 1px solid transparent;
            transition: background 0.3s ease, border-color 0.3s ease;
        }

        .benefits-group {
            display: flex;
            align-items: center;
            gap: 32px;
            flex-grow: 1;
        }

        .benefit-item {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .benefit-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            background-color: #ffffff;
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            transition: background 0.3s ease, box-shadow 0.3s ease, color 0.3s ease;
        }

        .benefit-title {
            font-size: 14px;
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 2px;
            font-family: var(--body-font);
            transition: color 0.3s ease;
        }

        .benefit-desc {
            font-size: 12px;
            color: var(--text-gray);
            margin: 0;
            transition: color 0.3s ease;
        }

        .benefit-image-wrapper {
            width: 240px;
            height: 80px;
            border-radius: 40px;
            overflow: hidden;
            flex-shrink: 0;
            margin-left: 20px;
        }

        .benefit-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* CTA Section */
        .cta-banner {
            background: #ffffff;
            border-radius: 20px;
            padding: 30px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 90px;
            border: 1px solid var(--primary-blue);
            transition: background 0.3s ease, border-color 0.3s ease;
        }

        .cta-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .cta-icon-circle {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background-color: #eff6ff;
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            flex-shrink: 0;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .cta-heading {
            font-family: var(--heading-font);
            font-size: 28px;
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

        .cta-actions {
            display: flex;
            gap: 16px;
            align-items: center;
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

        body.dark-theme .treatments-hero {
            background: transparent;
        }

        body.dark-theme .hero-label {
            color: #b1986f;
        }

        body.dark-theme .hero-desc {
            color: rgba(255, 255, 255, 0.75);
        }

        body.dark-theme .hf-title,
        body.dark-theme .t-title,
        body.dark-theme .benefit-title,
        body.dark-theme .cta-heading,
        body.dark-theme .quote-text {
            color: #ffffff;
        }

        body.dark-theme .hf-desc,
        body.dark-theme .t-desc,
        body.dark-theme .benefit-desc,
        body.dark-theme .cta-desc {
            color: rgba(255, 255, 255, 0.75);
        }
        
        body.dark-theme .hf-icon {
            color: #c3ab83;
        }

        body.dark-theme .treatment-card,
        body.dark-theme .benefits-strip,
        body.dark-theme .cta-banner,
        body.dark-theme .floating-quote-card {
            background: rgba(73, 87, 70, 0.75);
            border-color: rgba(255, 255, 255, 0.12);
        }

        body.dark-theme .cta-banner {
            border-color: #b1986f;
        }

        body.dark-theme .t-icon-circle,
        body.dark-theme .benefit-icon,
        body.dark-theme .quote-icon {
            background-color: #1e293b;
            color: #c3ab83;
            border-color: rgba(255,255,255,0.12);
        }

        body.dark-theme .cta-icon-circle {
            background-color: rgba(177, 152, 111, 0.15);
            color: #c3ab83;
        }

        body.dark-theme .btn-outline-custom {
            color: #ffffff;
            border-color: rgba(255, 255, 255, 0.3);
        }

        body.dark-theme .btn-outline-custom:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.5);
        }

        /* Responsive Design */
        @media (max-width: 1199.98px) {
            .hero-title { font-size: 56px; }
            .treatments-grid {
                grid-template-columns: repeat(3, 1fr);
            }
            .benefits-strip {
                flex-direction: column;
                align-items: stretch;
                gap: 24px;
            }
            .benefits-group {
                flex-wrap: wrap;
            }
            .benefit-image-wrapper {
                margin-left: 0;
                width: 100%;
                height: 120px;
                border-radius: 20px;
            }
            .cta-banner {
                flex-direction: column;
                align-items: flex-start;
                gap: 24px;
            }
        }

        @media (max-width: 991.98px) {
            .treatments-hero { padding: 40px 0; }
            .hero-image-wrapper { margin-top: 40px; border-radius: 80px 20px 20px 80px; }
            .treatments-grid { grid-template-columns: repeat(2, 1fr); }
            .floating-quote-card {
                bottom: 20px;
                right: 20px;
                padding: 16px;
            }
            .quote-text { font-size: 18px; }
        }

        @media (max-width: 767.98px) {
            p { text-align: left !important; }
            .text-center p { text-align: center !important; }
            .hero-title { font-size: 40px; }
            .hero-features { grid-template-columns: 1fr; }
            .treatments-grid { grid-template-columns: 1fr; }
            .hero-image-wrapper { border-radius: 40px 20px 20px 40px; height: 400px; }
            .benefits-group { flex-direction: column; align-items: flex-start; gap: 20px; }
            .cta-left { flex-direction: column; align-items: flex-start; }
            .cta-actions { flex-direction: column; width: 100%; }
            .cta-actions a { width: 100%; }


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
    <section class="treatments-hero">
        <div class="container custom-container">
            
            <div class="breadcrumb-nav">
                <a href="index.php">Home</a>
                <i class="fa-solid fa-chevron-right" style="font-size:10px;"></i>
                <span>Treatments</span>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <span class="hero-label">OUR TREATMENTS</span>
                    <h2 class="hero-title">Advanced Dentistry.<br>Beautiful, Healthy Smiles.</h2>
                    <p class="hero-desc">From routine care to life-changing transformations, our treatments are designed around your needs, comfort, and goals.</p>
                    
                    <div class="hero-features">
                        <div class="hf-card">
                            <div class="hf-icon"><i class="fa-solid fa-tooth"></i></div>
                            <div>
                                <h3 class="hf-title">Latest Technology</h3>
                                <p class="hf-desc">State-of-the-art equipment</p>
                            </div>
                        </div>
                        <div class="hf-card">
                            <div class="hf-icon"><i class="fa-regular fa-heart"></i></div>
                            <div>
                                <h3 class="hf-title">Gentle & Comfortable</h3>
                                <p class="hf-desc">Pain-minimised treatments</p>
                            </div>
                        </div>
                        <div class="hf-card">
                            <div class="hf-icon"><i class="fa-solid fa-notes-medical"></i></div>
                            <div>
                                <h3 class="hf-title">Personalised Care</h3>
                                <p class="hf-desc">Tailored treatment for every patient</p>
                            </div>
                        </div>
                        <div class="hf-card">
                            <div class="hf-icon"><i class="fa-solid fa-shield-halved"></i></div>
                            <div>
                                <h3 class="hf-title">Trusted Experts</h3>
                                <p class="hf-desc">Highly experienced dental team</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="#treatments" class="btn-primary-custom mt-2">
                        View All Treatments <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-wrapper mt-5 mt-lg-0">
                        <!-- Reusing the newly successfully generated image -->
                        <img src="assets/images/stories/hero.png" alt="Patient and Dentist">
                        
                        <!-- Floating Quote Card -->
                        <div class="floating-quote-card">
                            <div class="quote-icon"><i class="fa-regular fa-heart"></i></div>
                            <h3 class="quote-text">Your smile<br>is our passion</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Treatments Grid -->
    <section class="treatments-section" id="treatments">
        <div class="container custom-container">
            <div class="treatments-grid">
                <!-- Card 1 -->
                <div class="treatment-card">
                    <div class="t-img-container">
                        <!-- Fallback using existing images -->
                        <img src="assets/images/general.png" alt="General Dentistry">
                        <div class="t-icon-circle"><i class="fa-solid fa-tooth"></i></div>
                    </div>
                    <div class="t-content">
                        <h3 class="t-title">General Dentistry</h3>
                        <p class="t-desc">Keep your smile healthy with check-ups, cleans, fillings, crowns and more.</p>
                        <a href="#" class="t-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="treatment-card">
                    <div class="t-img-container">
                        <img src="assets/images/smile.png" alt="Smile Makeovers">
                        <div class="t-icon-circle"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                    </div>
                    <div class="t-content">
                        <h3 class="t-title">Smile Makeovers</h3>
                        <p class="t-desc">Transform your smile with whitening, veneers, bonding and complete makeovers.</p>
                        <a href="#" class="t-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="treatment-card">
                    <div class="t-img-container">
                        <!-- Reuse smile image or placeholder -->
                        <img src="assets/images/stories/priya_before.png" alt="Invisalign">
                        <div class="t-icon-circle"><i class="fa-solid fa-teeth-open"></i></div>
                    </div>
                    <div class="t-content">
                        <h3 class="t-title">Invisalign</h3>
                        <p class="t-desc">Straighten your teeth discreetly with clear aligners for a confident smile, every day.</p>
                        <a href="#" class="t-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="treatment-card">
                    <div class="t-img-container">
                        <img src="assets/images/implant.png" alt="Dental Implants">
                        <div class="t-icon-circle"><i class="fa-solid fa-tooth"></i></div>
                    </div>
                    <div class="t-content">
                        <h3 class="t-title">Dental Implants</h3>
                        <p class="t-desc">Replace missing teeth with durable, natural-looking implant solutions.</p>
                        <a href="#" class="t-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="treatment-card">
                    <div class="t-img-container">
                        <img src="assets/images/reception.png" alt="View All Treatments">
                        <div class="t-icon-circle"><i class="fa-solid fa-border-all"></i></div>
                    </div>
                    <div class="t-content">
                        <h3 class="t-title">View All Treatments</h3>
                        <p class="t-desc">Explore our full range of dental services tailored to you and your family.</p>
                        <a href="#" class="t-link">Explore Now <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Benefits Strip -->
            <div class="benefits-strip">
                <div class="benefits-group">
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fa-solid fa-shield-halved"></i></div>
                        <div>
                            <h4 class="benefit-title">Minimal Discomfort</h4>
                            <p class="benefit-desc">Comfort-first approach in every treatment</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fa-solid fa-pound-sign"></i></div>
                        <div>
                            <h4 class="benefit-title">Flexible Payment</h4>
                            <p class="benefit-desc">Interest-free options to suit your budget</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fa-solid fa-notes-medical"></i></div>
                        <div>
                            <h4 class="benefit-title">Emergency Care</h4>
                            <p class="benefit-desc">Same-day appointments when you need us</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fa-regular fa-heart"></i></div>
                        <div>
                            <h4 class="benefit-title">Aftercare Support</h4>
                            <p class="benefit-desc">We're with you every step of your journey</p>
                        </div>
                    </div>
                </div>
                <div class="benefit-image-wrapper">
                    <img src="assets/images/reception.png" alt="Clinic Reception">
                </div>
            </div>

            <!-- CTA Section -->
            <div class="cta-banner">
                <div class="cta-left">
                    <div class="cta-icon-circle"><i class="fa-regular fa-calendar-check"></i></div>
                    <div>
                        <h2 class="cta-heading">Ready to start your smile journey?</h2>
                        <p class="cta-desc">Book your appointment online in just a few clicks.</p>
                    </div>
                </div>
                <div class="cta-actions">
                    <a href="#" class="btn-primary-custom">
                        <i class="fa-regular fa-calendar"></i> Book Online
                    </a>
                    <a href="#" class="btn-outline-custom">
                        <i class="fa-solid fa-phone"></i> Call Us
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



