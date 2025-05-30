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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .faq_tittle {
            background-color: #e70a1317;
            display: inline-block;
            padding: 6px 25px;
            color: #e70a13;
            border-radius: 30px;
            text-transform: uppercase;
        }

        .faq_tittle p {
            margin: 0;
        }

        .dot-container {
            display: none;
        }

        .faq-container {
            width: 100%;
            margin: auto;
            border: 1px solid #0c3c60;
            border-radius: 30px;
            font-family: Arial, sans-serif;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            margin: 10px 0px;
        }

        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 18px;
            font-weight: bold;
            color: #0c3c60;
            padding: 15px;
            cursor: pointer;
            transition: border-bottom 0.3s ease-in-out;
        }

        .faq-answer {
            padding: 15px;
            color: #333;
            font-size: 16px;
            display: none;
            /* Initially hidden */
        }

        .faq-icon {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background-color: red;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
        }

        /* Border-bottom when answer is visible */
        .faq-question.active {
            border-bottom: 1px solid #0c3c60;
        }

        .faq_section .faq_text_center {
            padding: 50px 0px;
        }

        .faq_section .faq_text_center .faq_tittle {
            margin-bottom: 10px;
        }

        .faq_section .faq_text_center .faq_sub_tittle h3 {
            font-size: 35px;
            line-height: 45px;
            color: #002c42;

        }

        .faq_section .faq_img_con img {
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
            position: relative;
            width: 450px;
        }

        .faq_section .faq_img_con img:hover {
            transform: scale(1.1);
        }

        .enquiry_form {
            background-color: rgb(239, 240, 240);
        }

        .enquiry_form .enquiry_text {
            background-color: white;
        }

        @media(max-width: 426px) {
            .enquiry_text h2 {
                font-size: 35px;
            }
        }

        /* Form Section */
        .enquiry-section {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 450px;
            width: 100%;
            text-align: center;
        }

        .enquiry-section h2 {
            font-size: 22px;
            color: #333;
            margin-bottom: 20px;
        }

        /* Form Styling */
        .form-row {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-group {
            position: relative;
        }

        .form-input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
        }

        /* Select Styling */
        .form-input select {
            appearance: none;
            background: url('dropdown-icon.png') no-repeat right center;
        }

        /* Checkbox Section */
        .form-check-container {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
            font-size: 14px;
        }

        .form-check-input {
            width: 18px;
            height: 18px;
        }

        /* Captcha Section */
        .recaptcha-box {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 12px;
            color: #666;
        }

        .recaptcha-box img {
            width: 50px;
            height: 50px;
        }

        .recaptcha-box a {
            color: #007bff;
            text-decoration: none;
        }

        .recaptcha-box a:hover {
            text-decoration: underline;
        }

        /* Submit Button */
        .form-button {
            margin-top: 20px;
        }

        .form-button button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .form-button button:hover {
            background-color: #0056b3;
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
                    <img src="assets\Images\faq_hero_img.jpg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="assets\Images\faq_hero_img.jpg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="assets\Images\faq_hero_img.jpg" class="d-block w-100" alt="Slide 3">
                </div>
                <div class="carousel-item">
                    <img src="assets\Images\faq_hero_img.jpg" class="d-block w-100" alt="Slide 3">
                </div>
                <div class="carousel-item">
                    <img src="assets\Images\faq_hero_img.jpg" class="d-block w-100" alt="Slide 3">
                </div>
                <div class="carousel-item">
                    <img src="assets\Images\faq_hero_img.jpg" class="d-block w-100" alt="Slide 3">
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


        <section class="faq_section">
            <div class="container">
                <div class="faq_text_center text-center">
                    <div class="faq_tittle text-center">
                        <p>FAQS</p>
                    </div>


                    <div class="faq_sub_tittle">
                        <h3> Do You Have Any <b>Questions?</b>
                        </h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 my-3">
                        <div class="faq_img_con">
                            <img src="assets\Images\faq-section_img1.jpg" alt="faq_section_img" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6 my-3">
                        <div class="faq-container">
                            <div class="faq-question" onclick="toggleFAQ(0)">
                                <span>Why do elevators need maintenance?</span>
                                <div class="faq-icon">+</div>
                            </div>
                            <div class="faq-answer">
                                Elevators carry passengers as an essential part of the vertical transportation system.
                                The elevator system is made of several moving parts, which are exposed to regular
                                vibration,
                                wear, and tear as it moves up and down. To keep the system in optimal safe condition,
                                periodic maintenance is a must.
                            </div>
                        </div>

                        <div class="faq-container">
                            <div class="faq-question" onclick="toggleFAQ(1)">
                                <span>How often should an elevator be serviced?</span>
                                <div class="faq-icon">+</div>
                            </div>
                            <div class="faq-answer">
                                It depends on usage, but most elevators should be serviced every 1 to 3 months to ensure
                                safety
                                and proper functioning.
                            </div>
                        </div>

                        <div class="faq-container">
                            <div class="faq-question" onclick="toggleFAQ(2)">
                                <span>What are the common issues with elevators?</span>
                                <div class="faq-icon">+</div>
                            </div>
                            <div class="faq-answer">
                                Common issues include door malfunctions, motor failures, misalignment, and electrical
                                problems.
                                Regular maintenance helps prevent these problems.
                            </div>
                        </div>
                        <div class="faq-container">
                            <div class="faq-question" onclick="toggleFAQ(3)">
                                <span>What is a home elevator?</span>
                                <div class="faq-icon">+</div>
                            </div>
                            <div class="faq-answer">

                                A home elevator is installed inside a home & meant to be used by residents of the home.
                                It can serve up to four floors &. carry up to 4 passengers (272 kg). Home elevators come
                                with speeds of 0.20 MPS & 0.40 MPS with a single-phase motor.

                            </div>
                        </div>

                        <div class="faq-container">
                            <div class="faq-question" onclick="toggleFAQ(4)">
                                <span>Do elevators use a lot of electricity?</span>
                                <div class="faq-icon">+</div>
                            </div>
                            <div class="faq-answer">


                                Now a days most of the lift companies are using PM motors with VF drives requiring,
                                substantially less consumption of electricity.


                            </div>
                        </div>

                        <div class="faq-container">
                            <div class="faq-question" onclick="toggleFAQ(5)">
                                <span>What is a home elevator?</span>
                                <div class="faq-icon">+</div>
                            </div>
                            <div class="faq-answer">

                                A home elevator is installed inside a home & meant to be used by residents of the home.
                                It can serve up to four floors &. carry up to 4 passengers (272 kg). Home elevators come
                                with speeds of 0.20 MPS & 0.40 MPS with a single-phase motor.

                            </div>
                        </div>
                        <div class="faq-container">
                            <div class="faq-question" onclick="toggleFAQ(6)">
                                <span>What are the common issues with elevators?</span>
                                <div class="faq-icon">+</div>
                            </div>
                            <div class="faq-answer">
                                Common issues include door malfunctions, motor failures, misalignment, and electrical
                                problems.
                                Regular maintenance helps prevent these problems.
                            </div>
                        </div>


                    </div>

                    <div class="col-md-6 my-3">
                        <div class="faq-container">
                            <div class="faq-question" onclick="toggleFAQ(7)">
                                <span>Why do elevators need maintenance?</span>
                                <div class="faq-icon">+</div>
                            </div>
                            <div class="faq-answer">
                                Elevators carry passengers as an essential part of the vertical transportation system.
                                The elevator system is made of several moving parts, which are exposed to regular
                                vibration,
                                wear, and tear as it moves up and down. To keep the system in optimal safe condition,
                                periodic maintenance is a must.
                            </div>
                        </div>

                        <div class="faq-container">
                            <div class="faq-question" onclick="toggleFAQ(8)">
                                <span>How often should an elevator be serviced?</span>
                                <div class="faq-icon">+</div>
                            </div>
                            <div class="faq-answer">
                                It depends on usage, but most elevators should be serviced every 1 to 3 months to ensure
                                safety
                                and proper functioning.
                            </div>
                        </div>

                        <div class="faq-container">
                            <div class="faq-question" onclick="toggleFAQ(9)">
                                <span>What are the common issues with elevators?</span>
                                <div class="faq-icon">+</div>
                            </div>
                            <div class="faq-answer">
                                Common issues include door malfunctions, motor failures, misalignment, and electrical
                                problems.
                                Regular maintenance helps prevent these problems.
                            </div>
                        </div>
                        <div class="faq-container">
                            <div class="faq-question" onclick="toggleFAQ(10)">
                                <span>What is a home elevator?</span>
                                <div class="faq-icon">+</div>
                            </div>
                            <div class="faq-answer">

                                A home elevator is installed inside a home & meant to be used by residents of the home.
                                It can serve up to four floors &. carry up to 4 passengers (272 kg). Home elevators come
                                with speeds of 0.20 MPS & 0.40 MPS with a single-phase motor.

                            </div>
                        </div>

                        <div class="faq-container">
                            <div class="faq-question" onclick="toggleFAQ(11)">
                                <span>Do elevators use a lot of electricity?</span>
                                <div class="faq-icon">+</div>
                            </div>
                            <div class="faq-answer">


                                Now a days most of the lift companies are using PM motors with VF drives requiring,
                                substantially less consumption of electricity.


                            </div>
                        </div>

                        <div class="faq-container">
                            <div class="faq-question" onclick="toggleFAQ(12)">
                                <span>What is a home elevator?</span>
                                <div class="faq-icon">+</div>
                            </div>
                            <div class="faq-answer">

                                A home elevator is installed inside a home & meant to be used by residents of the home.
                                It can serve up to four floors &. carry up to 4 passengers (272 kg). Home elevators come
                                with speeds of 0.20 MPS & 0.40 MPS with a single-phase motor.

                            </div>
                        </div>
                        <div class="faq-container">
                            <div class="faq-question" onclick="toggleFAQ(13)">
                                <span>What are the common issues with elevators?</span>
                                <div class="faq-icon">+</div>
                            </div>
                            <div class="faq-answer">
                                Common issues include door malfunctions, motor failures, misalignment, and electrical
                                problems.
                                Regular maintenance helps prevent these problems.
                            </div>
                        </div>

                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5 my-3">
                        <div class="faq_img_con">
                            <img src="assets\Images\faq-section_img2.jpg" alt="faq_section_img" class="img-fluid">
                        </div>
                    </div>


                    <div class="col-md-5 my-3">
                        <div class="faq_img_con">
                            <img src="assets\Images\faq-section_img3.jpg" alt="faq_section_img" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-1"></div>

                    <div class="col-md-6 my-3">

                        <div class="faq-container">
                            <div class="faq-question" onclick="toggleFAQ(14)">
                                <span>Why do elevators need maintenance?</span>
                                <div class="faq-icon">+</div>
                            </div>
                            <div class="faq-answer">
                                Elevators carry passengers as an essential part of the vertical transportation system.
                                The elevator system is made of several moving parts, which are exposed to regular
                                vibration,
                                wear, and tear as it moves up and down. To keep the system in optimal safe condition,
                                periodic maintenance is a must.
                            </div>
                        </div>

                        <div class="faq-container">
                            <div class="faq-question" onclick="toggleFAQ(15)">
                                <span>How often should an elevator be serviced?</span>
                                <div class="faq-icon">+</div>
                            </div>
                            <div class="faq-answer">
                                It depends on usage, but most elevators should be serviced every 1 to 3 months to ensure
                                safety
                                and proper functioning.
                            </div>
                        </div>

                        <div class="faq-container">
                            <div class="faq-question" onclick="toggleFAQ(16)">
                                <span>What are the common issues with elevators?</span>
                                <div class="faq-icon">+</div>
                            </div>
                            <div class="faq-answer">
                                Common issues include door malfunctions, motor failures, misalignment, and electrical
                                problems.
                                Regular maintenance helps prevent these problems.
                            </div>
                        </div>
                        <div class="faq-container">
                            <div class="faq-question" onclick="toggleFAQ(17)">
                                <span>What is a home elevator?</span>
                                <div class="faq-icon">+</div>
                            </div>
                            <div class="faq-answer">

                                A home elevator is installed inside a home & meant to be used by residents of the home.
                                It can serve up to four floors &. carry up to 4 passengers (272 kg). Home elevators come
                                with speeds of 0.20 MPS & 0.40 MPS with a single-phase motor.

                            </div>
                        </div>

                        <div class="faq-container">
                            <div class="faq-question" onclick="toggleFAQ(18)">
                                <span>Do elevators use a lot of electricity?</span>
                                <div class="faq-icon">+</div>
                            </div>
                            <div class="faq-answer">


                                Now a days most of the lift companies are using PM motors with VF drives requiring,
                                substantially less consumption of electricity.


                            </div>
                        </div>

                        <div class="faq-container">
                            <div class="faq-question" onclick="toggleFAQ(19)">
                                <span>What is a home elevator?</span>
                                <div class="faq-icon">+</div>
                            </div>
                            <div class="faq-answer">

                                A home elevator is installed inside a home & meant to be used by residents of the home.
                                It can serve up to four floors &. carry up to 4 passengers (272 kg). Home elevators come
                                with speeds of 0.20 MPS & 0.40 MPS with a single-phase motor.

                            </div>
                        </div>
                        <div class="faq-container">
                            <div class="faq-question" onclick="toggleFAQ(20)">
                                <span>What are the common issues with elevators?</span>
                                <div class="faq-icon">+</div>
                            </div>
                            <div class="faq-answer">
                                Common issues include door malfunctions, motor failures, misalignment, and electrical
                                problems.
                                Regular maintenance helps prevent these problems.
                            </div>
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

    <script>
        function toggleFAQ(index) {
            var questions = document.querySelectorAll(".faq-question");
            var answers = document.querySelectorAll(".faq-answer");
            var icons = document.querySelectorAll(".faq-icon");

            // Close all FAQs first
            answers.forEach((answer, i) => {
                if (i !== index) {
                    answer.style.display = "none";
                    icons[i].textContent = "+";
                    questions[i].classList.remove("active");
                }
            });

            // Toggle the clicked FAQ
            if (answers[index].style.display === "none" || answers[index].style.display === "") {
                answers[index].style.display = "block";
                icons[index].textContent = "−";
                questions[index].classList.add("active");
            } else {
                answers[index].style.display = "none";
                icons[index].textContent = "+";
                questions[index].classList.remove("active");
            }
        }

    </script>

    

</body>

</html>