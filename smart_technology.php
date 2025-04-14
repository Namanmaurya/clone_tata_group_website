
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
        .s_t_about_section {
            padding: 50px 0px 0px 0px;
        }

        .s_t_about_section h3 {
            color: red;
            font-size: 18px;
        }

        .s_t_about_section h2 {
            color: black;
        }

        .ttm-horizontal_sep {
            border-top: 1px solid #ebebeb;
            display: block;
            position: relative;
            margin: 30px 0px;
        }

        .tic_text {
            margin: 20px 0px;
            display: flex;
            justify-content: center;
        }

        .tic_text .tic_icon {
            margin: 0px 30px;

        }

        .tic_text .tic_icon i {
            color: black;
            background-color: red;
            border-radius: 50%;
            padding: 10px 10px;
        }

        .tic_text .tic_t {
            max-width: 200px;
        }

        .stm_video {
            padding: 70px 0px;
        }

        .stm_video h2 {
            color: black;
            margin-bottom: 20px;
        }


        /* .services_st_cards {
            padding: 60px 0px;
        } */

        .st_card {
            height: 200px;
            padding: 0 15px;
            filter: drop-shadow(0px 0px 10px rgba(0, 0, 0, 0.08));
            background-color: #fff;
            padding: 30px 30px 30px;
            position: relative;
            text-align: left;
            margin: 20px 0px;
        }

        .st_card:hover {
            border-bottom: 4px solid red;
        }

        .st_card_icon {
            margin: 5px 0px;
        }

        /* .st_card::before {
            top: 100%;
            left: 50%;
            border: solid transparent;
            content: "";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-color: rgba(194, 225, 245, 0);
            border-top-color: #fff;
            border-width: 16px;
            left: 25px;
        } */

        /* .ttm-num {
            position: absolute;
            top: 110%;
            height: 38px;
            width: 38px;
            border-radius: 50%;
            background-color: #fff;
            line-height: 39px;
            text-align: center;
            left: 22px;
            font-size: 14px;
            font-weight: 500;
            color: #222d35;
            font-family: inherit;
            -webkit-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        } */

        /* .ttm-num:before {
            counter-increment: featuredbox-number;
            content: counter(featuredbox-number, decimal-leading-zero) " ";
        } */

        /* Default styles */
        .responsive-iframe {
            width: 100%;
            max-width: 560px;
            height: 315px;
        }

        /* Small devices (up to 576px) */
        @media (max-width: 576px) {
            .responsive-iframe {
                width: 100%;
                height: 250px;
            }
        }

        /* Medium devices (up to 768px) */
        @media (max-width: 768px) {
            .responsive-iframe {
                width: 100%;
                height: 280px;
            }
        }

        /* Large devices (up to 992px) */
        @media (max-width: 992px) {
            .responsive-iframe {
                width: 100%;
                height: 300px;
            }
        }

        /* Extra Large devices (up to 1200px) */
        @media (max-width: 1200px) {
            .responsive-iframe {
                width: 100%;
                height: 315px;
            }
        }


        @media (max-width: 426px) {
            .s_t_about_section {
                padding: 0px 0px;
            }

            .s_t_about_section h2 {
                font-size: 40px;
                line-height: 50px;
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
                    <img src="assets/Images/slider1.jpg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="assets/Images/slider2.jpg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="assets/Images/slider3.jpg" class="d-block w-100" alt="Slide 3">
                </div>
                <div class="carousel-item">
                    <img src="assets/Images/slider4.jpg" class="d-block w-100" alt="Slide 3">
                </div>
                <div class="carousel-item">
                    <img src="assets/Images/slider5.jpg" class="d-block w-100" alt="Slide 3">
                </div>
                <div class="carousel-item">
                    <img src="assets/Images/slider6.jpg" class="d-block w-100" alt="Slide 3">
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

        <section class="s_t_about_section" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3>About Us</h3>
                        <h2>Smart Elevator.<b> Smart Technology</b></h2>
                        <p>Welcome to the world of <b>smart elevators</b> based on <b>smart technology</b> that
                            originated in India. The focal point of all technological development at <b>ABC
                                Elevators</b> is the end-user. Safety, Reliability & Aesthetics are the foundations on
                            which our elevators are built. As part of Birla Group, we take immense pride in being the
                            most trusted and the <b>best brand of elevators</b> catering to requirements of all lifts
                            ranging from
                            <b>Hospital Elevators, Residential Elevators, Commercial & Industrial Elevators, Office
                                Elevators, and Automobile Elevators.</b> From low rise to high rise lifts requirements,
                            we are best suited to deliver customized and tailormade elevator solutions.
                        </p>
                        <p>Our <b>SMART ELEVATORS</b> have advanced SMART self-diagnostic capability and it communicates
                            on a real-time basis with the cloud for seamless remote monitoring and thus we get to know
                            online the health of your elevator. The <b>SMART ELEVATORS</b> also enables touchless
                            operations and a smart controller. You can also monitor all your elevators from a
                            centralized location with our group elevator monitoring system and the users no longer need
                            to press the button, they can use lifts through their phone – a truly <b>touchless
                                operation.</b></p>
                        <p>With our Pan India Presence, <b>world-class service</b> is part of our standard offerings.
                            When you choose <b>ABC Lifts</b> , you choose a smart elevator experience made for India and
                            in India. The <b>Products and Technology</b> based on Smart Features ABC Elevators is rated
                            among the <b> top 10 best elevator companies in India.</b></p>


                    </div>
                </div>
            </div>
            <div class="ttm-horizontal_sep">
            </div>
        </section>

        <section class="enquiry_form">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="enquiry_text">
                            <h2> Enquiry <b>Form</b></h2>
                            <p>For fresh enquiry kindly contact below</p>

                            <form id="enquiryForm" method="POST">
                                <div class="row custom-row">
                                    <div class="col-md-4 custom-col ">
                                        <span class="text-input">
                                            <input type="text" class="form-control" placeholder="Name" name="name" required oninput="this.value = this.value.replace(/[0-9]/g, '')">
                                        </span>

                                    </div>
                                    <div class="col-md-4 custom-col">
                                        <span class="text-input">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required>
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
                                    <!-- <div class="col-md-4 custom-col">
                                        <span class="text-input">
                                            <input type="text" class="form-control" name="companyname" 
                                                placeholder="Company Name (Optional)">

                                        </span>

                                    </div> -->
                                    <!-- <div class="col-md-4 custom-col">
                                        <span class="text-input"> <input type="text" name="subject" class="form-control"
                                                placeholder="Subject" required></span>

                                    </div> -->
                                    <!-- <div class="col-md-4 custom-col">
                                        <span class="text-input"><input type="text" name="street_address" class="form-control"
                                                placeholder="Street Address" required></span>

                                    </div> -->
                                    <!-- <div class="col-md-4 custom-col">
                                        <span class="text-input"> <input type="text" name="city"  class="form-control"
                                                placeholder="City" required></span>

                                    </div> -->
                                    <!-- <div class="col-md-4 custom-col">
                                        <span class="text-input"><input type="text"  name="state" class="form-control"
                                                placeholder="State" required></span>

                                    </div> -->
                                    <!-- <div class="col-md-4 custom-col">
                                        <span class="text-input">
                                            <input type="tel" name="zip" placeholder="Zip" class="form-control"
                                                pattern="[0-9]{6}" maxlength="6" required
                                                title="Please enter a valid 6-digit number"
                                                oninput="this.value = this.value.replace(/\D/g, '').slice(0,6);">
                                        </span>

                                    </div> -->
                                    <div class="col-md-12 custom-full-width ">
                                        <span class="text-input"> <textarea class="form-control" rows="4" name="massage"
                                                placeholder="Message" required></textarea></span>

                                    </div>

                                    <div class="form-check ">
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

                                <div class="footer_button btn_m">
                                    <button type="submit">SUBMIT</button>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="s_t_about_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3>ABC Advantage</h3>
                        <h2>Reason to<b> Choose us</b></h2>
                        <p>We’ve been established as a family furnishers business for over 60 years. With a beautiful
                            showroom in Kolkata, out friendly staff pride themselves in providing a high level of
                            service.</p>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="tic_text">
                                    <div class="tic_icon">
                                        <i class="fa-solid fa-rotate-right"></i>
                                    </div>
                                    <div class="tic_t">
                                        <h5>Touchless QR Based Operations</h5>
                                    </div>
                                </div>
                                <div class="tic_text">
                                    <div class="tic_icon">
                                        <i class="fa-solid fa-rotate-right"></i>
                                    </div>
                                    <div class="tic_t">
                                        <h5>Group Elevator Monitoring</h5>
                                    </div>
                                </div>
                                <div class="tic_text">
                                    <div class="tic_icon">
                                        <i class="fa-solid fa-rotate-right"></i>
                                    </div>
                                    <div class="tic_t">
                                        <h5>Improved Elevator Uptime</h5>
                                    </div>
                                </div>
                                <div class="tic_text">
                                    <div class="tic_icon">
                                        <i class="fa-solid fa-rotate-right"></i>
                                    </div>
                                    <div class="tic_t">
                                        <h5>Weak Battery Alarm</h5>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-6">
                                <div class="tic_text">
                                    <div class="tic_icon">
                                        <i class="fa-solid fa-rotate-right"></i>
                                    </div>
                                    <div class="tic_t">
                                        <h5>Enhanced Saftey and Peace of Mind</h5>
                                    </div>
                                </div>
                                <div class="tic_text">
                                    <div class="tic_icon">
                                        <i class="fa-solid fa-rotate-right"></i>
                                    </div>
                                    <div class="tic_t">
                                        <h5>Smart Elevator Operations</h5>
                                    </div>
                                </div>
                                <div class="tic_text">
                                    <div class="tic_icon">
                                        <i class="fa-solid fa-rotate-right"></i>
                                    </div>
                                    <div class="tic_t">
                                        <h5>Improved Response Time</h5>
                                    </div>
                                </div>
                                <div class="tic_text">
                                    <div class="tic_icon">
                                        <i class="fa-solid fa-rotate-right"></i>
                                    </div>
                                    <div class="tic_t">
                                        <h5>PAN India Presence</h5>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Card_slider_section -->
        <!-- <section class="slider">
            <div class="slider-container">
                <h2 class="text-center">What's <b>New?</b></h2>
                <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
                <div class="slides">
                    <div class="slide">
                        <div class="slide_card">
                            <img src="assets\Images\whats_new_img1.jpg" alt="Slide 1" class="card-img-top">

                            <div class="card-body">
                                <div class="date_card">
                                    <p>25 July</p>
                                </div>
                                <p>CE Elevators proudly cheers for Indian squad as they head to the Paris Olympics
                                    2024....</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide_card">
                            <img src="assets\Images\whats_new_img1.jpg" alt="Slide 1" class="card-img-top">

                            <div class="card-body">
                                <div class="date_card">
                                    <p>25 July</p>
                                </div>
                                <p>CE Elevators proudly cheers for Indian squad as they head to the Paris Olympics
                                    2024....</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="slide_card">
                            <img src="assets\Images\whats_new_img1.jpg" alt="Slide 1" class="card-img-top">

                            <div class="card-body">
                                <div class="date_card">
                                    <p>25 July</p>
                                </div>
                                <p>CE Elevators proudly cheers for Indian squad as they head to the Paris Olympics
                                    2024....</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>


                    <div class="slide">
                        <div class="slide_card">
                            <img src="assets\Images\whats_new_img1.jpg" alt="Slide 1" class="card-img-top">

                            <div class="card-body">
                                <div class="date_card">
                                    <p>25 July</p>
                                </div>
                                <p>CE Elevators proudly cheers for Indian squad as they head to the Paris Olympics
                                    2024....</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>


                    <div class="slide">
                        <div class="slide_card">
                            <img src="assets\Images\whats_new_img1.jpg" alt="Slide 1" class="card-img-top">

                            <div class="card-body">
                                <div class="date_card">
                                    <p>25 July</p>
                                </div>
                                <p>CE Elevators proudly cheers for Indian squad as they head to the Paris Olympics
                                    2024....</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>


                    <div class="slide">
                        <div class="slide_card">
                            <img src="assets\Images\whats_new_img1.jpg" alt="Slide 1" class="card-img-top">

                            <div class="card-body">
                                <div class="date_card">
                                    <p>25 July</p>
                                </div>
                                <p>CE Elevators proudly cheers for Indian squad as they head to the Paris Olympics
                                    2024....</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>


                    <div class="slide">
                        <div class="slide_card">
                            <img src="assets\Images\whats_new_img1.jpg" alt="Slide 1" class="card-img-top">

                            <div class="card-body">
                                <div class="date_card">
                                    <p>25 July</p>
                                </div>
                                <p>CE Elevators proudly cheers for Indian squad as they head to the Paris Olympics
                                    2024....</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>


                    <div class="slide">
                        <div class="slide_card">
                            <img src="assets\Images\whats_new_img1.jpg" alt="Slide 1" class="card-img-top">

                            <div class="card-body">
                                <div class="date_card">
                                    <p>25 July</p>
                                </div>
                                <p>CE Elevators proudly cheers for Indian squad as they head to the Paris Olympics
                                    2024....</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="next" onclick="moveSlide(1)">&#10095;</button>
            </div>
        </section> -->

        <section class="stm_video">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>ABC Elevators -<b>A Journey Through Time</b> </h2>
                        <iframe class="responsive-iframe"
                            src="https://www.youtube.com/embed/tyk0pdnzzwc?si=hIlA6QRS--_HFWxU"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>

                    </div>
                </div>
            </div>
        </section>

        <section class="services_st_cards">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ser_heading text-center">
                            <h2>Our <b>Services</b></h2>
                        </div>
                        <div class="ser_pra_text text-center">
                            <p>No matter what the requirement ABC Elevators caters to all segments and are designed with
                                specific parameters needed by the industry. Old and restored buildings to the brand new
                                technologically advanced structures. ABC Elevators covers the entire spectrum and
                                provides thoughtfully designed and consumer friendly solutions.</p>
                        </div>

                        <div class="ser_st_cards">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="st_card">
                                        <i class="ttm-num ti-info"></i>
                                        <div class="st_card_icon">
                                            <img src="assets\Images\corporation_sev_img.png" alt="icon"
                                                class="img-flued">
                                        </div>
                                        <h5>Office/Commercial Elevators</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="st_card">
                                        <i class="ttm-num ti-info"></i>
                                        <div class="st_card_icon">
                                            <img src="assets\Images\hotel_sev_img.png" alt="icon" class="img-flued">
                                        </div>
                                        <h5>Residential/Home Elevators</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="st_card">
                                        <i class="ttm-num ti-info"></i>
                                        <div class="st_card_icon">
                                            <img src="assets\Images\hospital_sev_img.png" alt="icon" class="img-flued">
                                        </div>
                                        <h5>Hospital Elevators</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="st_card">
                                        <i class="ttm-num ti-info"></i>
                                        <div class="st_card_icon">
                                            <img src="assets\Images\hotel_sev_img.png" alt="icon" class="img-flued">
                                        </div>
                                        <h5>Hotel Elevator</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="st_card">
                                        <i class="ttm-num ti-info"></i>
                                        <div class="st_card_icon">
                                            <img src="assets\Images\factory_ser_img.png" alt="icon" class="img-flued">
                                        </div>
                                        <h5>Industrial Elevators</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="st_card">
                                        <i class="ttm-num ti-info"></i>
                                        <div class="st_card_icon">
                                            <img src="assets\Images\lift_ser_img.png" alt="icon" class="img-flued">
                                        </div>
                                        <h5>Escalators</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="st_card">
                                        <i class="ttm-num ti-info"></i>
                                        <div class="st_card_icon">
                                            <img src="assets\Images\car-dealer_ser_img.png" alt="icon"
                                                class="img-flued">
                                        </div>
                                        <h5>Automobile Elevators</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Our Clients Section -->

        <section class=" our_clients_section container-flued my-5 text-center">
            <h2>Our <b>Clients</b></h2>
            <div class="client-container">
                <div class="client-slide" id="clientSlide">
                    <div class="client"><img src="assets\Images\NTPC.png" alt="Client 1">
                        <div class="client-name">
                            <p>NTPC</p>
                        </div>
                    </div>
                    <div class="client"><img src="assets\Images\chettinad.png" alt="Client 2">
                        <div class="client-name">
                            <p>Chettinad</p>
                        </div>
                    </div>
                    <div class="client"><img src="assets\Images\ctrls.png" alt="Client 3">
                        <div class="client-name">
                            <p>ctrls</p>
                        </div>
                    </div>
                    <div class="client"><img src="assets\Images\HB.png" alt="Client 4">
                        <div class="client-name">
                            <p>HB</p>
                        </div>
                    </div>
                    <div class="client"><img src="assets\Images\oxirich.png" alt="Client 5">
                        <div class="client-name">
                            <p>Oxirich</p>
                        </div>
                    </div>
                    <div class="client"><img src="assets\Images\SAIL.png" alt="Client 6">
                        <div class="client-name">
                            <p>Sail</p>
                        </div>
                    </div>
                    <div class="client"><img src="assets\Images\renaissance.png" alt="Client 7">
                        <div class="client-name">
                            <p>Remaissance</p>
                        </div>
                    </div>
                    <div class="client"><img src="assets\Images\tata.png" alt="Client 8">
                        <div class="client-name">
                            <p>Tata</p>
                        </div>
                    </div>
                    <div class="client"><img src="assets\Images\ultratech.png" alt="Client 8">
                        <div class="client-name">
                            <p>Ultratech</p>
                        </div>
                    </div>
                    <div class="client"><img src="assets\Images\unitech.png" alt="Client 8">
                        <div class="client-name">
                            <p>Unitech</p>
                        </div>
                    </div>
                    <div class="client"><img src="assets\Images\vatika.png" alt="Client 8">
                        <div class="client-name">
                            <p>Vatika</p>
                        </div>
                    </div>
                    <div class="client"><img src="assets\Images\NTPC.png" alt="Client 1">
                        <div class="client-name">
                            <p>NTPC</p>
                        </div>
                    </div>
                    <div class="client"><img src="assets\Images\chettinad.png" alt="Client 2">
                        <div class="client-name">
                            <p>Chettinad</p>
                        </div>
                    </div>
                    <div class="client"><img src="assets\Images\ctrls.png" alt="Client 3">
                        <div class="client-name">
                            <p>ctrls</p>
                        </div>
                    </div>
                    <div class="client"><img src="assets\Images\HB.png" alt="Client 4">
                        <div class="client-name">
                            <p>HB</p>
                        </div>
                    </div>
                    <div class="client"><img src="assets\Images\oxirich.png" alt="Client 5">
                        <div class="client-name">
                            <p>Oxirich</p>
                        </div>
                    </div>
                    <div class="client"><img src="assets\Images\SAIL.png" alt="Client 6">
                        <div class="client-name">
                            <p>Sail</p>
                        </div>
                    </div>
                    <div class="client"><img src="assets\Images\renaissance.png" alt="Client 7">
                        <div class="client-name">
                            <p>Renaissance</p>
                        </div>
                    </div>
                    <div class="client"><img src="assets\Images\tata.png" alt="Client 8">
                        <div class="client-name">
                            <p>Tata</p>
                        </div>
                    </div>
                    <div class="client"><img src="assets\Images\ultratech.png" alt="Client 8">
                        <div class="client-name">
                            <p>Ultratech</p>
                        </div>
                    </div>
                    <div class="client"><img src="assets\Images\unitech.png" alt="Client 8">
                        <div class="client-name">
                            <p>Unitech</p>
                        </div>
                    </div>
                    <div class="client"><img src="assets\Images\vatika.png" alt="Client 8">
                        <div class="client-name">
                            <p>Vatika</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-danger mt-3" onclick="prevSlide()"><i class="fas fa-arrow-left"></i> </button>
            <button class="btn btn-danger mt-3" onclick="nextSlide()"> <i class="fas fa-arrow-right"></i></button>
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
        document.getElementById("enquiryForm").addEventListener("submit", function(event) {
            event.preventDefault(); 
            let formData = new FormData(this);

            fetch("pro_enquiry_form.php", {
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
                    document.getElementById("enquiryForm").reset();
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
</body>

</html>