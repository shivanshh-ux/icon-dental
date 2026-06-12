
<?php
// about/meet-the-team.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icon Dental- Wembley | Meet The Team</title>
    
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

        .section-padding {
            padding: 90px 0;
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
            color: var(--dark-navy);
            border: 1px solid var(--border-color);
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
            border-color: var(--dark-navy);
            color: var(--dark-navy);
            background: var(--light-bg);
            transform: translateY(-2px);
        }

        /* Breadcrumb */
        .breadcrumb-nav {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 13px;
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
            padding: 40px 0 100px;
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
            max-width: 520px;
            margin-bottom: 40px;
        }

        /* Mini Features */
        .mini-features {
            display: flex;
            gap: 32px;
            margin-top: 40px;
            flex-wrap: wrap;
        }
        
        .mini-feature {
            display: flex;
            gap: 16px;
            align-items: flex-start;
            flex: 1;
            min-width: 150px;
        }
        
        .mini-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #eff6ff;
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            flex-shrink: 0;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        
        .mini-feature-title {
            font-size: 14px;
            font-weight: 600;
            color: var(--dark-navy);
            margin: 0 0 6px 0;
            font-family: var(--body-font);
            transition: color 0.3s ease;
        }
        
        .mini-feature-text {
            font-size: 12px;
            color: var(--text-gray);
            margin: 0;
            line-height: 1.5;
            transition: color 0.3s ease;
        }

        /* Hero Image */
        .hero-image-wrapper {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            height: auto;
            width: 100%;
        }
        
        .hero-image-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: contain;
        }

        body.light-theme .img-dark { display: none !important; }
        body.light-theme .img-light { display: block !important; }
        body.dark-theme .img-light { display: none !important; }
        body.dark-theme .img-dark { display: block !important; }

        /* Section Title */
        .explore-heading-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 50px;
            gap: 24px;
        }

        .explore-heading {
            font-size: 48px;
            margin: 0;
            font-weight: 500;
        }

        .heading-line {
            height: 1px;
            background-color: var(--border-color);
            flex-grow: 1;
            max-width: 120px;
            transition: background-color 0.3s ease;
        }

        /* Team Grid */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .team-card {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: 18px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease, border-color 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .team-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,.08);
        }

        .team-card-img {
            width: 100%;
            height: 260px;
            object-fit: cover;
        }

        .team-card-content {
            padding: 24px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .team-name {
            font-family: var(--body-font);
            font-size: 20px;
            font-weight: 600;
            color: var(--dark-navy);
            margin-bottom: 4px;
            transition: color 0.3s ease;
        }

        .team-role {
            font-size: 14px;
            color: var(--primary-blue);
            font-weight: 500;
            margin-bottom: 16px;
        }

        .team-desc {
            font-size: 14px;
            line-height: 1.6;
            color: var(--text-gray);
            margin-bottom: 24px;
            flex-grow: 1;
            transition: color 0.3s ease;
        }

        .team-skills {
            display: flex;
            gap: 12px;
            margin-bottom: 24px;
        }

        .team-skill-icon {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            background-color: #f8fafc;
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .team-link {
            font-size: 14px;
            font-weight: 600;
            color: var(--primary-blue);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: var(--transition);
        }

        .team-link:hover {
            color: var(--primary-hover);
            gap: 10px;
        }

        /* CTA Section */
        .cta-section {
            background: #f8fafc;
            border-radius: 24px;
            padding: 32px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 80px;
            margin-bottom: 60px;
            transition: background 0.3s ease, border-color 0.3s ease;
            border: 1px solid transparent;
        }

        .cta-left {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .cta-icon {
            width: 64px;
            height: 64px;
            border-radius: 16px;
            background-color: #ffffff;
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
            flex-shrink: 0;
            transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
        }

        .cta-heading {
            font-family: var(--heading-font);
            font-size: 32px;
            font-weight: 600;
            color: var(--dark-navy);
            margin: 0 0 8px 0;
            transition: color 0.3s ease;
        }

        .cta-text {
            font-size: 16px;
            color: var(--text-gray);
            margin: 0;
            transition: color 0.3s ease;
        }

        .cta-right {
            display: flex;
            gap: 16px;
            flex-shrink: 0;
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

        body.dark-theme .mini-icon {
            background-color: rgba(177, 152, 111, 0.15);
            color: #b1986f;
        }

        body.dark-theme .mini-feature-title {
            color: #ffffff;
        }

        body.dark-theme .mini-feature-text,
        body.dark-theme .about-desc {
            color: rgba(255, 255, 255, 0.75);
        }

        body.dark-theme .heading-line {
            background-color: rgba(255, 255, 255, 0.12);
        }

        body.dark-theme .team-card {
            background: rgba(73, 87, 70, 0.75);
            border-color: rgba(255, 255, 255, 0.12);
        }

        body.dark-theme .team-card:hover {
            background: rgba(73, 87, 70, 0.95);
        }

        body.dark-theme .team-name {
            color: #ffffff;
        }

        body.dark-theme .team-desc {
            color: rgba(255, 255, 255, 0.75);
        }

        body.dark-theme .team-skill-icon {
            background-color: rgba(255, 255, 255, 0.05);
            color: #b1986f;
        }

        body.dark-theme .cta-section {
            background: rgba(73, 87, 70, 0.75);
            border: 1px solid rgba(255, 255, 255, 0.12);
        }

        body.dark-theme .cta-icon {
            background-color: rgba(177, 152, 111, 0.15);
            color: #b1986f;
            box-shadow: none;
        }

        body.dark-theme .cta-heading {
            color: #ffffff;
        }

        body.dark-theme .cta-text {
            color: rgba(255, 255, 255, 0.75);
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
            .team-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .cta-section {
                flex-direction: column;
                text-align: center;
                gap: 32px;
            }
            .cta-left {
                flex-direction: column;
                text-align: center;
            }
            .about-title {
                font-size: 56px;
            }
        }

        @media (max-width: 991.98px) {
            .about-title {
                font-size: 48px;
            }
            .mini-features {
                flex-direction: column;
                gap: 24px;
            }
            .about-hero {
                padding: 20px 0 60px;
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
            .team-grid {
                grid-template-columns: 1fr;
            }
            .explore-heading {
                font-size: 36px;
                text-align: center;
            }
            .heading-line {
                display: none;
            }
            .cta-right {
                flex-direction: column;
                width: 100%;
            }
            .cta-right .btn-outline-custom,
            .cta-right .btn-primary-custom {
                width: 100%;
                justify-content: center;
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
                <span>Meet the Team</span>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <span class="about-label">MEET THE TEAM</span>
                    <h2 class="about-title">The Friendly<br>Experts Behind<br>Your Smile</h2>
                    <p class="about-desc">Our experienced team combines clinical excellence with a gentle approach to provide exceptional dental care in a welcoming environment.</p>
                    
                    <div class="mini-features">
                        <div class="mini-feature">
                            <div class="mini-icon">
                                <i class="fa-solid fa-user-graduate"></i>
                            </div>
                            <div>
                                <h4 class="mini-feature-title">Highly Qualified</h4>
                                <p class="mini-feature-text">Extensive training and continuous education</p>
                            </div>
                        </div>
                        <div class="mini-feature">
                            <div class="mini-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                            <div>
                                <h4 class="mini-feature-title">Patient Focused</h4>
                                <p class="mini-feature-text">Your comfort and care are our priority</p>
                            </div>
                        </div>
                        <div class="mini-feature">
                            <div class="mini-icon">
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div>
                                <h4 class="mini-feature-title">Passionate</h4>
                                <p class="mini-feature-text">We love creating healthy, beautiful smiles</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="hero-image-wrapper">
                        <img src="../assets/images/about-us-light.png" alt="Dental Clinic Team" class="about-image img-light">
                        <img src="../assets/images/about-us-dark.png" alt="Dental Clinic Team" class="about-image img-dark">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section-padding pt-0">
        <div class="container custom-container">
            
            <div class="explore-heading-wrapper">
                <div class="heading-line"></div>
                <h2 class="explore-heading">Our Dental Team</h2>
                <div class="heading-line"></div>
            </div>

            <div class="team-grid">
                <!-- Card 1 -->
                <div class="team-card">
                    <div class="team-card-content">
                        <h3 class="team-name">Dr Abbas Arbabi</h3>
                        <div class="team-role">DDS Oral Implant Surgeon</div>
                        <p class="team-desc">GDC: 75201</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="team-card">
                    <div class="team-card-content">
                        <h3 class="team-name">Sara Moshtofar</h3>
                        <div class="team-role">Dental Hygienist</div>
                        <p class="team-desc">GDC: 281632</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="team-card">
                    <div class="team-card-content">
                        <h3 class="team-name">Btisam Serbout</h3>
                        <div class="team-role">Dental Hygienist</div>
                        <p class="team-desc">GDC: 243637</p>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="cta-section">
                <div class="cta-left">
                    <div class="cta-icon">
                        <i class="fa-regular fa-calendar"></i>
                    </div>
                    <div>
                        <h2 class="cta-heading">Book an appointment with our team</h2>
                        <p class="cta-text">We're here to help you achieve a healthy, confident smile.</p>
                    </div>
                </div>
                <div class="cta-right">
                    <a href="#" class="btn-outline-custom">Learn More</a>
                    <a href="/icon-dental/book-online.php" class="btn-primary-custom">
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



