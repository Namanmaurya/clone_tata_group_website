<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Elevator Company</title>
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

        .design_section {
            padding: 50px 0px;
        }

        .pdf_down_div {
            background-color: #f8f8f8;
            position: relative;
            padding: 20px 30px;
            display: flex;
            margin: 20px 30px;
        }

        .pdf_down_div::after {
            display: block;
            height: 3px;
            content: '';
            position: absolute;
            width: auto;
            bottom: 0;
            left: 35px;
            right: 35px;
            background-color: #ed3b3e;
        }

        .pdf_down_links {
            padding: 10px 10px;
        }

        .pdf_down_links p {
            color: red;
            font-size: 18px;
            margin-bottom: 0px;
        }

        .pdf_down_links h2 {
            font-size: 18px;
            margin-bottom: 0px;
        }

        .pdf_down_links a {
            text-decoration: none;
            color: black;
        }

        .pdf_down_links a:hover {
            color: red;
        }

        .product_video_title {
            padding: 20px 0px;
        }

        .product_video_title h2 {
            font-weight: 400;
            font-size: 45px;
            line-height: 50px;
            color: #002c42;
        }


        /* Card Wrapper */
        .resedential_card_img {
            position: relative;
            overflow: hidden;
            text-align: center;
            background: white;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            margin: 0px 10px;
        }

        /* Image Styling */
        .resedential_card_img img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease-in-out;
        }

        /* Hover Effect on Image */
        .resedential_card_img:hover img {
            transform: scale(1.05);
        }

        .resedential_card_title {
            width: 80%;
            position: absolute;
            bottom: -20px;
            background-color: white;
            margin: 0px 25px;
            z-index: 10;
            box-shadow: 0 0 7px 0 rgba(43, 52, 59, .08);
        }

        .resedential_card_title:hover {
            border-bottom: 3px solid red;
        }



        /* Title Styling */
        .resedential_card_title h4 {
            position: relative;
            font-size: 20px;
            font-weight: bold;
            color: #333;
            padding-bottom: 5px;
            display: inline-block;
            margin-top: 15px;
            transition: color 0.3s ease-in-out;
            cursor: pointer;
        }

        .resedential_card_title h4:hover {
            color: #ed3b3e;
        }

        /* Location Styling */
        .resedential_card_title h5 {
            font-size: 16px;
            color: gray;
            margin-top: 5px;
            font-weight: normal;
            text-transform: uppercase;
        }


        /* Extra Small Devices (Phones) - Up to 575px */
        @media (max-width: 575px) {
            .pdf_down_div {
                flex-direction: column;
                text-align: center;
                padding: 10px 15px;
                margin: 5px 10px;
            }

            .product_video_title h2 {
                font-size: 28px;
                line-height: 34px;
            }

            .video_conteaner video {
                width: 100%;
                height: auto;
            }
        }

        /* Small Devices (Tablets) - 576px to 767px */
        @media (min-width: 576px) and (max-width: 767px) {
            .pdf_down_div {
                flex-direction: column;
                text-align: center;
                padding: 15px 20px;
                margin: 10px 15px;
            }

            .product_video_title h2 {
                font-size: 32px;
                line-height: 38px;
            }

            .video_conteaner video {
                width: 100%;
                height: auto;
            }
        }

        /* Medium Devices (Tablets & Small Laptops) - 768px to 991px */
        @media (min-width: 768px) and (max-width: 991px) {
            .pdf_down_div {
                padding: 20px 25px;
                margin: 10px 20px;
            }

            .product_video_title h2 {
                font-size: 38px;
                line-height: 44px;
            }

            .video_conteaner video {
                width: 100%;
                height: auto;
            }
        }

        /* Special Case for 1024px Screens (iPads & Some Laptops) */
        @media (min-width: 992px) and (max-width: 1050px) {
            .pdf_down_div {
                padding: 22px 30px;
                margin: 15px 25px;
            }

            .product_video_title h2 {
                font-size: 40px;
                line-height: 46px;
            }

            .video_conteaner video {
                width: 100%;
                height: auto;
            }
        }

        /* Large Devices (Desktops) - 1051px to 1199px */
        @media (min-width: 1051px) and (max-width: 1199px) {
            .pdf_down_div {
                padding: 25px 35px;
                margin: 15px 30px;
            }

            .product_video_title h2 {
                font-size: 42px;
                line-height: 48px;
            }
        }

        /* Extra Large Devices (Large Desktops) - 1200px and above */
        @media (min-width: 1200px) {
            .pdf_down_div {
                padding: 30px 40px;
                margin: 20px 40px;
            }

            .product_video_title h2 {
                font-size: 50px;
                line-height: 55px;
            }
        }

        @media(max-width: 1024px) {
            .resedential_card_title {
                margin: 0px 20px;
            }
        }

        @media(max-width: 769px) {
            .factory_hero_section {
                margin-top: 128px;
            }

            .resedential_card_title {
                margin: 0px 15px;
                padding: 0px 5px;
            }

        }

        @media(max-width: 426px) {
            .factory_hero_section {
                margin-top: 92px;
            }

            .pdf_down_div {
                padding: 10px 20px;
                margin: 15px 30px;
            }

            .resedential_card_title {
                margin: 0px 40px;
                bottom: -5px;
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
                    <a href="feedback.php" target="_blank"><button class="nav-btn">FEEDBACK</button></a>

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
                    <a href="#" class="dropdown-toggle" onclick="toggleDropdown()">About Us</a>
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
                    <a href="#" class="dropdown-toggle" onclick="toggleDropdown()">Products</a>
                    <ul class="dropdown-menu">
                        <li><a href="car-design.php">By Design</a></li>
                        <li><a href="products-technology.php">Category</a></li>
                        <li><a href="industry.php">Industry</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#">SMART Technology</a>
            </li>
            <li>
                <a href="#">Career</a>
            </li>
            <li>
                <a href="blog.php">Blogs</a>
            </li>
            <li>
                <a href="fap.php">FAQ</a>
            </li>
            <li>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" onclick="toggleDropdown()">Contact us</a>
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
                                    Car Design
                                </h1>
                                <div class="hero_sec_link text-center">
                                    <span>
                                        <a href="index.php">Home</a>
                                    </span>
                                    <span>Car Design</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="design_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="pdf_down_div">
                            <div class="pdf_icon">
                                <img src="assets\Images\design_pdf.png" alt="pdf_image" class="img-fluid">
                            </div>

                            <div class="pdf_down_links">
                                <p>New Launch</p>
                                <h2>Catalogue</h2>
                                <a href="https://eceelevators.com/images/ECE-Product-Brochure-Vol3-December-2020-cc-1.pdf"
                                    target="_blank">
                                    <i class="fa-solid fa-arrow-right"></i>
                                    Download
                                </a>
                            </div>
                        </div>
                        <div class="pdf_down_div">
                            <div class="pdf_icon">
                                <img src="assets\Images\design_pdf.png" alt="pdf_image" class="img-fluid">
                            </div>

                            <div class="pdf_down_links">
                                <p>New Launch</p>
                                <h2>Catalogue</h2>
                                <a
                                    href="https://eceelevators.com/images/ECE-Product-Brochure-Vol3-December-2020-cc-1.pdf">
                                    <i class="fa-solid fa-arrow-right"></i>
                                    Download
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="product_video_title">
                            <h2>Product<b> Videos</b></h2>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="video_conteaner">
                                    <video width="320" height="240" controls>
                                        <source src="assets/video/flare.mp4" type="video/mp4">

                                    </video>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="video_conteaner">
                                    <video width="320" height="240" controls>
                                        <source src="assets/video/flare.mp4" type="video/mp4">

                                    </video>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="video_conteaner">
                                    <video width="320" height="240" controls>
                                        <source src="assets/video/flare.mp4" type="video/mp4">

                                    </video>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="video_conteaner">
                                    <video width="320" height="240" controls>
                                        <source src="assets/video/flare.mp4" type="video/mp4">

                                    </video>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="video_conteaner">
                                    <video width="320" height="240" controls>
                                        <source src="assets/video/flare.mp4" type="video/mp4">

                                    </video>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="video_conteaner">
                                    <video width="320" height="240" controls>
                                        <source src="assets/video/flare.mp4" type="video/mp4">

                                    </video>
                                </div>

                            </div>
                        </div>

                        <div class="product_video_title my-3">
                            <h2> Elevators <b>Design</b></h2>
                        </div>

                        <div class="row">

                            <div class="col-md-4 my-3 ">
                                <div class="resedential_card_img ">
                                    <img src="assets\Images\evelever_d_img1.jpg" alt="residential_img"
                                        class="img-fluid">

                                </div>
                                <div class="resedential_card_title text-center">
                                    <h4>
                                        Breezy Yellow
                                    </h4>

                                </div>

                            </div>

                            <div class="col-md-4 my-3 ">
                                <div class="resedential_card_img ">
                                    <img src="assets\Images\evelever_d_img2.jpg" alt="residential_img"
                                        class="img-fluid">

                                </div>
                                <div class="resedential_card_title text-center">
                                    <h4>
                                        Magical White
                                    </h4>

                                </div>

                            </div>

                            <div class="col-md-4 my-3 ">
                                <div class="resedential_card_img ">
                                    <img src="assets\Images\evelever_d_img3.jpg" alt="residential_img"
                                        class="img-fluid">

                                </div>
                                <div class="resedential_card_title text-center">
                                    <h4>
                                        Glassy Grey
                                    </h4>

                                </div>

                            </div>

                            <div class="col-md-4 my-3 ">
                                <div class="resedential_card_img ">
                                    <img src="assets\Images\evelever_d_img4.jpg" alt="residential_img"
                                        class="img-fluid">

                                </div>
                                <div class="resedential_card_title text-center">
                                    <h4>
                                        Metallic Marvel
                                    </h4>

                                </div>

                            </div>

                            <div class="col-md-4 my-3 ">
                                <div class="resedential_card_img ">
                                    <img src="assets\Images\evelever_d_img5.jpg" alt="residential_img"
                                        class="img-fluid">

                                </div>
                                <div class="resedential_card_title text-center">
                                    <h4>
                                        Mystical Woods
                                    </h4>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container  footer_upper">
            <div class="row">
                <div class="col-md-2">
                    <div class="footer-logo text-center">
                        <img src="assets\Images\ece-logo.png" alt="footer_logo" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="footer_text ">
                        <p>ECE Elevators is not about Make in India, we are truly Indian in our ethos and commitment to
                            deliver technologically advanced products.</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer_icon">
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href=""> <i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                        <a href=""><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer_down">
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
                        <button><a href="">ENQUIRY</a></button>
                    </div>
                </div>
                <div class="col-md-3 widget">
                    <h3 class="widget-title">
                        Company
                    </h3>
                    <div class="footer_nav_links">
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our History</a></li>
                            <li><a href="#">Factory</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Blogs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 widget">
                    <h3 class="widget-title">
                        Applications
                    </h3>
                    <div class="footer_nav_links">
                        <ul>
                            <li><a href="#">Residential</a></li>
                            <li><a href="#">Commercial</a></li>
                            <li><a href="#">Hospitals</a></li>
                            <li><a href="#">Hotel</a></li>
                            <li><a href="#">Industry</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 widget">
                    <h3 class="widget-title">
                        Contact Us
                    </h3>
                    <div class="footer_nav_links">
                        <ul>
                            <li><a href="#">Enquiry</a></li>
                            <li><a href="#">Branches</a></li>
                            <li><a href="#">Smart Customer Connect</a></li>
                            <li><a href="#">Virup Portal</a></li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-flued footer_last">
            <div class="col-md-12">
                <div class="copy_right text-center">
                    <p>Copyright © 2025 <span>ECE Elevators</span> All rights reserved.</p>
                </div>
                <div class="footer_link text-center">
                    <p><a href="">Privary policy</a> / <a href="">Term & Condition</a> / <a href="">Sitemap</a></p>
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