<?php 
$pageTitle = "Contact Us";
include 'includes/header.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);
    
    $errors = [];
    if (empty($name)) $errors[] = 'Name is required';
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required';
    if (empty($message)) $errors[] = 'Message is required';
    
    if (empty($errors)) {
        // TOOO: SAVE DATA TO DATABASE 
        $success = true;
    }
}
?>

<main>
    <section class="page-header">
        <div class="container">
            <h1>Contact Us</h1>
            <p>Get in touch for a free initial consultation</p>
        </div>
    </section>

    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>Our Office</h2>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h3>Address</h3>
                            <p><?php echo SITE_ADDRESS; ?></p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h3>Phone</h3>
                            <p><?php echo SITE_PHONE; ?></p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h3>Email</h3>
                            <p><?php echo SITE_EMAIL; ?></p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h3>Working Hours</h3>
                            <p>Monday - Friday: 8:30 AM - 5:00 PM</p>
                            <p>Saturday: 9:00 AM - 1:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <h2>Send Us a Message</h2>
                    
                    <?php if (!empty($errors)): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li><?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (isset($success) && $success): ?>
                        <div class="alert alert-success">
                            Thank you for your message! We will get back to you soon.
                        </div>
                    <?php endif; ?>
                    
                    <form action="contact.php" method="POST">
                        <div class="form-group">
                            <label for="name">Full Name*</label>
                            <input type="text" id="name" name="name" required value="<?php echo isset($name) ? $name : ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address*</label>
                            <input type="email" id="email" name="email" required value="<?php echo isset($email) ? $email : ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" value="<?php echo isset($phone) ? $phone : ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="service">Service Needed</label>
                            <select id="service" name="service">
                                <option value="">Select a service</option>
                                <option value="labour" <?php echo (isset($service) && $service === 'labour') ? 'selected' : ''; ?>>Labour Law</option>
                                <option value="contracts" <?php echo (isset($service) && $service === 'contracts') ? 'selected' : ''; ?>>Contracts</option>
                                <option value="criminal" <?php echo (isset($service) && $service === 'criminal') ? 'selected' : ''; ?>>Criminal Law</option>
                                <option value="civil" <?php echo (isset($service) && $service === 'civil') ? 'selected' : ''; ?>>Civil Law</option>
                                <option value="other" <?php echo (isset($service) && $service === 'other') ? 'selected' : ''; ?>>Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message*</label>
                            <textarea id="message" name="message" rows="5" required><?php echo isset($message) ? $message : ''; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="map-section">
        <div class="container">
            <h2>Find Us</h2>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.041069948656!2d28.03489931502895!3d-26.19583798344268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e950c1a6c0e1e0b%3A0x9a3e5b3b3d3e3d3e!2s123%20Justice%20Street%2C%20Community%20District%2C%200001!5e0!3m2!1sen!2sza!4v1620000000000!5m2!1sen!2sza" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>