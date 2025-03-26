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

        .factory_card_section {
            padding: 90px 0px;
        }

        .factory_card_section .col-md-4 {
            gap: 2px;
        }

        .factory_card_section .fac_card {
            margin: 15px 15px;
            text-align: left;
            background-color: #fff;
            padding: 17px 17px;
            box-shadow: 0 0 15px rgba(0, 0, 0, .1);
            min-height: 195px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .factory_card_section .fac_card:hover {
            transform: translateY(-10px);
        }



        .fac_manu_heading {
            padding: 50px;
        }

        .fac_manu_heading h2 {
            font-weight: 400;
            font-size: 45px;
            line-height: 50px;
            color: #002c42;
            margin-bottom: 20px;
        }

        .fact_c_style {
            position: relative;
        }

        .fact_c_style img {

            border-radius: 80%;
            min-width: auto;
            transition: all 0.3s ease 0s;
            border-right: 10px solid transparent;
            border-bottom: 10px solid transparent;
        }

        /* .fact_c_style img:hover::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            height: 5px;
            background-color: red;
            border-radius: 10px;
            transition: width 0.3s ease-in-out;
        } */

        .fact_c_style img:hover::after {
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
        }

        .procedure-row {
            position: relative;
        }

        .procedure-row::before {
            content: '';
            position: absolute;
            left: -103px;
            right: -60px;
            height: 100%;
            display: block;
            top: 2px;
            margin-left: 40px;
            background: url(assets/Images/procedure-bg.png) center center no-repeat;
        }

        .tech_aqui {
            padding: 90px 0px;
        }

        .teach_aqui_header h2 {
            font-weight: 400;
            font-size: 45px;
            line-height: 50px;
            color: #002c42;
            margin-bottom: 40px;
        }

        .fact_c_style .process-num {
            position: absolute;
            top: 10px;
            left: -10px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #ed3b3e;
            color: white;
            font-size: 18px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
        }

        .fact_c_style .process-num::after {
            position: absolute;
            content: "";
            top: -6px;
            left: -6px;
            width: 57px;
            height: 57px;
            border-radius: 50%;
            z-index: 2;
            background-color: #ed3b3e;

        }

        .fact_c_style .process-num::before {
            position: absolute;
            counter-increment: featured-imagebox-procedure;
            content: counter(featured-imagebox-procedure, decimal-leading-zero) " ";
            top: 8px;
            z-index: 5;
            font-size: 24px;
            left: 10px;
            color: white;
        }

        .tech_aqui_img img {
            width: 100%;
        }



        @media (max-width:769px) {
            .factory_manufacturing_section {
                display: none;
            }

            .ul_li_cards {
                padding: 0px 20px;
            }

            .factory_hero_section {
                margin-top: 125px;
            }
        }

        @media (max-width:426px) {
            .factory_hero_section {
                margin-top: 92px;
            }

            .ul_li_cards {
                padding: 30px 30px;
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
                                    Factory
                                </h1>
                                <div class="hero_sec_link text-center">
                                    <span>
                                        <a href="index.php">Home</a>
                                    </span>
                                    <span>Factory</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- factory_card_section -->

        <section class="factory_card_section">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="fac_card">
                            <h4>Fully Integrated Manufacturing Facility</h4>
                            <p>ISO 9001:2000 Certified spread over 250,000 sq ft</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fac_card">
                            <h4>Factory & Office Constructed Area</h4>
                            <p>71,000 sq ft complex that also houses a residential area for the employees</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fac_card">
                            <h4>Production Capacity</h4>
                            <p>Manufacturing Capacity of 2000 lifts per annum</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fac_card">
                            <h4>Expansion Capability</h4>
                            <p>The only elevator plant in India which has the capability to manufacture all lift
                                components in-house</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fac_card">
                            <h4>Strategically Located</h4>
                            <p>At Ghaziabad (Uttar Pradesh) in the National Capital Region (NCR); only elevator
                                manufacturing plant in North India</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fac_card">
                            <h4>Further Expansion</h4>
                            <p>New shed area, covering 37,500 sq ft available for further expansion</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="factory_manufacturing_section">
            <div class="container">
                <div class="row procedure-row">
                    <div class="col-md-12">
                        <div class="fac_manu_heading text-center">
                            <h2>Full Fledged Manufacturing Facility</h2>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="fact_c_cards my-5">

                            <div class="fact_c_style ">
                                <img src="assets\Images\f_m_c_card_img1.jpg" class="img-fluid" alt="image">
                                <div class="process-num">

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="fact_c_cards ">

                            <div class="fact_c_style">
                                <img src="assets\Images\f_m_c_card_img1.jpg" class="img-fluid" alt="image">

                                <div class="process-num">
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="fact_c_cards my-5">

                            <div class="fact_c_style ">
                                <img src="assets\Images\f_m_c_card_img1.jpg" class="img-fluid" alt="image">

                                <div class="process-num">
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="fact_c_cards">

                            <div class="fact_c_style">
                                <img src="assets\Images\f_m_c_card_img1.jpg" class="img-fluid" alt="image">

                                <div class="process-num">
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section class="tech_aqui">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="teach_aqui_header text-center">
                            <h2>
                                Technology & Equipment
                            </h2>
                        </div>

                    </div>

                    <div class="col-md-2">

                    </div>

                    <div class="col-md-4">
                        <div class="tech_aqui_img">
                            <img src="assets\Images\tech_aqui_img.jpg" alt="image">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ul_li_cards">
                            <ul>
                                <li>In-house design team / R&D department</li>
                                <li>Fully integrated machine shop and assembly line</li>
                                <li>In-house powder coating facility</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">

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
                            <li><a href="credentials.php">Residential</a></li>
                            <li><a href="credentials.php">Commercial</a></li>
                            <li><a href="credentials.php">Hospitals</a></li>
                            <li><a href="credentials.php">Hotel</a></li>
                            <li><a href="credentials.php">Industry</a></li>
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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Select all .process-num elements
            const processNumbers = document.querySelectorAll(".fact_c_style .process-num");

            // Loop through each .process-num and add a number
            processNumbers.forEach((processNum, index) => {
                processNum.textContent = (index + 1).toString().padStart(2, "0"); // Adds leading zero
            });
        });

    </script>

</body>

</html>