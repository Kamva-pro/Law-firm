<?php 
$pageTitle = "Our Legal Services";
include 'includes/header.php'; 
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<main>
    <section class="page-header">
        <div class="container">
            <h1>Our Legal Services</h1>
            <p>Expert legal advice at affordable rates for disadvantaged communities</p>
        </div>
    </section>

    <section class="services-detail">
        <div class="container">
            <div class="service" id="labour">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Labour Law">
                </div>
                <div class="service-content">
                    <h2>Labour Law</h2>
                    <p>We provide comprehensive legal services in all aspects of labour law to protect workers' rights and ensure fair treatment in the workplace.</p>
                    <ul>
                        <li>Employment contracts and disputes</li>
                        <li>Unfair labour practices</li>
                        <li>Workers' compensation claims</li>
                        <li>Unfair dismissal cases</li>
                        <li>Collective bargaining agreements</li>
                    </ul>
                    <a href="contact.php" class="btn btn-primary">Get Help With Labour Law</a>
                </div>
            </div>

            <div class="service" id="contracts">
                <div class="service-content">
                    <h2>Contracts</h2>
                    <p>We help individuals and small businesses with all aspects of contract law to ensure your agreements are legally sound and protect your interests.</p>
                    <ul>
                        <li>Drafting and reviewing contracts</li>
                        <li>Contract disputes and negotiations</li>
                        <li>Breach of contract claims</li>
                        <li>Lease agreements</li>
                        <li>Service level agreements</li>
                    </ul>
                    <a href="contact.php" class="btn btn-primary">Get Contract Assistance</a>
                </div>
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Contracts">
                </div>
            </div>

            <div class="service" id="criminal">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1601760561441-1642052c7eed?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Criminal Law">
                </div>
                <div class="service-content">
                    <h2>Criminal Law</h2>
                    <p>We provide strong legal defense for individuals facing criminal charges, ensuring their rights are protected throughout the legal process.</p>
                    <ul>
                        <li>Defense against criminal charges</li>
                        <li>Bail applications and appeals</li>
                        <li>Assault and domestic violence cases</li>
                        <li>Theft and property crimes</li>
                        <li>Drug-related offenses</li>
                    </ul>
                    <a href="contact.php" class="btn btn-primary">Get Criminal Defense Help</a>
                </div>
            </div>

            <div class="service" id="civil">
                <div class="service-content">
                    <h2>Civil Law</h2>
                    <p>We handle a wide range of civil legal matters, helping clients resolve disputes and protect their rights in non-criminal cases.</p>
                    <ul>
                        <li>Litigation and dispute resolution</li>
                        <li>Family law matters (divorce, child custody)</li>
                        <li>Property disputes</li>
                        <li>Debt collection matters</li>
                        <li>Personal injury claims</li>
                    </ul>
                    <a href="contact.php" class="btn btn-primary">Get Civil Law Assistance</a>
                </div>
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Civil Law">
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2>Need Legal Help?</h2>
            <p>Contact us today for a free initial consultation to discuss your legal needs and how we can help.</p>
            <a href="contact.php" class="btn btn-primary">Get a Free Consultation</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>