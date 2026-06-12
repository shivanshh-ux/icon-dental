<?php
// includes/footer.php

date_default_timezone_set('Europe/London');
$currentDay = date('N'); // 1 (Mon) to 7 (Sun)
$currentHour = (int)date('G');
$isOpen = false;

if ($currentDay >= 1 && $currentDay <= 3) {
    if ($currentHour >= 9 && $currentHour < 17) $isOpen = true;
} elseif ($currentDay == 5) {
    if ($currentHour >= 9 && $currentHour < 15) $isOpen = true;
}
?>
<style>
    .editorial-footer {
        /* Light Theme Default */
        --footer-bg: #fdfdfd;
        --footer-text-title: #1e293b;
        --footer-text-body: #475569;
        --footer-border: rgba(0, 0, 0, 0.08);
        --footer-bg-text-color: rgba(0, 0, 0, 0.06);
        --footer-hover-link: #0f172a;
        --footer-copyright: #64748b;
        --footer-hours-right: #1e293b;

        background: var(--footer-bg);
        color: var(--footer-text-body);
        padding: 100px 0 40px;
        font-family: 'Inter', sans-serif;
        position: relative;
        overflow: hidden;
        border-top: 1px solid var(--footer-border);
        transition: background 0.3s ease, border-color 0.3s ease;
    }

    /* Dark Theme Overrides */
    body.dark-theme .editorial-footer {
        --footer-bg: linear-gradient(90deg, #2c352a, #3f4b3d, #2c352a);
        --footer-text-title: #ffffff;
        --footer-text-body: rgba(255, 255, 255, 0.7);
        --footer-border: rgba(255, 255, 255, 0.05);
        --footer-bg-text-color: rgba(255, 255, 255, 0.03);
        --footer-hover-link: #ffffff;
        --footer-copyright: rgba(255, 255, 255, 0.4);
        --footer-hours-right: #ffffff;
    }
    
    /* Massive Typographic Background */
    .footer-bg-text {
        position: absolute;
        bottom: 2vw;
        left: 0;
        width: 100%;
        text-align: center;
        font-family: 'Cormorant Garamond', serif;
        font-size: 14.5vw;
        font-weight: 700;
        color: var(--footer-bg-text-color);
        white-space: nowrap;
        pointer-events: none;
        z-index: 0;
        line-height: 0.8;
        letter-spacing: 0px;
        transition: color 0.3s ease;
    }

    .footer-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 40px;
        position: relative;
        z-index: 1;
    }

    /* Horizontal Contact Bar at the top */
    .footer-top-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-bottom: 60px;
        margin-bottom: 60px;
        border-bottom: 1px solid var(--footer-border);
        flex-wrap: wrap;
        gap: 30px;
        transition: border-color 0.3s ease;
    }

    .footer-brand-logo {
        display: flex;
        align-items: center;
        gap: 15px;
        text-decoration: none;
    }

    .footer-brand-logo i {
        font-size: 32px;
        color: #b1986f;
    }

    .footer-brand-logo span {
        font-family: 'Cormorant Garamond', serif;
        font-size: 32px;
        font-weight: 600;
        color: var(--footer-text-title);
        letter-spacing: 1px;
        transition: color 0.3s ease;
    }

    .footer-contact-row {
        display: flex;
        gap: 60px;
        flex-wrap: wrap;
    }

    .footer-contact-item {
        display: flex;
        align-items: center;
        gap: 12px;
        color: var(--footer-text-body);
        font-size: 15px;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer-contact-item:hover {
        color: #b1986f;
    }

    .footer-contact-item i {
        color: #b1986f;
        font-size: 18px;
    }

    /* Asymmetrical Grid */
    .footer-asymmetric-grid {
        display: grid;
        grid-template-columns: 2.5fr 1fr 1fr 1.5fr;
        gap: 60px;
        margin-bottom: 80px;
    }

    .footer-manifesto {
        max-width: 400px;
    }

    .footer-manifesto h3 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 36px;
        font-weight: 400;
        color: var(--footer-text-title);
        margin-bottom: 24px;
        line-height: 1.2;
        transition: color 0.3s ease;
    }

    .footer-manifesto p {
        color: var(--footer-text-body);
        font-size: 16px;
        line-height: 1.7;
        transition: color 0.3s ease;
    }

    .footer-title {
        font-size: 12px;
        font-weight: 600;
        color: #b1986f;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 30px;
    }

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    /* Center-growing delicate underline hover effect */
    .footer-link-item {
        color: var(--footer-text-body);
        text-decoration: none;
        font-size: 15px;
        position: relative;
        display: inline-block;
        padding-bottom: 4px;
        transition: color 0.3s ease;
    }

    .footer-link-item::after {
        content: '';
        position: absolute;
        width: 0;
        height: 1px;
        bottom: 0;
        left: 50%;
        background-color: #b1986f;
        transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
        transform: translateX(-50%);
    }

    .footer-link-item:hover {
        color: var(--footer-hover-link);
    }

    .footer-link-item:hover::after {
        width: 100%;
    }

    .footer-hours {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .footer-hours li {
        display: flex;
        justify-content: space-between;
        color: var(--footer-text-body);
        font-size: 14px;
        transition: color 0.3s ease;
    }

    .footer-hours li span:last-child {
        color: var(--footer-hours-right);
        font-weight: 500;
        transition: color 0.3s ease;
    }
    
    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        margin-left: 10px;
    }
    
    .status-open {
        background: rgba(34, 197, 94, 0.15);
        color: #16a34a;
        border: 1px solid rgba(34, 197, 94, 0.3);
    }
    body.dark-theme .status-open { color: #4ade80; }
    
    .status-closed {
        background: rgba(239, 68, 68, 0.15);
        color: #dc2626;
        border: 1px solid rgba(239, 68, 68, 0.3);
    }
    body.dark-theme .status-closed { color: #f87171; }

    .footer-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 30px;
        border-top: 1px solid var(--footer-border);
        transition: border-color 0.3s ease;
    }

    .footer-copyright {
        color: var(--footer-copyright);
        font-size: 13px;
        letter-spacing: 0.5px;
        transition: color 0.3s ease;
    }

    .footer-socials {
        display: flex;
        gap: 24px;
    }

    .footer-social-link {
        color: var(--footer-text-body);
        font-size: 18px;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer-social-link:hover {
        color: #b1986f;
    }

    @media (max-width: 1199.98px) {
        .footer-asymmetric-grid {
            grid-template-columns: 1fr 1fr;
            row-gap: 60px;
        }
        .footer-manifesto {
            grid-column: 1 / -1;
            max-width: 600px;
        }
        .footer-contact-row {
            gap: 30px;
        }
    }

    @media (max-width: 767.98px) {
        .editorial-footer {
            padding: 80px 0 30px;
        }
        .footer-top-bar {
            flex-direction: column;
            align-items: flex-start;
            gap: 40px;
        }
        .footer-contact-row {
            flex-direction: column;
            gap: 20px;
        }
        .footer-asymmetric-grid {
            grid-template-columns: 1fr;
            gap: 50px;
        }
        .footer-bottom {
            flex-direction: column-reverse;
            gap: 24px;
            align-items: flex-start;
        }
    }

    /* Logo display logic based on theme */
    body.light-theme .logo-dark { display: none; }
    body.light-theme .logo-light { display: block; }
    body.dark-theme .logo-light { display: none; }
    body.dark-theme .logo-dark { display: block; }
</style>

<footer class="editorial-footer">
    <div class="footer-bg-text">ICON DENTAL</div>
    
    <div class="footer-container">
        
        <!-- Horizontal Top Bar -->
        <div class="footer-top-bar">
            <a href="/icon-dental/index.php" class="footer-brand-logo">
                <img src="/icon-dental/assets/images/logo-light.png" alt="Icon Dental" class="logo-light" style="height: 90px;">
                <img src="/icon-dental/assets/images/logo-dark.png" alt="Icon Dental" class="logo-dark" style="height: 90px;">
            </a>
            
            <div class="footer-contact-row">
                <a href="tel:02089983030" class="footer-contact-item">
                    <i class="fa-solid fa-phone"></i>
                    <span>Tel: 0208 998 3030</span>
                </a>
                <span class="footer-contact-item" style="cursor: default;">
                    <i class="fa-solid fa-fax"></i>
                    <span>Fax: 0208 998 4052</span>
                </span>
                <a href="mailto:info@ealingroaddental.co.uk" class="footer-contact-item">
                    <i class="fa-regular fa-envelope"></i>
                    <span>info@ealingroaddental.co.uk</span>
                </a>
                <div class="footer-contact-item">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>267A Ealing Road, Wembley, Middlesex, HA0 1EU</span>
                </div>
            </div>
        </div>

        <!-- Asymmetrical Content Grid -->
        <div class="footer-asymmetric-grid">
            
            <div class="footer-manifesto">
                <h3>Elevating the standard of modern dentistry.</h3>
                <p>We combine advanced technology with a premium patient experience. From routine care to complex cosmetic makeovers, we design smiles that exude health and confidence.</p>
            </div>

            <div>
                <h4 class="footer-title">Navigation</h4>
                <ul class="footer-links">
                    <li><a href="/icon-dental/index.php" class="footer-link-item">Home</a></li>
                    <li><a href="/icon-dental/about.php" class="footer-link-item">About Us</a></li>
                    <li><a href="/icon-dental/fees-membership.php" class="footer-link-item">Fees & Membership</a></li>
                    <li><a href="/icon-dental/for-dentists.php" class="footer-link-item">For Dentists</a></li>
                    <li><a href="/icon-dental/contact.php" class="footer-link-item">Contact Us</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-title">Expertise</h4>
                <ul class="footer-links">
                    <li><a href="/icon-dental/treatments.php#general" class="footer-link-item">General Dentistry</a></li>
                    <li><a href="/icon-dental/treatments.php#cosmetic" class="footer-link-item">Cosmetic Dentistry</a></li>
                    <li><a href="/icon-dental/treatments/bone-grafting.php" class="footer-link-item">Bone Grafting</a></li>
                    <li><a href="/icon-dental/treatments.php#implants" class="footer-link-item">Dental Implants</a></li>
                    <li><a href="/icon-dental/treatments.php#emergency" class="footer-link-item">Emergency Care</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-title">
                    Visiting Hours
                    <?php if ($isOpen): ?>
                        <span class="status-badge status-open"><i class="fa-solid fa-circle" style="font-size:8px;"></i> Open</span>
                    <?php else: ?>
                        <span class="status-badge status-closed"><i class="fa-solid fa-moon" style="font-size:10px;"></i> Closed</span>
                    <?php endif; ?>
                </h4>
                <ul class="footer-hours">
                    <li><span>Monday - Wednesday</span> <span>09:00 - 17:00</span></li>
                    <li><span>Thursday</span> <span>By Appointment Only</span></li>
                    <li><span>Friday</span> <span>09:00 - 15:00</span></li>
                    <li><span>Saturday - Sunday</span> <span>Closed</span></li>
                </ul>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="footer-bottom">
            <div class="footer-copyright">
                &copy; <?= date('Y') ?> ICON DENTAL WEMBLEY. ALL RIGHTS RESERVED.
            </div>
            <div class="footer-socials">
                <a href="#" class="footer-social-link"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="footer-social-link"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="footer-social-link"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>

    </div>
</footer>