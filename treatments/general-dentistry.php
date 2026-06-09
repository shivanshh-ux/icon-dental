<?php
// treatments/general-dentistry.php
$current_page = 'treatments.php'; // For navbar active state
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Dentistry - Icon Dental Wembley</title>
    
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
            color: #b1986f;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 20px;
            display: block;
        }
        .hero-title {
            font-family: var(--heading-font);
            font-size: 72px;
            font-weight: 600;
            line-height: 1.05;
            color: #1f352a;
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
            gap: 30px;
            margin-bottom: 45px;
        }
        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }
        .feature-icon-wrapper {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .feature-icon-wrapper i {
            font-size: 24px;
            color: #1f352a;
            font-weight: 300;
        }
        .feature-text-content {
            display: flex;
            flex-direction: column;
        }
        .feature-title {
            font-size: 15px;
            font-weight: 600;
            color: #1f352a;
            margin-bottom: 4px;
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
            color: #1f352a;
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
            color: #1f352a;
            transform: translateY(-2px);
        }

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
            background: #0f3325;
            border: 1px solid #b1986f;
            border-radius: 12px;
            padding: 24px 32px;
            display: flex;
            align-items: center;
            gap: 16px;
            box-shadow: 0 15px 40px rgba(177,152,111,.2);
            z-index: 10;
        }
        .floating-card i {
            font-size: 32px;
            color: #b1986f;
        }
        .floating-card-text {
            font-family: var(--heading-font);
            color: #ffffff;
            font-size: 24px;
            line-height: 1.2;
            font-weight: 500;
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
            color: #b1986f;
            font-size: 28px;
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
            font-size: 54px;
            font-weight: 600;
            color: #1f352a;
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
            margin-bottom: 50px;
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
            border: 1px solid #e5e7eb;
            border-radius: 18px;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            transition: var(--transition);
            height: 100%;
        }
        .service-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(0,0,0,.08);
            border-color: #b1986f;
        }
        .service-icon {
            width: 50px;
            height: 50px;
            border: 1px solid #e5e7eb;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            transition: var(--transition);
        }
        .service-icon i {
            font-size: 20px;
            color: #b1986f;
        }
        .service-title {
            font-family: var(--heading-font);
            font-size: 22px;
            font-weight: 600;
            color: #1f352a;
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

        /* Benefits Strip */
        .benefits-strip {
            background: #f8f8f6;
            border-radius: 20px;
            padding: 28px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            transition: var(--transition);
        }
        .benefit-item {
            display: flex;
            align-items: center;
            gap: 15px;
            flex: 1;
            min-width: 200px;
            transition: var(--transition);
        }
        .benefit-item:not(:last-child) {
            border-right: 1px solid #e5e7eb;
            padding-right: 20px;
        }
        .benefit-icon {
            font-size: 28px;
            color: #1f352a;
            transition: var(--transition);
        }
        .benefit-text-content {
            display: flex;
            flex-direction: column;
        }
        .benefit-title {
            font-size: 15px;
            font-weight: 600;
            color: #1f352a;
            margin-bottom: 2px;
            transition: var(--transition);
        }
        .benefit-desc {
            font-size: 12px;
            color: var(--text-gray);
            transition: var(--transition);
        }

        @media (max-width: 991px) {
            .benefit-item:not(:last-child) {
                border-right: none;
                padding-right: 0;
            }
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
        
        body.dark-theme .benefits-strip { 
            background: rgba(73, 87, 70, 0.6); 
            backdrop-filter: blur(10px); 
            border: 1px solid rgba(255,255,255,0.05); 
        }
        body.dark-theme .benefit-item:not(:last-child) { border-color: rgba(255,255,255,0.1); }
        body.dark-theme .benefit-icon { color: #d6c09b; }
        body.dark-theme .benefit-title { color: #ffffff; }
        body.dark-theme .benefit-desc { color: rgba(255, 255, 255, 0.75); }

        /* Responsive Adjustments */
        @media (max-width: 991px) {
            .hero-title { font-size: 56px; }
            .hero-image-container { margin-top: 40px; height: 400px; }
            .floating-card { bottom: 20px; right: 20px; padding: 15px 20px; }
            .floating-card-text { font-size: 18px; }
            .section-title { font-size: 42px; }
            .feature-list { flex-direction: column; gap: 20px; }
        }
        @media (max-width: 767px) {
            .hero-title { font-size: 42px; }
            .hero-desc { font-size: 16px; }
            .btn-group-custom { flex-direction: column; }
            .btn-primary-custom, .btn-outline-custom { width: 100%; justify-content: center; }
            .section-title { font-size: 32px; }
            .title-line { width: 30px; }
            .benefits-strip { padding: 20px; flex-direction: column; align-items: flex-start; }
            .benefit-item { width: 100%; margin-bottom: 15px; }
            .hero-image-container { height: 300px; }
            .floating-card { position: relative; bottom: auto; right: auto; margin-top: -30px; margin-left: 20px; margin-right: 20px; }
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
                    <a href="/icon-dental/index.php"><i class="fa-solid fa-house"></i> Home</a> <i class="fa-solid fa-chevron-right"></i> <a href="/icon-dental/treatments.php">Treatments</a> <i class="fa-solid fa-chevron-right"></i> <span style="color:#b1986f;">General Dentistry</span>
                </div>

                <div class="row align-items-center g-5">
                    <!-- Left Column -->
                    <div class="col-lg-6">
                        <span class="hero-label">GENERAL DENTISTRY</span>
                        <h1 class="hero-title">Complete Care for<br>a Healthy Smile</h1>
                        <p class="hero-desc">Our general dentistry services focus on prevention, early diagnosis and treatment to help you maintain a healthy smile for life.</p>
                        
                        <div class="feature-list">
                            <div class="feature-item">
                                <div class="feature-icon-wrapper">
                                    <i class="fa-solid fa-shield-halved"></i>
                                </div>
                                <div class="feature-text-content">
                                    <span class="feature-title">Preventive Care</span>
                                    <span class="feature-subtitle">Protect your smile<br>for the future</span>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon-wrapper">
                                    <i class="fa-solid fa-tooth"></i>
                                </div>
                                <div class="feature-text-content">
                                    <span class="feature-title">Early Diagnosis</span>
                                    <span class="feature-subtitle">Detect issues early,<br>treat easily</span>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon-wrapper">
                                    <i class="fa-solid fa-user-group"></i>
                                </div>
                                <div class="feature-text-content">
                                    <span class="feature-title">Patient Focused</span>
                                    <span class="feature-subtitle">Comfortable care<br>tailored to you</span>
                                </div>
                            </div>
                        </div>

                        <div class="btn-group-custom">
                            <a href="#" class="btn-primary-custom">
                                Book an Appointment <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="#" class="btn-outline-custom">
                                Learn More <i class="fa-regular fa-circle-play"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-lg-6 position-relative">
                        <div class="hero-image-container">
                            <!-- JS script below will swap this source for dark mode if needed -->
                            <img src="/icon-dental/assets/images/general.png" alt="Dentist examining smiling female patient" class="hero-img-light">
                        </div>
                        
                        <div class="floating-card">
                            <i class="fa-solid fa-tooth"></i>
                            <div class="floating-card-text">
                                Healthy Smiles,<br>Confident You.
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
                        <h2 class="section-title">Our General Dentistry Services</h2>
                        <div class="title-line"></div>
                    </div>
                </div>

                <div class="services-grid">
                    <!-- Card 1 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-tooth"></i></div>
                        <h3 class="service-title">Check-ups &<br>Examinations</h3>
                        <p class="service-desc">Regular check-ups to keep your teeth and gums healthy.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-pump-medical"></i></div>
                        <h3 class="service-title">Professional<br>Cleaning</h3>
                        <p class="service-desc">Remove plaque and tartar for a cleaner, fresher smile.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 3 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-tooth"></i></div>
                        <h3 class="service-title">Fillings</h3>
                        <p class="service-desc">Tooth-coloured fillings to restore strength and function.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 4 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-tooth"></i></div>
                        <h3 class="service-title">Gum Disease<br>Treatment</h3>
                        <p class="service-desc">Diagnosis and treatment to keep your gums healthy.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 5 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-tooth"></i></div>
                        <h3 class="service-title">Root Canal<br>Treatment</h3>
                        <p class="service-desc">Relieve pain and save your natural teeth with expert care.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 6 -->
                    <div class="service-card">
                        <div class="service-icon"><i class="fa-solid fa-tooth"></i></div>
                        <h3 class="service-title">Tooth<br>Extractions</h3>
                        <p class="service-desc">Safe and gentle extractions when necessary.</p>
                        <a href="#" class="service-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Benefits Strip -->
                <div class="benefits-strip">
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fa-solid fa-shield-halved"></i></div>
                        <div class="benefit-text-content">
                            <span class="benefit-title">Experienced Team</span>
                            <span class="benefit-desc">Highly skilled dentists you can trust</span>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fa-solid fa-calendar-days"></i></div>
                        <div class="benefit-text-content">
                            <span class="benefit-title">Modern Technology</span>
                            <span class="benefit-desc">Advanced equipment for precise treatment</span>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fa-regular fa-heart"></i></div>
                        <div class="benefit-text-content">
                            <span class="benefit-title">Comfort First</span>
                            <span class="benefit-desc">Gentle care in a relaxing environment</span>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fa-solid fa-award"></i></div>
                        <div class="benefit-text-content">
                            <span class="benefit-title">Trusted by Families</span>
                            <span class="benefit-desc">Quality care for patients of all ages</span>
                        </div>
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
                        heroImg.src = "/icon-dental/assets/images/general.png";
                    } else {
                        heroImg.src = "/icon-dental/assets/images/general.png";
                    }
                }
            });
        });
        
        bodyObserver.observe(document.body, {
            attributes: true
        });

        // Initial check
        if (document.body.classList.contains('dark-theme')) {
            document.querySelector('.hero-img-light').src = "/icon-dental/assets/images/general.png";
        }
    </script>
</body>
</html>
