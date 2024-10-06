<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }
        .map {
            height: 400px;
        }
    </style>
</head>
<body>
    <div class="container">
        <ul class="menu-list d-flex justify-content-center list-unstyled">
            <li class="menu-item mx-3"><a href="/">Home</a></li>
            <li class="menu-item mx-3"><a href="{{ url('/about') }}">About Us</a></li>
            <li class="menu-item mx-3"><a href="{{ url('/contact') }}">Contact</a></li>
            <li class="menu-item mx-3"><a href="{{ url('/news') }}">News</a></li>
        </ul>
        <!-- Contact Form -->
        <section class="contact-form">
            <h1>Contact Us</h1>
            <form id="contactForm">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </section>

        <!-- Contact Information -->
        <section class="contact-info mt-5">
            <h2>Our Contact Information</h2>
            <ul>
                <li>Email: <a href="mailto:info@yourcompany.com">info@yourcompany.com</a></li>
                <li>Phone: (123) 456-7890</li>
                <li>Address: 123 Your Street, Your City, Your Country</li>
            </ul>
        </section>

        <!-- Map (Optional) -->
        <section class="map mt-5">
            <h2>Find Us Here</h2>
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509374!2d144.9537353153167!3d-37.81627997975195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577d1f9f1f1f1f1!2sYour%20Company!5e0!3m2!1sen!2sau!4v1614311234567!5m2!1sen!2sau" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </section>
    </div>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            const mailtoLink = `mailto:info@yourcompany.com?subject=Contact%20Form%20Submission&body=Name:%20${name}%0AEmail:%20${email}%0AMessage:%20${message}`;
            window.location.href = mailtoLink;
        });
    </script>
</body>
</html>
