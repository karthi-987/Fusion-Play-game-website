<?php include 'includes/header.php'; ?>

<div class="container">
    <h2>Contact Us</h2>
    
    <!-- Contact Information Section -->
    <section class="contact-info">
        <h3>Get in Touch</h3>
        <p>If you have any questions, feel free to reach out to us! We're here to help with any inquiries, feedback, or support issues you may have.</p>
        
        <ul>
            <li><strong>Email:</strong> <a href="mailto:support@fusionplay.com">support@fusionplay.com</a></li>
            <li><strong>Phone:</strong> +1-234-567-890</li>
            <li><strong>Address:</strong> 123 Gaming Lane, GameCity, USA</li>
        </ul>
        
        <h3>Operating Hours</h3>
        <p>Our support team is available during the following hours:</p>
        <ul>
            <li>Monday - Friday: 9:00 AM - 6:00 PM (EST)</li>
            <li>Saturday: 10:00 AM - 4:00 PM (EST)</li>
            <li>Sunday: Closed</li>
        </ul>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form">
        <h3>Send Us a Message</h3>
        <form action="send_message.php" method="POST">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required placeholder="Your Name">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required placeholder="Your Email">

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" required placeholder="Your Message"></textarea>

            <button type="submit" class="submit-button">Send Message</button>
        </form>
    </section>

    <!-- Google Map Section -->
    <section class="map">
        <h3>Our Location</h3>
        <div class="map-container">
            <!-- Embedded Google Map of Chennai, Velachery -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.5954512192554!2d80.22719567581789!3d12.97585770449138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526502d9a2cf63%3A0x9c0781f964706ed5!2sVelachery%2C%20Chennai%2C%20Tamil%20Nadu%2C%20India!5e0!3m2!1sen!2sus!4v1693679882456!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <!-- Social Media Section -->
    <section class="social-media">
        <h3>Follow Us</h3>
        <p>Stay connected with us on our social media platforms for updates and more!</p>
        <ul>
            <li><a href="https://www.facebook.com/FusionPlay" target="_blank">Facebook</a></li>
            <li><a href="https://twitter.com/FusionPlay" target="_blank">Twitter</a></li>
            <li><a href="https://www.instagram.com/FusionPlay" target="_blank">Instagram</a></li>
            <li><a href="https://www.youtube.com/c/FusionPlay" target="_blank">YouTube</a></li>
        </ul>
    </section>
</div>

<?php include 'includes/footer.php'; ?>


