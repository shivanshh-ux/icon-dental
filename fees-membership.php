<?php
// fees-membership.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fees & Membership - Icon Dental Wembley</title>
    
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
            transition: background 0.3s ease, color 0.3s ease;
        }

        h1, h2, h3, h4, h5, h6, .brand-text {
            font-family: var(--heading-font);
            color: var(--dark-navy);
            margin-bottom: 1rem;
            transition: color 0.3s ease;
        }
        
        p, .hf-desc, .plan-period, .plan-subtitle, .benefit-desc, .of-desc, .offers-desc {
            transition: color 0.3s ease;
        }

        /* Container exactly from requirements */
        .custom-container {
            max-width: 1400px;
            margin: auto;
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
        .navbar-brand { display: flex; align-items: center; gap: 12px; text-decoration: none; }
        .brand-icon { font-size: 32px; color: var(--primary-blue); }
        .brand-text { font-size: 28px; font-weight: 600; margin: 0; line-height: 1; }
        .nav-link { color: var(--dark-navy) !important; font-weight: 500; font-size: 15px; padding: 8px 18px !important; transition: var(--transition); }
        .nav-link:hover { color: var(--primary-blue) !important; }
        .nav-link.active { color: var(--primary-blue) !important; position: relative; }
        .nav-link.active::after { content: ''; position: absolute; bottom: 0; left: 18px; right: 18px; height: 2px; background-color: var(--primary-blue); }
        .dropdown-menu { border: 1px solid var(--border-color); border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); padding: 12px 0; }
        .dropdown-item { padding: 10px 24px; font-weight: 500; font-size: 14px; color: var(--dark-navy); transition: var(--transition); }
        .dropdown-item:hover { background: var(--light-bg); color: var(--primary-blue); }

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
            padding: 12px 24px;
            border-radius: 8px;
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
            background-color: var(--primary-blue);
            color: #fff;
            transform: translateY(-2px);
        }
        
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
        
        .breadcrumb-wrap {
            padding: 16px 0 0;
            transition: color 0.3s ease;
        }
        .breadcrumb-wrap a, .breadcrumb-wrap span {
            font-size: 14px;
            color: #64748b;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .breadcrumb-wrap a:hover {
            color: var(--primary-blue);
        }

        /* --- LIGHT VERSION --- */
        .hero-section {
            background: linear-gradient(90deg, #f8fafc, #f1f5f9);
            padding: 90px 0;
            position: relative;
            transition: background 0.3s ease;
        }
        .hero-label {
            color: var(--primary-blue);
            text-transform: uppercase;
            font-weight: 600;
            font-size: 14px;
            letter-spacing: 1px;
            margin-bottom: 16px;
            display: block;
        }
        .hero-title {
            font-family: var(--heading-font);
            font-size: 72px;
            line-height: 1.05;
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 24px;
        }
        .hero-desc {
            max-width: 560px;
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 40px;
        }
        
        .hero-features {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }
        .hf-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }
        .hf-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #eff6ff;
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 16px;
            transition: background 0.3s ease, border-color 0.3s ease;
        }
        .hf-title {
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 4px;
            font-size: 15px;
            transition: color 0.3s ease;
        }
        .hf-desc {
            font-size: 13px;
            margin: 0;
            color: var(--text-gray);
            line-height: 1.4;
        }
        
        .hero-image-wrapper {
            position: relative;
        }
        .hero-image {
            width: 100%;
            height: 520px;
            object-fit: cover;
            border-radius: 140px 20px 20px 140px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }
        .floating-card {
            position: absolute;
            bottom: -30px;
            left: -30px;
            background: #fff;
            border-radius: 20px;
            padding: 24px;
            box-shadow: 0 20px 40px rgba(0,0,0,.08);
            display: flex;
            align-items: center;
            gap: 16px;
            z-index: 2;
            transition: background 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        }
        .fc-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: #eff6ff;
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            transition: background 0.3s ease;
        }
        .fc-text {
            font-weight: 600;
            color: var(--dark-navy);
            margin: 0;
            line-height: 1.3;
            font-size: 16px;
            transition: color 0.3s ease;
        }
        
        /* Membership Section */
        .membership-section {
            padding: 90px 0;
            padding-bottom: 120px;
        }
        .section-title {
            font-family: var(--heading-font);
            font-size: 46px;
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 40px;
            transition: color 0.3s ease;
        }
        
        .plan-card {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            padding: 32px;
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
            transition: all 0.3s ease;
        }
        .plan-card:hover {
            box-shadow: var(--shadow);
        }
        .plan-title {
            font-size: 22px;
            font-weight: 600;
            color: var(--primary-blue);
            margin-bottom: 8px;
            text-align: center;
        }
        .plan-subtitle {
            font-size: 14px;
            text-align: center;
            color: var(--text-gray);
            margin-bottom: 24px;
            min-height: 42px;
        }
        .plan-price {
            font-size: 40px;
            font-weight: 700;
            color: var(--dark-navy);
            text-align: center;
            margin-bottom: 4px;
            line-height: 1;
            transition: color 0.3s ease;
        }
        .plan-period {
            font-size: 14px;
            color: var(--text-gray);
            text-align: center;
            margin-bottom: 24px;
        }
        .plan-features {
            list-style: none;
            padding: 0;
            margin: 0 0 32px 0;
            flex-grow: 1;
        }
        .plan-features li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: 14px;
            margin-bottom: 16px;
            color: var(--dark-navy);
            transition: color 0.3s ease;
        }
        .plan-features li i {
            color: var(--primary-blue);
            margin-top: 3px;
        }
        
        .plan-card.popular {
            border: 2px solid var(--primary-blue);
            transform: scale(1.05);
            box-shadow: 0 20px 40px rgba(177, 152, 111,0.1);
            z-index: 2;
        }
        .plan-card.popular:hover {
            transform: scale(1.05) translateY(-5px);
        }
        .popular-badge {
            background: var(--primary-blue);
            color: #fff;
            text-align: center;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 8px 0;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            border-radius: 18px 18px 0 0;
        }
        .plan-card.popular {
            padding-top: 48px;
        }
        
        /* Sidebar Benefits */
        .benefits-sidebar {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            padding: 32px;
            height: 100%;
            transition: all 0.3s ease;
        }
        .sidebar-title {
            font-size: 20px;
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 32px;
            transition: color 0.3s ease;
        }
        .benefit-item {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            margin-bottom: 24px;
        }
        .benefit-item:last-child {
            margin-bottom: 0;
        }
        .benefit-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: #eff6ff;
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
            border: 1px solid rgba(177, 152, 111,0.1);
            transition: background 0.3s ease, border-color 0.3s ease;
        }
        .benefit-title {
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 4px;
            font-size: 15px;
            transition: color 0.3s ease;
        }
        .benefit-desc {
            font-size: 14px;
            color: var(--text-gray);
            margin: 0;
            line-height: 1.4;
        }
        
        /* Special Offers */
        .special-offers {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 24px;
            padding: 28px 40px;
            margin-top: 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            transition: all 0.3s ease;
        }
        .offers-left {
            display: flex;
            align-items: center;
            gap: 20px;
            flex: 1;
        }
        .gift-box {
            width: 80px;
            height: 80px;
            object-fit: contain;
            transition: filter 0.3s ease;
        }
        .offers-title {
            font-family: var(--heading-font);
            font-size: 28px;
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 4px;
            transition: color 0.3s ease;
        }
        .offers-desc {
            font-size: 14px;
            color: var(--text-gray);
            margin: 0;
            max-width: 300px;
        }
        .offers-center {
            display: flex;
            gap: 40px;
            flex: 2;
            justify-content: center;
        }
        .offer-feature {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }
        .of-icon {
            color: var(--primary-blue);
            font-size: 24px;
        }
        .of-title {
            font-weight: 600;
            color: var(--dark-navy);
            font-size: 15px;
            margin-bottom: 2px;
            transition: color 0.3s ease;
        }
        .of-desc {
            font-size: 12px;
            color: var(--text-gray);
            margin: 0;
        }
        .offers-right {
            flex-shrink: 0;
        }
        
        /* --- DARK VERSION OVERRIDES --- */
        body.dark-theme {
            --light-bg: linear-gradient(135deg, #2c352a, #354032);
            background: linear-gradient(90deg, #3f4b3d, #495746, #3f4b3d);
            color: rgba(255,255,255,0.75);
        }
        
        body.dark-theme .navbar-custom {
            background-color: #2c352a;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: none;
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

        body.dark-theme .breadcrumb-wrap a, body.dark-theme .breadcrumb-wrap span {
            color: rgba(255, 255, 255, 0.5);
        }

        body.dark-theme .breadcrumb-wrap a:hover {
            color: #ffffff;
        }
        
        body.dark-theme .hero-section {
            background: transparent;
        }
        
        body.dark-theme .hero-title,
        body.dark-theme .section-title,
        body.dark-theme .plan-price,
        body.dark-theme .plan-features li,
        body.dark-theme .sidebar-title,
        body.dark-theme .benefit-title,
        body.dark-theme .hf-title,
        body.dark-theme .fc-text,
        body.dark-theme .offers-title,
        body.dark-theme .of-title {
            color: #ffffff;
        }
        
        body.dark-theme .hero-desc,
        body.dark-theme .hf-desc,
        body.dark-theme .plan-subtitle,
        body.dark-theme .plan-period,
        body.dark-theme .benefit-desc,
        body.dark-theme .offers-desc,
        body.dark-theme .of-desc {
            color: rgba(255,255,255,0.75);
        }
        
        body.dark-theme .floating-card {
            background: rgba(73, 87, 70,0.9);
            box-shadow: 0 20px 40px rgba(0,0,0,0.5);
            border: 1px solid rgba(255,255,255,0.12);
        }
        body.dark-theme .fc-icon {
            background: rgba(177, 152, 111,0.2);
        }
        
        body.dark-theme .plan-card,
        body.dark-theme .benefits-sidebar {
            background: rgba(73, 87, 70,0.75);
            border: 1px solid rgba(255,255,255,0.12);
        }
        
        body.dark-theme .plan-card:hover {
            box-shadow: 0 10px 30px rgba(0,0,0,0.4);
        }
        
        body.dark-theme .plan-card.popular {
            border: 2px solid var(--primary-blue);
            background: rgba(73, 87, 70,0.95);
        }
        
        body.dark-theme .btn-outline-custom {
            border-color: rgba(255,255,255,0.2);
            color: #fff;
        }
        body.dark-theme .btn-outline-custom:hover {
            background: rgba(255,255,255,0.1);
            border-color: rgba(255, 255, 255, 0.5);
        }
        
        body.dark-theme .benefit-icon,
        body.dark-theme .hf-icon {
            background: rgba(177, 152, 111,0.2);
            border-color: rgba(255,255,255,0.05);
        }
        
        body.dark-theme .special-offers {
            background: rgba(73, 87, 70,0.6);
            border: 1px solid rgba(255,255,255,0.12);
        }

        body.dark-theme .gift-box {
            filter: drop-shadow(0 0 10px rgba(0,0,0,0.5));
        }

        /* Responsive Design */
        @media (max-width: 1199px) {
            .hero-title { font-size: 56px; }
            .plan-card.popular { transform: none; margin-top: 24px; margin-bottom: 24px; }
            .plan-card.popular:hover { transform: translateY(-5px); }
            .special-offers { flex-direction: column; text-align: center; }
            .offers-left { flex-direction: column; }
            .offers-center { flex-direction: column; gap: 20px; }
            .offer-feature { align-items: center; justify-content: center; flex-direction: column; text-align: center; }
        }
        @media (max-width: 991px) {
            .hero-title { font-size: 48px; }
            .hero-features { grid-template-columns: 1fr; }
            .hero-image-wrapper { margin-top: 60px; }
            .floating-card { left: 20px; bottom: -20px; right: 20px; justify-content: center; }
            .hero-image { border-radius: 40px; height: 400px; }
        }
        @media (max-width: 767px) {
            .hero-title { font-size: 40px; }
            .section-title { font-size: 36px; }
            .plan-card { margin-bottom: 24px; }
            .btn-outline-custom, .btn-primary-custom { width: 100%; justify-content: center; }
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
    <section class="hero-section">
        <div class="container custom-container">
            <div class="breadcrumb-wrap mb-4">
                <a href="index.php">Home</a> &gt; <span>Fees / Membership</span>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="hero-label">FEES & MEMBERSHIP</span>
                    <h2 class="hero-title">Quality Dental Care.<br>Simple, Transparent &<br>Great Value.</h2>
                    <p class="hero-desc">Our membership plans are designed to make routine dental care affordable and stress-free. Join today and enjoy exclusive benefits for a healthier smile all year round.</p>
                    
                    <div class="hero-features">
                        <div class="hf-item">
                            <div class="hf-icon"><i class="fa-solid fa-shield"></i></div>
                            <div>
                                <div class="hf-title">Transparent Pricing</div>
                                <p class="hf-desc">No hidden costs, ever.</p>
                            </div>
                        </div>
                        <div class="hf-item">
                            <div class="hf-icon"><i class="fa-regular fa-calendar"></i></div>
                            <div>
                                <div class="hf-title">Preventive Focused</div>
                                <p class="hf-desc">Keep your smile healthy.</p>
                            </div>
                        </div>
                        <div class="hf-item">
                            <div class="hf-icon"><i class="fa-solid fa-users"></i></div>
                            <div>
                                <div class="hf-title">Exclusive Member Benefits</div>
                                <p class="hf-desc">Save on treatments you may need.</p>
                            </div>
                        </div>
                        <div class="hf-item">
                            <div class="hf-icon"><i class="fa-solid fa-arrows-rotate"></i></div>
                            <div>
                                <div class="hf-title">Flexible & Easy</div>
                                <p class="hf-desc">Simple to join, easy to manage.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Luxury Dental Reception" class="hero-image">
                        
                        <div class="floating-card">
                            <div class="fc-icon"><i class="fa-solid fa-users"></i></div>
                            <p class="fc-text">Join 1000+<br>happy members<br><span style="font-size:13px; font-weight:400; color:var(--text-gray);">across Wembley</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Membership Plans Section -->
    <section class="membership-section">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="section-title">Membership Plans</h2>
                    <div class="row g-4 align-items-stretch">
                        <!-- Plan 1 -->
                        <div class="col-md-4">
                            <div class="plan-card">
                                <h3 class="plan-title">Essential Plan</h3>
                                <p class="plan-subtitle">Perfect for maintaining your oral health</p>
                                <div class="plan-price">Â£14.99</div>
                                <div class="plan-period">per month</div>
                                <ul class="plan-features">
                                    <li><i class="fa-solid fa-check"></i> 2 Routine Dental Examinations per year</li>
                                    <li><i class="fa-solid fa-check"></i> 2 Hygiene Appointments per year</li>
                                    <li><i class="fa-solid fa-check"></i> 10% Off Additional Treatments</li>
                                    <li><i class="fa-solid fa-check"></i> Worldwide Dental Emergency Assistance</li>
                                </ul>
                                <a href="#" class="btn-outline-custom w-100">Join Essential</a>
                            </div>
                        </div>
                        
                        <!-- Plan 2 (Popular) -->
                        <div class="col-md-4">
                            <div class="plan-card popular">
                                <div class="popular-badge">MOST POPULAR</div>
                                <h3 class="plan-title">Comprehensive Plan</h3>
                                <p class="plan-subtitle">Our most popular plan for complete care</p>
                                <div class="plan-price">Â£24.99</div>
                                <div class="plan-period">per month</div>
                                <ul class="plan-features">
                                    <li><i class="fa-solid fa-check"></i> 2 Routine Dental Examinations per year</li>
                                    <li><i class="fa-solid fa-check"></i> 2 Hygiene Appointments per year</li>
                                    <li><i class="fa-solid fa-check"></i> 15% Off Additional Treatments</li>
                                    <li><i class="fa-solid fa-check"></i> Worldwide Dental Emergency Assistance</li>
                                    <li><i class="fa-solid fa-check"></i> Priority Appointment Booking</li>
                                </ul>
                                <a href="#" class="btn-primary-custom w-100">Join Comprehensive</a>
                            </div>
                        </div>
                        
                        <!-- Plan 3 -->
                        <div class="col-md-4">
                            <div class="plan-card">
                                <h3 class="plan-title">Premium Plan</h3>
                                <p class="plan-subtitle">The ultimate plan for you and your family</p>
                                <div class="plan-price">Â£34.99</div>
                                <div class="plan-period">per month</div>
                                <ul class="plan-features">
                                    <li><i class="fa-solid fa-check"></i> 2 Routine Dental Examinations per year</li>
                                    <li><i class="fa-solid fa-check"></i> 3 Hygiene Appointments per year</li>
                                    <li><i class="fa-solid fa-check"></i> 20% Off Additional Treatments</li>
                                    <li><i class="fa-solid fa-check"></i> Worldwide Dental Emergency Assistance</li>
                                    <li><i class="fa-solid fa-check"></i> Priority Appointment Booking</li>
                                    <li><i class="fa-solid fa-check"></i> Family Membership Benefits</li>
                                </ul>
                                <a href="#" class="btn-outline-custom w-100">Join Premium</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div style="height: 86px;" class="d-none d-lg-block"></div>
                    <div class="benefits-sidebar">
                        <h3 class="sidebar-title">All plans include:</h3>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon"><i class="fa-solid fa-shield"></i></div>
                            <div>
                                <div class="benefit-title">Oral Health Support</div>
                                <p class="benefit-desc">Professional advice when you need it.</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <div class="benefit-icon"><i class="fa-solid fa-percent"></i></div>
                            <div>
                                <div class="benefit-title">Exclusive Discounts</div>
                                <p class="benefit-desc">Save on a wide range of treatments.</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <div class="benefit-icon"><i class="fa-regular fa-calendar"></i></div>
                            <div>
                                <div class="benefit-title">Flexible Payments</div>
                                <p class="benefit-desc">Spread the cost with monthly payments.</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <div class="benefit-icon"><i class="fa-solid fa-users"></i></div>
                            <div>
                                <div class="benefit-title">Easy to Join</div>
                                <p class="benefit-desc">Sign up in minutes online or in practice.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Special Offers -->
            <div class="special-offers">
                <div class="offers-left">
                    <img src="https://cdn-icons-png.flaticon.com/512/4213/4213958.png" alt="Gift Box" class="gift-box">
                    <div>
                        <h3 class="offers-title">Special Offers for Members</h3>
                        <p class="offers-desc">Enjoy exclusive savings and offers throughout the year, just for being a valued member.</p>
                    </div>
                </div>
                <div class="offers-center">
                    <div class="offer-feature">
                        <div class="of-icon"><i class="fa-solid fa-certificate"></i></div>
                        <div>
                            <div class="of-title">Seasonal Discounts</div>
                            <div class="of-desc">On selected treatments</div>
                        </div>
                    </div>
                    <div class="offer-feature">
                        <div class="of-icon"><i class="fa-solid fa-user-group"></i></div>
                        <div>
                            <div class="of-title">Refer a Friend</div>
                            <div class="of-desc">Get rewards & savings</div>
                        </div>
                    </div>
                    <div class="offer-feature">
                        <div class="of-icon"><i class="fa-solid fa-cake-candles"></i></div>
                        <div>
                            <div class="of-title">Birthday Treat</div>
                            <div class="of-desc">A special surprise for you!</div>
                        </div>
                    </div>
                </div>
                <div class="offers-right">
                    <a href="#" class="btn-primary-custom">View All Offers</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    


    <?php include $_SERVER['DOCUMENT_ROOT'] . '/icon-dental/includes/footer.php'; ?>
</body>
</html>



