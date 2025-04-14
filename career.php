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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .dot-container {
            display: none;
        }

        .career_why_choose_heading_1 {
            padding-top: 50px;
            text-align: center;
        }

        .career_why_choose_heading_1 h2 {
            font-weight: 400;
            font-size: 45px;
            line-height: 50px;
            color: #002c42;
        }

        .why_choose_us {
            padding: 50px 0px;
        }

        .why_choose_us .title {
            padding: 20px 0px;
            text-align: center;
        }

        .why_choose_us .title h2 {
            font-weight: 400;
            font-size: 45px;
            line-height: 50px;
            color: #002c42;
        }

        .why_choose_text {
            padding: 60px;
        }

        .career_search_mian {
            padding: 50px 0px;
        }

        .career_search {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);

        }

        .career_search .input-group {
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            align-items: center;
            padding: 5px;
        }

        .career_search .form-control {
            height: 50px;
            border: none;
            outline: none;
            box-shadow: none;
            border-right: none;
            flex: 1;
            padding-left: 10px;
        }

        .career_search .input-group-text {
            background: transparent;
            border: none;
            padding: 0 15px;
        }

        .career_search .btn-search {
            height: 60px;
            border-radius: 8px;
            background: red;
            color: white;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            padding: 0 20px;
            border: none;
            white-space: nowrap;
            width: 100%;
        }

        .career_search .btn-search:hover {
            background: darkred;
        }

        .job_search {
            position: relative;
            padding: 50px 0px;
        }

        .job_search::before {
            position: absolute;
            content: '';
            background-image: url(assets/Images/career_job_search_bg.png);
            background-position: center center;
            background-size: cover;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            opacity: .02;
            z-index: -1;
        }

        .job_s_card {
            display: flex;
            justify-content: space-between;
            border: 1px solid black;
            border-radius: 15px;
            padding: 20px 30px;
            background-color: white;
            margin: 20px 0px;
        }

        .job_s_card .job_s_card_text_icon .j_s_c_icon_text {
            display: flex;
            justify-content: space-around;
        }

        .job_s_card .job_s_card_text_icon .j_s_c_icon_text i {
            margin: 10px 10px;
        }

        .job_s_card .job_s_card_text_icon span p {
            margin-bottom: 0px;
            font-size: 13px;
        }

        .job_s_card .job_s_card_text_icon .j_s_c_j_f {
            background: #fdd6cc;
            display: inline-block;
            padding: 5px 10px;
            color: #EC1C24;
            /* margin-bottom: 10px; */
            border: 1px solid #EC1C24;
            font-size: 14px;
            border-radius: 5px;
        }

        .job_s_card .job_s_card_text_icon .j_s_c_j_f p {
            margin-bottom: 0px;
        }

        .option_s {
            width: 100%;
            border-radius: 5px;
            border: 1px solid #ced4da;
            padding: 10px;
            font-size: 16px;
            height: 50px;
            background-color: #f8f8f8;
            border-radius: 0px;
        }

        .custom-full-width1 {
            width: 100%;
            margin-top: 0px;
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        /* .form-check {
            margin-left: 15px !important;
        } */

        .search-bar {
            margin: 20px 0;
        }

        #jobSearch {
            width: 50%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }


        .career_button {
            display: inline-block;
            margin-left: 120px;
        }

        .career_button a {
            text-decoration: none;
            color: white;
        }

        .career_button button {
            position: relative;
            margin-top: 40px;
            padding: 5px 30px;
            background-color: black;
            color: white;
            font-size: 15px;
            font-weight: bold;
            border: none;
            cursor: pointer;
            overflow: hidden;
            transition: color 0.3s ease;
            z-index: 1;
        }

        .career_button button::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background-color: #ed3b3e;
            transition: left 0.3s ease-in-out;
            z-index: 0;
            color: black;
            z-index: -1;
        }

        .career_button button:hover::after {
            left: 0;

        }

        .career_button button:hover {
            color: white;
            z-index: 2;
        }


        .career_button button {
            position: relative;
            z-index: 1;
        }



        @media (max-width: 576px) {
            .career_search .btn-search {
                margin-top: 10px;
            }

            .job_s_card {
                display: inline-block;
                padding: 20px 15px;
            }

            .btn_cp_m {
                margin-left: 130px;
            }

            .career_button button {
                margin-top: 0px;
            }
        }

        @media (max-width: 1025px) {
            .why_choose_text {
                padding: 30px;
            }

            .why_choose_us {
                padding: 0px 0px;
            }
        }

        @media(max-width: 321px) {
            .job_s_card {
                padding: 20px 5px;
            }

            .btn_cp_m {
                margin-left: 80px;
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

        <!-- Slideshow -->
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets\Images\career_main_img.jpg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="assets\Images\career_main_img.jpg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="assets\Images\career_main_img.jpg" class="d-block w-100" alt="Slide 3">
                </div>
                <div class="carousel-item">
                    <img src="assets\Images\career_main_img.jpg" class="d-block w-100" alt="Slide 3">
                </div>
                <div class="carousel-item">
                    <img src="assets\Images\career_main_img.jpg" class="d-block w-100" alt="Slide 3">
                </div>
                <div class="carousel-item">
                    <img src="assets\Images\career_main_img.jpg" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
            <!-- Dot navigation -->
            <div class="dot-container text-center">
                <span class="dot active" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
            </div>
        </div>

        <section class="career_why_choose">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="career_why_choose_heading_1">
                            <div class="title">
                                <h2>Your Path to Success in the <b>Elevator Industry</b></h2>
                            </div>
                            <p>At ABC we are not just in the business of moving people and goods; we are in the business
                                of
                                elevating careers. As one of the leading companies in the field of building mobility
                                solutions, you will become part of a community of passionate and motivated colleagues
                                who
                                are leaving their mark on the industry. Cultivate your career through shared trust and a
                                shared commitment to our core values.</p>

                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="why_choose_us">
                            <div class="title">
                                <h2>Why Choose <b>ABC</b></h2>
                            </div>
                            <div class="row">
                                <div class="col-md-6 my-2">
                                    <div class="why_choose_text text-center">
                                        <h4>Innovation at its Core</h4>
                                        <p>We are committed to pushing the boundaries of technology to create the
                                            elevators of tomorrow. As a member of our team, you will have the chance to
                                            work on cutting-edge projects. From smart elevators to sustainable
                                            solutions, we are at the forefront of innovation in the industry.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 my-2">
                                    <div class="why_choose_img">
                                        <img src="assets\Images\why_choose_us_img1.jpg" alt="image" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-6 my-2">
                                    <div class="why_choose_img">
                                        <img src="assets\Images\why_choose_us_img2.jpg" alt="image" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-6 my-2">
                                    <div class="why_choose_text text-center">
                                        <h4>Career Growth and Development</h4>
                                        <p>We believe in investing in our people. When you join ABC, you are not just
                                            getting a job; but embarking on a career journey. We offer extensive
                                            training, mentoring programs, and opportunities for professional
                                            development. Your growth is our priority, and we will provide you with the
                                            tools and resources you need to succeed.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 my-2">
                                    <div class="why_choose_text text-center text-center ">
                                        <h4>Work Culture</h4>
                                        <p>Our corporate culture is characterized by transparency, collaboration,
                                            innovation, progressiveness, integrity, and agility. We provide ample
                                            opportunities for time off, flexibility, and dedicated support to empower
                                            your personal and professional development.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 my-2">
                                    <div class="why_choose_img">
                                        <img src="assets\Images\why_choose_us_img3.jpg" alt="image" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-6 my-2">
                                    <div class="why_choose_img">
                                        <img src="assets\Images\why_choose_us_img4.jpg" alt="image" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-6 my-2">
                                    <div class="why_choose_text text-center">
                                        <h4>Diversity and Inclusion</h4>
                                        <p>We value diversity and inclusion at every level of our organization. We
                                            believe that a diverse workforce fosters creativity, drives innovation, and
                                            enhances our ability to serve our customers. We are committed to creating an
                                            inclusive environment where unique perspectives are celebrated and
                                            respected.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 my-2">
                                    <div class="why_choose_text text-center">
                                        <h4>Sustainability and Responsibility</h4>
                                        <p>As a leader in the elevator industry, we recognize our responsibility to the
                                            planet and our communities. We are dedicated to sustainability, from
                                            energy-efficient elevator designs to responsible business practices. Join us
                                            in making a positive impact on the world while building a rewarding career.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 my-2">
                                    <div class="why_choose_img">
                                        <img src="assets\Images\why_choose_us_img5.jpg" alt="image" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="career_search_mian">
            <div class="container">
                <div class="career_search">
                    <div class="row ">
                        
                        <div class="col-lg-8 col-md-8 col-12">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" width="20"
                                        alt="location-icon">
                                </span>
                                <input type="text" class="form-control" placeholder="Location">
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-12">
                            <button class="btn btn-search w-100">
                                FIND A JOB <span><i class="fa-solid fa-magnifying-glass"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- <section class="job_search">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="job_search_head_text">
                            <div class="job_s_h_t_heading text-center">
                                <h2>Jobs You May Be Interested In</h2>
                            </div>
                            <div class="job_s_h_t_prac text-center">
                                <p>Elevate your career to new heights with ECE Elevators! Join our team of skilled
                                    professionals dedicated to designing, building, and maintaining innovative elevator
                                    solutions</p>
                            </div>
                            <div class="job_s_card">

                                <div class="job_s_card_text_icon">
                                    <h5>Engineer</h5>
                                    <span class="j_s_c_icon_text">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <p> Safety And Quality</p>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>Ghaziabad, Uttar Pradesh</p>
                                        <i class="fa-solid fa-clock"></i>
                                        <p>29 January, 2025</p>
                                    </span>
                                    <div class="j_s_c_j_f">
                                        <p>Full Time</p>
                                    </div>
                                </div>


                                <div class="footer_button btn_m">
                                    <button type="submit">Apply</button>
                                </div>



                            </div>
                            <div class="job_s_card">

                                <div class="job_s_card_text_icon">
                                    <h5>Engineer</h5>
                                    <span class="j_s_c_icon_text">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <p> Safety And Quality</p>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>Ghaziabad, Uttar Pradesh</p>
                                        <i class="fa-solid fa-clock"></i>
                                        <p>29 January, 2025</p>
                                    </span>
                                    <div class="j_s_c_j_f">
                                        <p>Full Time</p>
                                    </div>
                                </div>


                                <div class="footer_button btn_m">
                                    <button type="submit">Apply</button>
                                </div>



                            </div>
                            <div class="job_s_card">

                                <div class="job_s_card_text_icon">
                                    <h5>Engineer</h5>
                                    <span class="j_s_c_icon_text">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <p> Safety And Quality</p>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>Ghaziabad, Uttar Pradesh</p>
                                        <i class="fa-solid fa-clock"></i>
                                        <p>29 January, 2025</p>
                                    </span>
                                    <div class="j_s_c_j_f">
                                        <p>Full Time</p>
                                    </div>
                                </div>


                                <div class="footer_button btn_m">
                                    <button type="submit">Apply</button>
                                </div>



                            </div>
                            <div class="job_s_card">

                                <div class="job_s_card_text_icon">
                                    <h5>Engineer</h5>
                                    <span class="j_s_c_icon_text">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <p> Safety And Quality</p>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>Ghaziabad, Uttar Pradesh</p>
                                        <i class="fa-solid fa-clock"></i>
                                        <p>29 January, 2025</p>
                                    </span>
                                    <div class="j_s_c_j_f">
                                        <p>Full Time</p>
                                    </div>
                                </div>


                                <div class="footer_button btn_m">
                                    <button type="submit">Apply</button>
                                </div>



                            </div>
                            <div class="job_s_card">

                                <div class="job_s_card_text_icon">
                                    <h5>Engineer</h5>
                                    <span class="j_s_c_icon_text">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <p> Safety And Quality</p>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>Ghaziabad, Uttar Pradesh</p>
                                        <i class="fa-solid fa-clock"></i>
                                        <p>29 January, 2025</p>
                                    </span>
                                    <div class="j_s_c_j_f">
                                        <p>Full Time</p>
                                    </div>
                                </div>


                                <div class="footer_button btn_m">
                                    <button type="submit">Apply</button>
                                </div>



                            </div>
                            <div class="job_s_card">

                                <div class="job_s_card_text_icon">
                                    <h5>Engineer</h5>
                                    <span class="j_s_c_icon_text">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <p> Safety And Quality</p>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>Ghaziabad, Uttar Pradesh</p>
                                        <i class="fa-solid fa-clock"></i>
                                        <p>29 January, 2025</p>
                                    </span>
                                    <div class="j_s_c_j_f">
                                        <p>Full Time</p>
                                    </div>
                                </div>


                                <div class="footer_button btn_m">
                                    <button type="submit">Apply</button>
                                </div>



                            </div>
                            <div class="job_s_card">

                                <div class="job_s_card_text_icon">
                                    <h5>Engineer</h5>
                                    <span class="j_s_c_icon_text">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <p> Safety And Quality</p>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>Ghaziabad, Uttar Pradesh</p>
                                        <i class="fa-solid fa-clock"></i>
                                        <p>29 January, 2025</p>
                                    </span>
                                    <div class="j_s_c_j_f">
                                        <p>Full Time</p>
                                    </div>
                                </div>


                                <div class="footer_button btn_m">
                                    <button type="submit">Apply</button>
                                </div>



                            </div>
                            <div class="job_s_card">

                                <div class="job_s_card_text_icon">
                                    <h5>Engineer</h5>
                                    <span class="j_s_c_icon_text">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <p> Safety And Quality</p>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>Ghaziabad, Uttar Pradesh</p>
                                        <i class="fa-solid fa-clock"></i>
                                        <p>29 January, 2025</p>
                                    </span>
                                    <div class="j_s_c_j_f">
                                        <p>Full Time</p>
                                    </div>
                                </div>


                                <div class="footer_button btn_m">
                                    <button type="submit">Apply</button>
                                </div>



                            </div>
                            <div class="job_s_card">

                                <div class="job_s_card_text_icon">
                                    <h5>Engineer</h5>
                                    <span class="j_s_c_icon_text">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <p> Safety And Quality</p>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>Ghaziabad, Uttar Pradesh</p>
                                        <i class="fa-solid fa-clock"></i>
                                        <p>29 January, 2025</p>
                                    </span>
                                    <div class="j_s_c_j_f">
                                        <p>Full Time</p>
                                    </div>
                                </div>


                                <div class="footer_button btn_m">
                                    <button type="submit">Apply</button>
                                </div>



                            </div>
                            <div class="job_s_card">

                                <div class="job_s_card_text_icon">
                                    <h5>Engineer</h5>
                                    <span class="j_s_c_icon_text">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <p> Safety And Quality</p>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>Ghaziabad, Uttar Pradesh</p>
                                        <i class="fa-solid fa-clock"></i>
                                        <p>29 January, 2025</p>
                                    </span>
                                    <div class="j_s_c_j_f">
                                        <p>Full Time</p>
                                    </div>
                                </div>


                                <div class="footer_button btn_m">
                                    <button type="submit">Apply</button>
                                </div>



                            </div>
                            <div class="job_s_card">

                                <div class="job_s_card_text_icon">
                                    <h5>Engineer</h5>
                                    <span class="j_s_c_icon_text">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <p> Safety And Quality</p>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>Ghaziabad, Uttar Pradesh</p>
                                        <i class="fa-solid fa-clock"></i>
                                        <p>29 January, 2025</p>
                                    </span>
                                    <div class="j_s_c_j_f">
                                        <p>Full Time</p>
                                    </div>
                                </div>


                                <div class="footer_button btn_m">
                                    <button type="submit">Apply</button>
                                </div>



                            </div>
                            <div class="job_s_card">

                                <div class="job_s_card_text_icon">
                                    <h5>Engineer</h5>
                                    <span class="j_s_c_icon_text">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <p> Safety And Quality</p>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>Ghaziabad, Uttar Pradesh</p>
                                        <i class="fa-solid fa-clock"></i>
                                        <p>29 January, 2025</p>
                                    </span>
                                    <div class="j_s_c_j_f">
                                        <p>Full Time</p>
                                    </div>
                                </div>


                                <div class="footer_button btn_m">
                                    <button type="submit">Apply</button>
                                </div>



                            </div>
                            <div class="job_s_card">

                                <div class="job_s_card_text_icon">
                                    <h5>Engineer</h5>
                                    <span class="j_s_c_icon_text">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <p> Safety And Quality</p>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>Ghaziabad, Uttar Pradesh</p>
                                        <i class="fa-solid fa-clock"></i>
                                        <p>29 January, 2025</p>
                                    </span>
                                    <div class="j_s_c_j_f">
                                        <p>Full Time</p>
                                    </div>
                                </div>


                                <div class="footer_button btn_m">
                                    <button type="submit">Apply</button>
                                </div>



                            </div>
                            <div class="job_s_card">

                                <div class="job_s_card_text_icon">
                                    <h5>Engineer</h5>
                                    <span class="j_s_c_icon_text">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <p> Safety And Quality</p>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>Ghaziabad, Uttar Pradesh</p>
                                        <i class="fa-solid fa-clock"></i>
                                        <p>29 January, 2025</p>
                                    </span>
                                    <div class="j_s_c_j_f">
                                        <p>Full Time</p>
                                    </div>
                                </div>


                                <div class="footer_button btn_m">
                                    <button type="submit">Apply</button>
                                </div>



                            </div>
                            <div class="job_s_card">

                                <div class="job_s_card_text_icon">
                                    <h5>Engineer</h5>
                                    <span class="j_s_c_icon_text">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <p> Safety And Quality</p>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>Ghaziabad, Uttar Pradesh</p>
                                        <i class="fa-solid fa-clock"></i>
                                        <p>29 January, 2025</p>
                                    </span>
                                    <div class="j_s_c_j_f">
                                        <p>Full Time</p>
                                    </div>
                                </div>


                                <div class="footer_button btn_m">
                                    <button type="submit">Apply</button>
                                </div>



                            </div>
                            <div class="job_s_card">

                                <div class="job_s_card_text_icon">
                                    <h5>Engineer</h5>
                                    <span class="j_s_c_icon_text">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <p> Safety And Quality</p>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>Ghaziabad, Uttar Pradesh</p>
                                        <i class="fa-solid fa-clock"></i>
                                        <p>29 January, 2025</p>
                                    </span>
                                    <div class="j_s_c_j_f">
                                        <p>Full Time</p>
                                    </div>
                                </div>


                                <div class="footer_button btn_m">
                                    <button type="submit">Apply</button>
                                </div>



                            </div>
                            <div class="job_s_card">

                                <div class="job_s_card_text_icon">
                                    <h5>Engineer</h5>
                                    <span class="j_s_c_icon_text">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <p> Safety And Quality</p>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>Ghaziabad, Uttar Pradesh</p>
                                        <i class="fa-solid fa-clock"></i>
                                        <p>29 January, 2025</p>
                                    </span>
                                    <div class="j_s_c_j_f">
                                        <p>Full Time</p>
                                    </div>
                                </div>


                                <div class="footer_button btn_m">
                                    <button type="submit">Apply</button>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
        </section> -->

        <section class="job_search">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="job_search_head_text">
                            <div class="job_s_h_t_heading text-center">
                                <h2>Jobs You May Be Interested In</h2>
                            </div>
                            <div class="job_s_h_t_prac text-center">
                                <p>Elevate your career to new heights with ABC Elevators! Join our team of skilled
                                    professionals dedicated to designing, building, and maintaining innovative elevator
                                    solutions</p>
                            </div>


                            <div class="career_search">
                                <div class="row">
                                    <!-- Input Field -->
                                    <div class="col-lg-8 col-md-6 col-12">
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png"
                                                    width="20" alt="location-icon">
                                            </span>
                                            <input type="text" class="form-control" id="locationInput"
                                                placeholder="Location">
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <button class="btn btn-search w-100" onclick="filterJobs()">
                                            FIND A JOB <span><i class="fa-solid fa-magnifying-glass"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>


                            <div id="jobList">
                                <div class="job_s_card" data-location="Ghaziabad, Uttar Pradesh">
                                    <div class="job_s_card_text_icon">
                                        <h5>Engineer</h5>
                                        <span class="j_s_c_icon_text">
                                            <i class="fa-solid fa-briefcase"></i>
                                            <p>Safety And Quality</p>
                                            <i class="fa-solid fa-location-dot"></i>
                                            <p>Ghaziabad, Uttar Pradesh</p>
                                            <i class="fa-solid fa-clock"></i>
                                            <p>29 January, 2025</p>
                                        </span>
                                        <div class="j_s_c_j_f">
                                            <p>Full Time</p>
                                        </div>
                                    </div>
                                    <div class="career_button">
                                        <button><a href="#enquiry_form_id">Apply</a></button>
                                    </div>
                                </div>

                                <div class="job_s_card" data-location="Noida, Uttar Pradesh">
                                    <div class="job_s_card_text_icon">
                                        <h5>Manager</h5>
                                        <span class="j_s_c_icon_text">
                                            <i class="fa-solid fa-briefcase"></i>
                                            <p>Operations Management</p>
                                            <i class="fa-solid fa-location-dot"></i>
                                            <p>Noida, Uttar Pradesh</p>
                                            <i class="fa-solid fa-clock"></i>
                                            <p>15 February, 2025</p>
                                        </span>
                                        <div class="j_s_c_j_f">
                                            <p>Full Time</p>
                                        </div>
                                    </div>
                                    <div class="career_button">
                                        <button><a href="#enquiry_form_id">Apply</a></button>
                                    </div>
                                </div>

                                <div class="job_s_card" data-location="Delhi, India">
                                    <div class="job_s_card_text_icon">
                                        <h5>Software Engineer</h5>
                                        <span class="j_s_c_icon_text">
                                            <i class="fa-solid fa-briefcase"></i>
                                            <p>Software Development</p>
                                            <i class="fa-solid fa-location-dot"></i>
                                            <p>Delhi, India</p>
                                            <i class="fa-solid fa-clock"></i>
                                            <p>20 March, 2025</p>
                                        </span>
                                        <div class="j_s_c_j_f">
                                            <p>Full Time</p>
                                        </div>
                                    </div>
                                    <div class="career_button">
                                        <button><a href="#enquiry_form_id">Apply</a></button>
                                    </div>
                                </div>
                                <div class="job_s_card" data-location="Lucknow, Uttar Pradesh">
                                    <div class="job_s_card_text_icon">
                                        <h5>Engineer</h5>
                                        <span class="j_s_c_icon_text">
                                            <i class="fa-solid fa-briefcase"></i>
                                            <p>Safety And Quality</p>
                                            <i class="fa-solid fa-location-dot"></i>
                                            <p>Ghaziabad, Uttar Pradesh</p>
                                            <i class="fa-solid fa-clock"></i>
                                            <p>29 January, 2025</p>
                                        </span>
                                        <div class="j_s_c_j_f">
                                            <p>Full Time</p>
                                        </div>
                                    </div>
                                    <div class="career_button">
                                        <button><a href="#enquiry_form_id">Apply</a></button>
                                    </div>
                                </div>

                                <div class="job_s_card" data-location="Mumbai">
                                    <div class="job_s_card_text_icon">
                                        <h5>Manager</h5>
                                        <span class="j_s_c_icon_text">
                                            <i class="fa-solid fa-briefcase"></i>
                                            <p>Operations Management</p>
                                            <i class="fa-solid fa-location-dot"></i>
                                            <p>Noida, Uttar Pradesh</p>
                                            <i class="fa-solid fa-clock"></i>
                                            <p>15 February, 2025</p>
                                        </span>
                                        <div class="j_s_c_j_f">
                                            <p>Full Time</p>
                                        </div>
                                    </div>
                                    <div class="career_button">
                                        <button><a href="#enquiry_form_id">Apply</a></button>
                                    </div>
                                </div>

                                <div class="job_s_card" data-location="Delhi, India">
                                    <div class="job_s_card_text_icon">
                                        <h5>Software Engineer</h5>
                                        <span class="j_s_c_icon_text">
                                            <i class="fa-solid fa-briefcase"></i>
                                            <p>Software Development</p>
                                            <i class="fa-solid fa-location-dot"></i>
                                            <p>Delhi, India</p>
                                            <i class="fa-solid fa-clock"></i>
                                            <p>20 March, 2025</p>
                                        </span>
                                        <div class="j_s_c_j_f">
                                            <p>Full Time</p>
                                        </div>
                                    </div>
                                    <div class="career_button">
                                        <button><a href="#enquiry_form_id">Apply</a></button>
                                    </div>
                                </div>

                                <div class="job_s_card" data-location="Bangalore">
                                    <div class="job_s_card_text_icon">
                                        <h5>Engineer</h5>
                                        <span class="j_s_c_icon_text">
                                            <i class="fa-solid fa-briefcase"></i>
                                            <p>Safety And Quality</p>
                                            <i class="fa-solid fa-location-dot"></i>
                                            <p>Ghaziabad, Uttar Pradesh</p>
                                            <i class="fa-solid fa-clock"></i>
                                            <p>29 January, 2025</p>
                                        </span>
                                        <div class="j_s_c_j_f">
                                            <p>Full Time</p>
                                        </div>
                                    </div>
                                    <div class="career_button">
                                        <button><a href="#enquiry_form_id">Apply</a></button>
                                    </div>
                                </div>

                                <div class="job_s_card" data-location="Chennai">
                                    <div class="job_s_card_text_icon">
                                        <h5>Manager</h5>
                                        <span class="j_s_c_icon_text">
                                            <i class="fa-solid fa-briefcase"></i>
                                            <p>Operations Management</p>
                                            <i class="fa-solid fa-location-dot"></i>
                                            <p>Noida, Uttar Pradesh</p>
                                            <i class="fa-solid fa-clock"></i>
                                            <p>15 February, 2025</p>
                                        </span>
                                        <div class="j_s_c_j_f">
                                            <p>Full Time</p>
                                        </div>
                                    </div>
                                    <div class="career_button">
                                        <button><a href="#enquiry_form_id">Apply</a></button>
                                    </div>
                                </div>

                                <div class="job_s_card" data-location="Kolkata">
                                    <div class="job_s_card_text_icon">
                                        <h5>Software Engineer</h5>
                                        <span class="j_s_c_icon_text">
                                            <i class="fa-solid fa-briefcase"></i>
                                            <p>Software Development</p>
                                            <i class="fa-solid fa-location-dot"></i>
                                            <p>Delhi, India</p>
                                            <i class="fa-solid fa-clock"></i>
                                            <p>20 March, 2025</p>
                                        </span>
                                        <div class="j_s_c_j_f">
                                            <p>Full Time</p>
                                        </div>
                                    </div>
                                    <div class="career_button">
                                        <button><a href="#enquiry_form_id">Apply</a></button>
                                    </div>
                                </div>

                                <div class="job_s_card" data-location="Hyderabad">
                                    <div class="job_s_card_text_icon">
                                        <h5>Engineer</h5>
                                        <span class="j_s_c_icon_text">
                                            <i class="fa-solid fa-briefcase"></i>
                                            <p>Safety And Quality</p>
                                            <i class="fa-solid fa-location-dot"></i>
                                            <p>Ghaziabad, Uttar Pradesh</p>
                                            <i class="fa-solid fa-clock"></i>
                                            <p>29 January, 2025</p>
                                        </span>
                                        <div class="j_s_c_j_f">
                                            <p>Full Time</p>
                                        </div>
                                    </div>
                                    <div class="career_button">
                                        <button><a href="#enquiry_form_id">Apply</a></button>
                                    </div>
                                </div>

                                <div class="job_s_card" data-location="Chandigarh">
                                    <div class="job_s_card_text_icon">
                                        <h5>Manager</h5>
                                        <span class="j_s_c_icon_text">
                                            <i class="fa-solid fa-briefcase"></i>
                                            <p>Operations Management</p>
                                            <i class="fa-solid fa-location-dot"></i>
                                            <p>Noida, Uttar Pradesh</p>
                                            <i class="fa-solid fa-clock"></i>
                                            <p>15 February, 2025</p>
                                        </span>
                                        <div class="j_s_c_j_f">
                                            <p>Full Time</p>
                                        </div>
                                    </div>
                                    <div class="career_button">
                                        <button><a href="#enquiry_form_id">Apply</a></button>
                                    </div>
                                </div>

                                <div class="job_s_card" data-location="Indore, India">
                                    <div class="job_s_card_text_icon">
                                        <h5>Software Engineer</h5>
                                        <span class="j_s_c_icon_text">
                                            <i class="fa-solid fa-briefcase"></i>
                                            <p>Software Development</p>
                                            <i class="fa-solid fa-location-dot"></i>
                                            <p>Delhi, India</p>
                                            <i class="fa-solid fa-clock"></i>
                                            <p>20 March, 2025</p>
                                        </span>
                                        <div class="j_s_c_j_f">
                                            <p>Full Time</p>
                                        </div>
                                    </div>
                                    <div class="career_button">
                                        <button><a href="#enquiry_form_id">Apply</a></button>
                                    </div>
                                </div>

                                <div class="job_s_card" data-location="Ghaziabad, Uttar Pradesh">
                                    <div class="job_s_card_text_icon">
                                        <h5>Engineer</h5>
                                        <span class="j_s_c_icon_text">
                                            <i class="fa-solid fa-briefcase"></i>
                                            <p>Safety And Quality</p>
                                            <i class="fa-solid fa-location-dot"></i>
                                            <p>Ghaziabad, Uttar Pradesh</p>
                                            <i class="fa-solid fa-clock"></i>
                                            <p>29 January, 2025</p>
                                        </span>
                                        <div class="j_s_c_j_f">
                                            <p>Full Time</p>
                                        </div>
                                    </div>
                                    <div class="career_button">
                                        <button><a href="#enquiry_form_id">Apply</a></button>
                                    </div>
                                </div>

                                <div class="job_s_card" data-location="Noida, Uttar Pradesh">
                                    <div class="job_s_card_text_icon">
                                        <h5>Manager</h5>
                                        <span class="j_s_c_icon_text">
                                            <i class="fa-solid fa-briefcase"></i>
                                            <p>Operations Management</p>
                                            <i class="fa-solid fa-location-dot"></i>
                                            <p>Noida, Uttar Pradesh</p>
                                            <i class="fa-solid fa-clock"></i>
                                            <p>15 February, 2025</p>
                                        </span>
                                        <div class="j_s_c_j_f">
                                            <p>Full Time</p>
                                        </div>
                                    </div>
                                    <div class="career_button">
                                        <button><a href="#enquiry_form_id">Apply</a></button>
                                    </div>
                                </div>
                            </div>

                            <div class="job_s_card" data-location="Delhi, India">
                                <div class="job_s_card_text_icon">
                                    <h5>Software Engineer</h5>
                                    <span class="j_s_c_icon_text">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <p>Software Development</p>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>Delhi, India</p>
                                        <i class="fa-solid fa-clock"></i>
                                        <p>20 March, 2025</p>
                                    </span>
                                    <div class="j_s_c_j_f">
                                        <p>Full Time</p>
                                    </div>
                                </div>
                                <div class="career_button">
                                    <button><a href="#enquiry_form_id">Apply</a></button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="job_search_form">
            <div class="container">
                <h2 class="text-center">Join <b>Our Team</b></h2>
                <p class="text-center">Ready to elevate your career? Explore our current job openings and discover the
                    opportunities that await you at ABC. Whether you are an engineer, technician, sales professional, or
                    part of our support staff, there is a place for you here. We are looking for passionate individuals
                    who are eager to embark on a journey of innovation and excellence in the world of vertical
                    transportation.</p>

            </div>
        </section>

        <section class="enquiry_form" id="enquiry_form_id">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="enquiry_text">
                            <h2> Upload Your <b> Resume</b></h2>
                            <form id="careerform1" method="post">
                                <div class="row custom-row">
                                    <div class="col-md-4 custom-col ">
                                        <span class="text-input">
                                            <input type="text" class="form-control" placeholder="Name" name="name"
                                                required oninput="this.value = this.value.replace(/[0-9]/g, '')">
                                        </span>

                                    </div>
                                    <div class="col-md-4 custom-col">
                                        <span class="text-input">
                                            <input type="email" class="form-control" placeholder="Email" name="email"
                                                required>
                                        </span>

                                    </div>
                                    <div class="col-md-4 custom-col">
                                        <span class="text-input">
                                            <input type="tel" name="contact" placeholder="Phone number"
                                                class="form-control" pattern="\d{10}" maxlength="10" required
                                                title="please enter a valid 10-digit contact number"
                                                oninput="this.value= this.value.replace(/[^0-9]/g, '');">
                                        </span>

                                    </div>
                                    <div class="col-md-4 custom-col">
                                        <span class="text-input">
                                            <select class="form-control option_s" name="position" required>
                                                <option value="" disabled selected>Select a position</option>
                                                <option value="Plant Manager">Plant Manager</option>
                                                <option value="Production Manager">Production Manager</option>
                                                <option value="Quality Control Manager">Quality Control Manager</option>
                                                <option value="Operations Manager">Operations Manager</option>
                                                <option value="Maintenance Manager">Maintenance Manager</option>
                                                <option value="Supply Chain Manager">Supply Chain Manager</option>

                                            </select>
                                        </span>
                                    </div>
                                    <div class="col-md-4 custom-col">
                                        <span class="text-input">
                                            <select class="form-control option_s" name="select_city" required>
                                                <option value="" disabled selected>Select a City</option>
                                                <option value="mumbai">Mumbai</option>
                                                <option value="delhi">Delhi</option>
                                                <option value="bangalore">Bangalore</option>
                                                <option value="chennai">Chennai</option>
                                                <option value="kolkata">Kolkata</option>
                                                <option value="hyderabad">Hyderabad</option>
                                                <option value="pune">Pune</option>
                                                <option value="ahmedabad">Ahmedabad</option>
                                                <option value="jaipur">Jaipur</option>
                                                <option value="lucknow">Lucknow</option>
                                            </select>
                                        </span>
                                    </div>
                                    <div class="col-md-4 custom-col">
                                        <span class="text-input">
                                            <select class="form-control option_s" name="department" required>
                                                <option value="" disabled selected>Department</option>
                                                <option value="Accourits">Accourits </option>
                                                <option value="Administration">Administration </option>
                                                <option value="Design">Design </option>
                                                <option value="Dispatch">Dispatch</option>
                                                <option value="EDP">EDP</option>
                                                <option value="Electronics">Electronics</option>
                                                <option value="Finance & Accounts">Finance & Accounts</option>
                                                <option value="Human Resource">Human Resource</option>
                                                <option value="Industrial">Industrial Engineering</option>
                                                <option value="Installation">Installation</option>
                                                <option value="Maintenance">Maintenance </option>
                                                <option value="Operations">Operations</option>
                                                <option value="Planning">Planning</option>
                                                <option value="Production">Production</option>
                                                <option value="Purchase">Purchase</option>
                                                <option value="Quality">Quality</option>
                                                <option value="Sales">Sales</option>
                                                <option value="Sales & Marketing">Sales & Marketing </option>
                                                <option value="Sales & Operation">Sales & Operation </option>
                                            </select>
                                        </span>
                                    </div>

                                    <div class="col-md-12 custom-full-width1 ">
                                        <span class="text-input"> <textarea class="form-control" rows="4"
                                                placeholder="Message" name="massage" required></textarea></span>

                                    </div>

                                    <div class="col-md-12 custom-full-width1">
                                        <span class="text-input">
                                            <!-- <input type="file" name="pdf" class="form-control" id="pdf" accept="application/pdf"> -->
                                            <input type="file" class="form-control mt-2" name="pdf"
                                                accept="application/pdf" required>
                                        </span>

                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="robotCheck" required>
                                        <label class="form-check-label" for="robotCheck">
                                            I'm not a robot
                                        </label>
                                        <div class="robot_img">
                                            <img src="assets\Images\not_robot_img.png" alt="image">
                                            <p>reCAPTCHA</p>
                                            <p><a href="">Privacy</a> -<a href="">Term</a></p>
                                        </div>
                                    </div>

                                </div>

                                <div class="footer_button m_left">
                                    <button>Submit</button>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Social Presence Section -->

        <section class="social_presence ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center">
                            Social <b>Presence</b>
                        </h2>
                        <div class="social_icons">
                            <div class="icon">
                                <a href="https://www.facebook.com/" class="icon facebook"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <div class="icon_name">
                                    <p>Facebook</p>
                                </div>

                            </div>
                            <div class="icon">
                                <a href="https://x.com/i/flow/login" class="icon twitter"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <div class="icon_name">
                                    <p>Twitter</p>
                                </div>

                            </div>
                            <div class="icon">
                                <a href="https://www.instagram.com/accounts/login/?hl=en" class="icon instagram"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <div class="icon_name">
                                    <p>Instagram</p>
                                </div>

                            </div>
                            <div class="icon">
                                <a href="https://www.linkedin.com/login/in" class="icon linkedin"> <i
                                        class="fa-brands fa-linkedin"></i></a>
                                <div class="icon_name">
                                    <p>Linkedin</p>
                                </div>

                            </div>
                            <div class="icon">
                                <a href="https://www.youtube.com/" class="icon youtube"><i
                                        class="fa-brands fa-youtube"></i></a>
                                <div class="icon_name">
                                    <p>Youtube</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Testimonials Section -->

        <!-- <section class="container-flued testimonia_Section">
            <h2 class="text-center"> <b>Testimonials</b></h2>
            <div class="container testimonial-wrapper">
                <div class="testimonial-carousel " id="carousel">
                    <div class="testimonial-card ">
                        <div class="t_card_part1">
                            <div class="t_card_part_S">
                                <i class="fa-solid fa-quote-left"></i>
                                <p class="text-center">Excellent services and work. Services are very good In Shalby
                                    Hospital Jaipur by ECE Elevators team and thanks for full support.
                                </p>

                            </div>
                        </div>
                        <div class="t_card_img">
                            <img src="assets\Images\testimonial_user_img.png" alt="img">
                        </div>
                        <div class="t_card_part3">
                            <h5>Mr. Deepak,</h5>
                            <p>Owner, JKJ Jewellers</p>
                        </div>

                    </div>
                    <div class="testimonial-card">
                        <div class="t_card_part1">
                            <div class="t_card_part_S">
                                <i class="fa-solid fa-quote-left"></i>
                                <p class="text-center">We have been associated with ECE for last 3 years and our
                                    experience has been great. All the elevators are equipped with smart features to
                                    tackle any problem.
                                </p>

                            </div>
                        </div>
                        <div class="t_card_img">
                            <img src="assets\Images\testimonial_user_img.png" alt="img">
                        </div>
                        <div class="t_card_part3">
                            <h5>Mr. Rajendra Sharma,</h5>
                            <p>Owner, JKJ Jewellers</p>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="t_card_part1">
                            <div class="t_card_part_S">
                                <i class="fa-solid fa-quote-left"></i>
                                <p class="text-center">Sincere appreciation for your seamless services, accountability,
                                    and dedication. Your remarkable customer service and ability to handle critical
                                    issue has strengthened our relationship. We hope to continue for a longer period of
                                    time
                                </p>

                            </div>
                        </div>
                        <div class="t_card_img">
                            <img src="assets\Images\testimonial_user_img.png" alt="img">
                        </div>
                        <div class="t_card_part3">
                            <h5>Mr. Arjun Rathore,</h5>
                            <p>Owner, JKJ Jewellers</p>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="t_card_part1">
                            <div class="t_card_part_S">
                                <i class="fa-solid fa-quote-left"></i>
                                <p class="text-center">The service provided by ECE team is excellent at our premises JKJ
                                    Jewellers, near Satkar Shopping Center, Malviya Nagar, Jaipur. Appreciate your team
                                    work, thank you.
                                </p>

                            </div>
                        </div>
                        <div class="t_card_img">
                            <img src="assets\Images\testimonial_user_img.png" alt="img">
                        </div>
                        <div class="t_card_part3">
                            <h5>Juhi Rama (Corporate HR & Admin),</h5>
                            <p>Owner, JKJ Jewellers</p>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="t_card_part1">
                            <div class="t_card_part_S">
                                <i class="fa-solid fa-quote-left"></i>
                                <p class="text-center">The service provided by ECE team is excellent at our premises JKJ
                                    Jewellers, near
                                    Satkar Shopping Center, Malviya Nagar, Jaipur. Appreciate your team work, thank you.
                                </p>

                            </div>
                        </div>
                        <div class="t_card_img">
                            <img src="assets\Images\testimonial_user_img.png" alt="">
                        </div>
                        <div class="t_card_part3">
                            <h5>Mr. Deepak,</h5>
                            <p>Owner, JKJ Jewellers</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center testimonial-controls">
                <button onclick="prevSlide()"><i class="fas fa-arrow-left"></i></button>
                <button onclick="nextSlide()"><i class="fas fa-arrow-right"></i></button>
            </div>
        </section> -->

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
        <div class="container-flued footer_last">
            <div class="col-md-12">
                <div class="copy_right text-center">
                    <p>Copyright © 2025 <span>ABC Elevators</span> All rights reserved.</p>
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
        document.getElementById("careerform1").addEventListener("submit", function (event) {
            event.preventDefault();
            let formData = new FormData(this);

            fetch("career_form.php", {
                method: "POST",
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    Swal.fire({
                        icon: data.success ? 'success' : 'error',
                        title: data.success ? 'Success!' : 'Error!',
                        text: data.message,
                    });
                    if (data.success) {
                        document.getElementById("careerform1").reset();
                    }
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Something went wrong. Please try again.',
                    });
                });
        });
    </script>
    <script>
        function filterJobs() {
            // Get the search location input
            const locationInput = document.getElementById("locationInput").value.toLowerCase();

            // Get all job cards
            const jobCards = document.querySelectorAll(".job_s_card");

            // Loop through each job card and check if the location matches
            jobCards.forEach(card => {
                const jobLocation = card.getAttribute("data-location").toLowerCase();

                // If the location matches the input (case-insensitive), show the card, otherwise hide it
                if (jobLocation.includes(locationInput)) {
                    card.style.display = "flex";
                } else {
                    card.style.display = "none";
                }
            });
        }

    </script>

</body>

</html>