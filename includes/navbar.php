<?php
// includes/navbar.php
if (!isset($current_page)) {
    $current_page = basename($_SERVER['PHP_SELF']);
    if (empty($current_page) || $current_page == '') {
        $current_page = 'index.php';
    }
}
?>
<style>
    /* Global Theme Styles for body */
    body {
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    body.light-theme {
        background-color: #ffffff;
        color: #333333;
    }
    /* Let the existing body.dark-theme in your pages handle the dark CSS */

    /* Ultra Premium Glassmorphic Navbar Styles */
    .premium-glass-nav {
        width: 95%;
        max-width: 1850px;
        height: 110px;
        border-radius: 50px;
        margin: 30px auto;
        background: linear-gradient(135deg, #3f4b3d, #495746, #3f4b3d);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 2px solid rgba(255,255,255,.35);
        box-shadow: 
            0 0 0 1px rgba(255,255,255,.15) inset,
            0 15px 40px rgba(0,0,0,.35),
            0 0 40px rgba(177, 152, 111,.15),
            0 0 80px rgba(177, 152, 111,.25);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 15px 0 40px;
        position: relative;
        z-index: 1000;
        font-family: 'Inter', sans-serif;
    }

    /* Logo Section */
    .pgn-logo-section {
        display: flex;
        align-items: center;
        gap: 15px;
        text-decoration: none;
    }
    .pgn-logo-icon i {
        font-size: 40px;
        background: linear-gradient(180deg, #d6c09b, #b1986f);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        filter: drop-shadow(0 0 15px rgba(177, 152, 111,0.4));
    }
    .pgn-logo-text {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .pgn-logo-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 36px;
        font-weight: 600;
        letter-spacing: 1px;
        line-height: 0.85;
        color: white;
    }
    .pgn-logo-subtitle {
        font-size: 13px;
        letter-spacing: 6px;
        color: rgba(255,255,255,0.8);
        display: flex;
        align-items: center;
        margin-top: 6px;
        margin-left: 6px; 
    }
    .pgn-logo-subtitle span {
        color: #d6c09b;
        margin: 0 6px;
    }

    /* Dividers */
    .pgn-divider {
        height: 60px;
        width: 1px;
        background: rgba(255,255,255,.2);
        margin: 0 15px;
    }

    /* Menu Section */
    .pgn-menu-section {
        display: flex;
        align-items: center;
        gap: 45px;
        height: 100%;
    }
    .pgn-menu-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 8px;
        text-decoration: none;
        position: relative;
        height: 100%;
        color: white;
        transition: transform 0.3s ease;
    }
    .pgn-menu-item:hover {
        transform: translateY(-3px);
        color: white;
    }
    .pgn-menu-icon {
        font-size: 16px;
        color: rgba(255,255,255,.9);
        transition: transform 0.3s ease;
    }
    .pgn-menu-item:hover .pgn-menu-icon {
        transform: scale(1.1);
    }
    .pgn-menu-text {
        font-size: 15px;
        font-weight: 500;
        color: white;
        display: flex;
        align-items: center;
    }
    .pgn-menu-text i {
        font-size: 11px;
        opacity: 0.7;
        margin-left: 6px;
    }

    /* Active Item Underline */
    .pgn-menu-item.active::after {
        content: '';
        position: absolute;
        bottom: 6px;
        left: 50%;
        transform: translateX(-50%);
        width: 60%;
        height: 3px;
        background-color: #d6c09b;
        border-radius: 2px;
        box-shadow: 0 0 10px #d6c09b;
    }

    /* Dropdowns */
    .pgn-dropdown {
        position: relative;
        height: 100%;
        display: flex;
        align-items: center;
    }
    .pgn-dropdown-menu {
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%) translateY(20px);
        background: linear-gradient(135deg, rgba(2,20,44,0.95), rgba(0,17,34,0.95));
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255,255,255,.2);
        border-radius: 20px;
        padding: 15px;
        min-width: max-content;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 0 40px rgba(177,152,111,.25);
        z-index: 1001;
        display: flex;
        flex-direction: row;
        gap: 10px;
    }
    .pgn-dropdown:hover .pgn-dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateX(-50%) translateY(0px);
    }
    .pgn-dropdown-item {
        color: white;
        text-decoration: none;
        padding: 12px 18px;
        border-radius: 12px;
        transition: background 0.3s;
        font-size: 15px;
        font-weight: 500;
        display: block;
        white-space: nowrap;
    }
    .pgn-dropdown-item:hover {
        background: rgba(177, 152, 111,.2);
        color: #d6c09b;
    }

    /* Theme Toggle Button */
    .pgn-theme-btn {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.2);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-right: 20px;
    }
    .pgn-theme-btn:hover {
        background: rgba(255,255,255,0.15);
        box-shadow: 0 0 15px rgba(255,255,255,0.3);
        transform: translateY(-2px);
    }
    .pgn-theme-btn i.fa-sun {
        color: #fbbf24;
        text-shadow: 0 0 10px #fbbf24;
    }

    /* CTA Button */
    .pgn-btn-book {
        width: 200px;
        height: 55px;
        border-radius: 30px;
        background: linear-gradient(135deg, #495746, #5a6956);
        border: 1px solid rgba(255,255,255,.25);
        box-shadow: 0 0 30px rgba(177, 152, 111,.5), 0 10px 30px rgba(177, 152, 111,.25);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        text-decoration: none;
        font-size: 16px;
        font-weight: 600;
        color: #fff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        flex-shrink: 0;
        margin-right: 15px;
    }
    .pgn-btn-book:hover {
        transform: translateY(-4px);
        box-shadow: 0 0 40px rgba(177, 152, 111,.7);
        color: #fff;
    }

    /* Responsive Adjustments for Desktop/Tablet */
    @media (max-width: 1600px) {
        .pgn-menu-section { gap: 30px; }
        .pgn-menu-text { font-size: 15px; }
        .pgn-menu-icon { font-size: 16px; }
        .pgn-btn-book { width: 220px; height: 60px; font-size: 16px; border-radius: 25px; }
    }
    @media (max-width: 1300px) {
        .pgn-logo-title { font-size: 32px; }
        .pgn-logo-icon i { font-size: 34px; }
        .pgn-btn-book { width: 180px; height: 55px; font-size: 16px; border-radius: 20px; padding: 0 15px; }
        .pgn-btn-book i { font-size: 18px !important; }
        .pgn-menu-text { font-size: 14px; }
        .pgn-menu-icon { font-size: 16px; }
        .pgn-divider { margin: 0 10px; }
    }

    /* ============================================
       MOBILE NAV STYLES
    ============================================ */
    .premium-glass-nav-mobile {
        width: 95%;
        height: 85px;
        border-radius: 40px;
        margin: 15px auto;
        background: linear-gradient(135deg, #3f4b3d, #495746, #3f4b3d);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 2px solid rgba(255,255,255,.35);
        box-shadow: 0 10px 30px rgba(0,0,0,.35), 0 0 30px rgba(177, 152, 111,.15);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 20px 0 25px;
        position: relative;
        z-index: 1000;
        font-family: 'Inter', sans-serif;
    }

    .pgn-logo-section-mobile {
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
        flex: 1;
        min-width: 0;
    }

    .pgn-mobile-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 18px;
        font-weight: 600;
        color: white;
        line-height: 1;
        white-space: nowrap;
    }

    /* Mobile right controls (theme toggle + hamburger only) */
    .pgn-mobile-controls {
        display: flex;
        align-items: center;
        gap: 10px;
        flex-shrink: 0;
    }

    /* Mobile theme toggle - always visible on dark nav bg */
    .pgn-mobile-theme-btn {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: rgba(255,255,255,0.12);
        border: 1px solid rgba(255,255,255,0.3);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        cursor: pointer;
        transition: all 0.3s ease;
        margin: 0;
    }
    .pgn-mobile-theme-btn:hover {
        background: rgba(255,255,255,0.22);
        box-shadow: 0 0 12px rgba(255,255,255,0.2);
    }
    .pgn-mobile-theme-btn i.fa-sun {
        color: #fbbf24;
        text-shadow: 0 0 8px #fbbf24;
    }

    /* Hamburger toggle - clearly styled */
    .pgn-mobile-toggle {
        width: 42px;
        height: 42px;
        border-radius: 12px;
        background: rgba(214, 192, 155, 0.25);
        border: 1px solid rgba(214, 192, 155, 0.5);
        color: #f0e4cc;
        font-size: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .pgn-mobile-toggle:hover,
    .pgn-mobile-toggle.open {
        background: rgba(214, 192, 155, 0.45);
        color: white;
        box-shadow: 0 0 15px rgba(177, 152, 111, 0.4);
    }

    /* Mobile Slide-down Menu */
    .pgn-mobile-menu {
        position: fixed;
        top: 102px;
        left: 2.5%;
        width: 95%;
        background: linear-gradient(160deg, rgba(20, 35, 18, 0.97), rgba(30, 50, 28, 0.97));
        backdrop-filter: blur(24px);
        -webkit-backdrop-filter: blur(24px);
        border: 1px solid rgba(255,255,255,.15);
        border-radius: 28px;
        padding: 24px 20px;
        display: none;
        flex-direction: column;
        gap: 6px;
        z-index: 999;
        box-shadow: 0 20px 60px rgba(0,0,0,.5), 0 0 40px rgba(177,152,111,.15);
        font-family: 'Inter', sans-serif;
        max-height: 82vh;
        overflow-y: auto;
    }

    .pgn-mobile-item {
        color: rgba(255,255,255,0.9);
        text-decoration: none;
        font-size: 16px;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 13px 18px;
        border-radius: 14px;
        transition: background 0.25s, color 0.25s;
    }
    .pgn-mobile-item i {
        font-size: 16px;
        color: #b1986f;
        width: 20px;
        text-align: center;
        flex-shrink: 0;
    }
    .pgn-mobile-item:hover {
        background: rgba(177, 152, 111, 0.15);
        color: white;
    }
    .pgn-mobile-item.active {
        background: rgba(177, 152, 111,.2);
        border: 1px solid rgba(177, 152, 111,.45);
        color: white;
    }

    .pgn-mobile-subitem {
        color: rgba(255,255,255,0.55);
        text-decoration: none;
        font-size: 14px;
        padding: 9px 18px 9px 52px;
        display: block;
        border-radius: 10px;
        transition: color 0.25s, background 0.25s;
    }
    .pgn-mobile-subitem:hover {
        color: rgba(255,255,255,0.85);
        background: rgba(255,255,255,0.05);
    }

    /* Book Online button INSIDE the mobile menu */
    .pgn-mobile-book-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-top: 14px;
        padding: 14px 20px;
        border-radius: 16px;
        background: linear-gradient(135deg, #b1986f, #9f875e);
        border: 1px solid rgba(255,255,255,0.2);
        color: white;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        box-shadow: 0 4px 20px rgba(177, 152, 111, 0.4);
        transition: all 0.3s ease;
    }
    .pgn-mobile-book-btn:hover {
        background: linear-gradient(135deg, #c3ab83, #b1986f);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(177, 152, 111, 0.55);
    }

    /* Mobile menu divider */
    .pgn-mobile-divider {
        height: 1px;
        background: rgba(255,255,255,0.1);
        margin: 8px 0;
        border-radius: 1px;
    }

    /* Logo Theme Visibility */
    body.light-theme .logo-dark { display: none; }
    body.light-theme .logo-light { display: block; }
    body.dark-theme .logo-light { display: none; }
    body.dark-theme .logo-dark { display: block; }

    /* Light Theme Navbar Overrides */
    body.light-theme .premium-glass-nav,
    body.light-theme .premium-glass-nav-mobile,
    body.light-theme .pgn-mobile-menu {
        background: rgba(255, 255, 255, 0.85);
        border: 2px solid rgba(0, 0, 0, 0.05);
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }
    body.light-theme .pgn-menu-item,
    body.light-theme .pgn-menu-text,
    body.light-theme .pgn-mobile-title,
    body.light-theme .pgn-mobile-item {
        color: #3f4b3d;
    }
    body.light-theme .pgn-menu-icon,
    body.light-theme .pgn-mobile-item i {
        color: #495746;
    }
    body.light-theme .pgn-divider,
    body.light-theme .pgn-mobile-divider {
        background: rgba(0,0,0,.1);
    }
    body.light-theme .pgn-theme-btn,
    body.light-theme .pgn-mobile-theme-btn,
    body.light-theme .pgn-mobile-toggle {
        background: rgba(0,0,0,0.05);
        border: 1px solid rgba(0,0,0,0.1);
        color: #3f4b3d;
    }
    body.light-theme .pgn-dropdown-menu {
        background: rgba(255, 255, 255, 0.95);
        border: 1px solid rgba(0,0,0,.1);
    }
    body.light-theme .pgn-dropdown-item {
        color: #3f4b3d;
    }
    body.light-theme .pgn-dropdown-item:hover {
        background: rgba(0,0,0,.05);
        color: #b1986f;
    }
    body.light-theme .pgn-mobile-subitem {
        color: rgba(63, 75, 61, 0.7);
    }
    body.light-theme .pgn-mobile-subitem:hover {
        color: #3f4b3d;
        background: rgba(0,0,0,0.05);
    }
</style>

<!-- Initial Theme Script to Prevent FOUC -->
<script>
(function() {
    const savedTheme = localStorage.getItem('iconDentalTheme') || 'light';
    if (savedTheme === 'dark') {
        document.body.classList.add('dark-theme');
        document.body.classList.remove('light-theme');
    } else {
        document.body.classList.add('light-theme');
        document.body.classList.remove('dark-theme');
    }
})();
</script>

<!-- Desktop Navigation -->
<nav class="premium-glass-nav d-none d-xl-flex">
    <!-- Logo -->
    <a href="/icon-dental/index.php" class="pgn-logo-section">
        <img src="/icon-dental/assets/images/logo-light.png" alt="Icon Dental" class="logo-light" style="height: 90px;">
        <img src="/icon-dental/assets/images/logo-dark.png" alt="Icon Dental" class="logo-dark" style="height: 90px;">
    </a>
    
    <div class="pgn-divider"></div>

    <!-- Menu -->
    <div class="pgn-menu-section">
        <!-- Home -->
        <a href="/icon-dental/index.php" class="pgn-menu-item <?= ($current_page == 'index.php') ? 'active' : '' ?>">
            <i class="fa-solid fa-house pgn-menu-icon"></i>
            <span class="pgn-menu-text">Home</span>
        </a>
        
        <!-- About Dropdown -->
        <div class="pgn-dropdown">
            <a href="/icon-dental/about.php" class="pgn-menu-item <?= (strpos($current_page, 'about') !== false || strpos($current_page, 'smile-stories') !== false || strpos($current_page, 'meet-the-team') !== false || strpos($current_page, 'why-choose-us') !== false) ? 'active' : '' ?>">
                <i class="fa-solid fa-user-group pgn-menu-icon"></i>
                <span class="pgn-menu-text">About <i class="fa-solid fa-chevron-down"></i></span>
            </a>
            <div class="pgn-dropdown-menu">
                <a href="/icon-dental/about.php" class="pgn-dropdown-item">About Us</a>
                <a href="/icon-dental/about/why-choose-us.php" class="pgn-dropdown-item">Why Choose Us</a>
                <a href="/icon-dental/about/meet-the-team.php" class="pgn-dropdown-item">Meet The Team</a>
                <a href="/icon-dental/about/smile-stories.php" class="pgn-dropdown-item">Smile Stories</a>
            </div>
        </div>
        
        <!-- Treatments Dropdown -->
        <div class="pgn-dropdown">
            <a href="/icon-dental/treatments.php" class="pgn-menu-item <?= ($current_page == 'treatments.php') ? 'active' : '' ?>">
                <i class="fa-solid fa-tooth pgn-menu-icon"></i>
                <span class="pgn-menu-text">Treatments <i class="fa-solid fa-chevron-down"></i></span>
            </a>
            <div class="pgn-dropdown-menu">
                <a href="/icon-dental/treatments.php" class="pgn-dropdown-item">View All Treatments</a>
                <a href="/icon-dental/treatments/general-dentistry.php" class="pgn-dropdown-item">General Dentistry</a>
                <a href="/icon-dental/treatments/cosmetic-dentistry.php" class="pgn-dropdown-item">Cosmetic Dentistry</a>
                <a href="/icon-dental/treatments/orthodontics.php" class="pgn-dropdown-item">Orthodontics</a>
                <a href="/icon-dental/treatments.php#implants" class="pgn-dropdown-item">Dental Implants</a>
            </div>
        </div>
        
        <!-- Fees & Membership -->
        <a href="/icon-dental/fees-membership.php" class="pgn-menu-item <?= ($current_page == 'fees-membership.php') ? 'active' : '' ?>">
            <i class="fa-regular fa-credit-card pgn-menu-icon"></i>
            <span class="pgn-menu-text">Fees &amp; Membership</span>
        </a>
        
        <!-- For Dentists Dropdown -->
        <div class="pgn-dropdown">
            <a href="/icon-dental/for-dentists.php" class="pgn-menu-item <?= ($current_page == 'for-dentists.php') ? 'active' : '' ?>">
                <i class="fa-solid fa-user-doctor pgn-menu-icon"></i>
                <span class="pgn-menu-text">For Dentists <i class="fa-solid fa-chevron-down"></i></span>
            </a>
            <div class="pgn-dropdown-menu">
                <a href="/icon-dental/for-dentists.php" class="pgn-dropdown-item">Refer a Patient</a>
                <a href="/icon-dental/for-dentists.php#careers" class="pgn-dropdown-item">Education &amp; Careers</a>
            </div>
        </div>
    </div>

    <div class="pgn-divider"></div>
    
    <div class="d-flex align-items-center">
        <!-- Theme Toggle -->
        <button id="desktopThemeToggle" class="pgn-theme-btn">
            <i class="fa-solid fa-moon"></i>
        </button>

        <!-- CTA Button -->
        <a href="#" class="pgn-btn-book">
            <i class="fa-regular fa-calendar" style="font-size:24px;"></i> 
            Book Online 
            <i class="fa-solid fa-arrow-right" style="font-size:20px;"></i>
        </a>
    </div>
</nav>

<!-- Mobile Navigation - Logo + Theme Toggle + Hamburger ONLY -->
<nav class="premium-glass-nav-mobile d-xl-none">
    <a href="/icon-dental/index.php" class="pgn-logo-section-mobile">
        <img src="/icon-dental/assets/images/logo-light.png" alt="Icon Dental" class="logo-light" style="height: 65px;">
        <img src="/icon-dental/assets/images/logo-dark.png" alt="Icon Dental" class="logo-dark" style="height: 65px;">
    </a>
    
    <div class="pgn-mobile-controls">
        <!-- Theme Toggle -->
        <button id="mobileThemeToggle" class="pgn-mobile-theme-btn">
            <i class="fa-solid fa-moon"></i>
        </button>

        <!-- Hamburger -->
        <button class="pgn-mobile-toggle" id="pgnMobileToggle" aria-label="Open menu">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</nav>

<!-- Mobile Slide-Down Menu -->
<div class="pgn-mobile-menu" id="pgnMobileMenu">
    <a href="/icon-dental/index.php" class="pgn-mobile-item <?= ($current_page == 'index.php') ? 'active' : '' ?>">
        <i class="fa-solid fa-house"></i> Home
    </a>
    
    <a href="/icon-dental/about.php" class="pgn-mobile-item <?= (strpos($current_page, 'about') !== false) ? 'active' : '' ?>">
        <i class="fa-solid fa-user-group"></i> About
    </a>
    <a href="/icon-dental/about/why-choose-us.php" class="pgn-mobile-subitem">Why Choose Us</a>
    <a href="/icon-dental/about/meet-the-team.php" class="pgn-mobile-subitem">Meet The Team</a>
    <a href="/icon-dental/about/smile-stories.php" class="pgn-mobile-subitem">Smile Stories</a>
    
    <a href="/icon-dental/treatments.php" class="pgn-mobile-item <?= ($current_page == 'treatments.php') ? 'active' : '' ?>">
        <i class="fa-solid fa-tooth"></i> Treatments
    </a>
    <a href="/icon-dental/treatments/general-dentistry.php" class="pgn-mobile-subitem">General Dentistry</a>
    <a href="/icon-dental/treatments/cosmetic-dentistry.php" class="pgn-mobile-subitem">Cosmetic Dentistry</a>
    <a href="/icon-dental/treatments/orthodontics.php" class="pgn-mobile-subitem">Orthodontics</a>
    <a href="/icon-dental/treatments.php#implants" class="pgn-mobile-subitem">Dental Implants</a>
    
    <a href="/icon-dental/fees-membership.php" class="pgn-mobile-item <?= ($current_page == 'fees-membership.php') ? 'active' : '' ?>">
        <i class="fa-regular fa-credit-card"></i> Fees &amp; Membership
    </a>
    
    <a href="/icon-dental/for-dentists.php" class="pgn-mobile-item <?= ($current_page == 'for-dentists.php') ? 'active' : '' ?>">
        <i class="fa-solid fa-user-doctor"></i> For Dentists
    </a>
    <a href="/icon-dental/for-dentists.php#careers" class="pgn-mobile-subitem">Education &amp; Careers</a>

    <div class="pgn-mobile-divider"></div>

    <!-- Book Online button inside hamburger menu -->
    <a href="#" class="pgn-mobile-book-btn">
        <i class="fa-regular fa-calendar"></i>
        Book Online
        <i class="fa-solid fa-arrow-right"></i>
    </a>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Theme Toggle Logic
    const desktopToggle = document.getElementById('desktopThemeToggle');
    const mobileThemeToggle = document.getElementById('mobileThemeToggle');
    const body = document.body;

    function updateThemeIcons() {
        const isDark = body.classList.contains('dark-theme');
        
        [desktopToggle, mobileThemeToggle].forEach(function(btn) {
            if (!btn) return;
            const i = btn.querySelector('i');
            if (isDark) {
                i.classList.remove('fa-moon');
                i.classList.add('fa-sun');
            } else {
                i.classList.remove('fa-sun');
                i.classList.add('fa-moon');
            }
        });
    }

    function toggleTheme() {
        if (body.classList.contains('dark-theme')) {
            body.classList.remove('dark-theme');
            body.classList.add('light-theme');
            localStorage.setItem('iconDentalTheme', 'light');
        } else {
            body.classList.add('dark-theme');
            body.classList.remove('light-theme');
            localStorage.setItem('iconDentalTheme', 'dark');
        }
        updateThemeIcons();
    }

    if (desktopToggle) desktopToggle.addEventListener('click', toggleTheme);
    if (mobileThemeToggle) mobileThemeToggle.addEventListener('click', toggleTheme);

    // Initial Icon State
    updateThemeIcons();

    // Mobile Menu Toggle
    const mobileNavToggle = document.getElementById('pgnMobileToggle');
    const mobileMenu = document.getElementById('pgnMobileMenu');
    
    if (mobileNavToggle && mobileMenu) {
        mobileNavToggle.addEventListener('click', function() {
            const isOpen = mobileMenu.style.display === 'flex';
            if (isOpen) {
                mobileMenu.style.display = 'none';
                mobileNavToggle.classList.remove('open');
                mobileNavToggle.querySelector('i').classList.replace('fa-xmark', 'fa-bars');
            } else {
                mobileMenu.style.display = 'flex';
                mobileNavToggle.classList.add('open');
                mobileNavToggle.querySelector('i').classList.replace('fa-bars', 'fa-xmark');
            }
        });

        // Close menu when clicking a link
        mobileMenu.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
                mobileMenu.style.display = 'none';
                mobileNavToggle.classList.remove('open');
                mobileNavToggle.querySelector('i').classList.replace('fa-xmark', 'fa-bars');
            });
        });
    }
});
</script>



