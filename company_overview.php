<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Elevator Company</title>
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
        .com_video {
            margin-top: 145px !important;
        }

        .video-container2 {
            position: relative;
            width: 100%;
            padding-top: 36.20%;
            overflow: hidden;
        }

        .video-container2 iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Responsive breakpoints */

        @media (max-width: 640px) {
            .video-container2 {
                width: 100%;
                padding-top: 56.25%;
            }
        }

        @media (min-width: 641px) and (max-width: 1024px) {
            .video-container2 {
                width: 100%;
                margin: 0 auto;
            }
        }

        @media (min-width: 1441px) {
            .video-container2 {
                width: 100%;
                margin: 0 auto;
            }
        }


        .about_text {
            padding: 60px 0px;
        }


        .about_heading .about_h_bg {
            background-color: #ed3b3e;
            border-radius: 15px;
            padding: 20px 10px;
        }

        .about_heading .about_h_bg h2 {
            font-weight: 400;
            font-size: 45px;
            line-height: 50px;
            color: #fff;

        }

        .about_p_t {
            padding: 30px 0px;
        }

        .about_p_t P {
            margin-bottom: 30px;
        }

        .purpose2 {
            padding: 20px 0px;
        }

        .purpose h2 {
            font-size: 35px;
            font-weight: 400;
            line-height: 50px;
            color: #002c42;
        }

        .value h2 {
            font-size: 35px;
            font-weight: 400;
            line-height: 50px;
            color: #002c42;
        }

        .text_box {
            padding: 80px 0px;
        }

        .text_box h3 {
            color: #002c42;
        }

        .text_box img {
            width: 150px;
            margin-bottom: 15px;
        }

        .our_value_img img {
            width: 400px;
            transition: all 0.2s ease 0s;
        }

        .our_value_img img:hover {
            transform: scale(1.1);
        }

        .history h2 {
            font-size: 35px;
            font-weight: 400;
            line-height: 50px;
            color: #002c42;
        }

        .history img {
            width: 65%;
            margin-left: 200px;
        }

        .experience {
            padding: 50px 0px;
        }

        .experience h2 {
            font-size: 35px;
            font-weight: 400;
            line-height: 50px;
            color: #002c42;
            margin-bottom: 50px;
        }

        .exp_bg_red {
            position: relative;
            background-color: #ed3b3e;
            padding: 30px 30px;
            border-radius: 15px;
        }

        .exp_i_d {
            display: flex;
            margin: 10px 30px;
        }

        .exp_i_d i {
            font-size: 70px;
            color: #fff;
        }

        .exp_i_d h4 {
            font-size: 40px;
            line-height: 1;
            font-weight: 500;
            margin-bottom: 0;
            color: rgba(255, 255, 255, .8);
        }

        .exp_bg_red h3 {
            color: #fff;
            font-size: 17px;
            line-height: 24px;
            margin-bottom: 0;
            font-weight: 400;
        }

        .exp_bg_red .cl2 {
            margin-left: 70px;
        }

        .exp_bg_red .cl3 {
            margin-right: 100px;
        }

        .exp_bg_red .cl1::before {
            position: absolute;
            content: "";
            height: 100%;
            top: 0;
            right: 15px;
            width: 1px;
            background-color: rgba(255, 255, 255, .21);
        }

        .exp_i_d h4 span {
            padding: 10px 20px;
            margin: 10px 0px;
            color: #fff;
        }


        @media (max-width:1024px) {
            .history img {
                margin-left: 155px;
            }

            .exp_i_d h4 span {
                margin: 0;
                padding: 0;
            }
        }

        @media (max-width:769px) {
            .history img {
                margin-left: 125px;
            }

            .exp_bg_red .cl2 {
                margin-left: 50px;
            }

            .exp_i_d {
                margin: 10px -20px;
            }

            .exp_i_d i {
                font-size: 60px;
            }

            .com_video {
                margin-top: 125px !important;
            }

            .text_box {
                padding: 20px 0px;
            }
        }

        @media (max-width:426px) {
            .com_video {
                margin-top: 91px !important;
            }

            .about_heading .about_h_bg {
                padding: 10px 18px;
                margin: 0px 50px;
            }

            .about_heading .about_h_bg h2 {
                margin-bottom: 0px;
            }

            .about_p_t P {
                margin-bottom: 0px;
            }

            .purpose h2 {
                margin-bottom: 0px;
            }

            .text_box {
                padding: 0;
            }

            .history img {
                margin-left: 65px;
            }

            .experience h2 {
                margin-bottom: 0px;
            }

            .exp_bg_red {
                padding: 30px 105px;
            }

            .exp_bg_red .cl1::before {
                display: none;
            }

            .exp_i_d {
                margin: 15px 25px;
            }

        }

        @media (max-width:376px) {
            .exp_bg_red {
                padding: 30px 75px;
            }
        }

        @media (max-width:321px) {
            .about_heading .about_h_bg h2 {
                margin-bottom: 0px;
                font-size: 35px;
            }

            .exp_bg_red {
                padding: 30px 50px;
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
                    <a href="#" class="dropdown-toggle">About Us</a>
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
                    <a href="#" class="dropdown-toggle">Products</a>
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
        <section class="com_video">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="video-container2">
                            <iframe src="https://www.youtube.com/embed/38mFdZ022V0?si=V-N1kHuzMG2wgiSy"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about_text">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="about_heading text-center">
                            <div class="about_h_bg">
                                <h2>
                                    About <b>Us</b>
                                </h2>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-12">
                        <div class="about_p_t text-center">
                            <p class="text-center">
                                ABC Industries Ltd was established in 1900 and is one of the leading Indian Elevator
                                Brands that encapsulates the legacy of Mr B.K.RAMAN with its trust and quality. With an
                                integrated state-of-the-art manufacturing base in NCR including in-house R&D, ABC
                                provides safe, sustainable and smart mobility solutions. We are recognized for our
                                people and best-in-class customer experience.
                            </p>
                            <p class="text-center">
                                ABC is the first to provide all its new generation elevators with smart, advanced
                                diagnostic capability and real time monitoring. ABC Group Elevator Management (GEM)
                                provides facilities managers with the much-needed centralized control and transparency
                                of operations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="purpose">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 text-center">
                        <h2>Our <b>Purpose</b></h2>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-12">
                        <div class="about_p_t text-center">
                            <p class="text-center">
                                We are globally admired for our sustainable, safe and smart building mobility solutions,
                                and recognized for our people and best-in-class customer experience.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="value">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center"> Our <b>Values</b></h2>
                    </div>
                    <div class="col-md-6">
                        <div class="text_box text-center">
                            <h3>Integrity</h3>
                            <p>Be honest, have strong moral and ethical standards.</p>
                            <img src="assets\Images\our_value_text_icon.png" alt="img">
                            <p>Honor your word, be transparent.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="our_value_img">

                            <img src="assets\Images\our_value_img1.png" alt="Our value image" class="img-fluid">

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="our_value_img">

                            <img src="assets\Images\our_value_img2.png" alt="Our value image" class="img-fluid">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text_box text-center">
                            <h3>Ownership</h3>
                            <p>
                                Take Initatiative, be accountable for the results of your actions.</p>
                            <img src="assets\Images\our_value_text_icon.png" alt="img">
                            <p>Own the change with innovation and excellence.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text_box text-center">
                            <h3>Compassion</h3>
                            <p>
                                Care for others and help them.</p>
                            <img src="assets\Images\our_value_text_icon.png" alt="img">
                            <p>Nurture the relationship with empathy and appreciation.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="our_value_img">

                            <img src="assets\Images\our_value_img3.png" alt="Our value image" class="img-fluid">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="purpose purpose2">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 text-center">
                        <h2>We Live Our Purpose &<b>Values Everyday</b></h2>
                    </div>
                    <div class="col-md-12">
                        <div class="about_p_t text-center">
                            <p class="text-center">
                                We can be counted on to deliver a smart IoT product, quality and transparent customer
                                experience, within committed timelines, at a competitive price encapsulating the legacy
                                of the
                                <b>- B K RAMAN Group</b>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="history" id="history_01">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center">
                            Our<b>History</b>
                        </h2>
                        <img src="assets\Images\history_img.png" alt="history_img" class="img-fluid w-65 my-2"
                            height="100%" width="100%">
                    </div>
                </div>
            </div>
        </section>

        <section class="experience">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center">
                            Our <b>Experience</b>
                        </h2>
                    </div>
                    <div class="exp_bg_red">
                        <div class="row">
                            <div class="col-md-1 cl1 cl2"></div>
                            <div class="col-md-3 cl1">
                                <div class="exp_i_d">
                                    <i class="fa-solid fa-trophy"></i>
                                    <h4>
                                        <span data-appear-animation="animateDigits" data-from="0" data-to="999"
                                            data-interval="15" data-before data-before-style="sup" data-after="+"
                                            data-after-style="sub" class="numinate completed">999</span>

                                    </h4>

                                </div>
                                <h3 class="text-center">Projects</h3>
                            </div>
                            <div class="col-md-3 cl1">
                                <div class="exp_i_d">
                                    <i class="fa-solid fa-crown"></i>
                                    <h4>
                                        <span data-appear-animation="animateDigits" data-from="0" data-to="75"
                                            data-interval="15" data-before data-before-style="sup" data-after="+"
                                            data-after-style="sub" class="numinate completed">75</span>

                                    </h4>

                                </div>
                                <h3>Year of Working Experience</h3>
                            </div>
                            <div class="col-md-3 cl1">
                                <div class="exp_i_d">
                                    <i class="fa-regular fa-user"></i>
                                    <h4>
                                        <span data-appear-animation="animateDigits" data-from="0" data-to="150"
                                            data-interval="15" data-before data-before-style="sup" data-after="%"
                                            data-after-style="sub" class="numinate completed">150</span>

                                    </h4>

                                </div>
                                <h3>Trusted Satified Clients</h3>
                            </div>
                            <div class="col-md-1 cl3"></div>
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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const elements = document.querySelectorAll('[data-appear-animation="animateDigits"]');

            elements.forEach(element => {
                let start = parseInt(element.getAttribute("data-from")) || 0;
                let end = parseInt(element.getAttribute("data-to")) || 100;
                let interval = parseInt(element.getAttribute("data-interval")) || 15;
                let before = element.getAttribute("data-before") || "";
                let after = element.getAttribute("data-after") || "";

                let current = start;
                let step = Math.ceil((end - start) / (1000 / interval));

                function updateNumber() {
                    if (current < end) {
                        current += step;
                        if (current > end) current = end;
                        element.innerHTML = `${before}<${element.getAttribute("data-before-style") || "span"}>${current}</${element.getAttribute("data-before-style") || "span"}>${after}`;
                        setTimeout(updateNumber, interval);
                    }
                }

                updateNumber();
            });
        });

    </script>

</body>

</html>