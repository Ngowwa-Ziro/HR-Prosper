<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Prosper - Your Trusted HR Partner</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;900&family=Figtree:wght@400;600;700;800&family=Raleway:wght@400;500;700&family=Inter:wght@300;400;600;700&family=K2D:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Figtree', sans-serif;
            background: white;
            overflow-x: hidden;
        }

        .container {
            width: 1512px;
            margin: 0 auto;
            position: relative;
        }

        /* Header */
        header {
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 1535px;
            height: 100px;
            background: white;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 131px;
        }

        .logo {
            font-family: 'Montserrat', sans-serif;
            font-size: 32px;
            line-height: 1;
        }

        .logo-hr {
            font-weight: 900;
            color: #ff353d;
        }

        .logo-prosper {
            font-weight: 400;
            color: #0d5795;
        }

        nav {
            display: flex;
            gap: 32px;
            align-items: center;
        }

        nav a {
            font-family: 'Figtree', sans-serif;
            font-size: 18px;
            line-height: 41px;
            color: #1e1e1ef2;
            text-decoration: none;
            transition: color 0.3s;
        }

        nav a:first-child {
            font-weight: 800;
            color: #ff353d;
        }

        nav a:hover {
            color: #ff353d;
        }

        .cta-button {
            width: 258px;
            height: 49px;
            background: #01417c;
            border-radius: 24.5px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-family: 'Figtree', sans-serif;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .cta-button:hover {
            background: #003f78;
        }

        /* Hero Section */
        .hero {
            margin-top: 30px;
            position: relative;
            height: 600px;
            overflow: hidden;
            z-index: 0;
        }

        .hero-background {
            position: absolute;
            top: -80px;
            left: 50%;
            transform: translateX(-50%);
            width: 1517px;
            height: 721px;
        }

        .hero-image {
            position: absolute;
            top: 62px;
            left: calc(50% - 1526px/2);   /* centers exactly like the Figma spec */
            width: 1526px;                /* matches Figma width */
            height: 725px;                /* matches Figma height */
            object-fit: cover;
            z-index:0;                   /* sit under the content but above the hero background */
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, rgba(0, 86, 160, 0.82) 0%, rgba(0, 72, 135, 0.85) 100%);
            z-index: 1; /* sits above the image */
        }


        .hero-content {
            position: relative;
            padding-top: 165px;
            text-align: center;
            z-index: 2;
        }

        .hero-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 36px;
            line-height: 48px;
            color: white;
            max-width: 1001px;
            margin: 0 auto 46px;
        }

        .hero-description {
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
            color: white;
            max-width: 975px;
            margin: 0 auto 48px;
            line-height: 1.6;
        }

        .hero-cta {
            position: relative;
            width: 332px;
            height: 63px;
            margin: 0 auto;
            background: #ff353d;
            border-radius: 45px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            display: flex;
            align-items: center;
            padding-left: 34px;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .hero-cta:hover {
            transform: scale(1.05);
        }

        .hero-cta-text {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 18px;
            color: white;
        }

        .hero-cta-icon {
            position: absolute;
            right: 7px;
            top: 5px;
            width: 53px;
            height: 53px;
            background: white;
            border-radius: 26.5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-cta-icon::after {
            content: "↗";
            font-size: 28px;
            color: rgba(0,106,255,0.9);
            font-weight: bold;
        }

        /* Mission Vision Values Section */
        .mvv-section {
            padding: 58px 0 100px;
        }

        .section-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 28px;
            color: #1e1e1ef2;
            text-align: center;
            margin-bottom: 32px;
        }

        .mvv-cards {
            display: flex;
            justify-content: center;
            gap: 33px;
            margin-bottom: 50px;
        }

        .mvv-card {
            width: 366px;
            height: 313px;
            border-radius: 10px;
            padding: 34px 20px 20px;
            position: relative;
        }

        .mvv-card.mission {
            background: rgba(210, 233, 237, 0.55);
        }

        .mvv-card.vision {
            background: linear-gradient(180deg, rgba(230, 119, 7, 1) 0%, rgba(255, 54, 62, 1) 100%);
        }

        .mvv-card.values {
            background: rgba(210, 233, 237, 0.55);
        }

        .mvv-icon {
            width: 94px;
            height: 94px;
            background: white;
            border-radius: 47px;
            margin: 0 auto 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .mvv-icon img {
            width: 60px;
            height: 60px;
            object-fit: cover;
        }

        .mvv-title {
            font-family: 'Figtree', sans-serif;
            font-weight: 700;
            font-size: 20px;
            text-align: center;
            margin-bottom: 16px;
        }

        .mvv-card.mission .mvv-title,
        .mvv-card.values .mvv-title {
            color: #1e1e1ef2;
        }

        .mvv-card.vision .mvv-title {
            color: white;
        }

        .mvv-description {
            font-family: 'Figtree', sans-serif;
            font-size: 14px;
            text-align: center;
            line-height: 1.5;
        }

        .mvv-card.mission .mvv-description,
        .mvv-card.values .mvv-description {
            color: #1e1e1ef2;
        }

        .mvv-card.vision .mvv-description {
            color: white;
        }

        /* Services Section */
        .services-section {
            background: linear-gradient(180deg, rgba(0, 63, 120, 1) 0%, rgba(0, 117, 222, 1) 100%);
            padding: 73px 0 182px;
        }

        .services-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 28px;
            color: white;
            text-align: center;
            margin-bottom: 68px;
        }

        .services-intro {
            font-family: 'Figtree', sans-serif;
            font-size: 18px;
            color: white;
            text-align: center;
            max-width: 1016px;
            margin: 0 auto 120px;
            line-height: 1.6;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 366px);
            gap: 33px 33px;
            justify-content: center;
            margin-bottom: 42px;
        }

        .service-card {
            background: white;
            border-radius: 10px;
            padding: 49px 35px 30px;
            position: relative;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }

        .service-card.featured {
            background: #f5fffd;
        }

        .service-icon {
            width: 69px;
            height: 69px;
            margin-bottom: 31px;
        }

        .service-icon img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .service-title {
            font-family: 'Figtree', sans-serif;
            font-weight: 700;
            font-size: 20px;
            margin-bottom: 16px;
        }

        .service-card:nth-child(1) .service-title {
            color: #f16704;
        }

        .service-card:nth-child(2) .service-title {
            color: #0074de;
        }

        .service-card:nth-child(3) .service-title,
        .service-card:nth-child(4) .service-title,
        .service-card:nth-child(5) .service-title,
        .service-card:nth-child(6) .service-title {
            color: #0176e2;
        }

        .service-description {
            font-family: 'Figtree', sans-serif;
            font-size: 14px;
            color: #1e1e1ef2;
            line-height: 1.5;
        }

        .services-cta {
            width: 294px;
            height: 61px;
            background: #ff353d;
            border-radius: 30px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .services-cta:hover {
            transform: scale(1.05);
        }

        .services-cta-text {
            font-family: 'Figtree', sans-serif;
            font-weight: 600;
            font-size: 18px;
            color: white;
        }

        /* Companies Section */
        .companies-section {
            padding: 80px 0 90px;
        }

        .companies-title {
            font-family: 'Figtree', sans-serif;
            font-weight: 700;
            font-size: 28px;
            color: #232323e6;
            text-align: center;
            margin-bottom: 35px;
        }

        .companies-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 35px;
            margin-bottom: 88px;
        }

        .company-logo {
            max-height: 125px;
        }

        .carousel-dots {
            display: flex;
            justify-content: center;
            gap: 11px;
        }

        .carousel-dot {
            width: 17.6px;
            height: 17.6px;
            background: #d9d9d9;
            border-radius: 8.8px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .carousel-dot.active {
            background: #ff353d;
        }

        /* Testimonials Section */
        .testimonials-section {
        background: linear-gradient(180deg, rgba(255, 54, 62, 1) 0%, rgba(242, 103, 5, 1) 100%);
        padding: 60px 0 160px;
        color: #fff;
        position: relative;
        overflow: visible;
        }

        .container {
            width: 100%;
            max-width: 1200px; /* ✅ narrower */
            margin: 0 auto;
            padding: 0 40px; /* adds breathing room on smaller screens */
            position: relative;
        }


        .testimonials-title {
        font-family: 'Inter', sans-serif;
        font-weight: 700;
        font-size: 28px;
        text-align: center;
        margin-bottom: 70px;
        }

        /* 3 Cards aligned horizontally */
        .testimonials-container {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        position: relative;
        gap: 0;
        }

        /* Base card */
        .testimonial-card {
        width: 370px;
        height: 180px;
        padding: 40px 30px 60px;
        border-radius: 10px;
        box-shadow: 0px 6px 16px rgba(0, 0, 0, 0.15);
        text-align: center;
        position: relative;
        background: #fff;
        color: #333;
        transition: all 0.3s ease;
        z-index: 1;
        }

        /* Center card overlays others slightly */
        .card--center {
        background: #0176e2;
        color: #fff;
        width: 410px;
        height: 200px;
        transform: translateY(-35px);
        z-index: 3;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
        }

        /* Side cards share same base color */
        .card--side {
        background: #fffaf7;
        color: #333;
        z-index: 2;
        }

        /* Large faded quotes */
        .quote {
        font-family: 'K2D', sans-serif;
        font-size: 64px;
        line-height: 1;
        opacity: 0.12;
        position: absolute;
        top: 10px;
        left: 50%;
        transform: translateX(-50%);
        }

        /* Testimonial text */
        .testimonial-text {
        font-family: 'Inter', sans-serif;
        font-size: 15px;
        line-height: 22px;
        margin: 10px 0 30px;
        }

        /* Avatar container — overlaps bottom of card */
        .testimonial-avatar-wrap {
        position: absolute;
        left: 50%;
        bottom: -45px;
        transform: translateX(-50%);
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: white;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.15);
        }

        .card--center .testimonial-avatar-wrap {
        bottom: -48px;
        width: 95px;
        height: 95px;
        }

        /* Avatar image */
        .testimonial-avatar {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #fff;
        }

        /* Name + Role BELOW the circle */
        .testimonial-name {
        margin-top: 95px;
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        font-size: 14px;
        text-align: center;
        color: #fff; /* ✅ all profile names are white */
        }


        .card--center .testimonial-name {
        margin-top: 140px;
        color: #fff;
        }

        .testimonial-role {
        font-family: 'Inter', sans-serif;
        font-weight: 300;
        font-size: 12px;
        text-transform: uppercase;
        text-align: center;
        margin-top: 4px;
        color: #fff;
        }

        /* Optional hover for realism */
        .card--center:hover {
        transform: translateY(-40px);
        }



        /* Blog Section */
        .blog-section {
            padding: 80px 0;
        }

        .blog-title {
            font-family: 'Raleway', sans-serif;
            font-weight: 700;
            font-size: 28px;
            color: #1e1e1e;
            text-align: center;
            margin-bottom: 96px;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(3, 366px);
            gap: 19px;
            justify-content: center;
        }

        .blog-card {
            position: relative;
            overflow: hidden;
        }

        .blog-image {
            width: 366px;
            height: 366px;
            object-fit: cover;
            display: block;
        }

        .blog-overlay {
            width: 366px;
            height: 55px;
            position: absolute;
            bottom: 80px;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }




        .blog-card:nth-child(1) .blog-overlay {
            background: rgba(255, 255, 255, 0.7);
        }

        .blog-card:nth-child(2) .blog-overlay {
            background: rgba(241, 103, 4, 0.64);
        }

        .blog-card:nth-child(3) .blog-overlay {
            background: rgba(255, 53, 61, 0.6);
        }

        .blog-category {
            font-family: 'Raleway', sans-serif;
            font-weight: 700;
            font-size: 20px;
            text-align: center;
        }

        .blog-card:nth-child(1) .blog-category {
            color: #1e1e1e;
        }

        .blog-card:nth-child(2) .blog-category,
        .blog-card:nth-child(3) .blog-category {
            color: white;
        }

        .blog-cta {
            position: relative;
            margin: 40px auto 0;
            width: 145px;
            height: 42px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            padding-left: 16px;
            cursor: pointer;
            transition: transform 0.3s;
        }



        .blog-cta:hover {
            transform: scale(1.05);
        }

        .blog-card:nth-child(1) .blog-cta {
            background: #f16704;
        }

        .blog-card:nth-child(2) .blog-cta {
            background: #0176e2;
        }

        .blog-card:nth-child(3) .blog-cta {
            background: #012336;
        }

        .blog-cta-text {
            font-family: 'Figtree', sans-serif;
            font-weight: 600;
            font-size: 16px;
            color: white;
        }

        .blog-cta-arrow {
            margin-left: auto;
            margin-right: 16px;
        }

        .blog-cta-arrow::after {
            content: '→';
            font-size: 18px;
            color: white;
            font-weight: bold;
        }




        /* Newsletter Section */
        .newsletter-section {
            position: absolute;
            top: -95px;       /* moves it upward so it overlaps the footer */
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
        }


        .newsletter-container {
            width: 900px;      /* ✅ narrower */
            height: 160px;     /* ✅ shorter */
            background: white;
            border-radius: 5px;
            box-shadow: 0px 8px 20px 8px rgba(0, 0, 0, 0.15);
            margin: 0 auto;
            padding: 28px 100px; /* adjust padding to keep text aligned */
            position: relative;
            z-index: 2;
        }


        .newsletter-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 26px;
            color: #1e1e1e;
            text-align: center;
            margin-bottom: 31px;
        }

        .newsletter-form {
            display: flex;
            gap: 0;
            justify-content: center;
        }

        .newsletter-input {
            width: 528px;
            height: 44px;
            border: 1px solid #d9d9d9;
            border-radius: 7px 0 0 7px;
            padding: 0 131px;
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
            background: linear-gradient(180deg, rgba(0, 63, 120, 1) 0%, rgba(0, 117, 222, 1) 100%);
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
            margin-bottom: 46px;
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
            max-width: 280px;
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
            background: #012336;
            height: 82px;
            display: flex;
            align-items: center;
            padding: 0 80px;
            justify-content: space-between;
        }

        .footer-copyright {
            font-family: 'Figtree', sans-serif;
            font-size: 14px;
            color: white;
            line-height: 20px;
        }

        .footer-legal {
            display: flex;
            gap: 60px;
        }

        .footer-legal a {
            font-family: 'Figtree', sans-serif;
            font-size: 14px;
            color: white;
            text-decoration: none;
            transition: opacity 0.3s;
        }

        .footer-legal a:hover {
            opacity: 0.8;
        }

        @media (max-width: 1536px) {
            .container {
                width: 100%;
                max-width: 1512px;
                padding: 0 20px;
            }

            header {
                width: 100%;
                max-width: 1535px;
                padding: 0 60px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <span class="logo-prosper">PROSPER</span><span class="logo-hr">HR</span>
        </div>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About Us</a>
            <a href="#services">Services</a>
            <a href="#jobs">Jobs</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
        <div class="cta-button">Request A Consultation</div>
    </header>

    <main>
        <section class="hero">
            <img src="public/vector.svg" alt="Background" class="hero-background">
            <img src="{{ asset('images/image1.png') }}" alt="Hero" class="hero-image">
            <div class="hero-content">
                <h1 class="hero-title">Your Trusted Hr Partner For Growth, Compliance & People Solutions</h1>
                <p class="hero-description">
                    we provide end-to-end HR outsourcing, recruitment, payroll, and<br>
                    staff management services that allow organizations to focus on strategy and<br>
                    performance while we handle their most valuable asset - their people.
                </p>
                <div class="hero-cta">
                    <span class="hero-cta-text">Explore Our Services</span>
                    <div class="hero-cta-icon"></div>
                </div>
            </div>
        </section>

        <section class="mvv-section">
            <div class="container">
                <h2 class="section-title">What drives us</h2>
                <div class="mvv-cards">
                    <div class="mvv-card mission">
                        <div class="mvv-icon">
                            <img src="{{ asset('images/image11.png') }}" alt="Mission Icon">
                        </div>
                        <h3 class="mvv-title">Our Mission</h3>
                        <p class="mvv-description">To deliver reliable, compliant, and cost-effective HR solutions</p>
                    </div>
                    <div class="mvv-card vision">
                        <div class="mvv-icon">
                            <img src="{{ asset('images/image12.png') }}" alt="Vision Icon">
                        </div>
                        <h3 class="mvv-title">Our Vision</h3>
                        <p class="mvv-description">To be the HR partner of choice in Kenya and beyond</p>
                    </div>
                    <div class="mvv-card values">
                        <div class="mvv-icon">
                            <img src="{{ asset('images/image13.png') }}" alt="Values Icon">
                        </div>
                        <h3 class="mvv-title">Our Values</h3>
                        <p class="mvv-description">Integrity | Excellence | Partnership<br>Innovation | Growth</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="services-section">
            <div class="container">
                <h2 class="services-title">SERVICES</h2>
                <p class="services-intro">
                    We understand that managing people can be complex. That's why we exist - to<br>
                    simplify HR, ensure compliance, and deliver solutions that help organizations prosper.<br>
                    Whether you are a start-up, SME, or multinational, HR Prosper is here to walk the<br>
                    journey with you.
                </p>
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="{{ asset('images/image2.png') }}" alt="Recruitment Icon">
                        </div>
                        <h3 class="service-title">Recruitment & Staffing</h3>
                        <p class="service-description">
                            We source, screen, and place the right talent for your business, from entry-level to executive positions. Our recruitment solutions focus on cultural fit and retention, ensuring long-term value for your organization.
                        </p>
                    </div>
                    <div class="service-card featured">
                        <div class="service-icon">
                            <img src="{{ asset('images/image3.png') }}" alt="HR Outsourcing Icon">
                        </div>
                        <h3 class="service-title">HR Outsourcing</h3>
                        <p class="service-description">
                            We act as your HR department - managing daily HR operations, contracts, policies, and compliance. Outsourcing HR allows you to reduce costs, minimize risks, and focus on your business growth.
                        </p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="{{ asset('images/image4.png') }}" alt="Payroll Icon">
                        </div>
                        <h3 class="service-title">Payroll & Compliance</h3>
                        <p class="service-description">
                            We simplify payroll by handling salary processing, payslips, and statutory deductions (PAYE, NHIF, NSSF, HELB, etc.). Our compliance audits ensure you are always aligned with Kenyan labour laws.
                        </p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="{{ asset('images/image5.png') }}" alt="Training Icon">
                        </div>
                        <h3 class="service-title">Training & Development</h3>
                        <p class="service-description">
                            We design and deliver capacity-building programs tailored to your needs. Our training covers leadership, management, compliance, and soft skills - all aimed at boosting performance and preparing your teams for the future of work.
                        </p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="{{ asset('images/image6.png') }}" alt="Employee Relations Icon">
                        </div>
                        <h3 class="service-title">Overseas Labour Outsourcing</h3>
                        <p class="service-description">
                            Prosper HR Services Ltd connects reliable Kenyan skilled and semi-skilled workers with international employers in construction, hospitality, caregiving, agriculture, and logistics. We manage sourcing, vetting, documentation, and deployment to ensure a transparent, compliant, and efficient recruitment process.
                        </p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="{{ asset('images/image7.png') }}" alt="Performance Icon">
                        </div>
                        <h3 class="service-title">Performance Management</h3>
                        <p class="service-description">
                            We help organizations set clear KPIs, implement appraisal systems, and design fair performance evaluation frameworks that link directly to rewards, promotions, and career development.
                        </p>
                    </div>
                </div>
                <div class="services-cta">
                    <span class="services-cta-text">Explore Our Services</span>
                </div>
            </div>
        </section>

        <section class="companies-section">
            <div class="container">
                <h2 class="companies-title">Companies That Trust Us</h2>
                <div class="companies-logos">
                    <img src="{{ asset('images/AO.PNG') }}" alt="Company 1" class="company-logo">
                    <img src="{{ asset('images/Angani.webp') }}" alt="Company 2" class="company-logo">
                    <img src="{{ asset('images/image7.png') }}" alt="Company 3" class="company-logo">
                    <img src="{{ asset('images/image7.png') }}" alt="Company 4" class="company-logo">
                    <img src="{{ asset('images/image7.png') }}" alt="Company 5" class="company-logo">
                </div>
                <div class="carousel-dots">
                    <div class="carousel-dot"></div>
                    <div class="carousel-dot"></div>
                    <div class="carousel-dot active"></div>
                    <div class="carousel-dot"></div>
                    <div class="carousel-dot"></div>
                </div>
            </div>
        </section>

        <section class="testimonials-section">
            <div class="container">
                <h2 class="testimonials-title">What our clients say</h2>

                <div class="testimonials-container">
                <div class="testimonial-card card--side">
                    <div class="quote">“</div>
                    <p class="testimonial-text">
                    This is due to their excellent service, competitive pricing and customer support. It's thoroughly refreshing to get such a personal touch.
                    </p>

                    <div class="testimonial-avatar-wrap">
                    <img src="{{ asset('images/image14.png') }}" alt="James Kongo" class="testimonial-avatar">
                    </div>
                    <p class="testimonial-name">James Kongo</p>
                    <p class="testimonial-role">OWNER</p>
                </div>

                <div class="testimonial-card card--center">
                    <div class="quote">“</div>
                    <p class="testimonial-text">
                    This is due to their excellent service, competitive pricing and customer support. It's thoroughly refreshing to get such a personal touch.
                    </p>

                    <div class="testimonial-avatar-wrap">
                    <img src="{{ asset('images/image17.png') }}" alt="Daniel Sumbua" class="testimonial-avatar">
                    </div>
                    <p class="testimonial-name">Daniel Sumbua</p>
                    <p class="testimonial-role">BUSINESSMAN</p>
                </div>

                <div class="testimonial-card card--side">
                    <div class="quote">“</div>
                    <p class="testimonial-text">
                    This is due to their excellent service, competitive pricing and customer support. It's thoroughly refreshing to get such a personal touch.
                    </p>

                    <div class="testimonial-avatar-wrap">
                    <img src="{{ asset('images/image15.png') }}" alt="Mary Mapesa" class="testimonial-avatar">
                    </div>
                    <p class="testimonial-name">Mary Mapesa</p>
                    <p class="testimonial-role">FASHION DESIGNER</p>
                </div>
                </div>
            </div>
        </section>


        <section class="blog-section">
            <div class="container">
                <h2 class="blog-title">Our Blog</h2>
                <div class="blog-grid">
                    <div class="blog-card">
                        <img src="{{ asset('images/image8.jpg') }}" alt="Blog 1" class="blog-image">
                        <div class="blog-overlay">
                            <h3 class="blog-category">Recruitment</h3>
                        </div>
                        <div class="blog-cta">
                            <span class="blog-cta-text">Read More</span>
                            <span class="blog-cta-arrow"></span>
                        </div>
                    </div>
                    <div class="blog-card">
                        <img src="{{ asset('images/image9.jpg') }}" alt="Blog 2" class="blog-image">
                        <div class="blog-overlay">
                            <h3 class="blog-category">Training</h3>
                        </div>
                        <div class="blog-cta">
                            <a href="{{ asset('files/Training.pdf') }}" target="_blank" class="blog-cta">
                                <span class="blog-cta-text">Read More</span>
                                <span class="blog-cta-arrow"></span>
                            </a>
                        </div>
                    </div>
                    <div class="blog-card">
                        <img src="{{ asset('images/image10.png') }}" alt="Blog 3" class="blog-image">
                        <div class="blog-overlay">
                            <h3 class="blog-category">Employee Relations</h3>
                        </div>
                        <div class="blog-cta">
                            <span class="blog-cta-text">Read More</span>
                            <span class="blog-cta-arrow"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

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
                            <li><a href="#payroll">payroll & Compliance</a></li>
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
</body>
</html>
