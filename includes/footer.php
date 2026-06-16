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
