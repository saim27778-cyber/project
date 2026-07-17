
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head(); ?>




    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- CSS RESET & VARIABLES FOR THIS HEADER ONLY --- */
        .tx-bkg-header-wrapper {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            --tx-yellow: #ffc107;
            --tx-black: #111111;
            --tx-dark-gray: #1a1a1a;
            --tx-white: #ffffff;
            --tx-transition: all 0.3s ease;
        }

        /* --- STICKY HEADER CONTAINER --- */
        .tx-bkg-header-main {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 9999;
            background-color: var(--tx-black);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            border-bottom: 3px solid var(--tx-yellow);
            padding: 15px 0;
            transition: var(--tx-transition);
        }

        /* Container to align items */
        .tx-bkg-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* --- LOGO STYLE --- */
        .tx-bkg-logo-area a {
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .tx-bkg-logo-icon {
            color: var(--tx-yellow);
            font-size: 24px;
        }

        .tx-bkg-logo-text {
            color: var(--tx-white);
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .tx-bkg-logo-text span {
            color: var(--tx-yellow);
        }

        /* --- NAVIGATION MENU --- */
        .tx-bkg-nav-menu {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            gap: 25px;
        }

        .tx-bkg-nav-item a {
            color: #cccccc;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            transition: var(--tx-transition);
            position: relative;
            padding: 5px 0;
        }

        /* Hover Effect */
        .tx-bkg-nav-item a:hover,
        .tx-bkg-nav-item.active a {
            color: var(--tx-yellow);
        }

        .tx-bkg-nav-item a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--tx-yellow);
            transition: var(--tx-transition);
        }

        .tx-bkg-nav-item a:hover::after,
        .tx-bkg-nav-item.active a::after {
            width: 100%;
        }

        /* --- AUTH BUTTONS --- */
        .tx-bkg-auth-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .tx-bkg-btn {
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            padding: 10px 22px;
            border-radius: 5px;
            transition: var(--tx-transition);
            cursor: pointer;
        }

        .tx-bkg-btn-login {
            color: var(--tx-white);
            background: transparent;
            border: 1px solid transparent;
        }

        .tx-bkg-btn-login:hover {
            color: var(--tx-yellow);
        }

        .tx-bkg-btn-register {
            color: var(--tx-black);
            background-color: var(--tx-yellow);
            border: 1px solid var(--tx-yellow);
            box-shadow: 0 4px 10px rgba(255, 193, 7, 0.2);
        }

        .tx-bkg-btn-register:hover {
            background-color: transparent;
            color: var(--tx-yellow);
        }

        /* --- HAMBURGER MENU BUTTON --- */
        .tx-bkg-hamburger {
            display: none;
            flex-direction: column;
            justify-content: space-between;
            width: 24px;
            height: 18px;
            background: transparent;
            border: none;
            cursor: pointer;
            padding: 0;
            z-index: 10001;
        }

        .tx-bkg-hamburger span {
            width: 100%;
            height: 2.5px;
            background-color: var(--tx-white);
            transition: var(--tx-transition);
            transform-origin: left;
        }

        /* Hamburger Animation to 'X' */
        .tx-bkg-hamburger.open span:first-child {
            transform: rotate(45deg);
            background-color: var(--tx-yellow);
        }

        .tx-bkg-hamburger.open span:nth-child(2) {
            opacity: 0;
        }

        .tx-bkg-hamburger.open span:last-child {
            transform: rotate(-45deg);
            background-color: var(--tx-yellow);
        }

        /* --- RESPONSIVE MEDIA QUERY (MOBILE & TABLET) --- */
        @media (max-width: 991px) {
            .tx-bkg-hamburger {
                display: flex;
            }

            .tx-bkg-nav-menu {
                position: fixed;
                top: 0;
                right: -100%;
                width: 280px;
                height: 100vh;
                background-color: var(--tx-dark-gray);
                flex-direction: column;
                padding: 100px 30px 30px 30px;
                gap: 20px;
                box-shadow: -5px 0 15px rgba(0,0,0,0.5);
                transition: right 0.4s ease-in-out;
                z-index: 10000;
            }

            .tx-bkg-nav-menu.open {
                right: 0;
            }

            .tx-bkg-nav-item a {
                font-size: 18px;
                display: block;
                padding: 10px 0;
            }

            .tx-bkg-auth-actions {
                margin-right: 20px;
            }
        }

        @media (max-width: 480px) {
            .tx-bkg-auth-actions {
                display: none; /* Mobile par buttons hide ho kar menu me add kiye ja sakte hain */
            }
            
            /* Mobile ke liye menu ke andar buttons display karne ka option */
            .tx-bkg-nav-menu .tx-bkg-mobile-auth {
                display: flex;
                flex-direction: column;
                gap: 10px;
                margin-top: 20px;
                border-top: 1px solid #333;
                padding-top: 20px;
            }
        }

        /* Dummy class to prevent menu buttons showing on desktop */
        .tx-bkg-nav-menu .tx-bkg-mobile-auth {
            display: none;
        }
        @media (max-width: 480px) {
            .tx-bkg-nav-menu .tx-bkg-mobile-auth {
                display: flex;
            }
        }

        /* For demo page content spacing */
        .tx-bkg-dummy-content {
            margin-top: 120px;
            padding: 20px;
            color: #333;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="tx-bkg-header-wrapper">
    <header class="tx-bkg-header-main">
        <div class="tx-bkg-container">
            
            <div class="tx-bkg-logo-area">
                <a href="#">
                    <i class="fa-solid fa-taxi tx-bkg-logo-icon"></i>
                    <span class="tx-bkg-logo-text">City<span>Cab</span></span>
                </a>
            </div>

            <nav>
                <ul class="tx-bkg-nav-menu" id="txNavMenu">
                    <li class="tx-bkg-nav-item active"><a href="barfii/#">Home</a></li>
                    <li class="tx-bkg-nav-item"><a href="/barfii/book-ride/">Book Ride</a></li>
                    <li class="tx-bkg-nav-item"><a href="/barfii/drivers/">Drivers</a></li>
                    <li class="tx-bkg-nav-item"><a href="/barfii/companies/">Taxi Companies</a></li>
                   <li class="tx-bkg-nav-item"><a href="/barfii/about-us/">About Us</a></li>  

                    <li class="tx-bkg-nav-item"><a href="/barfii/contact-2/">Contact</a></li>
                    
                    <div class="tx-bkg-mobile-auth">
                        <a href="#" class="tx-bkg-btn tx-bkg-btn-login" style="text-align: center;">Login</a>
                        <a href="#" class="tx-bkg-btn tx-bkg-btn-register" style="text-align: center;">Register</a>
                    </div>
                </ul>
            </nav>

            <div class="tx-bkg-auth-actions">
                <a href="#" class="tx-bkg-btn tx-bkg-btn-login">Login</a>
                <a href="#" class="tx-bkg-btn tx-bkg-btn-register">Register</a>
            </div>

            <button class="tx-bkg-hamburger" id="txHamburgerBtn" aria-label="Toggle Navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>
    </header>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hamburgerBtn = document.getElementById('txHamburgerBtn');
        const navMenu = document.getElementById('txNavMenu');
        const navLinks = document.querySelectorAll('.tx-bkg-nav-item a');

        // Toggle Menu on Hamburger Click
        hamburgerBtn.addEventListener('click', function() {
            hamburgerBtn.classList.toggle('open');
            navMenu.classList.toggle('open');
        });

        // Close Menu when any link is clicked (Mobile View)
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                hamburgerBtn.classList.remove('open');
                navMenu.classList.remove('remove');
                
                // Active Class Switch logic
                document.querySelector('.tx-bkg-nav-item.active').classList.remove('active');
                this.parentElement.classList.add('active');
                
                if(navMenu.classList.contains('open')) {
                    navMenu.classList.remove('open');
                    hamburgerBtn.classList.remove('open');
                }
            });
        });
    });
</script>




















    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- CSS RESET & VARIABLES FOR HERO SECTION ONLY --- */
        .tx-hero-main-wrapper {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            --tx-hr-yellow: #ffc107;
            --tx-hr-black: #111111;
            --tx-hr-white: #ffffff;
            --tx-hr-gray: #f8f9fa;
            --tx-hr-text-muted: #e0e0e0;
            --tx-hr-transition: all 0.3s ease;

            /* Full-width container setting with high-quality dark themed city taxi background */
            position: relative;
            min-height: 100vh;
            width: 100%;
            background: url('https://images.unsplash.com/photo-149266473845e-3dfd541ae751?auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
            display: flex;
            align-items: center;
            padding-top: 80px; /* Space for fixed sticky header */
            overflow: hidden;
        }

        /* Dark Linear Overlay for professional contrast */
        .tx-hero-main-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(17, 17, 17, 0.9) 0%, rgba(17, 17, 17, 0.6) 100%);
            z-index: 1;
        }

        /* Structural Container */
        .tx-hero-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            position: relative;
            z-index: 2; /* Content overlay ke upar lane ke liye */
        }

        /* 2-Column Row Layout */
        .tx-hero-row {
            display: flex;
            flex-direction: column;
            gap: 40px;
            align-items: center;
        }

        @media (min-width: 992px) {
            .tx-hero-row {
                flex-direction: row;
                justify-content: space-between;
            }
        }

        /* --- COLUMN LEFT: TEXT CONTENT --- */
        .tx-hero-content-left {
            flex: 1;
            text-align: center;
        }

        @media (min-width: 992px) {
            .tx-hero-content-left {
                text-align: left;
                padding-right: 30px;
            }
        }

        .tx-hero-badge {
            display: inline-block;
            background-color: rgba(255, 193, 7, 0.15);
            border: 1px solid var(--tx-hr-yellow);
            color: var(--tx-hr-yellow);
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        .tx-hero-heading {
            color: var(--tx-hr-white);
            font-size: 36px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .tx-hero-heading span {
            color: var(--tx-hr-yellow);
        }

        @media (min-width: 576px) {
            .tx-hero-heading { font-size: 48px; }
        }
        @media (min-width: 1200px) {
            .tx-hero-heading { font-size: 56px; }
        }

        .tx-hero-description {
            color: var(--tx-hr-text-muted);
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 35px;
            max-width: 550px;
        }

        @media (max-width: 991px) {
            .tx-hero-description { margin: 0 auto 35px auto; }
        }

        /* Secondary Action Button (Become a Driver) */
        .tx-hero-btn-secondary {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: var(--tx-hr-white);
            background-color: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 14px 28px;
            font-size: 15px;
            font-weight: 600;
            border-radius: 6px;
            transition: var(--tx-hr-transition);
        }

        .tx-hero-btn-secondary:hover {
            background-color: var(--tx-hr-white);
            color: var(--tx-hr-black);
            transform: translateY(-2px);
        }

        /* --- COLUMN RIGHT: BOOKING CARD FORM --- */
        .tx-hero-card-right {
            flex: 1;
            width: 100%;
            max-width: 480px;
        }

        .tx-hero-booking-card {
            background-color: var(--tx-hr-white);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            border-bottom: 5px solid var(--tx-hr-yellow);
        }

        .tx-hero-card-title {
            color: var(--tx-hr-black);
            font-size: 22px;
            font-weight: 700;
            margin-top: 0;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .tx-hero-card-title i {
            color: var(--tx-hr-yellow);
        }

        /* Input Group Structure */
        .tx-hero-form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .tx-hero-form-group label {
            display: block;
            color: #555555;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .tx-hero-input-wrapper {
            position: relative;
        }

        .tx-hero-input-wrapper i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #888888;
            font-size: 16px;
            transition: var(--tx-hr-transition);
        }

        /* Custom Specific Input Styling */
        .tx-hero-input-field {
            width: 100%;
            padding: 14px 15px 14px 45px;
            border: 2px solid #e1e1e1;
            border-radius: 6px;
            font-size: 15px;
            font-family: inherit;
            color: var(--tx-hr-black);
            background-color: var(--tx-hr-gray);
            outline: none;
            box-sizing: border-box;
            transition: var(--tx-hr-transition);
        }

        .tx-hero-input-field:focus {
            border-color: var(--tx-hr-yellow);
            background-color: var(--tx-hr-white);
            box-shadow: 0 4px 12px rgba(255, 193, 7, 0.1);
        }

        .tx-hero-input-field:focus + i {
            color: var(--tx-hr-yellow);
        }

        /* Form Submitting CTA Button */
        .tx-hero-btn-primary {
            width: 100%;
            background-color: var(--tx-hr-yellow);
            color: var(--tx-hr-black);
            border: none;
            padding: 16px;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-radius: 6px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            box-shadow: 0 5px 15px rgba(255, 193, 7, 0.3);
            transition: var(--tx-hr-transition);
        }

        .tx-hero-btn-primary:hover {
            background-color: #e0a800;
            transform: translateY(-2px);
            box-shadow: 0 7px 20px rgba(255, 193, 7, 0.4);
        }

        .tx-hero-btn-primary:active {
            transform: translateY(0);
        }
    </style>


    <section class="tx-hero-main-wrapper">
        <div class="tx-hero-container">
            <div class="tx-hero-row">
                
                <div class="tx-hero-content-left">
                    <span class="tx-hero-badge">Premium Marketplace</span>
                    <h1 class="tx-hero-heading">Book Your Ride<br><span>Anytime, Anywhere</span></h1>
                    <p class="tx-hero-description">
                        Experience the ultimate comfort and safety with our elite marketplace network. Verified professional drivers, instant dispatch, transparent tracking, and upfront pricing.
                    </p>
                    <a href="#" class="tx-hero-btn-secondary">
                        <i class="fa-solid fa-car-side"></i> Become a Driver
                    </a>
                </div>

                <div class="tx-hero-card-right">
                    <div class="tx-hero-booking-card">
                        <h2 class="tx-hero-card-title">
                            <i class="fa-solid fa-route"></i> Online Cab Booking
                        </h2>
                        
                        <form onsubmit="event.preventDefault();">
                            <div class="tx-hero-form-group">
                                <label for="tx-pickup">Pickup Location</label>
                                <div class="tx-hero-input-wrapper">
                                    <input type="text" id="tx-pickup" class="tx-hero-input-field" placeholder="Enter street, city, or airport..." required>
                                    <i class="fa-solid fa-location-dot" style="color: #28a745;"></i>
                                </div>
                            </div>

                            <div class="tx-hero-form-group">
                                <label for="tx-dropoff">Drop-off Location</label>
                                <div class="tx-hero-input-wrapper">
                                    <input type="text" id="tx-dropoff" class="tx-hero-input-field" placeholder="Enter destination address..." required>
                                    <i class="fa-solid fa-flag-checkered" style="color: #dc3545;"></i>
                                </div>
                            </div>

                            <button type="submit" class="tx-hero-btn-primary">
                                Book Now <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
  



























    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- CSS RESET & VARIABLES FOR HOW IT WORKS SECTION ONLY --- */
        .tx-hiw-section-wrapper {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            --tx-hw-yellow: #ffc107;
            --tx-hw-black: #111111;
            --tx-hw-dark-card: #1a1a1a;
            --tx-hw-text-white: #ffffff;
            --tx-hw-text-muted: #aaaaaa;
            --tx-hw-transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);

            background-color: var(--tx-hw-black);
            padding: 100px 0;
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .tx-hiw-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* --- SECTION HEADER TYPOGRAPHY --- */
        .tx-hiw-section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .tx-hiw-subtitle {
            color: var(--tx-hw-yellow);
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: inline-block;
            margin-bottom: 10px;
        }

        .tx-hiw-main-title {
            color: var(--tx-hw-text-white);
            font-size: 36px;
            font-weight: 700;
            margin: 0;
            letter-spacing: -0.5px;
        }

        .tx-hiw-main-title span {
            color: var(--tx-hw-yellow);
        }

        /* --- STEPS CARDS GRID LAYOUT --- */
        .tx-hiw-steps-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 30px;
            position: relative;
        }

        @media (min-width: 768px) {
            .tx-hiw-steps-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 992px) {
            .tx-hiw-steps-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* --- SINGLE STEP CARD STYLE --- */
        .tx-hiw-card {
            background-color: var(--tx-hw-dark-card);
            border: 1px solid #252525;
            border-radius: 12px;
            padding: 40px 30px;
            text-align: center;
            position: relative;
            transition: var(--tx-hw-transition);
            z-index: 1;
        }

        /* Top Numeric Indicator Badge */
        .tx-hiw-number-badge {
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 40px;
            background-color: var(--tx-hw-black);
            border: 2px solid var(--tx-hw-yellow);
            color: var(--tx-hw-yellow);
            font-weight: 700;
            font-size: 16px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            transition: var(--tx-hw-transition);
        }

        /* Icon Wrapper Design */
        .tx-hiw-icon-box {
            width: 80px;
            height: 80px;
            background-color: rgba(255, 193, 7, 0.05);
            border: 1px solid rgba(255, 193, 7, 0.2);
            color: var(--tx-hw-yellow);
            font-size: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 15px auto 25px auto;
            transition: var(--tx-hw-transition);
        }

        .tx-hiw-card-title {
            color: var(--tx-hw-text-white);
            font-size: 20px;
            font-weight: 600;
            margin: 0 0 15px 0;
            transition: var(--tx-hw-transition);
        }

        .tx-hiw-card-desc {
            color: var(--tx-hw-text-muted);
            font-size: 14px;
            line-height: 1.6;
            margin: 0;
        }

        /* --- INTERACTIVE HOVER EFFECTS --- */
        .tx-hiw-card:hover {
            transform: translateY(-10px);
            border-color: var(--tx-hw-yellow);
            background-color: #202020;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }

        .tx-hiw-card:hover .tx-hiw-number-badge {
            background-color: var(--tx-hw-yellow);
            color: var(--tx-hw-black);
            box-shadow: 0 5px 15px rgba(255, 193, 7, 0.4);
        }

        .tx-hiw-card:hover .tx-hiw-icon-box {
            background-color: var(--tx-hw-yellow);
            color: var(--tx-hw-black);
            transform: scale(1.1) rotate(5deg);
        }

        .tx-hiw-card:hover .tx-hiw-card-title {
            color: var(--tx-hw-yellow);
        }

        /* --- DESKTOP CONNECTING GUIDELINES (Optional Flow Element) --- */
        @media (min-width: 992px) {
            .tx-hiw-card:not(:last-child)::after {
                content: '\f105'; /* FontAwesome Chevron Right */
                font-family: 'Font Awesome 6 Free';
                font-weight: 900;
                position: absolute;
                right: -20px;
                top: 50%;
                transform: translateY(-50%);
                color: #333333;
                font-size: 24px;
                z-index: 2;
                pointer-events: none;
            }
        }
    </style>

    <section class="tx-hiw-section-wrapper">
        <div class="tx-hiw-container">
            
            <div class="tx-hiw-section-header">
                <span class="tx-hiw-subtitle">3 Easy Steps</span>
                <h2 class="tx-hiw-main-title">How It <span>Works</span></h2>
            </div>

            <div class="tx-hiw-steps-grid">
                
                <div class="tx-hiw-card">
                    <div class="tx-hiw-number-badge">01</div>
                    <div class="tx-hiw-icon-box">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <h3 class="tx-hiw-card-title">Enter Ride Details</h3>
                    <p class="tx-hiw-card-desc">
                        Input your pickup location, drop-off destination, and preferred timing inside our modern booking system.
                    </p>
                </div>

                <div class="tx-hiw-card">
                    <div class="tx-hiw-number-badge">02</div>
                    <div class="tx-hiw-icon-box">
                        <i class="fa-solid fa-id-card-clip"></i>
                    </div>
                    <h3 class="tx-hiw-card-title">Choose Driver</h3>
                    <p class="tx-hiw-card-desc">
                        Browse top-rated marketplace drivers, compare transparent vehicle fares, and select your perfect match instantly.
                    </p>
                </div>

                <div class="tx-hiw-card">
                    <div class="tx-hiw-number-badge">03</div>
                    <div class="tx-hiw-icon-box">
                        <i class="fa-solid fa-champagne-glasses"></i>
                    </div>
                    <h3 class="tx-hiw-card-title">Enjoy Your Trip</h3>
                    <p class="tx-hiw-card-desc">
                        Track your cab in real-time, sit back inside your premium ride, and arrive at your destination safely and comfortably.
                    </p>
                </div>

            </div>

        </div>
    </section>




















    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- CSS RESET & VARIABLES FOR SERVICES SECTION ONLY --- */
        .tx-srv-section-wrapper {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            --tx-sr-yellow: #ffc107;
            --tx-sr-black: #111111;
            --tx-sr-dark-gray: #1a1a1a;
            --tx-sr-border-clr: #252525;
            --tx-sr-text-light: #ffffff;
            --tx-sr-text-muted: #aaaaaa;
            --tx-sr-transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);

            background-color: var(--tx-sr-black);
            padding: 100px 0;
            width: 100%;
        }

        .tx-srv-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* --- SECTION HEADER TYPOGRAPHY --- */
        .tx-srv-section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .tx-srv-subtitle {
            color: var(--tx-sr-yellow);
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: inline-block;
            margin-bottom: 10px;
        }

        .tx-srv-main-title {
            color: var(--tx-sr-text-light);
            font-size: 36px;
            font-weight: 700;
            margin: 0;
            letter-spacing: -0.5px;
        }

        .tx-srv-main-title span {
            color: var(--tx-sr-yellow);
        }

        /* --- SERVICES FLEX/GRID RESPONSIVE FLOW --- */
        .tx-srv-cards-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        /* Default Card Baseline Definition */
        .tx-srv-card {
            background-color: var(--tx-srv-dark-gray);
            border: 1px solid var(--tx-sr-border-clr);
            border-radius: 12px;
            padding: 35px 25px;
            position: relative;
            transition: var(--tx-sr-transition);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            box-sizing: border-box;
            
            /* Responsive Sizing Logic for Clean Columns Breakdown */
            flex: 1 1 100%; /* Mobile - Single Column */
            max-width: 100%;
        }

        @media (min-width: 768px) {
            .tx-srv-card {
                flex: 1 1 calc(50% - 15px); /* Tablet - 2 Columns */
                max-width: calc(50% - 15px);
            }
        }

        @media (min-width: 992px) {
            .tx-srv-card {
                flex: 1 1 calc(33.333% - 20px); /* Desktop - 3 Columns Base */
                max-width: calc(33.333% - 20px);
            }
        }

        /* --- INTERNAL ELEMENTS INSIDE CARD --- */
        .tx-srv-icon-wrapper {
            width: 65px;
            height: 65px;
            background-color: rgba(255, 193, 7, 0.03);
            border: 1px solid rgba(255, 193, 7, 0.15);
            color: var(--tx-sr-yellow);
            font-size: 26px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            transition: var(--tx-sr-transition);
        }

        .tx-srv-card-title {
            color: var(--tx-sr-text-light);
            font-size: 20px;
            font-weight: 600;
            margin: 0 0 12px 0;
            transition: var(--tx-sr-transition);
        }

        .tx-srv-card-desc {
            color: var(--tx-sr-text-muted);
            font-size: 14px;
            line-height: 1.6;
            margin: 0 0 25px 0;
            flex-grow: 1; /* Aligns read more actions perfectly at bottom */
        }

        /* Action Anchor Link Trigger */
        .tx-srv-readmore {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--tx-sr-yellow);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: var(--tx-sr-transition);
        }

        .tx-srv-readmore i {
            font-size: 12px;
            transition: var(--tx-sr-transition);
        }

        /* --- SPECIAL ATTRIBUTE BADGES (Premium/Corporate) --- */
        .tx-srv-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: rgba(255, 193, 7, 0.1);
            border: 1px solid var(--tx-sr-yellow);
            color: var(--tx-sr-yellow);
            font-size: 11px;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 4px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* --- PROFESSIONAL HOVER EXECUTION --- */
        .tx-srv-card:hover {
            transform: translateY(-5px);
            border-color: var(--tx-sr-yellow);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.4);
            background-color: #1e1e1e;
        }

        .tx-srv-card:hover .tx-srv-icon-wrapper {
            background-color: var(--tx-sr-yellow);
            color: var(--tx-sr-black);
            transform: scale(1.05);
        }

        .tx-srv-card:hover .tx-srv-card-title {
            color: var(--tx-sr-yellow);
        }

        .tx-srv-card:hover .tx-srv-readmore {
            color: var(--tx-sr-text-light);
        }

        .tx-srv-card:hover .tx-srv-readmore i {
            transform: translateX(4px);
            color: var(--tx-sr-yellow);
        }
    </style>


    <section class="tx-srv-section-wrapper">
        <div class="tx-srv-container">
            
            <div class="tx-srv-section-header">
                <span class="tx-srv-subtitle">What We Offer</span>
                <h2 class="tx-srv-main-title">Our Elite Marketplace <span>Services</span></h2>
            </div>

            <div class="tx-srv-cards-grid">
                
                <div class="tx-srv-card">
                    <div class="tx-srv-icon-wrapper">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <h3 class="tx-srv-card-title">Standard Taxi</h3>
                    <p class="tx-srv-card-desc">
                        Affordable and reliable everyday commute solution. Get matched with local urban drivers for quick, safe point-to-point transfers anytime.
                    </p>
                    <a href="#" class="tx-srv-readmore">Book Fleet <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <div class="tx-srv-card">
                    <div class="tx-srv-icon-wrapper">
                        <i class="fa-solid fa-van-shuttle"></i>
                    </div>
                    <h3 class="tx-srv-card-title">Family Taxi</h3>
                    <p class="tx-srv-card-desc">
                        Spacious multi-seater SUVs and mini-vans designed for family trips, group activities, or heavy luggage commutes with comfort.
                    </p>
                    <a href="#" class="tx-srv-readmore">Book Fleet <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <div class="tx-srv-card">
                    <div class="tx-srv-icon-wrapper">
                        <i class="fa-solid fa-plane-departure"></i>
                    </div>
                    <h3 class="tx-srv-card-title">Airport Transfer</h3>
                    <p class="tx-srv-card-desc">
                        Never miss a flight. Schedule precise airport drop-offs and track delayed flights for terminal pickups with dedicated professional support.
                    </p>
                    <a href="#" class="tx-srv-readmore">Book Fleet <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <div class="tx-srv-card">
                    <span class="tx-srv-badge">Elite</span>
                    <div class="tx-srv-icon-wrapper">
                        <i class="fa-solid fa-crown"></i>
                    </div>
                    <h3 class="tx-srv-card-title">Luxury Taxi</h3>
                    <p class="tx-srv-card-desc">
                        Travel in supreme style. High-end premium executive sedans driven by top-rated luxury chauffeurs for high-profile business itineraries.
                    </p>
                    <a href="#" class="tx-srv-readmore">Book Fleet <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <div class="tx-srv-card">
                    <span class="tx-srv-badge">Business</span>
                    <div class="tx-srv-icon-wrapper">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <h3 class="tx-srv-card-title">Corporate Transport</h3>
                    <p class="tx-srv-card-desc">
                        Tailored business marketplace accounts for employee scheduling, corporate client greetings, and structured monthly transparent billing modules.
                    </p>
                    <a href="#" class="tx-srv-readmore">Book Fleet <i class="fa-solid fa-arrow-right"></i></a>
                </div>

            </div>

        </div>
    </section>
  




















    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- CSS RESET & VARIABLES FOR WHY CHOOSE US SECTION ONLY --- */
        .tx-wcu-section-wrapper {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            --tx-w-yellow: #ffc107;
            --tx-w-black: #111111;
            --tx-w-dark-gray: #1a1a1a;
            --tx-w-card-bg: #161616;
            --tx-w-border: #222222;
            --tx-w-text-white: #ffffff;
            --tx-w-text-muted: #aaaaaa;
            --tx-w-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);

            background-color: var(--tx-w-black);
            padding: 100px 0;
            width: 100%;
        }

        .tx-wcu-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* --- SECTION HEADER TYPOGRAPHY --- */
        .tx-wcu-section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .tx-wcu-subtitle {
            color: var(--tx-w-yellow);
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: inline-block;
            margin-bottom: 10px;
        }

        .tx-wcu-main-title {
            color: var(--tx-w-text-white);
            font-size: 36px;
            font-weight: 700;
            margin: 0;
            letter-spacing: -0.5px;
        }

        .tx-wcu-main-title span {
            color: var(--tx-w-yellow);
        }

        /* --- GRID STRUCTURE --- */
        .tx-wcu-features-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 30px;
        }

        @media (min-width: 768px) {
            .tx-wcu-features-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 992px) {
            .tx-wcu-features-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* --- SINGLE FEATURE CARD --- */
        .tx-wcu-card {
            background-color: var(--tx-w-card-bg);
            border: 1px solid var(--tx-w-border);
            border-radius: 12px;
            padding: 40px 30px;
            transition: var(--tx-w-transition);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            position: relative;
            overflow: hidden;
        }

        /* Top Accent Decorative Line */
        .tx-wcu-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 3px;
            background-color: var(--tx-w-yellow);
            transition: var(--tx-w-transition);
        }

        /* Icon Badge Background */
        .tx-wcu-icon-container {
            width: 60px;
            height: 60px;
            background-color: var(--tx-w-dark-gray);
            border: 1px solid #2a2a2a;
            border-radius: 10px;
            color: var(--tx-w-yellow);
            font-size: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            transition: var(--tx-w-transition);
        }

        .tx-wcu-card-title {
            color: var(--tx-w-text-white);
            font-size: 19px;
            font-weight: 600;
            margin: 0 0 12px 0;
            transition: var(--tx-w-transition);
        }

        .tx-wcu-card-desc {
            color: var(--tx-w-text-muted);
            font-size: 14px;
            line-height: 1.6;
            margin: 0;
        }

        /* --- PROFESSIONAL HOVER EXECUTION --- */
        .tx-wcu-card:hover {
            transform: translateY(-8px);
            border-color: #2a2a2a;
            background-color: #1c1c1c;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
        }

        .tx-wcu-card:hover::before {
            width: 100%;
        }

        .tx-wcu-card:hover .tx-wcu-icon-container {
            background-color: var(--tx-w-yellow);
            color: var(--tx-w-black);
            box-shadow: 0 5px 15px rgba(255, 193, 7, 0.2);
            transform: rotate(-3deg) scale(1.05);
        }

        .tx-wcu-card:hover .tx-wcu-card-title {
            color: var(--tx-w-yellow);
        }
    </style>


    <section class="tx-wcu-section-wrapper">
        <div class="tx-wcu-container">
            
            <div class="tx-wcu-section-header">
                <span class="tx-wcu-subtitle">Our Advantages</span>
                <h2 class="tx-wcu-main-title">Why Choose <span>CityCab</span></h2>
            </div>

            <div class="tx-wcu-features-grid">
                
                <div class="tx-wcu-card">
                    <div class="tx-wcu-icon-container">
                        <i class="fa-solid fa-user-shield"></i>
                    </div>
                    <h3 class="tx-wcu-card-title">Verified Drivers</h3>
                    <p class="tx-wcu-card-desc">
                        Every driver in our marketplace undergoes background checks and rigorous identity verification for your absolute peace of mind.
                    </p>
                </div>

                <div class="tx-wcu-card">
                    <div class="tx-wcu-icon-container">
                        <i class="fa-solid fa-credit-card"></i>
                    </div>
                    <h3 class="tx-wcu-card-title">Secure Payments</h3>
                    <p class="tx-wcu-card-desc">
                        Multiple digital payment gateways integrated flawlessly. Pay securely via credit cards, mobile wallets, or transparent cash modules.
                    </p>
                </div>

                <div class="tx-wcu-card">
                    <div class="tx-wcu-icon-container">
                        <i class="fa-solid fa-bolt"></i>
                    </div>
                    <h3 class="tx-wcu-card-title">Fast Booking</h3>
                    <p class="tx-wcu-card-desc">
                        No delays. Our smart matching algorithm dispatches the closest available driver instantly within a single tap process.
                    </p>
                </div>

                <div class="tx-wcu-card">
                    <div class="tx-wcu-icon-container">
                        <i class="fa-solid fa-map-location"></i>
                    </div>
                    <h3 class="tx-wcu-card-title">Real-Time Tracking</h3>
                    <p class="tx-wcu-card-desc">
                        Follow your driver's route live on the interactive navigation map from dispatch point until you arrive safely at your goal destination.
                    </p>
                </div>

                <div class="tx-wcu-card">
                    <div class="tx-wcu-icon-container">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h3 class="tx-wcu-card-title">24/7 Live Support</h3>
                    <p class="tx-wcu-card-desc">
                        Our dedicated customer operations center is available around the clock to assist you with active ride queries or lost belongings.
                    </p>
                </div>

                <div class="tx-wcu-card">
                    <div class="tx-wcu-icon-container">
                        <i class="fa-solid fa-tags"></i>
                    </div>
                    <h3 class="tx-wcu-card-title">Affordable Pricing</h3>
                    <p class="tx-wcu-card-desc">
                        No hidden surprises or unfair surcharges. Get standard upfront estimated fares calculated strictly before your confirmation click.
                    </p>
                </div>

            </div>

        </div>
    </section>
  










    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- CSS RESET & VARIABLES FOR MARKETPLACE SECTION ONLY --- */
        .tx-mp-section-wrapper {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            --tx-m-yellow: #ffc107;
            --tx-m-black: #111111;
            --tx-m-dark-bg: #1a1a1a;
            --tx-m-card-bg: #161616;
            --tx-m-border: #242424;
            --tx-m-text-light: #ffffff;
            --tx-m-text-muted: #aaaaaa;
            --tx-m-transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);

            background-color: var(--tx-m-black);
            padding: 100px 0;
            width: 100%;
        }

        .tx-mp-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* --- SECTION HEADER TYPOGRAPHY --- */
        .tx-mp-section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .tx-mp-subtitle {
            color: var(--tx-m-yellow);
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: inline-block;
            margin-bottom: 10px;
        }

        .tx-mp-main-title {
            color: var(--tx-m-text-light);
            font-size: 36px;
            font-weight: 700;
            margin: 0;
            letter-spacing: -0.5px;
        }

        .tx-mp-main-title span {
            color: var(--tx-m-yellow);
        }

        /* --- COMPANIES/LOGOS ROW --- */
        .tx-mp-companies-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 40px;
            background-color: var(--tx-m-dark-bg);
            border: 1px solid var(--tx-m-border);
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 70px;
        }

        .tx-mp-company-brand {
            flex: 1 1 150px;
            max-width: 180px;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0.4;
            filter: grayscale(100%);
            transition: var(--tx-m-transition);
            color: var(--tx-m-text-light);
            font-size: 22px;
            font-weight: 700;
            text-decoration: none;
            gap: 5px;
        }

        .tx-mp-company-brand:hover {
            opacity: 1;
            filter: grayscale(0%);
            color: var(--tx-m-yellow);
        }

        /* Sub heading separating categories */
        .tx-mp-inner-heading {
            color: var(--tx-m-text-light);
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 35px;
            text-align: center;
            position: relative;
        }

        /* --- DRIVERS CARDS GRID --- */
        .tx-mp-drivers-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 30px;
        }

        @media (min-width: 768px) {
            .tx-mp-drivers-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 992px) {
            .tx-mp-drivers-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* --- SINGLE DRIVER PROFILE CARD --- */
        .tx-mp-driver-card {
            background-color: var(--tx-m-card-bg);
            border: 1px solid var(--tx-m-border);
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            position: relative;
            transition: var(--tx-m-transition);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Dynamic Highlight status badge */
        .tx-mp-driver-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: rgba(40, 167, 69, 0.1);
            color: #28a745;
            border: 1px solid #28a745;
            font-size: 11px;
            font-weight: 600;
            padding: 3px 10px;
            border-radius: 4px;
            text-transform: uppercase;
        }
        
        .tx-mp-driver-badge.top-rated {
            background-color: rgba(255, 193, 7, 0.1);
            color: var(--tx-m-yellow);
            border: 1px solid var(--tx-m-yellow);
        }

        /* Avatar Container Design */
        .tx-mp-avatar-container {
            position: relative;
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }

        .tx-mp-avatar {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--tx-m-border);
            transition: var(--tx-m-transition);
        }

        /* Online Check green indicator point */
        .tx-mp-online-dot {
            position: absolute;
            bottom: 5px;
            right: 5px;
            width: 14px;
            height: 14px;
            background-color: #28a745;
            border: 2px solid var(--tx-m-card-bg);
            border-radius: 50%;
        }

        .tx-mp-driver-name {
            color: var(--tx-m-text-light);
            font-size: 19px;
            font-weight: 600;
            margin: 0 0 5px 0;
        }

        .tx-mp-company-tag {
            color: var(--tx-m-yellow);
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Stars Rating Analytics Module */
        .tx-mp-rating-box {
            display: flex;
            align-items: center;
            gap: 5px;
            color: var(--tx-m-yellow);
            font-size: 14px;
            margin-bottom: 12px;
        }

        .tx-mp-rating-value {
            color: var(--tx-m-text-light);
            font-weight: 600;
            margin-left: 2px;
        }

        .tx-mp-stats-row {
            width: 100%;
            border-top: 1px solid var(--tx-m-border);
            border-bottom: 1px solid var(--tx-m-border);
            padding: 12px 0;
            margin-bottom: 25px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .tx-mp-stats-item {
            font-size: 14px;
            color: var(--tx-m-text-muted);
        }

        .tx-mp-stats-item strong {
            color: var(--tx-m-text-light);
        }

        /* Profile Interactive Button Action */
        .tx-mp-btn-profile {
            width: 100%;
            text-decoration: none;
            background-color: transparent;
            color: var(--tx-m-text-light);
            border: 1px solid var(--tx-m-border);
            padding: 12px;
            font-size: 14px;
            font-weight: 600;
            border-radius: 6px;
            transition: var(--tx-m-transition);
            text-align: center;
            box-sizing: border-box;
        }

        /* --- CARD HOVER INTERACTION TRIGGER --- */
        .tx-mp-driver-card:hover {
            transform: translateY(-8px);
            border-color: var(--tx-m-yellow);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
            background-color: #1e1e1e;
        }

        .tx-mp-driver-card:hover .tx-mp-avatar {
            border-color: var(--tx-m-yellow);
        }

        .tx-mp-driver-card:hover .tx-mp-btn-profile {
            background-color: var(--tx-m-yellow);
            color: var(--tx-m-black);
            border-color: var(--tx-m-yellow);
            box-shadow: 0 5px 15px rgba(255, 193, 7, 0.2);
        }
    </style>


    <section class="tx-mp-section-wrapper">
        <div class="tx-mp-container">
            
            <div class="tx-mp-section-header">
                <span class="tx-mp-subtitle">Marketplace Network</span>
                <h2 class="tx-mp-main-title">Companies & Certified <span>Drivers</span></h2>
            </div>

            <div class="tx-mp-companies-row">
                <a href="#" class="tx-mp-company-brand"><i class="fa-solid fa-bolt-lightning"></i> MetroCab</a>
                <a href="#" class="tx-mp-company-brand"><i class="fa-solid fa-star-of-life"></i> StarTaxi</a>
                <a href="#" class="tx-mp-company-brand"><i class="fa-solid fa-shield-halved"></i> SafeRide Co</a>
                <a href="#" class="tx-mp-company-brand"><i class="fa-solid fa-globe"></i> EcoTransit</a>
                <a href="#" class="tx-mp-company-brand"><i class="fa-solid fa-feather"></i> FlyCabs</a>
            </div>

            <h3 class="tx-mp-inner-heading">Featured Marketplace Drivers</h3>

            <div class="tx-mp-drivers-grid">
                
                <div class="tx-mp-driver-card">
                    <span class="tx-mp-driver-badge top-rated">Top Rated</span>
                    <div class="tx-mp-avatar-container">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&h=150&q=80" alt="Driver profile" class="tx-mp-avatar">
                        <div class="tx-mp-online-dot"></div>
                    </div>
                    <h4 class="tx-mp-driver-name">Alex Johnston</h4>
                    <span class="tx-mp-company-tag">MetroCab Affiliate</span>
                    
                    <div class="tx-mp-rating-box">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span class="tx-mp-rating-value">4.9</span>
                    </div>

                    <div class="tx-mp-stats-row">
                        <div class="tx-mp-stats-item"><i class="fa-solid fa-circle-check" style="color:var(--tx-m-yellow);"></i> <strong>1,420+</strong> Rides</div>
                    </div>

                    <a href="#" class="tx-mp-btn-profile">View Full Profile</a>
                </div>

                <div class="tx-mp-driver-card">
                    <span class="tx-mp-driver-badge">Verified</span>
                    <div class="tx-mp-avatar-container">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&h=150&q=80" alt="Driver profile" class="tx-mp-avatar">
                        <div class="tx-mp-online-dot"></div>
                    </div>
                    <h4 class="tx-mp-driver-name">David Miller</h4>
                    <span class="tx-mp-company-tag">StarTaxi Affiliate</span>
                    
                    <div class="tx-mp-rating-box">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <span class="tx-mp-rating-value">4.7</span>
                    </div>

                    <div class="tx-mp-stats-row">
                        <div class="tx-mp-stats-item"><i class="fa-solid fa-circle-check" style="color:var(--tx-m-yellow);"></i> <strong>980+</strong> Rides</div>
                    </div>

                    <a href="#" class="tx-mp-btn-profile">View Full Profile</a>
                </div>

                <div class="tx-mp-driver-card">
                    <span class="tx-mp-driver-badge top-rated">Top Rated</span>
                    <div class="tx-mp-avatar-container">
                        <img src="https://images.unsplash.com/photo-1628157582853-a796fa650a6a?auto=format&fit=crop&w=150&h=150&q=80" alt="Driver profile" class="tx-mp-avatar">
                        <div class="tx-mp-online-dot"></div>
                    </div>
                    <h4 class="tx-mp-driver-name">Michael Chang</h4>
                    <span class="tx-mp-company-tag">Independent Fleet</span>
                    
                    <div class="tx-mp-rating-box">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span class="tx-mp-rating-value">5.0</span>
                    </div>

                    <div class="tx-mp-stats-row">
                        <div class="tx-mp-stats-item"><i class="fa-solid fa-circle-check" style="color:var(--tx-m-yellow);"></i> <strong>2,150+</strong> Rides</div>
                    </div>

                    <a href="#" class="tx-mp-btn-profile">View Full Profile</a>
                </div>

            </div>

        </div>
    </section>
   


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* ==========================================
           SECTION 5: TESTIMONIALS STYLE MODULE
        ========================================== */
        .tx-testi-section-wrapper {
            margin: 0;
            padding: 100px 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            --tx-ts-yellow: #ffc107;
            --tx-ts-black: #111111;
            --tx-ts-card-bg: #161616;
            --tx-ts-border: #242424;
            --tx-ts-text-white: #ffffff;
            --tx-ts-text-muted: #aaaaaa;
            --tx-ts-transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);

            background-color: var(--tx-ts-black);
            width: 100%;
            border-bottom: 1px solid var(--tx-ts-border);
        }

        .tx-testi-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .tx-testi-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .tx-testi-subtitle {
            color: var(--tx-ts-yellow);
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: inline-block;
            margin-bottom: 10px;
        }

        .tx-testi-title {
            color: var(--tx-ts-text-white);
            font-size: 36px;
            font-weight: 700;
            margin: 0;
        }

        .tx-testi-title span {
            color: var(--tx-ts-yellow);
        }

        /* Testimonials Grid */
        .tx-testi-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 30px;
        }

        @media (min-width: 768px) {
            .tx-testi-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 992px) {
            .tx-testi-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* Testimonial Individual Card */
        .tx-testi-card {
            background-color: var(--tx-ts-card-bg);
            border: 1px solid var(--tx-ts-border);
            border-radius: 12px;
            padding: 35px;
            position: relative;
            transition: var(--tx-ts-transition);
        }

        .tx-testi-quote-icon {
            position: absolute;
            top: 30px;
            right: 35px;
            font-size: 32px;
            color: #242424;
            transition: var(--tx-ts-transition);
        }

        .tx-testi-rating {
            color: var(--tx-ts-yellow);
            font-size: 14px;
            margin-bottom: 20px;
        }

        .tx-testi-comment {
            color: var(--tx-ts-text-muted);
            font-size: 14px;
            line-height: 1.6;
            margin: 0 0 25px 0;
            font-style: italic;
        }

        /* User Profile Info Row */
        .tx-testi-profile {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .tx-testi-avatar {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--tx-ts-border);
            transition: var(--tx-ts-transition);
        }

        .tx-testi-name {
            color: var(--tx-ts-text-white);
            font-size: 16px;
            font-weight: 600;
            margin: 0 0 2px 0;
        }

        .tx-testi-role {
            color: var(--tx-ts-yellow);
            font-size: 12px;
            margin: 0;
            opacity: 0.8;
        }

        /* Hover Micro-interactions */
        .tx-testi-card:hover {
            transform: translateY(-6px);
            border-color: #333333;
            background-color: #1a1a1a;
            box-shadow: 0 15px 30px rgba(0,0,0,0.5);
        }

        .tx-testi-card:hover .tx-testi-quote-icon {
            color: var(--tx-ts-yellow);
            transform: scale(1.1);
        }

        .tx-testi-card:hover .tx-testi-avatar {
            border-color: var(--tx-ts-yellow);
        }


        /* ==========================================
           SECTION 6: CALL TO ACTION STYLE MODULE
        ========================================== */
        .tx-cta-section-wrapper {
            margin: 0;
            padding: 100px 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            --tx-c-yellow: #ffc107;
            --tx-c-black: #111111;
            --tx-c-text-white: #ffffff;
            --tx-c-transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);

            /* Modern high-tech dark grid background layout */
            background: linear-gradient(135deg, #161616 0%, #0d0d0d 100%);
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        /* Subtle ambient glow effect overlay */
        .tx-cta-section-wrapper::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,193,7,0.03) 0%, transparent 70%);
            pointer-events: none;
        }

        .tx-cta-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .tx-cta-icon-box {
            width: 70px;
            height: 70px;
            background-color: rgba(255, 193, 7, 0.1);
            color: var(--tx-c-yellow);
            font-size: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px auto;
            border-radius: 50%;
            border: 1px dashed var(--tx-c-yellow);
        }

        .tx-cta-title {
            color: var(--tx-c-text-white);
            font-size: 42px;
            font-weight: 700;
            margin: 0 0 15px 0;
            letter-spacing: -1px;
            line-height: 1.2;
        }

        @media (max-width: 576px) {
            .tx-cta-title {
                font-size: 32px;
            }
        }

        .tx-cta-desc {
            color: #b0b0b0;
            font-size: 16px;
            line-height: 1.6;
            max-width: 650px;
            margin: 0 auto 40px auto;
        }

        /* Dynamic Buttons Grid Wrapper */
        .tx-cta-btn-group {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        @media (min-width: 480px) {
            .tx-cta-btn-group {
                flex-direction: row;
            }
        }

        /* Base Button Standards */
        .tx-cta-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            text-decoration: none;
            padding: 16px 35px;
            font-size: 15px;
            font-weight: 600;
            border-radius: 8px;
            transition: var(--tx-c-transition);
            width: 100%;
            box-sizing: border-box;
        }

        @media (min-width: 480px) {
            .tx-cta-btn {
                width: auto;
            }
        }

        /* Button Variant 1: Book Ride Primary */
        .tx-cta-btn-primary {
            background-color: var(--tx-c-yellow);
            color: var(--tx-c-black);
            border: 1px solid var(--tx-c-yellow);
        }

        .tx-cta-btn-primary:hover {
            background-color: #e0a800;
            border-color: #e0a800;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 193, 7, 0.3);
        }

        /* Button Variant 2: Become Driver Secondary Outline */
        .tx-cta-btn-secondary {
            background-color: transparent;
            color: var(--tx-c-text-white);
            border: 1px solid #333333;
        }

        .tx-cta-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.05);
            border-color: var(--tx-c-text-white);
            transform: translateY(-3px);
        }
    </style>


    <!-- ==========================================
         START OF SECTION 5: CUSTOMER TESTIMONIALS
    ========================================== -->
    <section class="tx-testi-section-wrapper">
        <div class="tx-testi-container">
            
            <!-- SECTION HEADER -->
            <div class="tx-testi-header">
                <span class="tx-testi-subtitle">Reviews</span>
                <h2 class="tx-testi-title">What Our Riders <span>Say</span></h2>
            </div>

            <!-- CARDS GRID CONTAINER -->
            <div class="tx-testi-grid">
                
                <!-- TESTIMONIAL CARD 1 -->
                <div class="tx-testi-card">
                    <i class="fa-solid fa-quote-right tx-testi-quote-icon"></i>
                    <div class="tx-testi-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="tx-testi-comment">
                        "Booking a ride was super smooth. The driver arrived in less than 4 minutes, and the car was clean and well-maintained. The upfront pricing structure makes it transparent."
                    </p>
                    <div class="tx-testi-profile">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=120&h=120&q=80" alt="Sarah Jenkins" class="tx-testi-avatar">
                        <div>
                            <h4 class="tx-testi-name">Sarah Jenkins</h4>
                            <p class="tx-testi-role">Daily Commuter</p>
                        </div>
                    </div>
                </div>

                <!-- TESTIMONIAL CARD 2 -->
                <div class="tx-testi-card">
                    <i class="fa-solid fa-quote-right tx-testi-quote-icon"></i>
                    <div class="tx-testi-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="tx-testi-comment">
                        "I highly appreciate the verified driver profiles. As someone who frequently travels late at night for business meetings, the real-time tracking feature gives me unmatched safety."
                    </p>
                    <div class="tx-testi-profile">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=120&h=120&q=80" alt="James McAvoy" class="tx-testi-avatar">
                        <div>
                            <h4 class="tx-testi-name">James McAvoy</h4>
                            <p class="tx-testi-role">Corporate Client</p>
                        </div>
                    </div>
                </div>

                <!-- TESTIMONIAL CARD 3 -->
                <div class="tx-testi-card">
                    <i class="fa-solid fa-quote-right tx-testi-quote-icon"></i>
                    <div class="tx-testi-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <p class="tx-testi-comment">
                        "Great app ecosystem! The customer support system is very cooperative. I left my keys in a cab last weekend, and the 24/7 help center recovered them for me within an hour."
                    </p>
                    <div class="tx-testi-profile">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&h=120&q=80" alt="Elena Rostova" class="tx-testi-avatar">
                        <div>
                            <h4 class="tx-testi-name">Elena Rostova</h4>
                            <p class="tx-testi-role">Regular Rider</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END OF SECTION 5 -->


    <!-- ==========================================
         START OF SECTION 6: CALL TO ACTION (CTA)
    ========================================== -->
    <section class="tx-cta-section-wrapper">
        <div class="tx-cta-container">
            
            <!-- Deco Target Indicator Element -->
            <div class="tx-cta-icon-box">
                <i class="fa-solid fa-taxi"></i>
            </div>

            <h2 class="tx-cta-title">Ready to Book Your Ride?</h2>
            
            <p class="tx-cta-desc">
                Join thousands of riders and certified drivers on our platform today. Experience fast booking, transparent pricing, and unparalleled safety matrices wherever you go.
            </p>

            <!-- Dual Interactive Trigger Blocks -->
            <div class="tx-cta-btn-group">
                <a href="#" class="tx-cta-btn tx-cta-btn-primary">
                    <i class="fa-solid fa-magnifying-glass-location"></i> Book a Taxi Now
                </a>
                <a href="#" class="tx-cta-btn tx-cta-btn-secondary">
                    <i class="fa-solid fa-id-card"></i> Become a Driver
                </a>
            </div>

        </div>
    </section>
    <!-- END OF SECTION 6 -->





    <style>
        /* --- CSS RESET & VARIABLES FOR THIS FOOTER ONLY --- */
        .tx-ftr-section-wrapper {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            --tx-ftr-yellow: #ffc107;
            --tx-ftr-black: #111111;
            --tx-ftr-dark: #1a1a1a;
            --tx-ftr-text-gray: #aaaaaa;
            --tx-ftr-white: #ffffff;
            --tx-ftr-transition: all 0.3s ease;
            
            background-color: var(--tx-ftr-black);
            color: var(--tx-ftr-white);
            border-top: 4px solid var(--tx-ftr-yellow);
            padding-top: 60px;
        }

        /* Container alignment */
        .tx-ftr-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* --- MAIN GRID LAYOUT --- */
        .tx-ftr-main-grid {
            display: block; /* Backup */
        }
        
        /* Flex/Block combo safe for printing and cross-browser grid behavior without generic naming */
        @media (min-width: 768px) {
            .tx-ftr-main-grid {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                gap: 30px;
            }
        }

        .tx-ftr-column {
            flex: 1;
            min-width: 220px;
            margin-bottom: 30px;
        }

        /* Special width for about column if needed */
        .tx-ftr-col-about {
            flex: 1.5;
            min-width: 260px;
        }

        /* --- COLUMN WIDGETS STYLING --- */
        .tx-ftr-logo-area {
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            margin-bottom: 20px;
        }

        .tx-ftr-logo-icon {
            color: var(--tx-ftr-yellow);
            font-size: 26px;
        }

        .tx-ftr-logo-text {
            color: var(--tx-ftr-white);
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .tx-ftr-logo-text span {
            color: var(--tx-ftr-yellow);
        }

        .tx-ftr-about-text {
            color: var(--tx-ftr-text-gray);
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        /* Heading styles for columns */
        .tx-ftr-heading {
            color: var(--tx-ftr-white);
            font-size: 18px;
            font-weight: 600;
            position: relative;
            padding-bottom: 12px;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .tx-ftr-heading::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background-color: var(--tx-ftr-yellow);
            border-radius: 2px;
        }

        /* --- LINKS & LISTS --- */
        .tx-ftr-links-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .tx-ftr-link-item {
            margin-bottom: 12px;
        }

        .tx-ftr-link-item a {
            color: var(--tx-ftr-text-gray);
            text-decoration: none;
            font-size: 14px;
            transition: var(--tx-ftr-transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .tx-ftr-link-item a i {
            font-size: 11px;
            color: var(--tx-ftr-yellow);
            transition: var(--tx-ftr-transition);
        }

        /* Hover Link Animation */
        .tx-ftr-link-item a:hover {
            color: var(--tx-ftr-yellow);
            padding-left: 5px;
        }

        /* --- CONTACT INFO STYLE --- */
        .tx-ftr-contact-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .tx-ftr-contact-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            color: var(--tx-ftr-text-gray);
            font-size: 14px;
            margin-bottom: 15px;
            line-height: 1.5;
        }

        .tx-ftr-contact-item i {
            color: var(--tx-ftr-yellow);
            font-size: 16px;
            margin-top: 3px;
        }

        .tx-ftr-contact-item span a {
            color: var(--tx-ftr-text-gray);
            text-decoration: none;
            transition: var(--tx-ftr-transition);
        }

        .tx-ftr-contact-item span a:hover {
            color: var(--tx-ftr-yellow);
        }

        /* --- SOCIAL MEDIA ICONS --- */
        .tx-ftr-social-container {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .tx-ftr-social-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            background-color: var(--tx-ftr-dark);
            color: var(--tx-ftr-white);
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            border: 1px solid #252525;
            transition: var(--tx-ftr-transition);
        }

        .tx-ftr-social-btn:hover {
            background-color: var(--tx-ftr-yellow);
            color: var(--tx-ftr-black);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 193, 7, 0.3);
        }

        /* --- BOTTOM COPYRIGHT BAR --- */
        .tx-ftr-bottom-bar {
            background-color: #0a0a0a;
            padding: 20px 0;
            margin-top: 40px;
            border-top: 1px solid #222222;
        }

        .tx-ftr-bottom-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
        }

        @media (min-width: 768px) {
            .tx-ftr-bottom-container {
                flex-direction: row;
            }
        }

        .tx-ftr-copy-text {
            color: #777777;
            font-size: 13px;
            margin: 0;
        }

        .tx-ftr-bottom-links {
            display: flex;
            gap: 20px;
        }

        .tx-ftr-bottom-links a {
            color: #777777;
            text-decoration: none;
            font-size: 13px;
            transition: var(--tx-ftr-transition);
        }

        .tx-ftr-bottom-links a:hover {
            color: var(--tx-ftr-yellow);
        }
    </style>


    <footer class="tx-ftr-section-wrapper">
        <div class="tx-ftr-container">
            
            <div class="tx-ftr-main-grid">
                
                <div class="tx-ftr-column tx-ftr-col-about">
                    <a href="#" class="tx-ftr-logo-area">
                        <i class="fa-solid fa-taxi tx-ftr-logo-icon"></i>
                        <span class="tx-ftr-logo-text">City<span>Cab</span></span>
                    </a>
                    <p class="tx-ftr-about-text">
                        Your trusted on-demand taxi marketplace. Connecting professional drivers with riders instantly. Safe, fast, and completely reliable urban transport solution.
                    </p>
                    <div class="tx-ftr-social-container">
                        <a href="#" class="tx-ftr-social-btn" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="tx-ftr-social-btn" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#" class="tx-ftr-social-btn" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="tx-ftr-social-btn" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>

                <div class="tx-ftr-column">
                    <h4 class="tx-ftr-heading">Quick Links</h4>
                    <ul class="tx-ftr-links-list">
                        <li class="tx-ftr-link-item"><a href="#"><i class="fa-solid fa-chevron-right"></i> Home</a></li>
                        <li class="tx-ftr-link-item"><a href="#"><i class="fa-solid fa-chevron-right"></i> Book A Ride</a></li>
                        <li class="tx-ftr-link-item"><a href="#"><i class="fa-solid fa-chevron-right"></i> Our Drivers</a></li>
                        <li class="tx-ftr-link-item"><a href="#"><i class="fa-solid fa-chevron-right"></i> Fleet Showcase</a></li>
                        <li class="tx-ftr-link-item"><a href="#"><i class="fa-solid fa-chevron-right"></i> Contact Us</a></li>
                    </ul>
                </div>

                <div class="tx-ftr-column">
                    <h4 class="tx-ftr-heading">Marketplace Services</h4>
                    <ul class="tx-ftr-links-list">
                        <li class="tx-ftr-link-item"><a href="#"><i class="fa-solid fa-chevron-right"></i> City Transport</a></li>
                        <li class="tx-ftr-link-item"><a href="#"><i class="fa-solid fa-chevron-right"></i> Airport Transfers</a></li>
                        <li class="tx-ftr-link-item"><a href="#"><i class="fa-solid fa-chevron-right"></i> Business Travels</a></li>
                        <li class="tx-ftr-link-item"><a href="#"><i class="fa-solid fa-chevron-right"></i> Taxi Companies</a></li>
                        <li class="tx-ftr-link-item"><a href="#"><i class="fa-solid fa-chevron-right"></i> Corporate Accounts</a></li>
                    </ul>
                </div>

                <div class="tx-ftr-column">
                    <h4 class="tx-ftr-heading">Contact Info</h4>
                    <ul class="tx-ftr-contact-list">
                        <li class="tx-ftr-contact-item">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>123 Taxi Main Boulevard, Suite 456, City Center, NY</span>
                        </li>
                        <li class="tx-ftr-contact-item">
                            <i class="fa-solid fa-phone"></i>
                            <span><a href="tel:+1234567890">+1 (234) 567-890</a></span>
                        </li>
                        <li class="tx-ftr-contact-item">
                            <i class="fa-solid fa-envelope"></i>
                            <span><a href="mailto:support@citycab.com">support@citycab.com</a></span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="tx-ftr-bottom-bar">
            <div class="tx-ftr-container tx-ftr-bottom-container">
                <p class="tx-ftr-copy-text">
                    &copy; 2026 CityCab Marketplace. All Rights Reserved. Designed for Premium Standards.
                </p>
                <div class="tx-ftr-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>


<?php wp_footer(); ?>

</body>
</html>
