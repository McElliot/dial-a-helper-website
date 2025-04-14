<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />

    <!-- Site Title -->
    <title>Dial-A-Helper - Cleaning Services</title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/fav.png') }}" />

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/odometer-theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon_cleannes.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
</head>

<body>
    <div class="body-overlay"></div>

    <!-- Loader Start -->
    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
        <button class="closeLoader tj-primary-btn">Cancel Preloader</button>
    </div>
    <!-- Loader End -->

    <!-- back to top start -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <!-- back to top end -->

    <!-- Search Popup Start -->
    <div class="search_popup">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="search_wrapper">
                        <div class="search_top d-flex justify-content-between align-items-center">
                            <div class="search_logo">
                                <a href="index.html">
                                    <img src="assets/images/logo/logo.png" alt="Logo" />
                                </a>
                            </div>
                            <div class="search_close">
                                <button type="button" class="search_close_btn">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="search_form">
                            <form action="#">
                                <div class="search_input">
                                    <input class="search-input-field" type="text"
                                        placeholder="Type here to search..." />
                                    <span class="search-focus-border"></span>
                                    <button type="submit">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-popup-overlay"></div>
    <!-- Search Popup End-->

    <!-- Hamburger start -->
    <div class="hamburger-area d-xl-none">
        <div class="hamburger_bg"></div>
        <div class="hamburger_wrapper">
            <div class="hamburger_top d-flex align-items-center justify-content-between">
                <div class="hamburger_logo">
                    <a href="index.html" class="mobile_logo">
                        <img src="{{ asset('assets/images/logo/nav-logo.png') }}" alt="Logo" />
                    </a>
                </div>
                <div class="hamburger_close">
                    <button class="hamburger_close_btn">
                        <i class="fa-thin fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="hamburger_search">
                <form method="get" action="">
                    <button type="submit"><i class="fal fa-search"></i></button>
                    <input type="search" autocomplete="off" name="s" value=""
                        placeholder="Search here" />
                </form>
            </div>
            <div class="hamburger_menu">
                <div class="mobile_menu"></div>
            </div>
            <div class="hamburger-infos">
                <h4 class="hamburger-title">Contact info</h4>
                <div class="contact-item">
                    <div class="contact-icon">
                        <span><i class="flaticon-email-2"></i></span>
                    </div>
                    <div class="contact-text">
                        <span>E-mail Us:</span>
                        <div class="text">
                            <a class="link" href="mailto:hello@dialahelper.com">hello@dialahelper.com</a>
                        </div>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">
                        <span><i class="flaticon-call"></i></span>
                    </div>
                    <div class="contact-text">
                        <span>Requesting A Call</span>
                        <div class="text">
                            <a class="link" href="tel:+263787062453">+263-787-062-453</a>
                        </div>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">
                        <span><i class="flaticon-location"></i></span>
                    </div>
                    <div class="contact-text">
                        <span>Location Here</span>
                        <div class="text">Santa, United State</div>
                    </div>
                </div>
            </div>
            <div class="hamburger-socials">
                <ul>
                    <li>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Hamburger end -->

    <!-- Header Area Start -->
    <header class="tj-header-2-area tj-header-absolute">
        <div class="tj-header-2-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="tj-header-2-top-wrapper">
                            <div class="tj-header-2-top-information">
                                <ul>
                                    <li>
                                        <a href="tel:+263787062453"><i class="flaticon-call"></i> +263-787-062-453</a>
                                    </li>
                                    <li>
                                        <a href="mailto:hello@dialahelper.com"><i class="flaticon-email-2"></i>
                                            hello@dialahelper.com</a>
                                    </li>
                                    <li>
                                        <span><i class="flaticon-location"></i> 09 George Silundika
                                            Ave,Harare Brynstone House</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tj-header-2-top-right">
                                <div class="tj-header-2-top-nice-select">
                                    <select class="nice-select">
                                        <option value="2">USA</option>
                                        <option value="2">BAN</option>
                                        <option value="2">ENG</option>
                                    </select>
                                </div>
                                <div class="tj-header-2-top-social d-none d-lg-block">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/profile.php?id=100065331529697"
                                                target="_blank"><i class="fa-brands fa-facebook-f fa-fw"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tj-header-2-bottom header-sticky">
            <div class="container">
                <div class="row tj-header-2-bottom-row">
                    <div class="col">
                        <div class="tj-header-bottom-wrapper">
                            <div class="tj-header-2-bottom-logo">
                                <a href="index.html"><img src="{{ asset('assets/images/logo/primary-logo.png') }}"
                                        alt="" /></a>
                            </div>
                            <div class="tj-header-bottom-left d-none d-xl-block">
                                <div class="mainmenu-wrapper">
                                    <div class="mainmenu-box">
                                        <div class="mainmenu mainmenu-2 main-mobile-menu d-none d-lg-inline-block">
                                            <ul>
                                                <li><a href="contact.html">Home</a></li>
                                                <li><a href="service.html">Services</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tj-header-bottom-right">
                                <div class="tj-header-2-button d-none d-sm-block">
                                    <a class="tj-primary-btn tj-hover-btn" href="contact.html"><span>Get a quote <i
                                                class="flaticon-start"></i></span>
                                        <div class="tj-hover-btn-circle-dot"></div>
                                    </a>
                                </div>
                                <div class="tj-header-bottom-mobile-button d-block d-xl-none">
                                    <button class="tj-header-bottom-mobile-btn menu-bar">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End-->
    {{ $slot }}
    <!-- Footer Area Start-->
    <footer class="tj-footer-area tj-footer-2-area">
        <div class="tj-footer-2-bg-shape">
            <img src="{{ asset('assets/images/footer/footer-2-bg-shape.png') }}" alt="Shapes" />
        </div>
        <div class="tj-footer-2-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tj-footer-2-top-wrapper">
                            <div class="tj-footer-top-wrap tj-footer-2-top-wrap wow fadeInLeft" data-wow-delay=".3s">
                                <div class="tj-footer-top-wrap-icon">
                                    <a href="tel:+208555-0112"><i class="flaticon-call"></i></a>
                                </div>
                                <div class="tj-footer-top-wrap-content">
                                    <span>Need Any Cleaning Help</span>
                                    <a href="tel:+208555-0112">(208) 555-0112</a>
                                </div>
                            </div>
                            <div class="tj-footer-2-top-form-wrap wow fadeInRight" data-wow-delay=".3s">
                                <div class="tj-footer-2-top-form-content">
                                    <h4 class="tj-footer-2-top-form-title">Subscribe Now</h4>
                                </div>
                                <div class="tj-footer-2-top-form">
                                    <form action="#">
                                        <div class="form-input">
                                            <input type="text" name="name" placeholder="Enter Your Email" />
                                            <div class="tj-footer-2-top-form-button">
                                                <button class="tj-footer-2-top-form-btn" type="submit">
                                                    Subscribe
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tj-footer-bottom tj-footer-2-bottom">
            <div class="container">
                <div class="row tj-footer-bottom-row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tj-footer-widget tj-footer-2-col-1">
                            <div class="tj-footer-widget-logo">
                                <a href="index.html"><img src="{{ asset('assets/images/footer/footer-logo.png') }}"
                                        alt="footer-logo" /></a>
                            </div>
                            <div class="tj-footer-widget-paragraph">
                                <p class="tj-footer-widget-paragraph">
                                    Clear communication successful cleaning service relationship
                                    Make sure you can easily service is easy exceptional service
                                    every time changes.
                                </p>
                            </div>
                            <div class="tj-footer-widget-socail tj-footer-2-widget-socail">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-facebook-f fa-fw"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6">
                        <div class="tj-footer-widget widget_nav_menu tj-footer-2-col-2">
                            <h4 class="tj-footer-widget-title">Services</h4>
                            <div class="tj-footer-widget-menu">
                                <ul>
                                    <li>
                                        <a href="#"><span><i class="flaticon-start"></i></span> Residential
                                            Cleaning</a>
                                    </li>
                                    <li>
                                        <a href="#"><span><i class="flaticon-start"></i></span> Commercial
                                            Cleaning</a>
                                    </li>
                                    <li>
                                        <a href="#"><span><i class="flaticon-start"></i></span> Move-Out
                                            Cleaning</a>
                                    </li>
                                    <li>
                                        <a href="#"><span><i class="flaticon-start"></i></span> Specialized
                                            Cleaning</a>
                                    </li>
                                    <li>
                                        <a href="#"><span><i class="flaticon-start"></i></span> Bathroom
                                            cleaning</a>
                                    </li>
                                    <li>
                                        <a href="#"><span><i class="flaticon-start"></i></span> Plumbing
                                            Cleaning
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="tj-footer-widget tj-footer-2-col-3">
                            <h4 class="tj-footer-widget-title">Working Hours:</h4>
                            <div class="tj-footer-2-working">
                                <ul>
                                    <li>
                                        <span class="date">Thu - Fri</span>8:00 AM - 6:00 PM
                                    </li>
                                    <li>
                                        <span class="date">Mon - Wed</span>9:00 AM - 5:00 PM
                                    </li>
                                    <li><span class="date">Saturday</span>7:00 AM - 9:00 PM</li>
                                    <li><span class="date">Sunday</span>Closed</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="tj-footer-widget tj-footer-2-col-4">
                            <h4 class="tj-footer-widget-title two">Instagram</h4>
                            <div class="tj-footer-2-gallery popup-gallery">
                                <a href="{{ asset('assets/images/blog/post-1.jpg') }}"><img
                                        src="{{ asset('assets/images/blog/post-1.jpg') }}" alt="Images" /></a>
                                <a href="{{ asset('assets/images/blog/post-2.jpg') }}"><img
                                        src="{{ asset('assets/images/blog/post-2.jpg') }}" alt="Images" /></a>
                                <a href="{{ asset('assets/images/blog/post-3.jpg') }}"><img
                                        src="{{ asset('assets/images/blog/post-3.jpg') }}" alt="Images" /></a>
                                <a href="{{ asset('assets/images/blog/post-4.jpg') }}"><img
                                        src="{{ asset('assets/images/blog/post-4.jpg') }}" alt="Images" /></a>
                                <a href="{{ asset('assets/images/blog/post-5.jpg') }}"><img
                                        src="{{ asset('assets/images/blog/post-5.jpg') }}" alt="Images" /></a>
                                <a href="{{ asset('assets/images/blog/post-6.jpg') }}"><img
                                        src="{{ asset('assets/images/blog/post-6.jpg') }}" alt="Images" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tj-footer-copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="tj-footer-copyright-wrapper">
                        <div class="tj-footer-copyright-content">
                            <p class="tj-footer-copyright-paragraph">
                                Copyright@ 2025
                                <a href="https://themeforest.net/user/theme-junction">TechVistaAfrica.</a>
                                All Rights Reserved.
                            </p>
                        </div>
                        <div class="tj-footer-copyright-menu">
                            <ul>
                                <li><a href="#">Setting & Privacy</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Support </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End-->

    <!-- JS here -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/beforeafter.jquery-1.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
