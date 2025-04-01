<?php
require_once __DIR__ . '/config.php'; 
?>
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-about">
                <div class="footer-logo">
                    <a href="/law_firm/">
                        <span class="logo-text">Justice For All</span><br>
                        <span class="logo-subtext">Legal Consultancy</span>
                    </a> 
                </div>
                <p>Providing high-quality, affordable legal services to disadvantaged communities in South Africa.</p>
            </div>
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href=<?php echo BASE_URL; ?>>Home</a></li>
                    <li><a href="about">About Us</a></li>
                    <li><a href="services">Services</a></li>
                    <li><a href="attorneys">Our Team</a></li>
                     <li><a href="contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h3>Services</h3>
                <ul>
                    <li><a href="services#labour">Labour Law</a></li>
                    <li><a href="services#contracts">Contracts</a></li>
                    <li><a href="services#criminal">Criminal Law</a></li>
                    <li><a href="services#civil">Civil Law</a></li>
                </ul>
            </div>
            <div class="contact-info">
                <h3>Contact Us</h3>
                <p><i class="fas fa-map-marker-alt"></i> <?php echo SITE_ADDRESS; ?></p>
                <p><i class="fas fa-phone"></i> <?php echo SITE_PHONE; ?></p>
                <p><i class="fas fa-envelope"></i> <?php echo SITE_EMAIL; ?></p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; <?php echo date('Y'); ?> Justice For All Legal Consultancy. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<script src="assets/js/main.js"></script>
</body>
</html>