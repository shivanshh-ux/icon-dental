<?php
// for-dentists.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Dentists - Icon Dental Wembley</title>
    
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
            --border-color: #e5e7eb;
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
        
        p, .hero-desc, .hf-desc, .process-text, .why-checklist li, .cta-text {
            transition: color 0.3s ease;
        }

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

        /* --- HERO SECTION --- */
        .hero-section {
            padding: 60px 0;
            position: relative;
        }
        .hero-label {
            color: var(--primary-blue);
            text-transform: uppercase;
            font-weight: 600;
            font-size: 13px;
            letter-spacing: 1px;
            margin-bottom: 16px;
            display: block;
        }
        .hero-title {
            font-size: 64px;
            line-height: 1.05;
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 24px;
            max-width: 600px;
        }
        .hero-desc {
            max-width: 540px;
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 40px;
        }
        
        .hero-features {
            display: flex;
            gap: 24px;
            flex-wrap: wrap;
        }
        .hf-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            flex: 1;
            min-width: 160px;
        }
        .hf-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: #eff6ff;
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 18px;
            transition: background 0.3s ease;
        }
        .hf-title {
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 4px;
            font-size: 14px;
            transition: color 0.3s ease;
        }
        .hf-desc {
            font-size: 12px;
            margin: 0;
            color: var(--text-gray);
            line-height: 1.4;
        }
        
        .hero-image-wrapper {
            position: relative;
        }
        .hero-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: var(--shadow);
        }
        .floating-card {
            position: absolute;
            bottom: -24px;
            left: -24px;
            background: #fff;
            border-radius: 20px;
            padding: 24px 32px;
            box-shadow: 0 20px 40px rgba(0,0,0,.08);
            display: flex;
            align-items: center;
            gap: 20px;
            z-index: 2;
            transition: background 0.3s ease, box-shadow 0.3s ease;
            max-width: 400px;
        }
        .fc-icon {
            width: 56px;
            height: 56px;
            border-radius: 12px;
            background: #eff6ff;
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            flex-shrink: 0;
        }
        .fc-text {
            font-weight: 500;
            color: var(--dark-navy);
            margin: 0;
            line-height: 1.4;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        /* --- REFERRAL PROCESS SECTION --- */
        .process-section {
            padding: 100px 0;
        }
        .process-card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 18px;
            padding: 32px;
            height: 100%;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }
        .process-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
            border-color: var(--primary-blue);
        }
        .process-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: #eff6ff;
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-bottom: 24px;
        }
        .process-title {
            font-size: 20px;
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 12px;
            transition: color 0.3s ease;
            font-family: var(--body-font);
        }
        .process-text {
            font-size: 14px;
            line-height: 1.5;
            color: var(--text-gray);
            margin-bottom: 24px;
            flex-grow: 1;
        }
        .process-link {
            font-size: 14px;
            font-weight: 600;
            color: var(--primary-blue);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: color 0.3s ease;
        }
        .process-link:hover {
            color: var(--primary-hover);
        }

        /* --- WHY REFER SECTION --- */
        .why-refer-section {
            padding: 80px 0;
            background-color: #f8fafc;
            border-radius: 40px;
            margin-bottom: 80px;
            transition: background-color 0.3s ease;
        }
        .why-title {
            font-size: 40px;
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 16px;
            line-height: 1.1;
            transition: color 0.3s ease;
        }
        .title-underline {
            width: 60px;
            height: 3px;
            background-color: var(--primary-blue);
            margin-bottom: 32px;
        }
        .why-checklist {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .why-checklist li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: 15px;
            color: var(--dark-navy);
            margin-bottom: 16px;
        }
        .why-checklist li i {
            color: var(--primary-blue);
            margin-top: 3px;
        }
        
        .why-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: var(--shadow);
        }
        
        .cta-card {
            background: #eff6ff;
            border-radius: 20px;
            padding: 40px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            transition: background-color 0.3s ease;
        }
        .cta-title {
            font-size: 32px;
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 16px;
            transition: color 0.3s ease;
        }
        .cta-text {
            font-size: 15px;
            color: var(--text-gray);
            margin-bottom: 32px;
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
        
        body.dark-theme .hero-title,
        body.dark-theme .hf-title,
        body.dark-theme .fc-text,
        body.dark-theme .process-title,
        body.dark-theme .why-title,
        body.dark-theme .why-checklist li,
        body.dark-theme .cta-title {
            color: #ffffff;
        }
        
        body.dark-theme .hero-desc,
        body.dark-theme .hf-desc,
        body.dark-theme .process-text,
        body.dark-theme .cta-text {
            color: rgba(255,255,255,0.75);
        }
        
        body.dark-theme .hf-icon,
        body.dark-theme .process-icon {
            background: rgba(177, 152, 111,0.2);
            color: #c3ab83;
        }
        
        body.dark-theme .floating-card {
            background: rgba(73, 87, 70,0.95);
            border: 1px solid rgba(255,255,255,0.12);
            box-shadow: 0 20px 40px rgba(0,0,0,0.5);
        }
        body.dark-theme .fc-icon {
            background: rgba(177, 152, 111,0.2);
        }
        
        body.dark-theme .process-card {
            background: rgba(73, 87, 70,0.75);
            border: 1px solid rgba(255,255,255,0.12);
        }
        body.dark-theme .process-card:hover {
            background: rgba(73, 87, 70,0.95);
            border-color: #c3ab83;
        }
        
        body.dark-theme .why-refer-section {
            background-color: rgba(73, 87, 70,0.5);
            border: 1px solid rgba(255,255,255,0.05);
        }
        body.dark-theme .cta-card {
            background: rgba(73, 87, 70,0.8);
            border: 1px solid rgba(255,255,255,0.1);
        }
        
        body.dark-theme .btn-outline-custom {
            border-color: rgba(255,255,255,0.2);
            color: #fff;
        }
        body.dark-theme .btn-outline-custom:hover {
            background: rgba(255,255,255,0.1);
            border-color: rgba(255, 255, 255, 0.5);
        }

        /* Responsive Design */
        @media (max-width: 1199px) {
            .hero-title { font-size: 52px; }
            .hero-features { gap: 16px; }
            .process-card { padding: 24px; }
            .why-image { height: 100%; min-height: 300px; }
        }
        @media (max-width: 991px) {
            .hero-title { font-size: 44px; }
            .hero-image-wrapper { margin-top: 60px; }
            .floating-card { left: 20px; bottom: -20px; right: 20px; width: auto; max-width: none; }
            .process-section { padding: 60px 0; }
            .why-refer-section { padding: 40px; margin-left: 20px; margin-right: 20px; }
            .why-image { margin-top: 40px; margin-bottom: 40px; }
        }
        @media (max-width: 767px) {
            .hero-title { font-size: 36px; }
            .hero-features { flex-direction: column; }
            .btn-outline-custom, .btn-primary-custom { width: 100%; justify-content: center; }
            .why-refer-section { padding: 30px 20px; }
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
                <a href="index.php">Home</a> <i class="fa-solid fa-chevron-right" style="font-size:10px; color:#64748b; margin:0 6px;"></i> <span>For Dentists</span>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="hero-label">FOR DENTISTS</span>
                    <h2 class="hero-title">Partner With Us for<br>Exceptional Patient Care</h2>
                    <p class="hero-desc">We value strong relationships with our referring dentists and are committed to providing your patients with the highest standard of dental care.</p>
                    
                    <div class="hero-features">
                        <div class="hf-item">
                            <div class="hf-icon"><i class="fa-solid fa-user-group"></i></div>
                            <div>
                                <div class="hf-title">Collaborative Care</div>
                                <p class="hf-desc">We keep you informed every step of the way.</p>
                            </div>
                        </div>
                        <div class="hf-item">
                            <div class="hf-icon"><i class="fa-solid fa-shield-halved"></i></div>
                            <div>
                                <div class="hf-title">Trusted Expertise</div>
                                <p class="hf-desc">Specialist care using the latest technology.</p>
                            </div>
                        </div>
                        <div class="hf-item">
                            <div class="hf-icon"><i class="fa-regular fa-heart"></i></div>
                            <div>
                                <div class="hf-title">Patient Focused</div>
                                <p class="hf-desc">Comfort, safety and outstanding outcomes.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-wrapper">
                        <!-- Using Unsplash image matching description since generation quota exhausted -->
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Professional healthcare handshake" class="hero-image">
                        
                        <div class="floating-card">
                            <div class="fc-icon"><i class="fa-solid fa-tooth"></i></div>
                            <p class="fc-text">We make referrals easy for you and comfortable for your patients.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Referral Process Section -->
    <section class="process-section">
        <div class="container custom-container">
            <div class="row g-4 align-items-stretch">
                <!-- Card 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="process-card">
                        <div class="process-icon"><i class="fa-solid fa-user-group"></i></div>
                        <h3 class="process-title">1. Our Referral Team</h3>
                        <p class="process-text">A dedicated team is here to support you with any questions and ensure a smooth experience.</p>
                        <div><a href="#" class="process-link">Learn more &rarr;</a></div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="process-card">
                        <div class="process-icon"><i class="fa-regular fa-calendar-check"></i></div>
                        <h3 class="process-title">2. Our Referral Process</h3>
                        <p class="process-text">Simple, efficient and transparent. We keep you updated at every stage of your patient's journey.</p>
                        <div><a href="#" class="process-link">Learn more &rarr;</a></div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="process-card">
                        <div class="process-icon"><i class="fa-solid fa-file-signature"></i></div>
                        <h3 class="process-title">3. Referral Form</h3>
                        <p class="process-text">Submit your referral quickly and securely using our online referral form.</p>
                        <div><a href="#" class="process-link">Learn more &rarr;</a></div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="process-card">
                        <div class="process-icon"><i class="fa-solid fa-phone-volume"></i></div>
                        <h3 class="process-title">4. Contact Us</h3>
                        <p class="process-text">Get in touch with our team. We're always happy to help.</p>
                        <div><a href="#" class="process-link">Learn more &rarr;</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Refer Section -->
    <div class="container custom-container">
        <section class="why-refer-section">
            <div class="row align-items-center g-4">
                <div class="col-lg-4">
                    <h2 class="why-title">Why Refer to Icon Dental- Wembley?</h2>
                    <div class="title-underline"></div>
                    <ul class="why-checklist">
                        <li><i class="fa-solid fa-check"></i> Specialist-led treatments and advanced technology</li>
                        <li><i class="fa-solid fa-check"></i> Comprehensive treatment planning and clear communication</li>
                        <li><i class="fa-solid fa-check"></i> Timely appointments and efficient turnaround</li>
                        <li><i class="fa-solid fa-check"></i> Detailed reports and ongoing care collaboration</li>
                        <li><i class="fa-solid fa-check"></i> A friendly, experienced and caring team</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <!-- Using Unsplash image matching description -->
                    <img src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Modern dental surgery room" class="why-image">
                </div>
                <div class="col-lg-4">
                    <div class="cta-card">
                        <h3 class="cta-title">Refer a Patient Today</h3>
                        <p class="cta-text">We're here to provide the best possible care for your patients.</p>
                        <a href="#" class="btn-primary-custom w-100 mb-3"><i class="fa-solid fa-file-lines"></i> Submit Referral</a>
                        <a href="#" class="btn-outline-custom w-100"><i class="fa-solid fa-phone"></i> Call Us</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    


    <?php include $_SERVER['DOCUMENT_ROOT'] . '/icon-dental/includes/footer.php'; ?>
</body>
</html>



