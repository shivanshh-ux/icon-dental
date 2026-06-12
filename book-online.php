<?php
// book-online.php
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
    <title>Icon Dental- Wembley | Book Online</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        /* Base Variables */
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

        /* Navbar & Breadcrumb Base */
        .navbar-custom {
            background-color: #ffffff;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        
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
            color: #b1986f;
        }

        /* ====== BOOK ONLINE SPECIFIC ====== */
        .book-hero {
            padding: 50px 0 90px;
            background-color: transparent;
        }

        .book-grid {
            display: grid;
            grid-template-columns: 1fr 1.15fr;
            gap: 60px;
            align-items: start;
        }

        /* Left Column */
        .gold-pill {
            background: #f7f1e8;
            border: 1px solid #e7d8bc;
            color: #b1986f;
            border-radius: 50px;
            padding: 8px 18px;
            font-size: 12px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 24px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .book-title {
            font-family: var(--heading-font);
            font-size: 72px;
            font-weight: 600;
            line-height: 1.05;
            color: #173a28;
            margin-bottom: 24px;
        }

        .gold-line {
            width: 60px;
            height: 3px;
            background-color: #b1986f;
            margin-bottom: 32px;
        }

        .book-desc {
            font-size: 16px;
            line-height: 1.6;
            color: var(--text-gray);
            max-width: 520px;
            margin-bottom: 40px;
        }

        /* Feature Row */
        .feature-row {
            display: flex;
            align-items: flex-start;
            gap: 24px;
            margin-bottom: 40px;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            flex: 1;
        }

        .feature-icon-wrapper {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            border: 1.5px solid #b1986f;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #b1986f;
            font-size: 18px;
            flex-shrink: 0;
            transition: var(--transition);
        }

        .feature-item-title {
            font-size: 13px;
            font-weight: 700;
            color: #173a28;
            margin-bottom: 4px;
            font-family: var(--body-font);
        }

        .feature-item-text {
            font-size: 11px;
            color: var(--text-gray);
            margin: 0;
            line-height: 1.4;
        }

        /* Contact Card */
        .contact-card {
            background: #f8f3ec;
            border-radius: 18px;
            padding: 28px;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .contact-card-icon {
            font-size: 24px;
            color: #b1986f;
        }

        .contact-card-text {
            font-size: 18px;
            font-weight: 600;
            color: #173a28;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        
        .contact-card-text span {
            font-size: 14px;
            color: #173a28;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .contact-card-text a {
            color: #b1986f;
            text-decoration: none;
            font-weight: 600;
        }

        /* Right Column Form */
        .form-card {
            background: #ffffff;
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 20px 50px rgba(0,0,0,.08);
            border: 1px solid transparent;
        }

        .form-header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 32px;
        }

        .form-header-icon {
            font-size: 28px;
            color: #b1986f;
        }

        .form-heading {
            font-family: var(--heading-font);
            font-size: 40px;
            font-weight: 600;
            color: #173a28;
            margin: 0;
        }

        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-col {
            flex: 1;
        }

        .form-group {
            position: relative;
        }

        .form-label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #173a28;
            margin-bottom: 8px;
        }

        .form-label span {
            color: #b1986f;
        }

        .form-control-custom {
            width: 100%;
            height: 56px;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            background: #ffffff;
            padding: 0 16px;
            font-size: 14px;
            color: #173a28;
            transition: var(--transition);
            font-family: var(--body-font);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .form-control-custom:focus {
            outline: none;
            border-color: #b1986f;
        }

        .form-control-custom::placeholder {
            color: #9ca3af;
        }

        select.form-control-custom {
            cursor: pointer;
            padding-right: 40px;
        }

        textarea.form-control-custom {
            height: 120px;
            padding: 16px;
            resize: none;
        }

        .input-icon {
            position: absolute;
            right: 16px;
            top: 45px;
            color: #6b7280;
            pointer-events: none;
            font-size: 16px;
        }

        .btn-submit {
            width: 100%;
            height: 64px;
            background: #495746;
            color: #ffffff;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            transition: var(--transition);
            cursor: pointer;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background: #3d483b;
        }

        .btn-submit i {
            font-size: 18px;
        }

        /* Dark Theme Specific Overrides */
        body.dark-theme {
            background: linear-gradient(90deg, #3f4b3d, #495746, #3f4b3d);
            color: rgba(255, 255, 255, 0.75);
        }

        body.dark-theme .book-title,
        body.dark-theme .form-heading,
        body.dark-theme .feature-item-title,
        body.dark-theme .form-label {
            color: #ffffff;
        }

        body.dark-theme .book-desc,
        body.dark-theme .feature-item-text {
            color: rgba(255, 255, 255, 0.80);
        }

        body.dark-theme .gold-pill {
            background: rgba(177, 152, 111, 0.1);
            border-color: rgba(177, 152, 111, 0.3);
            color: #b1986f;
        }

        body.dark-theme .feature-icon-wrapper {
            border-color: #b1986f;
            color: #b1986f;
        }

        body.dark-theme .contact-card {
            background: rgba(73, 87, 70, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(177, 152, 111, 0.15);
        }

        body.dark-theme .contact-card-text {
            color: rgba(255, 255, 255, 0.8);
        }
        
        body.dark-theme .contact-card-text span {
            color: #ffffff;
        }

        body.dark-theme .form-card {
            background: rgba(73, 87, 70, 0.4);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(177, 152, 111, 0.15);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        body.dark-theme .form-control-custom {
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(177, 152, 111, 0.20);
            color: #ffffff;
        }

        body.dark-theme .form-control-custom:focus {
            border-color: #b1986f;
        }

        body.dark-theme .form-control-custom::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }
        
        body.dark-theme .input-icon {
            color: rgba(255, 255, 255, 0.5);
        }

        body.dark-theme .btn-submit {
            background: #e0b04d;
            color: #1a1a1a;
        }

        body.dark-theme .btn-submit:hover {
            background: #f0bf58;
        }

        /* Responsive */
        @media (max-width: 1199.98px) {
            .book-title { font-size: 56px; }
            .feature-row { flex-wrap: wrap; }
            .feature-item { min-width: 45%; }
        }
        @media (max-width: 991.98px) {
            .book-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            .book-title {
                font-size: 48px;
            }
            .form-row {
                flex-direction: column;
                gap: 20px;
            }
            .feature-row {
                flex-direction: column;
                gap: 20px;
            }
        }
        @media (max-width: 767.98px) {
            .book-title { font-size: 40px; }
            .form-card { padding: 24px; }
            .form-heading { font-size: 32px; }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/icon-dental/includes/navbar.php'; ?>

    <section class="book-hero">
        <div class="container custom-container">
            
            <div class="breadcrumb-nav">
                <a href="index.php"><i class="fa-solid fa-house me-1"></i> Home</a>
                <i class="fa-solid fa-chevron-right" style="font-size:10px;"></i>
                <span>Book Online</span>
            </div>

            <div class="book-grid">
                <!-- LEFT COLUMN -->
                <div class="book-left">
                    <span class="gold-pill">BOOK ONLINE</span>
                    
                    <h1 class="book-title">Book Your Appointment<br>With Ease</h1>
                    
                    <div class="gold-line"></div>
                    
                    <p class="book-desc">We're here to help you achieve a healthy, confident smile.<br>Fill in the form and our team will get back to you<br>to confirm your appointment.</p>
                    
                    <div class="feature-row">
                        <div class="feature-item">
                            <div class="feature-icon-wrapper">
                                <i class="fa-regular fa-calendar"></i>
                            </div>
                            <div>
                                <h3 class="feature-item-title">Easy Scheduling</h3>
                                <p class="feature-item-text">Choose a date and time that<br>works best for you.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon-wrapper">
                                <i class="fa-regular fa-clock"></i>
                            </div>
                            <div>
                                <h3 class="feature-item-title">Quick Confirmation</h3>
                                <p class="feature-item-text">We'll confirm your appointment<br>as soon as possible.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon-wrapper">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div>
                                <h3 class="feature-item-title">Patient Care</h3>
                                <p class="feature-item-text">Your comfort and care<br>are our top priority.</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="contact-card-icon">
                            <i class="fa-solid fa-phone-volume" style="transform: rotate(-30deg);"></i>
                        </div>
                        <div class="contact-card-text">
                            <span>Need Help?</span>
                            Call us on <a href="tel:02089983030">020 8998 3030</a>
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN (FORM) -->
                <div class="book-right">
                    <div class="form-card">
                        <div class="form-header">
                            <i class="fa-regular fa-calendar form-header-icon"></i>
                            <h2 class="form-heading">Appointment Details</h2>
                        </div>

                        <form action="#" method="POST">
                            <!-- Row 1 -->
                            <div class="form-row">
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label">Full Name <span>*</span></label>
                                        <input type="text" class="form-control-custom" placeholder="Enter your full name" required>
                                    </div>
                                </div>
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label">Email Address <span>*</span></label>
                                        <input type="email" class="form-control-custom" placeholder="Enter your email" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Row 2 -->
                            <div class="form-row">
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label">Phone Number <span>*</span></label>
                                        <input type="tel" class="form-control-custom" placeholder="Enter your phone number" required>
                                    </div>
                                </div>
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label">Preferred Date <span>*</span></label>
                                        <input type="text" class="form-control-custom" placeholder="Select a date" required>
                                        <i class="fa-regular fa-calendar input-icon"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Row 3 -->
                            <div class="form-row">
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label">Preferred Time <span>*</span></label>
                                        <select class="form-control-custom" required>
                                            <option value="" disabled selected>Select a time</option>
                                            <option value="morning">Morning (9am - 12pm)</option>
                                            <option value="afternoon">Afternoon (12pm - 4pm)</option>
                                            <option value="evening">Evening (4pm - 6pm)</option>
                                        </select>
                                        <i class="fa-regular fa-clock input-icon"></i>
                                    </div>
                                </div>
                                <div class="form-col">
                                    <div class="form-group">
                                        <label class="form-label">Reason for Visit <span>*</span></label>
                                        <select class="form-control-custom" required>
                                            <option value="" disabled selected>Select a reason</option>
                                            <option value="checkup">General Checkup</option>
                                            <option value="cleaning">Hygiene / Cleaning</option>
                                            <option value="whitening">Tooth Whitening</option>
                                            <option value="consultation">Consultation</option>
                                            <option value="emergency">Emergency</option>
                                        </select>
                                        <i class="fa-solid fa-chevron-down input-icon" style="font-size: 12px;"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Row 4 -->
                            <div class="form-group" style="margin-bottom: 24px;">
                                <label class="form-label">Additional Notes (Optional)</label>
                                <textarea class="form-control-custom" placeholder="Tell us anything we should know"></textarea>
                            </div>

                            <button type="submit" class="btn-submit">
                                <i class="fa-regular fa-calendar"></i>
                                Book Appointment
                                <i class="fa-solid fa-arrow-right ms-1"></i>
                            </button>
                        </form>
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
