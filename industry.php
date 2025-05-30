<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ABC Elevator Company</title>
    <link rel="icon" type="png" href="assets\Images\title_icon.png">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- stylesheet -->

    <link rel="stylesheet" href="styles.css">


    <!-- model.css -->
    <link rel="stylesheet" href="model.css">

    <!-- Fontawesome link -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        .factory_hero_section {
            margin-top: 140px;
            width: 100%;
            height: 202px;
            background-image: url(assets/Images/factory_hero_bg.jpg);
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;


        }

        .factory_hero_section .factory_hero_section_bg {
            opacity: 0.88;
            background-color: #222d35;
        }

        .factory_hero_section .fac_h_sec_text {
            padding: 56px 0px;
        }

        .factory_hero_section .fac_h_sec_text h1 {
            font-weight: 700;
            text-transform: capitalize;
            font-size: 44px;
            line-height: 54px;
            display: inline-block;
            margin-bottom: 0;
            color: #fff;
        }

        .factory_hero_section .fac_h_sec_text .hero_sec_link {
            display: flex;
            justify-content: center;
            padding: 9px 0px;

        }

        .factory_hero_section .fac_h_sec_text .hero_sec_link span {
            color: white;
            font-weight: 400;
            text-transform: capitalize;
            font-size: 15px;
            line-height: 20px;
            position: relative;
        }

        .factory_hero_section .fac_h_sec_text .hero_sec_link span a {
            color: white;
            text-decoration: none
        }

        .factory_hero_section .fac_h_sec_text .hero_sec_link span:first-child {
            padding-right: 24px;
        }

        .factory_hero_section .fac_h_sec_text .hero_sec_link span:first-child::after {
            position: absolute;
            content: "";
            width: 7px;
            height: 7px;
            border-radius: 50%;
            right: 10px;
            top: 6px;
            display: inline-block;
            font-style: normal;
            background-color: #ed3b3e;
        }

        .industry-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .industry-card img {
            height: 200px;
            border-radius: 10px;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        .industry-card:hover {
            transform: scale(1.05);
        }

        .industry-card:hover img {
            transform: scale(1.1);
        }

        .read-more {
            display: block;
            margin-top: 10px;
            font-weight: 400;
            text-decoration: none;
            color: black;
            transition: color 0.3s ease-in-out;
        }

        .read-more:hover {
            color: white;
        }

        .row.g-4 {
            row-gap: 20px;
        }

        .card:hover a {
            color: white;
        }

        .industry h2 {
            font-weight: 400;
            font-size: 45px;
            line-height: 50px;
            color: #002c42;
            margin-bottom: 20px;
        }

        @media (max-width: 769px) {
            .factory_hero_section {
                margin-top: 125px;
            }
        }

        @media (max-width: 426px) {
            .factory_hero_section {
                margin-top: 92px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-navbar">
        <div class="container">
            <a class="navbar-brand1" href="index.php">
                <img class="logo" src="assets/Images/ece-logo.png" alt="logo">
            </a>

            <div class="navbar-nav d-flex align-items-center">
                <div class="navbtn">
                    <button class="nav-btn"><img src="assets/Images/footer_user.png" alt="user"> 18005320323</button>
                    <a href="enquiry_new.php"><button class="nav-btn">ENQUIRY NOW</button></a>
                    <a href="feedback.php"><button class="nav-btn">FEEDBACK</button></a>

                </div>

                <!-- Hamburger Menu Button -->
                <div class="hamburger-btn" onclick="toggleSideNav()">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>
        </div>
    </nav>

  <!-- Side Navigation Menu -->
  <div id="sideNav" class="sidenav">
        <button class="close-btn" onclick="toggleSideNav()"><i class="fa-solid fa-xmark"></i></button>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" >About Us</a>
                    <ul class="dropdown-menu">
                        <li><a href="company_overview.php">Company Overview</a></li>
                        <li><a href="factory.php">Factory</a></li>
                        <li><a href="our_clients.php">Our Clients</a></li>
                        <li><a href="credentials.php">Credentials</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" >Products</a>
                    <ul class="dropdown-menu">
                        <li><a href="car-design.php">By Design</a></li>
                        <li><a href="products-technology.php">Category</a></li>
                        <li><a href="industry.php">Industry</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="smart_technology.php">SMART Technology</a>
            </li>
            <li>
                <a href="career.php">Career</a>
            </li>
            <li>
                <a href="blog.php">Blogs</a>
            </li>
            <li>
                <a href="fap.php">FAQ</a>
            </li>
            <li>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle">Contact us</a>
                    <ul class="dropdown-menu">
                        <li><a href="enquiry_new.php">Enquiry</a></li>
                        <li><a href="branches.php">Branches</a></li>

                    </ul>
                </div>
            </li>
        </ul>


    </div>

    <main>
        <!-- factory_hero_sectioin -->
        <section class="factory_hero_section">
            <div class="factory_hero_section_bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="fac_h_sec_text text-center">
                                <h1>
                                    Applications
                                </h1>
                                <div class="hero_sec_link text-center">
                                    <span>
                                        <a href="index.php">Home</a>
                                    </span>
                                    <span>Applications</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="industry">
            <div class="container py-5">
                <h2 class="text-center mb-4">Elevate to <b>Smart</b></h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card industry-card">
                            <img src="assets\Images\ece-office-elevator.jpg" class="card-img-top" alt="Industry Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Office Elevator</h5>
                                <p class="card-text">Commercial office building elevator systems must be configured to
                                    match the expected traffic requirements both present and future.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card industry-card">
                            <img src="assets\Images\ece-hotel-elevator.jpg" class="card-img-top" alt="Industry Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Hotel Elevator</h5>
                                <p class="card-text">Hotels need elevators that deliver high performance, have low
                                    break- downs , smooth operation and have beautiful aesthetics.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card industry-card">
                            <img src="assets\Images\automobile-elevator-website.jpg" class="card-img-top"
                                alt="Industry Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Automobile Elevator</h5>
                                <p class="card-text">Automobile elevators are used in parking structures, apartment
                                    suits, auto dealership and even homes as well.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card industry-card">
                            <img src="assets\Images\industrial-elevator.jpg" class="card-img-top" alt="Industry Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Industrial Elevator</h5>
                                <p class="card-text">ECE holds the expertise of catering to the industrial elevators
                                    building needs, be it the high travel elevator requirement,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card industry-card">
                            <img src="assets\Images\ECE-Escalator.jpeg" class="card-img-top" alt="Industry Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">ECE Escalator</h5>
                                <p class="card-text">ECE-Sword Escalators and Travellators are the best suited for
                                    portability situations for expensive open spaces with high activity…</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card industry-card">
                            <img src="assets\Images\ECE-Residential-Elevator.jpg" class="card-img-top"
                                alt="Industry Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Residential</h5>
                                <p class="card-text">ECE Elevators bring convenience at your door step. They are
                                    luxurious, spacious and provide safety and reliability. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card industry-card">
                            <img src="assets\Images\ece-hospital-elevator.jpg" class="card-img-top"
                                alt="Industry Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Hospital Elevator</h5>
                                <p class="card-text">Generally, hospital elevators have requirements as laid down by the
                                    operating authorities of the hospital. Elevators will be required for patients,</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>

    <footer>
        <div class="container-fluid  footer_upper">
            <div class="row">
                <div class="col-md-2">
                    <div class="footer-logo text-center">
                        <img src="assets\Images\ece-logo.png" alt="footer_logo" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="footer_text ">
                        <p>ABC Elevators is not about Make in India, we are truly Indian in our ethos and commitment to
                            deliver technologically advanced products.</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer_icon">
                        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://x.com/?lang=en"><i class="fa-brands fa-square-x-twitter"></i></a>
                        <a href="https://www.instagram.com/accounts/login/?hl=en"> <i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="https://in.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid footer_down">
            <div class="row">
                <div class="col-md-3 widget">
                    <h3 class="widget-title">
                        Toll Free Number
                    </h3>

                    <div class="icon_number">
                        <img src="assets/Images/footer_user.png" alt="user">
                        <h3><a href="#">18005320323</a></h3>
                    </div>
                    <div class="footer_button">
                        <button><a href="enquiry_new.php">ENQUIRY</a></button>
                    </div>
                </div>
                <div class="col-md-3 widget">
                    <h3 class="widget-title">
                        Company
                    </h3>
                    <div class="footer_nav_links">
                        <ul>
                            <li><a href="company_overview.php">About Us</a></li>
                            <li><a href="company_overview.php">Our History</a></li>
                            <li><a href="factory.php">Factory</a></li>
                            <li><a href="fap.php">FAQs</a></li>
                            <li><a href="blog.php">Blogs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 widget">
                    <h3 class="widget-title">
                        Applications
                    </h3>
                    <div class="footer_nav_links">
                        <ul>
                            <li><a href="credentials.php #factory_hero_sec">Residential</a></li>
                            <li><a href="credentials.php #factory_hero_section_comercial">Commercial</a></li>
                            <li><a href="credentials.php #factory_hero_section_hospital">Hospitals</a></li>
                            <li><a href="credentials.php #factory_hero_section_hotel">Hotel</a></li>
                            <li><a href="credentials.php #factory_hero_section_industry">Industry</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 widget">
                    <h3 class="widget-title">
                        Contact Us
                    </h3>
                    <div class="footer_nav_links">
                        <ul>
                            <li><a href="enquiry_new.php">Enquiry</a></li>
                            <li><a href="branches.php">Branches</a></li>
                            <li><a href="smart_technology.php">Smart Customer Connect</a></li>
                            <li><a href="feedback.php">Feedback</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid footer_last">
            <div class="col-md-12">
                <div class="copy_right text-center">
                    <p>Copyright © 2025 <span>ABC Elevators</span> All rights reserved.</p>
                </div>
                <div class="footer_link text-center">
                    <p>Privary policy / Term & Condition / Sitemap
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scroll Up Button -->
    <button id="scrollUp" onclick="topFunction()" class="btn"><i class="fa-solid fa-arrow-up"></i></button>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="index.js"></script>

</body>

</html>