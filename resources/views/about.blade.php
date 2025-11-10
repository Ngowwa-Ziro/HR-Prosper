<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - HR Prosper</title>

    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700&family=Inter:wght@500;800&family=Montserrat:wght@400;900&family=Raleway:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

*, *::before, *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Figtree', sans-serif;
    background: #fff;
    color: #1e1e1e;
    line-height: 1.5;
}

img {
    display: block;
    max-width: 100%;
    height: auto;
}

a {
    text-decoration: none;
}

button {
    cursor: pointer;
    border: none;
}

/* ------------------------------------------------------------------ */
/*  HEADER – orange, fixed                                            */
/* ------------------------------------------------------------------ */
.main-header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100px;
    background: #f14b04;
    box-shadow: 0 4px 4px 3px rgba(0, 0, 0, .25);
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 32px;
}

.logo {
    font-family: 'Montserrat', sans-serif;
    font-size: 32px;
    color: #fff;
}

.logo-bold {
    font-weight: 900;
}

.logo-normal {
    font-weight: 400;
}

.main-nav {
    display: flex;
    gap: 32px;
}

.nav-link {
    font-size: 18px;
    color: #fff;
    font-weight: 400;
    transition: font-weight .2s;
}

.nav-link:hover,
.nav-link.active {
    font-weight: 700;
}

.btn-consultation {
        width: 258px;
    height: 49px;
    padding: 0 20px;
    background: #fff;
    color: #0d5795;
    border-radius: 24.5px;
    font-weight: 600;
    font-size: 16px;
    display: flex;
    align-items: center;
    gap: 8px;
    border: none; /* ⬅️ add this line to remove default button border */
    cursor: pointer; /* ⬅️ makes it clickable visually */
    transition: background 0.3s ease;
}

.btn-consultation svg {
    transition: transform 0.3s ease;
}

.btn-consultation:hover {
    background: rgba(255, 255, 255, 0.9);
}

.btn-consultation:hover svg {
    transform: translateX(3px); /* ⬅️ optional: makes arrow slide slightly on hover */
}


/* ------------------------------------------------------------------ */
/*  HERO                                                              */
/* ------------------------------------------------------------------ */
.hero-section {
    position: relative;
    margin-top: 100px;
    height: 592px;
    overflow: hidden;
}

.hero-bg {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.hero-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, .45);
}

.hero-content {
    position: relative;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0 32px;
    text-align: center;
    color: #fff;
}

.hero-title {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 24px;
}

.hero-desc {
    font-size: 25px;
    line-height: 1.6;
    max-width: 897px;
}

.btn-hero {
    margin-top: 32px;
    height: 53px;
    padding: 0 32px;
    background: #0176e2;
    color: #fff;
    border-radius: 5px;
    font-weight: 600;
    font-size: 18px;
}

.btn-hero:hover {
    background: rgba(1, 118, 226, .9);
}

/* ------------------------------------------------------------------ */
/*  CORE VALUES                                                       */
/* ------------------------------------------------------------------ */
.core-values-section {
    padding: 80px 0;
    background: #fafafa;
}

.section-title {
    font-size: 36px;
    font-weight: 700;
    text-align: center;
    margin-bottom: 48px;
}

.values-grid {
    display: flex;
    flex-wrap: nowrap;
    gap: 32px;
    justify-content: center;
    max-width: 1512px;
    margin: auto;
    padding: 0 32px;
    overflow-x: auto;
}

.value-card {
    flex: 0 1 260px;
    background: rgba(210,233,237,.55);
    border-radius: 10px;
    padding: 28px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.value-icon {
    width: 63px;
    height: 63px;
    margin-bottom: 12px;
}

.value-title {
    font-size: 21px;
    font-weight: 700;
    margin-bottom: 12px;
}

.value-desc {
    font-size: 16px;
}

/* Industries Section */
.industries-section {
    display: flex;
    width: 100%;
    height: 538px;
}


.industries-image {
    width: 50%; /* ⬅️ change this line */
    height: 100%;
    object-fit: cover;
    flex-shrink: 0;
}


.industries-content {
    flex: 1; /* you can keep this OR explicitly set width: 50%; */
    width: 50%; /* ⬅️ add this line */
    background: linear-gradient(180deg, rgba(0, 63, 120, 1) 0%, rgba(0, 117, 222, 1) 100%);
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 0 64px;
}

.industries-title {
    font-family: 'Figtree', Helvetica, Arial, sans-serif;
    font-size: 42px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 32px;
}

.industries-list {
    font-family: 'Figtree', Helvetica, Arial, sans-serif;
    font-size: 21px;
    font-weight: 400;
    color: #ffffff;
    line-height: 31px;
}

.btn-services {
    margin-top: 32px;
    width: 296px;
    height: 61px;
    background-color: #e67606;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    font-family: 'Figtree', Helvetica, Arial, sans-serif;
    font-size: 21px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-services:hover {
    background-color: rgba(230, 118, 6, 0.9);
}

/* Why Choose Section */
.why-choose-section {
    display: flex;
    width: 100%;
    height: 543px;
}


.why-choose-content {
    flex: 1;
    width: 50%; /* ⬅️ add this line */
    background: linear-gradient(180deg, rgba(255, 54, 62, 1) 0%, rgba(242, 103, 5, 1) 100%);
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 40px 64px; /* ⬅️ increased top/bottom padding to keep text within the card */
    box-sizing: border-box; /* ⬅️ ensures padding doesn’t overflow the card */
}


.why-choose-title {
    font-family: 'Figtree', Helvetica, Arial, sans-serif;
    font-size: 42px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 32px;
}

.why-choose-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.why-choose-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    font-family: 'Figtree', Helvetica, Arial, sans-serif;
    font-size: 21px;
    color: #ffffff;
    line-height: 21px;
}

.why-choose-bullet {
    width: 13px;
    height: 39px;
    background-color: #ffffff;
    flex-shrink: 0;
    margin-top: 4px;
}

.why-choose-text {
    flex: 1;
}

.why-choose-text-bold {
    font-weight: 700;
}

.why-choose-image {
    width: 50%; /* ⬅️ changed from 779px */
    height: 100%;
    object-fit: cover;
    flex-shrink: 0;
}


/* Insights Section */
.insights-section {
    position: relative;
    padding: 64px 0;
}

.insights-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(210, 233, 237, 0.55);
}

.insights-container {
    position: relative;
    z-index: 10;
    max-width: 1200px; /* ⬅️ reduce width to center content visually */
    margin: 0 auto;
    padding: 0 32px;
    display: flex;
    align-items: center; /* ⬅️ was flex-start — centers vertically */
    justify-content: space-between; /* ⬅️ balance text and image */
    gap: 48px; /* ⬅️ slightly smaller gap for closer alignment */
}

.insights-content {
    flex: 1;
    padding-left: 40px; /* ⬅️ add to move text slightly inward */
}


.insights-title {
    font-family: 'Figtree', Helvetica, Arial, sans-serif;
    font-size: 42px;
    font-weight: 700;
    color: #0d5795;
    margin-bottom: 32px;
}

.insights-list {
    font-family: 'Figtree', Helvetica, Arial, sans-serif;
    font-size: 24px;
    font-weight: 400;
    color: #1e1e1e;
    line-height: 36px;
}

.btn-insights {
    margin-top: 32px;
    width: 296px;
    height: 61px;
    background: linear-gradient(90deg, rgba(242, 103, 5, 1) 0%, rgba(255, 54, 62, 1) 100%);
    color: #ffffff;
    border: none;
    border-radius: 5px;
    font-family: 'Figtree', Helvetica, Arial, sans-serif;
    font-size: 21px;
    font-weight: 600;
    cursor: pointer;
    transition: opacity 0.3s;
}

.btn-insights:hover {
    opacity: 0.9;
}

.insights-image {
    width: 50%; /* ⬅️ was 453px — make it responsive half-width */
    height: auto; /* ⬅️ avoid fixed height */
    object-fit: contain; /* ⬅️ ensure image keeps proper proportions */
    margin-top: 40px; /* ⬅️ add small top margin for balance */
}


/* Statistics Section */
.statistics-section {
    position: relative;
    margin-top: -160px; /* ⬅️ pulls the stats box upward to overlap the insights */
    z-index: 20; /* ⬅️ ensures it sits above background */
    padding: 0 32px 64px 32px; /* ⬅️ remove top padding since it overlaps */
}

.statistics-container {
    max-width: 1148px;
    margin: 0 auto;
    padding: 40px 64px; /* ⬅️ reduce padding so it fits better in overlay */
    background: linear-gradient(180deg, rgba(2, 118, 226, 1) 0%, rgba(1, 65, 124, 1) 100%);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 64px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15); /* ⬅️ optional: adds nice depth */
}


.stat-item {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.stat-value {
    font-family: 'Inter', Helvetica, Arial, sans-serif;
    font-size: 60px;
    font-weight: 800;
    color: #ffffff;
    text-align: center;
}

.stat-label {
    font-family: 'Inter', Helvetica, Arial, sans-serif;
    font-size: 21px;
    font-weight: 500;
    color: #ffffff;
    margin-top: 16px;
    text-align: center;
}

.stat-divider {
    width: 5px;
    height: 109px;
    background-color: #ffffff;
}

/* ------------------------------------------------------------------ */
/*  TEAM                                                              */
/* ------------------------------------------------------------------ */
.team-section {
    padding: 80px 0;
    text-align: center;
}

.team-header {
    max-width: 858px;
    margin: auto auto 48px;
}

.team-title {
    font-size: 40px;
    font-weight: 700;
    color: #0d5795;
    margin-bottom: 16px;
}

.team-subtitle {
    font-size: 27px;
}

.team-grid {
    display: flex;
    justify-content: center;
    gap: 32px;
    flex-wrap: wrap;
    margin-bottom: 32px;
}

.team-member {
    width: 237px;
}

.team-photo {
    height: 305px;
    object-fit: cover;
    margin-bottom: 16px;
}

.team-name {
    font-size: 21px;
    font-weight: 700;
}

.team-position {
    font-size: 14px;
    color: rgba(85,83,83,.79);
}

.pagination-dots {
    display: flex;
    justify-content: center;
    gap: 8px;
}

.dot {
    width: 13.6px;
    height: 13.6px;
    border-radius: 50%;
    background: #d9d9d9;
}

.dot.active {
    background: #01abd3;
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
            font-weight: 400;
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

/* ------------------------------------------------------------------ */
/*  RESPONSIVE                                                        */
/* ------------------------------------------------------------------ */
@media (max-width: 1200px) {
    .main-header {
        padding: 0 24px;
    }

    .main-nav {
        gap: 24px;
    }

    .nav-link {
        font-size: 20px;
    }
}

@media (max-width: 992px) {
    .hero-section {
        height: auto;
        padding: 80px 0;
    }

    .features-section {
        flex-direction: column;
    }

    .feature-card {
        min-height: 400px;
    }

    .insights-container {
        flex-direction: column;
    }

    .insights-image {
        width: 100%;
    }
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 28px;
    }

    .hero-desc {
        font-size: 18px;
    }

    .section-title,
    .feature-title,
    .insights-title {
        font-size: 32px;
    }

    .newsletter-form {
        flex-direction: column;
    }

    .newsletter-input {
        border-radius: 7px;
        margin-bottom: 12px;
    }

    .newsletter-button {
        border-radius: 5px;
        width: 100%;
    }

    .stats-container {
        flex-direction: column;
        gap: 32px;
    }

    .stat-divider {
        display: none;
    }
}
</style>
</head>
<body>

<!-- ====================== HEADER ====================== -->
<header class="main-header">
    <div class="logo"><span class="logo-normal">PROSPER</span><span class="logo-bold">HR</span></div>
    <nav class="main-nav">
        <a href="{{ route('home') }}" class="nav-link active">Home</a>
        <a href="{{ route('about') }}" class="nav-link">About Us</a>
        <a href="#" class="nav-link">Services</a>
        <a href="#" class="nav-link">Jobs</a>
        <a href="{{ route('contact') }}" class="nav-link">Contact</a>
    </nav>
    <button class="btn-consultation">
        Request A Consultation
        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none" viewBox="0 0 24 24" stroke="#0d5795" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7l7 7-7 7" />
        </svg>
    </button>

</header>

<!-- ====================== HERO ====================== -->
<section class="hero-section">
    <img src="{{ asset('images/image21.png') }}" alt="Hero background" class="hero-bg">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-title">Who We Are</h1>
        <p class="hero-desc">
            At HR Prosper, we believe that people are at the heart of every successful business. Our job is to help organizations attract, nurture, and retain talent while with HR systems that support long-term growth and compliance.
        </p>
        <button class="btn-hero">Request A Consultation</button>
    </div>
</section>

<!-- ====================== CORE VALUES ====================== -->
<section class="core-values-section">
    <h2 class="section-title">Our Core Values</h2>
    <div class="values-grid">
        <div class="value-card">
            <img src="{{ asset('images/image11.png') }}" alt="Integrity" class="value-icon">
            <h3 class="value-title">Integrity</h3>
            <p class="value-desc">We act with honesty, fairness, and transparency.</p>
        </div>
        <div class="value-card">
            <img src="{{ asset('images/image11.png') }}" alt="Excellence" class="value-icon">
            <h3 class="value-title">Excellence</h3>
            <p class="value-desc">We aim to exceed expectations in all we do.</p>
        </div>
        <div class="value-card">
            <img src="{{ asset('images/image11.png') }}" alt="Partnership" class="value-icon">
            <h3 class="value-title">Partnership</h3>
            <p class="value-desc">We work collaboratively with our clients.</p>
        </div>
        <div class="value-card">
            <img src="{{ asset('images/image11.png') }}" alt="Innovation" class="value-icon">
            <h3 class="value-title">Innovation</h3>
            <p class="value-desc">We design forward-thinking HR solutions.</p>
        </div>
        <div class="value-card">
            <img src="{{ asset('images/image11.png') }}" alt="Growth" class="value-icon">
            <h3 class="value-title">Growth</h3>
            <p class="value-desc">We foster success for both businesses and their employees.</p>
        </div>
    </div>
</section>

    <!-- Industries We Serve Section -->
    <section class="industries-section">
        <img src="{{ asset('images/image20.jpg') }}" alt="Industries" class="industries-image">
        <div class="industries-content">
            <h2 class="industries-title">Industries We Serve</h2>
            <div class="industries-list">
                We support a wide range of organizations, including:<br>
                • SMEs & Startups<br>
                • Corporates & Multinationals<br>
                • NGOs & Development Partners<br>
                • Manufacturing & Logistics<br>
                • Financial Services & Insurance<br>
                • ICT, Technology & Communications<br>
                • Public Sector & Government Agencies
            </div>
            <button class="btn-services">Explore Our Services</button>
        </div>
    </section>

    <!-- Why Choose HR Prosper Section -->
    <section class="why-choose-section">
        <div class="why-choose-content">
            <h2 class="why-choose-title">Why Choose Hr Prosper</h2>
            <div class="why-choose-list">
                <div class="why-choose-item">
                    <div class="why-choose-bullet"></div>
                    <div class="why-choose-text">
                        <span class="why-choose-text-bold">Expertise in Kenyan Labour Laws</span><br>
                        <span>Stay compliant with ever-changing regulations.</span>
                    </div>
                </div>
                <div class="why-choose-item">
                    <div class="why-choose-bullet"></div>
                    <div class="why-choose-text">
                        <span class="why-choose-text-bold">Comprehensive HR Solutions</span><br>
                        <span>All your HR needs in one place.</span>
                    </div>
                </div>
                <div class="why-choose-item">
                    <div class="why-choose-bullet"></div>
                    <div class="why-choose-text">
                        <span class="why-choose-text-bold">Customized Services</span><br>
                        <span>Solutions designed around your culture and goals.</span>
                    </div>
                </div>
                <div class="why-choose-item">
                    <div class="why-choose-bullet"></div>
                    <div class="why-choose-text">
                        <span class="why-choose-text-bold">Cost Efficiency</span><br>
                        <span>Reduce HR overheads and improve efficiency.</span>
                    </div>
                </div>
                <div class="why-choose-item">
                    <div class="why-choose-bullet"></div>
                    <div class="why-choose-text">
                        <span class="why-choose-text-bold">Proven Track Record</span><br>
                        <span>Successful projects across industries.</span>
                    </div>
                </div>
                <div class="why-choose-item">
                    <div class="why-choose-bullet"></div>
                    <div class="why-choose-text">
                        <span class="why-choose-text-bold">Dedicated Support</span><br>
                        <span>A team committed to helping you prosper</span>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('images/image19.png') }}" alt="Why choose us" class="why-choose-image">
    </section>

    <!-- Insights & Resources Section -->
    <section class="insights-section">
        <div class="insights-overlay"></div>
        <div class="insights-container">
            <div class="insights-content">
                <h2 class="insights-title">Insights & Resources</h2>
                <div class="insights-list">
                    Stay updated with the latest HR trends, laws, and practices through our:<br>
                    • HR Guides & Toolkits<br>
                    • Labour Law Updates<br>
                    • Industry Insights & Thought Leadership<br>
                    • Blog Articles
                </div>
                <button class="btn-insights">Request A Consultation</button>
            </div>
            <img src="{{ asset('images/image18.png') }}" alt="Insights" class="insights-image">
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="statistics-section">
        <div class="statistics-container">
            <div class="stat-item">
                <div class="stat-value">105k</div>
                <div class="stat-label">Happy Client</div>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <div class="stat-value">80+</div>
                <div class="stat-label">Employer Solutions</div>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <div class="stat-value">97%</div>
                <div class="stat-label">Customer Satisfaction</div>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <div class="stat-value">7+</div>
                <div class="stat-label">Countries</div>
            </div>
        </div>
    </section>

<!-- ====================== TEAM ====================== -->
<section class="team-section">
    <div class="team-header">
        <h2 class="team-title">Meet Our Team</h2>
        <p class="team-subtitle">At HR Prosper, our operations are divided into five specialized divisions to guarantee expert service delivery</p>
    </div>
    <div class="team-grid">
        <div class="team-member">
            <img src="{{ asset('images/image14.png') }}" alt="Charles S. Brown" class="team-photo">
            <h3 class="team-name">Charles S. Brown</h3>
            <p class="team-position">Managing Director</p>
        </div>
        <div class="team-member">
            <img src="{{ asset('images/image15.png') }}" alt="Jessica Brown" class="team-photo">
            <h3 class="team-name">Jessica Brown</h3>
            <p class="team-position">HR Manager</p>
        </div>
        <div class="team-member">
            <img src="{{ asset('images/image16.png') }}" alt="Christine Eve" class="team-photo">
            <h3 class="team-name">Christine Eve</h3>
            <p class="team-position">Admin Manager</p>
        </div>
        <div class="team-member">
            <img src="{{ asset('images/image17.png') }}" alt="Jannat Humayra" class="team-photo">
            <h3 class="team-name">Jannat Humayra</h3>
            <p class="team-position">Lead Developer</p>
        </div>
    </div>
    <div class="pagination-dots">
        <span class="dot"></span><span class="dot"></span><span class="dot active"></span><span class="dot"></span><span class="dot"></span>
    </div>
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

</body>
</html>
