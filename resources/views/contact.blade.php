<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - HR PROSPER</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700;800&family=Montserrat:wght@400;900&family=Raleway:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Figtree', sans-serif;
            background-color: #ffffff;
            overflow-x: hidden;
        }

        /* Header Styles */
        header {
            width: 100%;
            height: 100px;
            background-color: #f14b04;
            box-shadow: 0px 4px 8px 6px rgba(0, 0, 0, 0.23);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999;
        }

        .header-container {
            max-width: 1512px;
            margin: 0 auto;
            padding: 0 32px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-family: 'Montserrat', sans-serif;
            font-size: 32px;
            color: white;
        }

        .logo .bold {
            font-weight: 900;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        nav a {
            font-family: 'Figtree', sans-serif;
            font-size: 18px;
            color: white;
            text-decoration: none;
            white-space: nowrap;
        }

        nav a.active {
            font-weight: 700;
        }

        .cta-button {
            height: 49px;
            background-color: #0d5795;
            border-radius: 24.5px;
            padding: 0 20px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            font-family: 'Figtree', sans-serif;
            font-weight: 600;
            font-size: 16px;
            color: white;
            transition: background-color 0.3s;
        }

        .cta-button:hover {
            background-color: #0a4578;
        }

        /* Hero Section */
        .contact-hero-section {
            position: relative;
            height: 400px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 0;
            margin-top: 0 !important;
        }

        .contact-hero-bg {
            position: absolute;
            top: 0;
            right: 0;
            height: auto;
            width: auto;
            max-height: 100%;
            max-width: 100%;
            object-position: right bottom;
        }

        /* Blue gradient overlay */
        .contact-hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, #0D5795, #01417c);
            opacity: 0.92;
        }

        /* Centered text area */
        .contact-hero-content {
            position: relative;
            width: 100%;
            max-width: 1512px;
            padding: 0 20px;
            display: flex;
            align-items: flex-start;
        }

        .contact-hero-title {
            font-family: 'Figtree', sans-serif;
            font-weight: 700;
            font-size: 54px;
            color: white;
        }



        /* Contact Form Section */
        .contact-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
        }

        .contact-card {
            max-width: 1100px;
            margin: 40px auto 0;
            background-color: #ededed;
            border-radius: 10px 10px 0 0;
            position: relative;
            z-index: 10;
            overflow: hidden;
        }

        .contact-card-content {
            display: flex;
        }

        .form-container {
            flex: 1;
            padding: 48px;
        }

        .form-title {
            font-family: 'Figtree', sans-serif;
            font-weight: 600;
            font-size: 24px;
            color: #0a3601;
            margin-bottom: 16px;
        }

        .form-description {
            font-family: 'Figtree', sans-serif;
            font-size: 18px;
            color: rgba(35, 35, 35, 0.9);
            margin-bottom: 32px;
            max-width: 535px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-row {
            display: flex;
            gap: 16px;
        }

        .form-group {
            flex: 1;
            position: relative;
        }

        .form-group.full-width {
            width: 100%;
        }

        .form-group label {
            font-family: 'Figtree', sans-serif;
            font-size: 14px;
            color: rgba(30, 30, 30, 0.95);
            display: block;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            background-color: white;
            border: none;
            border-radius: 5px;
            padding: 12px;
            font-family: 'Figtree', sans-serif;
            font-size: 16px;
            outline: none;
        }

        .form-group input {
            height: 41px;
        }

        .form-group textarea {
            height: 218px;
            resize: none;
        }

        .submit-button {
            width: 180px;
            height: 36px;
            background-color: #0074de;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            font-family: 'Figtree', sans-serif;
            font-weight: 700;
            font-size: 16px;
            color: white;
            align-self: flex-end;
            transition: background-color 0.3s;
        }

        .submit-button:hover {
            background-color: #005bb5;
        }

        .form-image-container {
            display: flex;
            align-items: flex-end;
            width: 474px;
        }

        .form-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0 10px 0 0;
            display: block;
        }

        /* Contact Info Cards */
        .contact-cards {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            flex-wrap: nowrap;
            gap: 0;
            margin-top: 0;
            max-width: 1100px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 0 0 10px 10px;
            overflow: hidden;
        }

        .contact-info-card {
            flex: 1;
            height: 117px;
            display: flex;
            align-items: center;
            padding: 0 32px;
            gap: 16px;
        }

        .contact-info-card.blue {
            background-color: #003f78;
        }

        .contact-info-card.red {
            background-color: #ff353d;
        }

        .contact-info-card.teal {
            background-color: #047d9c;
        }

        .contact-info-card i {
            font-size: 33px;
            color: white;
        }

        .contact-info-text .title {
            font-family: 'Figtree', sans-serif;
            font-weight: 500;
            font-size: 16px;
            color: white;
        }

        .contact-info-text .content {
            font-family: 'Figtree', sans-serif;
            font-weight: 600;
            font-size: 23px;
            color: white;
            line-height: 40px;
        }

        /* Map Section */
        .map-section {
            max-width: 1100px;
            margin: 10% auto;
            padding: 0;
        }

        .map-image {
            width: 100%;
            height: 370px;
            display: block;
            object-fit: cover;
            border-radius: 0 0 10px 10px;
        }


       /* Newsletter Section */
        .newsletter-section {
            position: absolute;
            top: -95px;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
        }


        .newsletter-container {
            width: 900px;
            height: 160px;
            background: white;
            border-radius: 5px;
            box-shadow: 0px 8px 20px 8px rgba(0, 0, 0, 0.15);
            margin: 0 auto;
            padding: 28px 60px;
            position: relative;
            z-index: 2;
        }

        form.newsletter-form {
            display: flex !important;
            flex-direction: row !important;  /* keep input and button side-by-side */
            flex-wrap: nowrap !important;    /* prevent wrapping to next line */
            align-items: center !important;  /* vertical center alignment */
            justify-content: center !important;
        }

        .newsletter-button {
            flex-shrink: 0;
            display: inline-block;
            width: 291px;
            height: 44px;
        }

        .newsletter-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 26px;
            color: #1e1e1e;
            text-align: center;
            margin-bottom: 31px;
            font-weight: 400;
        }

        .newsletter-form {
            display: flex;
            gap: 0;
            justify-content: center;
        }

        .newsletter-input {
            width: 420px;
            height: 44px;
            border: 1px solid #d9d9d9;
            border-radius: 7px 0 0 7px;
            padding: 0 20px;
            font-family: 'Raleway', sans-serif;
            font-weight: 500;
            font-size: 16px;
            color: #555353ad;
        }

        .newsletter-button {
            width: 291px;
            height: 44px;
            background: #ff353d;
            border-radius: 0 5px 5px 0;
            border: none;
            font-family: 'Raleway', sans-serif;
            font-weight: 700;
            font-size: 16px;
            color: white;
            cursor: pointer;
            transition: background 0.3s;
        }

        .newsletter-button:hover {
            background: #e62f36;
        }

        /* Footer */
        footer {
            background: linear-gradient(180deg, rgba(255, 54, 62, 1) 0%, rgba(242, 103, 5, 1) 100%);
            position: relative;
            padding: 180px 0 0;
             margin-top: 160px;
        }

        .footer-content {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 40px;
            padding: 0 80px 60px;
        }

        .footer-brand {
            max-width: 331px;
        }

        .footer-logo {
            font-family: 'Montserrat', sans-serif;
            font-size: 28px;
            margin-bottom: 32px;
        }

        .footer-logo-hr {
            font-weight: 900;
            color: white;
        }

        .footer-logo-prosper {
            font-weight: 400;
            color: white;
        }

        .footer-description {
            font-family: 'Figtree', sans-serif;
            font-size: 14px;
            color: white;
            line-height: 20px;
            margin-bottom: 24px;
        }

        .footer-social {
            display: flex;
            gap: 10px;
            margin-top: 24px;
        }

        .footer-social a {
            color: black;
            font-size: 20px;
            transition: opacity 0.3s;
        }

        .footer-social a:hover {
            opacity: 0.8;
        }

        .footer-links {
            display: flex;
            gap: 60px;
            flex: 1;
            justify-content: flex-end;
        }

        .footer-column h3 {
            font-family: 'Figtree', sans-serif;
            font-weight: 700;
            font-size: 18px;
            color: white;
            line-height: 1.2;
            margin-bottom: 12px;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column li {
            font-family: 'Figtree', sans-serif;
            font-weight: 500;
            font-size: 16px;
            color: white;
            line-height: 36px;
        }

        .footer-column a {
            color: white;
            text-decoration: none;
            transition: opacity 0.3s;
        }

        .footer-column a:hover {
            opacity: 0.8;
        }

        .footer-contact {
            max-width: 305px;
        }

        .footer-contact p {
            font-family: 'Figtree', sans-serif;
            font-weight: 500;
            font-size: 16px;
            color: white;
            line-height: 28px;
        }

        .footer-phone {
            font-weight: 800;
        }

        .footer-bottom {
            background: #fff;
            height: 82px;
            display: flex;
            align-items: center;
            padding: 0 146px;
            justify-content: space-between;
            color: black;
        }

        .footer-copyright {
            font-family: 'Figtree', sans-serif;
            font-size: 14px;
            color: black;
            line-height: 20px;
        }

        .footer-legal {
            display: flex;
            gap: 60px;
        }

        .footer-legal a {
            font-family: 'Figtree', sans-serif;
            font-size: 14px;
            color: black;
            text-decoration: none;
            transition: opacity 0.3s;
        }

        .footer-legal a:hover {
            opacity: 0.8;
        }


        /* WhatsApp Button */
        .whatsapp-button {
            position: fixed;
            bottom: 100px;
            right: 57px;
            width: 79px;
            height: 79px;
            z-index: 50;
            cursor: pointer;
        }

        /* Decorative Image */
        .decorative-image {
            position: absolute;
            bottom: 418px;
            right: 0;
            width: 538px;
            height: 406px;
            object-fit: cover;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .hero-container, .header-container {
                flex-direction: column;
                height: auto;
                padding: 20px;
            }

            .hero-section {
                height: auto;
                padding: 40px 0;
            }

            nav {
                flex-wrap: wrap;
                justify-content: center;
            }

            .contact-card-content {
                flex-direction: column;
            }

            .form-image-container {
                width: 100%;
            }

            .form-image {
                border-radius: 0 0 10px 10px;
            }

            .contact-cards {
                flex-direction: column;
            }

            .footer-content {
                flex-wrap: wrap;
                gap: 32px;
            }

            .newsletter-form {
                flex-direction: column;
                align-items: center;
            }

            .newsletter-input {
                width: 100%;
                max-width: 528px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-container">
            <div class="logo">
                PROSPER<span class="bold">HR</span>
            </div>
            <nav class="main-nav">
                <a href="{{ route('home') }}" class="nav-link active">Home</a>
                <a href="{{ route('about') }}" class="nav-link">About Us</a>
                <a href="#" class="nav-link">Services</a>
                <a href="#" class="nav-link">Jobs</a>
                <a href="{{ route('contact') }}" class="nav-link">Contact</a>
            </nav>
            <button class="cta-button">
                Request A Consultation
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </header>

    <!-- Hero Section -->
<section class="contact-hero-section">
    <img src="{{ asset('images/image23.png') }}" alt="Contact Hero Background" class="contact-hero-bg">
    <div class="contact-hero-overlay"></div>

    <div class="contact-hero-content">
        <h1 class="contact-hero-title">Contact Us</h1>
    </div>
</section>


    <!-- Contact Form Section -->
    <section class="contact-section">
        <div class="contact-card">
            <div class="contact-card-content">
                <div class="form-container">
                    <h2 class="form-title">Send us a Message</h2>
                    <p class="form-description">
                        Have questions or need assistance? We're here to help! Whether you're exploring solutions, looking for a consultation, or need.
                    </p>
                    <form action="/" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label>First Name*</label>
                                <input type="text" name="first_name" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name*</label>
                                <input type="text" name="last_name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Email Address*</label>
                                <input type="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label>Phone (Optional)</label>
                                <input type="tel" name="phone">
                            </div>
                        </div>
                        <div class="form-group full-width">
                            <label>Subject*</label>
                            <input type="text" name="subject" required>
                        </div>
                        <div class="form-group full-width">
                            <label>How can we help you?*</label>
                            <textarea name="message" required></textarea>
                        </div>
                        <button type="submit" class="submit-button">Send Message</button>
                    </form>
                </div>
                <div class="form-image-container">
                    <img class="form-image" src="{{ asset('images/image22.png') }}" alt="Woman with device">
                </div>
            </div>
        </div>

        <!-- Contact Info Cards -->
        <div class="contact-cards">
            <div class="contact-info-card blue">
                <i class="fas fa-phone"></i>
                <div class="contact-info-text">
                    <div class="title">Give us a Call</div>
                    <div class="content">(254) 720 974 294</div>
                </div>
            </div>
            <div class="contact-info-card red">
                <i class="fas fa-envelope"></i>
                <div class="contact-info-text">
                    <div class="title">Send an Email</div>
                    <div class="content">info@hrprosper.co.ke</div>
                </div>
            </div>
            <div class="contact-info-card teal">
                <i class="fas fa-map-marker-alt"></i>
                <div class="contact-info-text">
                    <div class="title">Contact us</div>
                    <div class="content">NextGen Shopping Mall</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <img class="map-image" src="{{ asset('images/image24.png') }}" alt="Location map">
    </section>

    <footer>
        <section class="newsletter-section">
            <div class="container">
                <div class="newsletter-container">
                    <h2 class="newsletter-title">Subscribe Our NEWSLETTER</h2>
                    <form class="newsletter-form">
                        <input type="email" class="newsletter-input" placeholder="Enter email addres here">
                        <button type="submit" class="newsletter-button">SUBMIT</button>
                    </form>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="footer-logo">
                        <span class="footer-logo-prosper">PROSPER</span><span class="footer-logo-hr">HR</span>
                    </div>
                    <p class="footer-description">
                        We believe that people are at the heart of every successful business. Our job is to help organizations attract, nurture, and retain talent while with HR systems that support long-term growth and compliance.
                    </p>
                    <div class="footer-social">
                        <a href="https://facebook.com/yourpage" target="_blank"><i class="fab fa-facebook"></i></a>
                        {{-- <a href="https://twitter.com/yourhandle" target="_blank"><i class="fab fa-x-twitter"></i></a> --}}
                        <a href="https://instagram.com/yourprofile" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://linkedin.com/in/yourprofile" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <div class="footer-column">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#services">Our Service</a></li>
                            <li><a href="#careers">Our Careers</a></li>
                            <li><a href="#testimonials">Testimonial</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h3>Our Service</h3>
                        <ul>
                            <li><a href="#recruitment">Recruitment & Staffing</a></li>
                            <li><a href="#outsourcing">HR Outsourcing</a></li>
                            <li><a href="#payroll">Payroll & Compliance</a></li>
                            <li><a href="#training">Training & Development</a></li>
                            <li><a href="#relations">Employee Relations</a></li>
                        </ul>
                    </div>
                    <div class="footer-column footer-contact">
                        <h3>Contact Us</h3>
                        <p>
                            NextGen Shopping Mall,<br>
                           Mombasa Road, 2nd floor,suite 31, Nairobi, Kenya<br>
                            info@prosperhr.com<br>
                            <span class="footer-phone">+254 720 974 294</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="footer-copyright">Copyright ©2025 HrProsper. All Rights Reserved</p>
            <div class="footer-legal">
                <a href="#terms">Terms & Conditions</a>
                <a href="#privacy">Privacy Policy</a>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Button -->
    <img class="whatsapp-button" src="{{ asset('images/image26.png') }}" alt="WhatsApp" onclick="window.open('https://wa.me/254700000000', '_blank')">

</body>
</html>
