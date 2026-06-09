<?php
// treatments/cosmetic-dentistry.php
$current_page = 'treatments.php'; // For navbar active state
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmetic Dentistry - Icon Dental Wembley</title>
    
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
            --dark-navy: #495746;
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

        /* Breadcrumb */
        .breadcrumb-text {
            font-size: 13px;
            color: #9ca3af;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .breadcrumb-text a {
            color: #9ca3af;
            text-decoration: none;
        }
        .breadcrumb-text i { font-size: 11px; }

        /* Hero Section */
        .hero-section {
            padding: 60px 0 90px;
            position: relative;
        }
        .hero-label {
            background: #f7f1e8;
            color: #b1986f;
            border: 1px solid #e7d8bc;
            border-radius: 50px;
            padding: 6px 16px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 24px;
            display: inline-block;
        }
        .hero-title {
            font-family: var(--heading-font);
            font-size: 72px;
            font-weight: 600;
            line-height: 1.05;
            color: #173a28;
            margin-bottom: 24px;
        }
        .hero-title-line {
            height: 2px;
            width: 80px;
            background-color: #b1986f;
            margin-bottom: 24px;
        }
        .hero-desc {
            font-size: 18px;
            line-height: 1.6;
            color: var(--text-gray);
            margin-bottom: 40px;
            max-width: 520px;
        }

        /* Feature Icons */
        .feature-list {
            display: flex;
            gap: 20px;
            margin-bottom: 45px;
        }
        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            flex: 1;
        }
        .feature-icon-wrapper {
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .feature-icon-wrapper i {
            font-size: 24px;
            color: transparent;
            -webkit-text-stroke: 1.5px #b1986f;
        }
        .feature-text-content {
            display: flex;
            flex-direction: column;
        }
        .feature-title {
            font-size: 14px;
            font-weight: 600;
            color: #173a28;
            margin-bottom: 4px;
            line-height: 1.2;
        }
        .feature-subtitle {
            font-size: 12px;
            color: var(--text-gray);
            line-height: 1.4;
        }

        /* Buttons */
        .btn-group-custom {
            display: flex;
            gap: 16px;
        }
        .btn-primary-custom {
            background-color: #495746;
            color: #ffffff;
            border: none;
            padding: 14px 30px;
            border-radius: 8px;
            font-weight: 500;
            font-size: 16px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            transition: var(--transition);
        }
        .btn-primary-custom:hover {
            background-color: #3f4b3d;
            color: #ffffff;
            transform: translateY(-2px);
        }
        .btn-outline-custom {
            background-color: #ffffff;
            color: #173a28;
            border: 1px solid #b1986f;
            padding: 14px 30px;
            border-radius: 8px;
            font-weight: 500;
            font-size: 16px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            transition: var(--transition);
        }
        .btn-outline-custom:hover {
            background-color: #f8fafc;
            color: #173a28;
            transform: translateY(-2px);
        }
        .btn-outline-custom i { color: #b1986f; }

        /* Hero Image */
        .hero-image-container {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            height: 520px;
            width: 100%;
        }
        .hero-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Floating Message Card */
        .floating-card {
            position: absolute;
            bottom: -25px;
            right: 40px;
            background: #ffffff;
            border-radius: 18px;
            padding: 24px 32px;
            display: flex;
            align-items: center;
            gap: 16px;
            box-shadow: 0 20px 40px rgba(0,0,0,.08);
            z-index: 10;
        }
        .floating-card i {
            font-size: 36px;
            color: transparent;
            -webkit-text-stroke: 1.5px #b1986f;
        }
        .floating-card-text {
            font-family: var(--heading-font);
            color: #173a28;
            font-size: 26px;
            line-height: 1.2;
            font-weight: 500;
            position: relative;
        }
        .floating-card-text::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: #b1986f;
        }

        /* Services Section */
        .services-section {
            padding: 80px 0;
            background: #ffffff;
            transition: var(--transition);
        }
        .section-header {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }
        .section-icon {
            color: transparent;
            -webkit-text-stroke: 1.5px #b1986f;
            font-size: 32px;
            margin-bottom: 15px;
        }
        .section-title-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }
        .section-title {
            font-family: var(--heading-font);
            font-size: 52px;
            font-weight: 600;
            color: #173a28;
            margin: 0;
        }
        .title-line {
            height: 1px;
            width: 60px;
            background-color: #b1986f;
        }

        /* Services Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 20px;
            margin-bottom: 60px;
        }
        @media (max-width: 1199px) {
            .services-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 24px;
            }
        }
        @media (max-width: 767px) {
            .services-grid {
                grid-template-columns: 1fr;
            }
        }
        .service-card {
            background: #ffffff;
            border: 1px solid #ececec;
            border-radius: 18px;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            text-align: left;
            transition: var(--transition);
            height: 100%;
        }
        .service-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(0,0,0,.08);
        }
        .service-icon {
            width: 48px;
            height: 48px;
            background: rgba(177,152,111,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            transition: var(--transition);
        }
        .service-icon i {
            font-size: 20px;
            color: transparent;
            -webkit-text-stroke: 1.5px #b1986f;
        }
        .service-title {
            font-family: var(--body-font);
            font-size: 16px;
            font-weight: 600;
            color: #173a28;
            margin-bottom: 12px;
            line-height: 1.2;
        }
        .service-desc {
            font-size: 13px;
            color: var(--text-gray);
            line-height: 1.5;
            margin-bottom: 20px;
            flex-grow: 1;
        }
        .service-link {
            color: #b1986f;
            font-size: 13px;
            font-weight: 500;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: var(--transition);
        }
        .service-link:hover {
            color: #9f875e;
            gap: 10px;
        }

        /* CTA Strip */
        .cta-strip {
            background: #f7f4ef;
            border-radius: 24px;
            padding: 35px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            transition: var(--transition);
        }
        .cta-strip-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .cta-icon-wrapper {
            width: 60px;
            height: 60px;
            background: #173a28;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .cta-icon-wrapper i {
            font-size: 24px;
            color: #b1986f;
        }
        .cta-text-content {
            display: flex;
            flex-direction: column;
        }
        .cta-title {
            font-family: var(--heading-font);
            font-size: 28px;
            font-weight: 600;
            color: #173a28;
            margin-bottom: 4px;
        }
        .cta-desc {
            font-size: 14px;
            color: var(--text-gray);
        }
        .cta-strip-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .sparkle-icon {
            font-size: 32px;
            color: transparent;
            -webkit-text-stroke: 1px #b1986f;
            opacity: 0.5;
        }

        /* ===================== DARK THEME ===================== */
        body.dark-theme {
            background: linear-gradient(90deg, #3f4b3d, #495746, #3f4b3d);
            color: rgba(255, 255, 255, 0.75);
            --text-gray: #a0adb8;
        }
        body.dark-theme .breadcrumb-text { color: rgba(255,255,255,.5); }
        body.dark-theme .breadcrumb-text a { color: rgba(255,255,255,.5); }
        body.dark-theme .hero-label { background: rgba(177, 152, 111, 0.2); color: #d6c09b; border-color: rgba(177,152,111,0.3); }
        body.dark-theme .hero-title { color: #ffffff; }
        body.dark-theme .hero-desc { color: rgba(255, 255, 255, 0.75); }
        
        body.dark-theme .feature-title { color: #ffffff; }
        body.dark-theme .feature-subtitle { color: #cbd5e1; }
        
        body.dark-theme .btn-primary-custom { background-color: #b1986f; color: #ffffff; }
        body.dark-theme .btn-primary-custom:hover { background-color: #9f875e; }
        body.dark-theme .btn-outline-custom { background-color: transparent; color: #ffffff; border-color: rgba(255, 255, 255, 0.3); }
        body.dark-theme .btn-outline-custom:hover { background-color: rgba(255, 255, 255, 0.1); border-color: rgba(255, 255, 255, 0.5); }
        body.dark-theme .btn-outline-custom i { color: #b1986f; }
        
        body.dark-theme .floating-card { 
            background: rgba(73, 87, 70, 0.6); 
            backdrop-filter: blur(10px); 
            border: 1px solid rgba(255,255,255,0.05); 
            box-shadow: 0 10px 30px rgba(0,0,0,0.2); 
        }
        body.dark-theme .floating-card-text { color: #ffffff; }
        
        body.dark-theme .services-section { background: transparent; }
        body.dark-theme .section-title { color: #ffffff; }
        
        body.dark-theme .service-card {
            background-color: rgba(73, 87, 70, 0.6); 
            border-color: rgba(255, 255, 255, 0.1); 
            backdrop-filter: blur(10px);
        }
        body.dark-theme .service-card:hover {
            box-shadow: 0 15px 35px rgba(177, 152, 111, 0.25); 
            border-color: rgba(177, 152, 111, 0.5); 
            background: rgba(73, 87, 70, 0.85);
        }
        body.dark-theme .service-title { color: #ffffff; }
        body.dark-theme .service-desc { color: rgba(255, 255, 255, 0.65); }
        
        body.dark-theme .cta-strip { 
            background: rgba(73, 87, 70, 0.6); 
            backdrop-filter: blur(10px); 
            border: 1px solid rgba(255,255,255,0.05); 
        }
        body.dark-theme .cta-icon-wrapper { background: rgba(177, 152, 111, 0.2); border: none; }
        body.dark-theme .cta-icon-wrapper i { color: #d6c09b; }
        body.dark-theme .cta-title { color: #ffffff; }
        body.dark-theme .cta-desc { color: rgba(255, 255, 255, 0.75); }

        /* Responsive Adjustments */
        @media (max-width: 991px) {
            .hero-title { font-size: 56px; }
            .hero-image-container { margin-top: 40px; height: 400px; }
            .floating-card { bottom: 20px; right: 20px; padding: 15px 20px; }
            .floating-card-text { font-size: 20px; }
            .section-title { font-size: 42px; }
            .feature-list { flex-wrap: wrap; gap: 20px; }
            .feature-item { min-width: 45%; }
            .cta-strip { flex-direction: column; align-items: flex-start; }
        }
        @media (max-width: 767px) {
            .hero-title { font-size: 42px; }
            .hero-desc { font-size: 16px; }
            .btn-group-custom { flex-direction: column; }
            .btn-primary-custom, .btn-outline-custom { width: 100%; justify-content: center; }
            .section-title { font-size: 32px; }
            .title-line { width: 30px; }
            .hero-image-container { height: 300px; }
            .floating-card { position: relative; bottom: auto; right: auto; margin-top: -30px; margin-left: 20px; margin-right: 20px; }
            .cta-strip-left { flex-direction: column; align-items: flex-start; }
            .cta-strip-right { width: 100%; }
            .cta-strip-right .btn-primary-custom { width: 100%; }
            .sparkle-icon { display: none; }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/icon-dental/includes/navbar.php'; ?>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container" style="max-width: 1320px;">
                <!-- Breadcrumb -->
                <div class="breadcrumb-text">
                    <a href="/icon-dental/index.php"><i class="fa-solid fa-house"></i> Home</a> <i class="fa-solid fa-chevron-right"></i> <a href="/icon-dental/treatments.php">Treatments</a> <i class="fa-solid fa-chevron-right"></i> <span style="color:#b1986f;">Cosmetic Dentistry</span>
                </div>

                <div class="row align-items-center g-5">
                    <!-- Left Column -->
                    <div class="col-lg-6">
                        <span class="hero-label">COSMETIC DENTISTRY</span>
                        <h1 class="hero-title">Enhance Your Smile.<br>Enhance Your Confidence.</h1>
                        <div class="hero-title-line"></div>
                        <p class="hero-desc">Our cosmetic dentistry treatments are designed to improve the appearance of your smile using advanced techniques and a personalised approach.</p>
                        
                        <div class="feature-list">
                            <div class="feature-item">
                                <div class="feature-icon-wrapper">
                                    <i class="fa-solid fa-tooth"></i>
                                </div>
                                <div class="feature-text-content">
                                    <span class="feature-title">Natural Results</span>
                                    <span class="feature-subtitle">Beautiful results<br>that look and feel<br>natural</span>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon-wrapper">
                                    <i class="fa-solid fa-shield-halved"></i>
                                </div>
                                <div class="feature-text-content">
                                    <span class="feature-title">Safe & Effective</span>
                                    <span class="feature-subtitle">Advanced techniques<br>with your safety in<br>mind</span>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon-wrapper">
                                    <i class="fa-solid fa-user-check"></i>
                                </div>
                                <div class="feature-text-content">
                                    <span class="feature-title">Personalised Care</span>
                                    <span class="feature-subtitle">Treatment plans<br>tailored to your<br>unique smile</span>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon-wrapper">
                                    <i class="fa-regular fa-clock"></i>
                                </div>
                                <div class="feature-text-content">
                                    <span class="feature-title">Long Lasting<br>Confidence</span>
                                    <span class="feature-subtitle">Enjoy a radiant<br>smile that lasts<br>for years</span>
                                </div>
                            </div>
                        </div>

                        <div class="btn-group-custom">
                            <a href="#" class="btn-primary-custom">
                                Book a Consultation <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="#" class="btn-outline-custom">
                                View Smile Gallery <i class="fa-solid fa-circle-play"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-lg-6 position-relative">
                        <div class="hero-image-container">
                            <img src="/icon-dental/assets/images/smile.png" alt="Smiling woman" class="hero-img-light">
                        </div>
                        
                        <div class="floating-card">
                            <i class="fa-solid fa-tooth"></i>
                            <div class="floating-card-text">
                                A Smile You'll<br>Love to Share.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="container" style="max-width: 1320px;">
                <div class="section-header">
                    <div class="section-icon">
                        <i class="fa-solid fa-tooth"></i>
                    </div>
                    <div class="section-title-wrapper">
                        <div class="title-line"></div>
                        <h2 class="section-title">Our Cosmetic Dentistry Treatments</h2>
                        <div class="title-line"></div>
                    </div>
                </div>

                <div class="services-grid">
                    <!-- Card 1 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-teeth-open"></i></div>
                        <h3 class="service-title">Teeth Whitening</h3>
                        <p class="service-desc">Brighten your smile and remove stains for a whiter, more radiant appearance.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-tooth"></i></div>
                        <h3 class="service-title">Porcelain Veneers</h3>
                        <p class="service-desc">Custom-made veneers to correct discolouration, chips, gaps and uneven teeth.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 3 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                        <h3 class="service-title">Composite Bonding</h3>
                        <p class="service-desc">Reshape and repair teeth with minimal invasion and natural looking results.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 4 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-user-doctor"></i></div>
                        <h3 class="service-title">Smile Makeover</h3>
                        <p class="service-desc">A complete smile transformation tailored to your facial features and goals.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 5 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-face-smile"></i></div>
                        <h3 class="service-title">Invisalign®</h3>
                        <p class="service-desc">Straighten your teeth discreetly with clear aligners for a confident smile.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 6 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-tooth"></i></div>
                        <h3 class="service-title">Gum Contouring</h3>
                        <p class="service-desc">Improve the shape and symmetry of your gums for a more balanced smile.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- CTA Strip -->
                <div class="cta-strip">
                    <div class="cta-strip-left">
                        <div class="cta-icon-wrapper">
                            <i class="fa-regular fa-calendar-check"></i>
                        </div>
                        <div class="cta-text-content">
                            <h3 class="cta-title">Ready to Transform Your Smile?</h3>
                            <p class="cta-desc mb-0">Book your consultation today and take the first step towards a more confident you.</p>
                        </div>
                    </div>
                    <div class="cta-strip-right">
                        <a href="#" class="btn-primary-custom" style="padding: 12px 28px; font-size: 15px;">Book an Appointment <i class="fa-solid fa-arrow-right"></i></a>
                        <i class="fa-solid fa-wand-magic-sparkles sparkle-icon"></i>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/icon-dental/includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Check for theme changes to swap hero image if needed
        const bodyObserver = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.attributeName === "class") {
                    const heroImg = document.querySelector('.hero-img-light');
                    if (document.body.classList.contains('dark-theme')) {
                        heroImg.src = "/icon-dental/assets/images/smile.png";
                    } else {
                        heroImg.src = "/icon-dental/assets/images/smile.png";
                    }
                }
            });
        });
        
        bodyObserver.observe(document.body, {
            attributes: true
        });

        // Initial check
        if (document.body.classList.contains('dark-theme')) {
            document.querySelector('.hero-img-light').src = "/icon-dental/assets/images/smile.png";
        }
    </script>
</body>
</html>
