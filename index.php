<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Law Firm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Law Firm</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="book.php">Book a Consultation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="hero-content">
            <h1>Affordable Legal Services for Disadvantaged Communities</h1>
            <p>Bringing justice within reach for everyone</p>
            <a href="book.php" class="cta-button">Book a Consultation</a>
        </div>
    </header>

    <!-- Services Section -->
    <section class="services">
        <div class="container mt-5">
            <h2 class="text-center">Our Services</h2>
            <div class="row">
                <div class="col-md-3">
                    <article class="service-card">
                        <img src="images/labour-law.jpg" class="card-img-top" alt="Labour Law">
                        <div class="card-body">
                            <h5 class="card-title">Labour Law</h5>
                            <p class="card-text">Employment contracts, disputes, and workers' compensation.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-3">
                    <article class="service-card">
                        <img src="images/contracts.jpg" class="card-img-top" alt="Contracts">
                        <div class="card-body">
                            <h5 class="card-title">Contracts</h5>
                            <p class="card-text">Drafting, reviewing, and negotiating contracts.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-3">
                    <article class="service-card">
                        <img src="images/criminal-law.jpg" class="card-img-top" alt="Criminal Law">
                        <div class="card-body">
                            <h5 class="card-title">Criminal Law</h5>
                            <p class="card-text">Defending criminal charges, bail applications, and appeals.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-3">
                    <article class="service-card">
                        <img src="images/civil-law.jpg" class="card-img-top" alt="Civil Law">
                        <div class="card-body">
                            <h5 class="card-title">Civil Law</h5>
                            <p class="card-text">Litigation, dispute resolution, and family law matters.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light py-3">
        <div class="container text-center">
            <p>&copy; 2025 Law Firm. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
