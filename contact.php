<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us | ProGear Hub</title>

    <link rel="icon" href="images/logo/ProgearHub_Logo.png">

    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

</head>

<body>

<?php include "includes/header.php"; ?>

<?php include "includes/navigation.php"; ?>

<main>

    <section class="page-banner">

        <h1>Contact Us</h1>

        <p>
            We'd love to hear from you. Send us a message and our team will get back to you shortly.
        </p>

    </section>

    <section class="contact-container">

        <div class="contact-info">

            <h2>Get in Touch</h2>

            <div class="contact-item">

                <i class="fa-solid fa-location-dot"></i>

                <div>

                    <h3>Address</h3>

                    <p>123 George Street, Sydney NSW 2000</p>

                </div>

            </div>

            <div class="contact-item">

                <i class="fa-solid fa-phone"></i>

                <div>

                    <h3>Phone</h3>

                    <p>(02) 9000 1234</p>

                </div>

            </div>

            <div class="contact-item">

                <i class="fa-solid fa-envelope"></i>

                <div>

                    <h3>Email</h3>

                    <p>support@progearhub.com.au</p>

                </div>

            </div>

            <div class="contact-item">

                <i class="fa-solid fa-clock"></i>

                <div>

                    <h3>Business Hours</h3>

                    <p>Monday - Friday</p>

                    <p>9:00 AM - 6:00 PM</p>

                </div>

            </div>

        </div>

        <div class="contact-form">

            <h2>Send us a Message</h2>

            <form action="#" method="post">

                <label for="fullname">Full Name</label>

                <input
                    type="text"
                    id="fullname"
                    name="fullname"
                    placeholder="Enter your full name"
                    required
                    minlength="3">

                <label for="email">Email Address</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    required>

                <label for="subject">Subject</label>

                <input
                    type="text"
                    id="subject"
                    name="subject"
                    placeholder="Message subject"
                    required>

                <label for="message">Message</label>

                <textarea
                    id="message"
                    name="message"
                    rows="6"
                    placeholder="Write your message..."
                    required></textarea>

                <button type="submit">

                    <i class="fa-solid fa-paper-plane"></i>

                    Send Message

                </button>

            </form>

        </div>

    </section>

</main>

<?php include "includes/footer.php"; ?>

</body>

</html>