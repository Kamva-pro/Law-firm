<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'config.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Justice For All Legal Consultancy'; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href=<?php echo BASE_URL; ?>><div class="logo">
                Justice For All
                <span>Legal Consultancy</span>
            </div>
            </a>
            
            <div class="nav-links">
                <a href=<?php echo BASE_URL; ?>>Home</a>
                <a href="about">About Us</a>
                <a href="services">Services</a>
                <a href="attorneys">Our Team</a>
            </div>
            
            <div class="nav-cta">
                <a href="contact" class="btn btn-primary">Contact Us</a>
            </div>
            
            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
<div class="mobile-menu">
    <div class="mobile-menu-container">
        <a href=<?php echo BASE_URL; ?>>Home</a>
        <a href="about">About Us</a>
        <a href="services">Services</a>
        <a href="attorneys">Our Team</a>
        <a href="contact" class="btn">Contact Us</a>
    </div>
</div>

    <script src="../assets/js/main.js"></script>

</body>