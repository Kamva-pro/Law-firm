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
<?php include_once __DIR__ . '/includes/header.php'; ?>

<main>

<section class="hero">
    <div class="container ">
        <div class="hero-content typing-wrapper">
            <h1 class="typing">Justice Should Be Accessible To All</h1>
            <p >Providing high-quality, affordable legal services to disadvantaged communities in South Africa.</p>
            <div class="hero-btns">
                <a href="services.php" class="btn btn-primary">Our Services</a>
                <a href="contact.php" class="btn btn-secondary">Free Consultation</a>
            </div>
        </div>
    </div>
</section>

<div id="progress-bar"></div>

<section class="mission-section ">
    <div class="container">
        <div class="mission-content">
            <div class="mission-image slide-up-animation">
                <img class="fade-in" src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Legal team meeting" loading="lazy">
                <div class="image-overlay"></div>
            </div>
            <div class="mission-text">
                <div class="section-header slide-up-animation">
                    <span class="section-badge">Our Commitment</span>
                    <h2>Equal Justice For All</h2>
                    <p id="dark-sub" class="subtitle">Bridging the gap in legal access for underserved communities</p>
                </div>
                <div class="mission-statement slide-up-animation">
                    <p class="fade-in">At Justice For All Legal Consultancy, we believe quality legal representation should be accessible to everyone, regardless of financial circumstances. Our dedicated team provides affordable expertise across multiple practice areas.</p>
                    
                    <div class="mission-points">
                        <div class="point slide-up-animation">
                            <div class="outer-point fade-in">
                            <i class="fas fa-scale-balanced"></i>
                            <h4>Comprehensive Legal Support</h4>
                            </div>
                            
                            <p class="fade-in">Specializing in labour, contracts, criminal, and civil law matters</p>
                        </div>
                        <div class="point slide-up-animation">
                            <div class="outer-point fade-in">
                            <i class="fas fa-hand-holding-heart"></i>
                            <h4>Community Focused</h4>
                            </div>
                            
                            <p class="slide-up-animation">Tailored solutions for individuals and organizations in need</p>
                        </div>
                    </div>
                    
                    <a href="about.php" class="btn btn-outline fade-in-animation">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-preview">
    <div class="container">
        <div class="section-header slide-up-animation">
            <h2>Our Legal Services</h2>
            <p>Expert legal advice at affordable rates</p>
        </div>
        <div class="services-grid">
            <div class="service-card slide-up-animation">
                <div class="service-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3>Labour Law</h3>
                <p>Employment contracts, disputes, unfair labour practices, and workers' compensation.</p>
                <a href="services.php#labour" class="btn btn-text">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card slide-up-animation">
                <div class="service-icon">
                    <i class="fas fa-file-contract"></i>
                </div>
                <h3>Contracts</h3>
                <p>Drafting, reviewing, and negotiating contracts for individuals and small businesses.</p>
                <a href="services.php#contracts" class="btn btn-text">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card slide-up-animation">
                <div class="service-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3>Criminal Law</h3>
                <p>Providing defense against criminal charges, bail applications, and managing appeals.</p>
                <a href="services.php#criminal" class="btn btn-text">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card slide-up-animation">
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
        <div class="section-header slide-up-animation">
            <h2>Affordable Pricing</h2>
            <p>Flexible fee structures to meet your needs</p>
        </div>
        <div class="pricing-grid">
            <div class="pricing-card slide-up-animation">
                <h3>Hourly Rates</h3>
                <div class="price">R250 - R650</div>
                <p>Depending on the lawyer's experience and case complexity</p>
            </div>
            <div class="pricing-card featured fade-in">
                <h3>Flat Rates</h3>
                <div class="price">R500 - R1,000</div>
                <p>Per matter depending on complexity</p>
            </div>
            <div class="pricing-card slide-up-animation">
                <h3>Discounts Available</h3>
                <div class="price">Special Rates</div>
                <p>For low-income individuals and non-profit organizations</p>
            </div>
        </div>
        <div class="text-center slide-up-animation">
            <a href="contact.php" class="btn btn-primary">Get a Free Quote</a>
        </div>
    </div>
</section>

<section class="testimonials ">
    <div class="container">
        <div class="section-header fade-in fade-in-animation">
            <h2>Client Testimonials</h2>
            <p>Hear from those we've helped</p>
        </div>
        
        <div class="testimonial-carousel">
            <div class="testimonial-slide active fade-in-animation">
                <div class="testimonial-content">
                    <div class="client-image">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" alt="Thabo M." loading="lazy">
                    </div>
                    <div class="testimonial-text">
                        <div class="quote-icon">"</div>
                        <p>Justice For All helped me with my unfair dismissal case when no other firm would take my case. They were professional and affordable.</p>
                        <div class="client-info">
                            <div class="author-name">Thabo M.</div>
                            <div class="author-title">Former Client</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-slide fade-in">
                <div class="testimonial-content">
                    <div class="client-image">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" alt="Nomsa K." loading="lazy">
                    </div>
                    <div class="testimonial-text">
                        <div class="quote-icon">"</div>
                        <p>As a small business owner, I couldn't afford expensive legal fees. Justice For All provided excellent contract review services at a price I could afford.</p>
                        <div class="client-info">
                            <div class="author-name">Nomsa K.</div>
                            <div class="author-title">Small Business Owner</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <button class="carousel-nav prev" aria-label="Previous testimonial">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="carousel-nav next" aria-label="Next testimonial">
                <i class="fas fa-chevron-right"></i>
            </button>
            
            <div class="carousel-indicators">
                <button class="indicator active" aria-label="Show testimonial 1"></button>
                <button class="indicator" aria-label="Show testimonial 2"></button>
            </div>
        </div>
    </div>
</section>
</main>
<script src="/assets/js/main.js">

</script>


<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
