<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$pageTitle = "Affordable Legal Services for Disadvantaged Communities";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main>

<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>Justice Should Be Accessible To All</h1>
            <p>Providing high-quality, affordable legal services to disadvantaged communities in South Africa.</p>
            <div class="hero-btns">
                <a href="services.php" class="btn btn-primary">Our Services</a>
                <a href="contact.php" class="btn btn-secondary">Free Consultation</a>
            </div>
        </div>
    </div>
</section>

<section class="about-preview">
    <div class="container">
        <div class="section-header">
            <h2>Our Mission</h2>
            <p>To bridge the gap in access to justice and empower underserved communities</p>
        </div>
        <div class="mission-statement">
            <p>At Justice For All Legal Consultancy, we believe that everyone deserves quality legal representation regardless of their financial situation. We specialize in providing affordable legal services in labour, contracts, criminal, and civil law matters.</p>
        </div>
    </div>
</section>

<section class="services-preview">
    <div class="container">
        <div class="section-header">
            <h2>Our Legal Services</h2>
            <p>Expert legal advice at affordable rates</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3>Labour Law</h3>
                <p>Employment contracts, disputes, unfair labour practices, and workers' compensation.</p>
                <a href="services.php#labour" class="btn btn-text">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-file-contract"></i>
                </div>
                <h3>Contracts</h3>
                <p>Drafting, reviewing, and negotiating contracts for individuals and small businesses.</p>
                <a href="services.php#contracts" class="btn btn-text">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3>Criminal Law</h3>
                <p>Defense against criminal charges, bail applications, and appeals.</p>
                <a href="services.php#criminal" class="btn btn-text">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3>Civil Law</h3>
                <p>Litigation, dispute resolution, and family law matters including divorce and child custody.</p>
                <a href="services.php#civil" class="btn btn-text">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="pricing-section">
    <div class="container">
        <div class="section-header">
            <h2>Affordable Pricing</h2>
            <p>Flexible fee structures to meet your needs</p>
        </div>
        <div class="pricing-grid">
            <div class="pricing-card">
                <h3>Hourly Rates</h3>
                <div class="price">R250 - R650</div>
                <p>Depending on the lawyer's experience and case complexity</p>
            </div>
            <div class="pricing-card featured">
                <h3>Flat Rates</h3>
                <div class="price">R500 - R1,000</div>
                <p>Per matter depending on complexity</p>
            </div>
            <div class="pricing-card">
                <h3>Discounts Available</h3>
                <div class="price">Special Rates</div>
                <p>For low-income individuals and non-profit organizations</p>
            </div>
        </div>
        <div class="text-center">
            <a href="contact.php" class="btn btn-primary">Get a Free Quote</a>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <div class="section-header">
            <h2>Client Testimonials</h2>
            <p>Hear from those we've helped</p>
        </div>
        <div class="testimonial-slider">
            <div class="testimonial">
                <div class="testimonial-content">
                    <p>"Justice For All helped me with my unfair dismissal case when no other firm would take my case. They were professional and affordable."</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-name">Thabo M.</div>
                    <div class="author-title">Former Client</div>
                </div>
            </div>
            <div class="testimonial">
                <div class="testimonial-content">
                    <p>"As a small business owner, I couldn't afford expensive legal fees. Justice For All provided excellent contract review services at a price I could afford."</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-name">Nomsa K.</div>
                    <div class="author-title">Small Business Owner</div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>


<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
