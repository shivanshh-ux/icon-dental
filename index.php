<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icon Dental- Wembley | Exceptional Dental Care</title>
    <meta name="description" content="At Icon Dental- Wembley, we combine advanced technology with a gentle, personal touch to create healthy, confident smiles that last a lifetime.">
    
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
            --shadow: 0 10px 30px rgba(0,0,0,.08);
            --transition: all 0.3s ease;
        }

        body {
            font-family: var(--body-font);
            color: var(--text-gray);
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        h1, h2, h3, h4, h5, h6, .brand-text {
            font-family: var(--heading-font);
            color: var(--dark-navy);
            margin-bottom: 1rem;
            transition: color 0.3s ease;
        }

        .section-padding { padding: 90px 0; }

        .custom-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Buttons */
        .btn-primary-custom {
            background-color: var(--primary-blue);
            color: #ffffff;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 500;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
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
            color: var(--dark-navy);
            border: 1px solid var(--border-color);
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 500;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            font-size: 15px;
        }
        .btn-outline-custom:hover {
            border-color: var(--dark-navy);
            color: var(--dark-navy);
            background: var(--light-bg);
            transform: translateY(-2px);
        }

        /* Hero Section Enhancements */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes floatImage {
            0% { transform: translateY(0px) perspective(1000px) rotateY(-5deg); }
            50% { transform: translateY(-20px) perspective(1000px) rotateY(-5deg); }
            100% { transform: translateY(0px) perspective(1000px) rotateY(-5deg); }
        }
        @keyframes pulseBg {
            0% { transform: scale(1); opacity: 0.5; }
            100% { transform: scale(1.1); opacity: 0.8; }
        }
        
        .hero-section {
            min-height: 85vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #ffffff 0%, #f1f5f9 100%);
            position: relative;
            padding-top: 80px;
            padding-bottom: 120px;
            overflow: hidden;
            transition: background 0.3s ease;
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(177, 152, 111, 0.08) 0%, transparent 50%);
            animation: pulseBg 8s infinite alternate;
            z-index: 0;
            pointer-events: none;
        }
        .hero-content {
            position: relative;
            z-index: 2;
        }
        .hero-badge {
            background: linear-gradient(90deg, rgba(177,152,111,0.15), rgba(177,152,111,0.05));
            color: var(--primary-hover);
            padding: 8px 24px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 700;
            display: inline-block;
            margin-bottom: 24px;
            border: 1px solid rgba(177,152,111,0.3);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            animation: fadeInUp 0.8s ease-out;
            box-shadow: 0 4px 15px rgba(177, 152, 111, 0.1);
        }
        .hero-title {
            font-size: 72px;
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 24px;
            letter-spacing: -1.5px;
            background: linear-gradient(to right, var(--dark-navy), var(--primary-blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: fadeInUp 0.8s ease-out 0.2s backwards;
        }
        .hero-desc {
            font-size: 20px;
            line-height: 1.7;
            margin-bottom: 40px;
            max-width: 580px;
            color: #475569;
            animation: fadeInUp 0.8s ease-out 0.4s backwards;
        }
        .hero-list {
            list-style: none; padding: 0;
            animation: fadeInUp 0.8s ease-out 0.6s backwards;
            margin-bottom: 40px !important;
        }
        .hero-list li {
            margin-bottom: 16px;
            font-size: 16px;
            display: flex;
            align-items: center;
            color: var(--dark-navy);
            font-weight: 500;
            transition: transform 0.3s ease;
        }
        .hero-list li:hover {
            transform: translateX(5px);
        }
        .hero-list li i {
            background: linear-gradient(135deg, var(--primary-blue), var(--primary-hover));
            color: white;
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-right: 14px;
            font-size: 12px;
            box-shadow: 0 4px 10px rgba(177, 152, 111, 0.4);
        }
        .hero-actions {
            animation: fadeInUp 0.8s ease-out 0.8s backwards;
        }
        .hero-image-wrapper {
            position: relative;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 30px 60px rgba(0,0,0,0.15), 0 0 0 10px rgba(255,255,255,0.5);
            height: 650px;
            width: 100%;
            animation: floatImage 6s ease-in-out infinite;
            z-index: 2;
        }
        .hero-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s ease;
        }
        .hero-image-wrapper:hover img {
            transform: scale(1.08);
        }

        /* Features Section */
        .features-section {
            position: relative;
            z-index: 10;
            margin-top: -60px;
        }
        .features-inner {
            background-color: #ffffff;
            border-radius: 20px;
            padding: 24px 32px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }
        .feature-card { display: flex; align-items: flex-start; gap: 16px; height: 100%; }
        .feature-icon-wrapper {
            width: 48px; height: 48px; border-radius: 12px;
            background-color: #eff6ff; color: var(--primary-blue);
            display: flex; align-items: center; justify-content: center;
            font-size: 20px; flex-shrink: 0;
        }
        .feature-title { font-family: var(--body-font); font-size: 16px; font-weight: 600; margin-bottom: 6px; color: var(--dark-navy); }
        .feature-text { font-size: 14px; margin: 0; line-height: 1.5; color: var(--text-gray); }

        /* Welcome Section */
        .welcome-title { font-size: 48px; font-weight: 600; margin-bottom: 24px; line-height: 1.2; }
        .welcome-desc { font-size: 16px; line-height: 1.7; margin-bottom: 32px; }

        /* Service Card */
        .service-card {
            background-color: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border: 1px solid var(--border-color);
            position: relative;
            height: 100%;
        }
        .service-card:hover { transform: translateY(-5px); box-shadow: 0 15px 35px rgba(0,0,0,.1); }
        .service-title { font-family: var(--body-font); font-size: 18px; font-weight: 600; margin: 0; color: var(--dark-navy); }

        /* Why Choose Cards */
        .why-choose-card {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            transition: all 0.4s ease;
            height: 100%;
            border: 1px solid transparent;
        }
        .why-choose-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(177, 152, 111, 0.15);
            border-color: rgba(177, 152, 111, 0.3);
        }

        /* Smile Makeover pill boxes */
        .makeover-pill {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 12px 16px;
            text-align: center;
            font-size: 14px;
            font-weight: 500;
            color: var(--dark-navy);
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        .makeover-pill:hover {
            border-color: rgba(177,152,111,0.5);
            box-shadow: 0 4px 15px rgba(177,152,111,0.15);
        }
        .makeover-pill i { color: var(--primary-blue); margin-right: 6px; }

        /* Section that uses light-bg — needs dark mode override */
        .section-light-bg {
            background: var(--light-bg);
            transition: background 0.3s ease;
        }

        /* Emergency Card */
        .emergency-card {
            background: white;
            border: 1px solid var(--border-color);
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            border-radius: 12px;
            padding: 3rem;
            transition: all 0.3s ease;
        }
        .emergency-title { color: #b1986f; }
        .emergency-btn {
            width: 100%;
            justify-content: center;
            background: #b1986f !important;
            border-color: #b1986f !important;
            color: white !important;
        }
        .emergency-btn:hover { background: #9f875e !important; border-color: #9f875e !important; }

        /* Emergency badges */
        .emergency-badge {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
            background: #f1f5f9;
            color: var(--dark-navy);
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }

        /* ===================== DARK THEME ===================== */
        body.dark-theme {
            background: linear-gradient(90deg, #3f4b3d, #495746, #3f4b3d);
            color: rgba(255, 255, 255, 0.75);
            --text-gray: #a0adb8;
            --border-color: rgba(255,255,255,0.1);
        }
        body.dark-theme h1, body.dark-theme h2, body.dark-theme h3,
        body.dark-theme h4, body.dark-theme h5, body.dark-theme h6,
        body.dark-theme .brand-text { color: #ffffff; }
        body.dark-theme .hero-section { background: linear-gradient(135deg, #2c352a 0%, #3f4b3d 100%); }
        body.dark-theme .hero-title { background: linear-gradient(to right, #ffffff, #d6c09b); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        body.dark-theme .hero-desc { color: rgba(255,255,255,0.8); }
        body.dark-theme .hero-list li { color: rgba(255,255,255,0.9); }
        body.dark-theme .hero-badge { background: rgba(177, 152, 111, 0.15); color: #d6c09b; border-color: rgba(177,152,111,0.3); }
        body.dark-theme .hero-image-wrapper { box-shadow: 0 30px 60px rgba(0,0,0,0.5), 0 0 0 10px rgba(255,255,255,0.05); }
        body.dark-theme .feature-title, body.dark-theme .service-title, body.dark-theme .review-text { color: #ffffff; }
        body.dark-theme .feature-text { color: #cbd5e1; }
        body.dark-theme .welcome-desc { color: rgba(255,255,255,0.75); }
        body.dark-theme .btn-outline-custom { color: #ffffff; border-color: rgba(255, 255, 255, 0.3); }
        body.dark-theme .btn-outline-custom:hover { background-color: rgba(255, 255, 255, 0.1); border-color: rgba(255, 255, 255, 0.5); }
        body.dark-theme .features-inner { background-color: rgba(73, 87, 70, 0.6); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.05); box-shadow: 0 10px 30px rgba(0,0,0,0.2); }
        body.dark-theme .feature-icon-wrapper { background-color: rgba(177, 152, 111, 0.2); color: #d6c09b; }
        body.dark-theme .service-card { background-color: rgba(73, 87, 70, 0.6); border-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); }
        body.dark-theme .service-icon { background-color: #1e293b; color: #d6c09b; box-shadow: 0 4px 10px rgba(0,0,0,0.5); }
        body.dark-theme .service-card ul li { color: rgba(255, 255, 255, 0.65) !important; }
        body.dark-theme .service-card p { color: rgba(255, 255, 255, 0.65) !important; }
        body.dark-theme .service-card h3 { color: #ffffff !important; }
        body.dark-theme .border-start { border-color: rgba(255, 255, 255, 0.1) !important; }
        body.dark-theme .why-choose-card { background: rgba(73, 87, 70, 0.6); backdrop-filter: blur(10px); border-color: rgba(177, 152, 111, 0.15); box-shadow: 0 10px 30px rgba(0,0,0,0.2); }
        body.dark-theme .why-choose-card:hover { box-shadow: 0 15px 35px rgba(177, 152, 111, 0.25); border-color: rgba(177, 152, 111, 0.5); background: rgba(73, 87, 70, 0.85); }
        body.dark-theme .why-choose-card .feature-title { color: #ffffff; }
        body.dark-theme .why-choose-card .feature-text { color: #cbd5e1; }

        /* ---- Smile Makeover section dark mode ---- */
        body.dark-theme .section-light-bg { background: rgba(44, 53, 42, 0.6) !important; }
        body.dark-theme .makeover-pill {
            background: rgba(73, 87, 70, 0.7);
            border-color: rgba(177, 152, 111, 0.25);
            color: rgba(255,255,255,0.9);
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        body.dark-theme .makeover-pill:hover {
            background: rgba(73, 87, 70, 0.95);
            border-color: rgba(177, 152, 111, 0.5);
        }
        body.dark-theme .makeover-pill i { color: #d6c09b; }

        /* ---- Emergency card dark mode ---- */
        body.dark-theme .emergency-card {
            background: rgba(44, 53, 42, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(177, 152, 111, 0.2);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        body.dark-theme .emergency-title { color: #d6c09b; }
        body.dark-theme .emergency-card p { color: rgba(255,255,255,0.7); }
        body.dark-theme .emergency-badge {
            background: rgba(177, 152, 111, 0.15);
            color: #d6c09b;
            border-color: rgba(177, 152, 111, 0.3);
        }

        /* ===================== RESPONSIVE ===================== */
        @media (max-width: 991.98px) {
            .hero-title { font-size: 46px; }
            .hero-section { min-height: auto; padding-top: 40px; padding-bottom: 60px; }
            .hero-image-wrapper { height: 380px; margin-top: 36px; }
            .features-section { margin-top: -40px; }
            .welcome-title { font-size: 38px; }
            .border-start { border-left: none !important; }
        }

        @media (max-width: 767.98px) {
            p { text-align: left !important; }
            .text-center p, .why-choose-card p { text-align: left !important; }
            .hero-title { font-size: 30px; line-height: 1.2; }
            .hero-desc { font-size: 15px; max-width: 100%; }
            .welcome-title { font-size: 28px; }
            .section-padding { padding: 50px 0; }
            .custom-container { padding: 0 16px; }
            .hero-section { padding-top: 24px; padding-bottom: 40px; }
            .hero-image-wrapper { height: 240px; margin-top: 24px; }
            .btn-group-custom { display: flex; flex-direction: column; width: 100%; gap: 12px; }
            .btn-primary-custom, .btn-outline-custom { width: 100%; justify-content: center; }
            .emergency-card { padding: 1.5rem; }
            .features-inner { padding: 18px 16px; }
        }

        @media (max-width: 480px) {
            .hero-title { font-size: 26px; }
            .welcome-title { font-size: 24px; }
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
    <section class="hero-section">
        <div class="container custom-container hero-content">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="hero-badge"><i class="fa-solid fa-star me-2"></i> Icon Dental Wembley</span>
                    <h2 class="hero-title">Premium Family &<br>Cosmetic Dentist</h2>
                    <p class="hero-desc">Experience modern dentistry in a comfortable, welcoming environment where your smile comes first. We combine advanced technology with a gentle touch to deliver exceptional results.</p>
                    
                    <ul class="hero-list">
                        <li><i class="fa-solid fa-check"></i> Same-Day Emergency Appointments</li>
                        <li><i class="fa-solid fa-check"></i> Invisalign & Smile Makeovers</li>
                        <li><i class="fa-solid fa-check"></i> Dental Implants & Restorative Care</li>
                        <li><i class="fa-solid fa-check"></i> Flexible Finance Options Available</li>
                    </ul>

                    <div class="btn-group-custom d-flex gap-3 hero-actions">
                        <a href="#" class="btn-primary-custom px-4 py-3" style="font-size: 16px;">
                            <i class="fa-regular fa-calendar-check"></i> Book Appointment
                        </a>
                        <a href="#" class="btn-outline-custom px-4 py-3" style="font-size: 16px;">
                            Explore Treatments <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-wrapper">
                        <img src="assets/images/hero.png" alt="Smiling Dental Patient">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Welcome Section -->
    <section class="section-padding">
        <div class="container custom-container">
            <div class="row align-items-center g-5 mb-5">
                <div class="col-lg-12 text-center">
                    <h2 class="welcome-title">Welcome to<br>Icon Dental Wembley</h2>
                    <p class="welcome-desc mx-auto" style="max-width: 800px;">At Icon Dental Wembley, we believe dentistry should be comfortable, transparent, and tailored to every patient. Our highly experienced team combines advanced technology with a patient-first approach to provide outstanding dental care for individuals and families across Wembley and surrounding areas.</p>
                    <p class="welcome-desc mx-auto fw-bold" style="max-width: 800px;">From maintaining healthy teeth and gums to transforming smiles through cosmetic dentistry, our mission is simple: Creating healthy, confident smiles that last a lifetime.</p>
                </div>
            </div>

            <!-- 4 CORE SERVICE BLOCKS -->
            <div class="row g-4 mt-4">
                <!-- Service 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card p-4">
                        <div class="service-icon mb-3" style="position: static; box-shadow: none;">
                            <i class="fa-solid fa-tooth" style="font-size: 32px; color: var(--primary-blue);"></i>
                        </div>
                        <h3 class="service-title mb-3">Check My Teeth</h3>
                        <p class="feature-text mb-3">Regular dental examinations and professional hygiene appointments help prevent dental problems before they become serious.</p>
                        <ul style="list-style: none; padding: 0; font-size: 14px; color: var(--text-gray);">
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Dental Check-ups</li>
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Digital X-rays</li>
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Gum Health Assessments</li>
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Scale & Polish</li>
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Airflow Cleaning</li>
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Oral Cancer Screening</li>
                        </ul>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card p-4">
                        <div class="service-icon mb-3" style="position: static; box-shadow: none;">
                            <i class="fa-solid fa-screwdriver-wrench" style="font-size: 32px; color: var(--primary-blue);"></i>
                        </div>
                        <h3 class="service-title mb-3">Repair My Teeth</h3>
                        <p class="feature-text mb-3">Restore the health, function, and appearance of damaged teeth with advanced restorative techniques.</p>
                        <ul style="list-style: none; padding: 0; font-size: 14px; color: var(--text-gray);">
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> White Fillings</li>
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Root Canal Treatment</li>
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Crowns & Bridges</li>
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Inlays & Onlays</li>
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Emergency Dentistry</li>
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Tooth-Coloured Restorations</li>
                        </ul>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card p-4">
                        <div class="service-icon mb-3" style="position: static; box-shadow: none;">
                            <i class="fa-solid fa-teeth-open" style="font-size: 32px; color: var(--primary-blue);"></i>
                        </div>
                        <h3 class="service-title mb-3">Replace My Teeth</h3>
                        <p class="feature-text mb-3">We offer modern tooth replacement solutions that look natural and feel comfortable for missing teeth.</p>
                        <ul style="list-style: none; padding: 0; font-size: 14px; color: var(--text-gray);">
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Dental Implants</li>
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Implant Bridges</li>
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Implant Dentures</li>
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Fixed Bridges</li>
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Full Smile Rehabilitation</li>
                        </ul>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card p-4">
                        <div class="service-icon mb-3" style="position: static; box-shadow: none;">
                            <i class="fa-regular fa-face-smile-beam" style="font-size: 32px; color: var(--primary-blue);"></i>
                        </div>
                        <h3 class="service-title mb-3">Enhance My Teeth</h3>
                        <p class="feature-text mb-3">Our cosmetic dental treatments are designed to create beautiful, natural-looking results.</p>
                        <ul style="list-style: none; padding: 0; font-size: 14px; color: var(--text-gray);">
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Invisalign</li>
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Composite Bonding</li>
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Teeth Whitening</li>
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Porcelain Veneers</li>
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Smile Makeovers</li>
                            <li><i class="fa-solid fa-angle-right" style="color:var(--primary-blue); margin-right:5px;"></i> Gum Contouring</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us / Features -->
    <section class="section-padding section-light-bg">
        <div class="container custom-container">
            <div class="text-center mb-5">
                <span class="hero-badge">WHY CHOOSE ICON DENTAL WEMBLEY</span>
                <h2 class="welcome-title">Exceptional Care.<br>Outstanding Results.</h2>
                <p class="welcome-desc mx-auto" style="max-width: 600px;">We focus on providing an outstanding patient experience from the moment you contact us.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="why-choose-card d-block text-center p-4">
                        <i class="fa-solid fa-star mb-3" style="font-size: 32px; color: var(--primary-blue);"></i>
                        <h3 class="feature-title">5-Star Patient Care</h3>
                        <p class="feature-text">Friendly, professional service with patient comfort at the heart of everything we do.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-choose-card d-block text-center p-4">
                        <i class="fa-solid fa-user-doctor mb-3" style="font-size: 32px; color: var(--primary-blue);"></i>
                        <h3 class="feature-title">Experienced Dental Team</h3>
                        <p class="feature-text">A highly skilled team dedicated to delivering excellent clinical outcomes.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-choose-card d-block text-center p-4">
                        <i class="fa-solid fa-microscope mb-3" style="font-size: 32px; color: var(--primary-blue);"></i>
                        <h3 class="feature-title">Advanced Technology</h3>
                        <p class="feature-text">Modern equipment and digital dentistry for accurate diagnosis and comfortable treatment.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-choose-card d-block text-center p-4">
                        <i class="fa-solid fa-gem mb-3" style="font-size: 32px; color: var(--primary-blue);"></i>
                        <h3 class="feature-title">Premium Materials</h3>
                        <p class="feature-text">Using trusted, evidence-based materials for durable, long-lasting results.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-choose-card d-block text-center p-4">
                        <i class="fa-solid fa-briefcase-medical mb-3" style="font-size: 32px; color: var(--primary-blue);"></i>
                        <h3 class="feature-title">Comprehensive Services</h3>
                        <p class="feature-text">From routine care to advanced implant and cosmetic treatments.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-choose-card d-block text-center p-4">
                        <i class="fa-solid fa-credit-card mb-3" style="font-size: 32px; color: var(--primary-blue);"></i>
                        <h3 class="feature-title">Flexible Finance Available</h3>
                        <p class="feature-text">Spread the cost of treatment with affordable payment options.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Invisalign & Implants Row -->
    <section class="section-padding">
        <div class="container custom-container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="service-card p-5 h-100" style="background: linear-gradient(135deg, #3f4b3d, #495746); color: white;">
                        <span class="hero-badge" style="background: rgba(177,152,111,0.2); color: #b1986f;">INVISALIGN</span>
                        <h2 class="welcome-title text-white mt-3">Straighten Your Teeth Without Metal Braces</h2>
                        <p class="text-white-50 mb-4">Transform your smile discreetly using clear aligners designed around your lifestyle.</p>
                        <ul class="text-white" style="list-style: none; padding: 0;">
                            <li class="mb-2"><i class="fa-solid fa-check" style="color:#b1986f; margin-right:8px;"></i> Nearly Invisible</li>
                            <li class="mb-2"><i class="fa-solid fa-check" style="color:#b1986f; margin-right:8px;"></i> Comfortable & Removable</li>
                            <li class="mb-2"><i class="fa-solid fa-check" style="color:#b1986f; margin-right:8px;"></i> Faster Results</li>
                            <li class="mb-4"><i class="fa-solid fa-check" style="color:#b1986f; margin-right:8px;"></i> Digital Smile Simulation</li>
                        </ul>
                        <a href="#" class="btn-primary-custom" style="background: #b1986f;">Discover Invisalign</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-card p-5 h-100" style="background: linear-gradient(135deg, #495746, #5a6956); color: white;">
                        <span class="hero-badge" style="background: rgba(177,152,111,0.2); color: #b1986f;">DENTAL IMPLANTS</span>
                        <h2 class="welcome-title text-white mt-3">Permanent Solutions For Missing Teeth</h2>
                        <p class="text-white-50 mb-4">Dental implants are the gold standard solution for replacing missing teeth.</p>
                        <ul class="text-white" style="list-style: none; padding: 0;">
                            <li class="mb-2"><i class="fa-solid fa-check" style="color:#b1986f; margin-right:8px;"></i> Natural Appearance</li>
                            <li class="mb-2"><i class="fa-solid fa-check" style="color:#b1986f; margin-right:8px;"></i> Improved Confidence</li>
                            <li class="mb-2"><i class="fa-solid fa-check" style="color:#b1986f; margin-right:8px;"></i> Strong & Durable</li>
                            <li class="mb-4"><i class="fa-solid fa-check" style="color:#b1986f; margin-right:8px;"></i> Preserve Jawbone Health</li>
                        </ul>
                        <a href="#" class="btn-primary-custom" style="background: #b1986f;">Explore Implants</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Smile Makeover & Emergency -->
    <section class="section-padding section-light-bg">
        <div class="container custom-container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="hero-badge">SMILE MAKEOVER</span>
                    <h2 class="welcome-title">Transform Your Smile</h2>
                    <p class="welcome-desc">Our smile makeover treatments combine cosmetic dentistry techniques to create stunning, natural-looking results.</p>
                    <div class="row g-3 mb-4">
                        <div class="col-6"><div class="makeover-pill"><i class="fa-solid fa-wand-magic-sparkles"></i> Composite Bonding</div></div>
                        <div class="col-6"><div class="makeover-pill"><i class="fa-regular fa-face-smile"></i> Veneers</div></div>
                        <div class="col-6"><div class="makeover-pill"><i class="fa-regular fa-sun"></i> Teeth Whitening</div></div>
                        <div class="col-6"><div class="makeover-pill"><i class="fa-solid fa-scissors"></i> Gum Contouring</div></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="emergency-card">
                        <h3 class="mb-3 emergency-title"><i class="fa-solid fa-truck-medical"></i> Emergency Dentist in Wembley</h3>
                        <p>Dental emergencies can happen at any time. We provide same-day emergency appointments whenever possible for:</p>
                        <div class="d-flex flex-wrap gap-2 mb-4">
                            <span class="emergency-badge">Toothache</span>
                            <span class="emergency-badge">Broken Teeth</span>
                            <span class="emergency-badge">Lost Fillings</span>
                            <span class="emergency-badge">Swelling</span>
                            <span class="emergency-badge">Dental Trauma</span>
                            <span class="emergency-badge">Infection</span>
                        </div>
                        <a href="tel:+447903584600" class="btn-primary-custom emergency-btn">Call For Emergency Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Patient CTA -->
    <section class="section-padding">
        <div class="container custom-container text-center">
            <h2 class="welcome-title">New Patients Welcome</h2>
            <p class="welcome-desc mx-auto" style="max-width: 600px;">Whether you're looking for a family dentist, cosmetic treatment, or emergency appointment, we're here to help.</p>
            <div class="row justify-content-center mb-4">
                <div class="col-md-8">
                    <ul class="text-start d-inline-block" style="list-style: none; padding: 0;">
                        <li class="mb-2"><i class="fa-solid fa-check" style="color:var(--primary-blue); margin-right:8px;"></i> Comprehensive Dental Examination & Digital X-Rays</li>
                        <li class="mb-2"><i class="fa-solid fa-check" style="color:var(--primary-blue); margin-right:8px;"></i> Oral Health Assessment</li>
                        <li class="mb-2"><i class="fa-solid fa-check" style="color:var(--primary-blue); margin-right:8px;"></i> Personalised Treatment Plan</li>
                        <li class="mb-2"><i class="fa-solid fa-check" style="color:var(--primary-blue); margin-right:8px;"></i> Opportunity to Discuss Concerns</li>
                    </ul>
                </div>
            </div>
            <a href="#" class="btn-primary-custom btn-lg"><i class="fa-regular fa-calendar"></i> Book Appointment</a>
        </div>
    </section>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    


    <?php include $_SERVER['DOCUMENT_ROOT'] . '/icon-dental/includes/footer.php'; ?>
</body>
</html>







