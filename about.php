<?php 
$pageTitle = "About Our Firm";
include 'includes/header.php'; 
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<main>
    <section class="about-hero">
        <div class="container">
            <div class="hero-content">
                <h1>Justice For All Legal Consultancy</h1>
                <p class="subtitle">Bridging the gap in access to justice for underserved communities</p>
                <div class="stats-grid">
                    <div class="stat-item">
                        <span class="stat-number" data-count="500">0</span>+
                        <span class="stat-label">Cases Handled</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number" data-count="15">0</span>+
                        <span class="stat-label">Years Combined Experience</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number" data-count="98">0</span>%
                        <span class="stat-label">Client Satisfaction</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mission-section">
        <div class="container">
            <div class="mission-content">
                <div class="mission-text">
                    <span class="section-badge">Our Mission</span>
                    <h2>Making Legal Services Accessible</h2>
                    <p class="lead">We believe everyone deserves quality legal representation, regardless of financial circumstances.</p>
                    <p>Founded in 2010, Justice For All was created to address the growing justice gap in South Africa. Our team of dedicated attorneys specializes in providing affordable legal services to individuals and businesses who might otherwise go without proper representation.</p>
                    <div class="mission-points">
                        <div class="point">
                            <i class="fas fa-scale-balanced"></i>
                            <h4>Equal Access</h4>
                            <p>Sliding scale fees and flexible payment options</p>
                        </div>
                        <div class="point">
                            <i class="fas fa-hand-holding-heart"></i>
                            <h4>Community Focus</h4>
                            <p>Deeply invested in the communities we serve</p>
                        </div>
                        <!-- <div class="point">
                            <i class="fas fa-gavel"></i>
                            <h4>Expertise</h4>
                            <p>Specialized knowledge across multiple practice areas</p>
                        </div> -->
                    </div>
                </div>
                <div class="mission-image">
                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Our Team in Discussion" loading="lazy">
                    <!-- <div class="experience-badge">
                        <span class="years">10+</span>
                        <span class="label">Years Serving Communities</span>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <section class="values-section">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Our Values</span>
                <h2>The Principles That Guide Us</h2>
            </div>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-universal-access"></i>
                    </div>
                    <h3>Accessibility</h3>
                    <p>We remove financial barriers through affordable rates and flexible payment plans.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Excellence</h3>
                    <p>While affordable, we never compromise on the quality of our legal work.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-people-group"></i>
                    </div>
                    <h3>Community</h3>
                    <p>We're part of the neighborhoods we serve, not just another law firm.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-shield-halved"></i>
                    </div>
                    <h3>Integrity</h3>
                    <p>Honest advice you can trust, even when it's not what you want to hear.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Preview -->
    <section class="team-preview">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Our Team</span>
                <h2>Meet Our Dedicated Attorneys</h2>
                <p class="subtitle">Passionate legal professionals committed to social justice</p>
            </div>
            <div class="team-grid">
                <div class="team-card">
                    <div class="team-image">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" alt="Adv. Thando Nkosi" loading="lazy">
                    </div>
                    <div class="team-info">
                        <h3>Adv. Thando Nkosi</h3>
                        <p class="position">Senior Partner - Labour Law</p>
                        <p class="bio">15+ years experience fighting for workers' rights</p>
                        <a href="attorneys#thando" class="btn btn-text">View Profile <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="team-card">
                    <div class="team-image">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" alt="Adv. Lerato Mbeki" loading="lazy">
                    </div>
                    <div class="team-info">
                        <h3>Adv. Lerato Mbeki</h3>
                        <p class="position">Partner - Criminal Defense</p>
                        <p class="bio">Former public defender with trial expertise</p>
                        <a href="attorneys#lerato" class="btn btn-text">View Profile <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="attorneys" class="btn btn-primary">Meet Full Team</a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="about-cta">
        <div class="container">
            <div class="cta-card">
                <h2>Ready to Work With a Firm That Cares?</h2>
                <p>Schedule your free initial consultation today</p>
                <div class="cta-buttons">
                    <a href="contact" class="btn btn-primary">Contact Us</a>
                    <a href="tel:+27123456789" class="btn btn-secondary">
                        <i class="fas fa-phone"></i> Call Now
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>


<script src="/assets/js/main.js">

</script>