<?php
// about/why-choose-us.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icon Dental- Wembley | Why Choose Us</title>
    
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
            max-width: 560px;
            margin-bottom: 40px;
        }

        /* Curved Hero Image */
        .hero-image-wrapper {
            position: relative;
            border-radius: 120px 20px 20px 120px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            height: 520px;
            width: 100%;
        }
        
        .hero-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: relative;
            z-index: 1;
        }

        /* Feature Grid */
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 24px;
            margin-top: -40px; /* Overlap slightly if needed, but screenshot implies just below */
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .feature-card {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: 18px;
            padding: 32px 24px;
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease, border-color 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,.08);
        }

        .feature-icon {
            width: 56px;
            height: 56px;
            border-radius: 16px;
            background-color: #eff6ff;
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 24px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .feature-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 12px;
            font-family: var(--body-font);
            transition: color 0.3s ease;
        }

        .feature-desc {
            font-size: 14px;
            line-height: 1.6;
            color: var(--text-gray);
            margin: 0;
            transition: color 0.3s ease;
        }

        /* Stats & CTA Section */
        .stats-cta-section {
            background: #f8fafc;
            border-radius: 24px;
            padding: 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 80px;
            transition: background 0.3s ease, border-color 0.3s ease;
            border: 1px solid transparent;
            gap: 40px;
        }

        .stats-container {
            display: flex;
            flex: 1;
            justify-content: space-between;
            border-right: 1px solid var(--border-color);
            padding-right: 40px;
            transition: border-color 0.3s ease;
        }

        .stat-block {
            text-align: center;
        }

        .stat-icon {
            font-size: 24px;
            color: var(--primary-blue);
            margin-bottom: 12px;
            transition: color 0.3s ease;
        }

        .stat-value {
            font-size: 24px;
            font-weight: 700;
            color: var(--dark-navy);
            font-family: var(--body-font);
            margin-bottom: 4px;
            transition: color 0.3s ease;
        }

        .stat-label {
            font-size: 13px;
            font-weight: 500;
            color: var(--text-gray);
            transition: color 0.3s ease;
        }

        .cta-block {
            flex: 0 0 380px;
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }

        .cta-icon-heart {
            font-size: 32px;
            color: var(--primary-blue);
            flex-shrink: 0;
            transition: color 0.3s ease;
            margin-top: 4px;
        }

        .cta-content h3 {
            font-family: var(--heading-font);
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 12px;
            transition: color 0.3s ease;
        }

        .cta-content p {
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 24px;
            transition: color 0.3s ease;
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

        body.dark-theme .about-desc,
        body.dark-theme .feature-desc {
            color: rgba(255, 255, 255, 0.75);
        }

        body.dark-theme .feature-card {
            background: rgba(73, 87, 70, 0.75);
            border-color: rgba(255, 255, 255, 0.12);
        }

        body.dark-theme .feature-card:hover {
            background: rgba(73, 87, 70, 0.95);
        }

        body.dark-theme .feature-icon {
            background-color: rgba(177, 152, 111, 0.15);
            color: #c3ab83;
        }

        body.dark-theme .feature-title {
            color: #ffffff;
        }

        body.dark-theme .stats-cta-section {
            background: rgba(73, 87, 70, 0.75);
            border: 1px solid rgba(255, 255, 255, 0.12);
        }

        body.dark-theme .stats-container {
            border-color: rgba(255, 255, 255, 0.12);
        }

        body.dark-theme .stat-icon {
            color: #c3ab83;
        }

        body.dark-theme .stat-value {
            color: #ffffff;
        }

        body.dark-theme .cta-icon-heart {
            color: #c3ab83;
        }

        body.dark-theme .cta-content h3 {
            color: #ffffff;
        }

        body.dark-theme .cta-content p {
            color: rgba(255, 255, 255, 0.75);
        }

        /* Responsive Design */
        @media (max-width: 1399.98px) {
            .feature-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        
        @media (max-width: 1199.98px) {
            .about-title {
                font-size: 56px;
            }
            .stats-cta-section {
                flex-direction: column;
                text-align: center;
                gap: 40px;
            }
            .stats-container {
                border-right: none;
                border-bottom: 1px solid var(--border-color);
                padding-right: 0;
                padding-bottom: 40px;
                width: 100%;
                justify-content: center;
                gap: 40px;
            }
            body.dark-theme .stats-container {
                border-bottom-color: rgba(255, 255, 255, 0.12);
            }
            .cta-block {
                flex-direction: column;
                align-items: center;
                flex: auto;
            }
            .hero-image-wrapper {
                border-radius: 80px 20px 20px 80px;
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
                height: 400px;
            }
        }

        @media (max-width: 767.98px) {
            .about-title {
                font-size: 40px;
            }
            .feature-grid {
                grid-template-columns: 1fr;
            }
            .stats-container {
                flex-wrap: wrap;
            }
            .stat-block {
                width: 40%;
                margin-bottom: 20px;
            }
            .hero-image-wrapper {
                border-radius: 40px 20px 20px 40px;
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
                <span>Why Choose Us</span>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <span class="about-label">WHY CHOOSE US</span>
                    <h2 class="about-title">Exceptional Care.<br>Trusted by Families<br>in Wembley.</h2>
                    <p class="about-desc">At Icon Dental- Wembley, we go beyond conventional dentistry. We combine advanced technology, a gentle approach, and genuine care to deliver a dental experience that sets us apart.</p>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-wrapper">
                        <img src="../assets/images/why-choose-us-hero.png" alt="Happy Patient at Dental Clinic">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section>
        <div class="container custom-container">
            <div class="feature-grid">
                <!-- Feature 1 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa-solid fa-tooth"></i>
                    </div>
                    <h3 class="feature-title">Experienced Team</h3>
                    <p class="feature-desc">Highly skilled dentists with years of expertise across all areas of dental care.</p>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa-solid fa-laptop-medical"></i>
                    </div>
                    <h3 class="feature-title">Advanced Technology</h3>
                    <p class="feature-desc">We use the latest dental technology for precise diagnosis and treatments.</p>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <h3 class="feature-title">Patient Focused</h3>
                    <p class="feature-desc">Your comfort, health, and goals are always our top priority.</p>
                </div>

                <!-- Feature 4 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="feature-title">Honest & Transparent</h3>
                    <p class="feature-desc">Open communication and clear pricing with no hidden surprises.</p>
                </div>

                <!-- Feature 5 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa-regular fa-calendar"></i>
                    </div>
                    <h3 class="feature-title">Convenient Care</h3>
                    <p class="feature-desc">Flexible appointments and a welcoming environment for the whole family.</p>
                </div>

                <!-- Feature 6 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa-regular fa-face-smile"></i>
                    </div>
                    <h3 class="feature-title">Beautiful Results</h3>
                    <p class="feature-desc">We are dedicated to delivering healthy, natural looking smiles that last.</p>
                </div>
            </div>

            <!-- Stats + CTA Section -->
            <div class="stats-cta-section">
                <div class="stats-container">
                    <div class="stat-block">
                        <i class="fa-solid fa-user-group stat-icon"></i>
                        <div class="stat-value">2500+</div>
                        <div class="stat-label">Happy Patients</div>
                    </div>
                    <div class="stat-block">
                        <i class="fa-regular fa-star stat-icon"></i>
                        <div class="stat-value">4.9/5</div>
                        <div class="stat-label">Google Rating</div>
                    </div>
                    <div class="stat-block">
                        <i class="fa-regular fa-calendar stat-icon"></i>
                        <div class="stat-value">15+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                    <div class="stat-block">
                        <i class="fa-solid fa-shield-halved stat-icon"></i>
                        <div class="stat-value">100%</div>
                        <div class="stat-label">Patient Focused</div>
                    </div>
                </div>
                
                <div class="cta-block">
                    <i class="fa-regular fa-heart cta-icon-heart"></i>
                    <div class="cta-content">
                        <h3>Your smile is our passion</h3>
                        <p>We are committed to helping you achieve a healthy, confident smile that lasts a lifetime.</p>
                        <a href="meet-the-team.php" class="btn-primary-custom">
                            Meet the Team <i class="fa-solid fa-user-group ms-1"></i>
                        </a>
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



