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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <!-- Fullscreen Model Section -->
    <div class="model" id="model">
        <div class="close-btn" onclick="closeModel()"><i class="fa-solid fa-xmark"></i></div>

        <div class="row">
            <div class="col-md-8">
                <div class="card-body">
                    <h3>Get a Free Consultation</h3>
                    <p>
                        Our expert evaluates your space, understands your requirements, and offers personalized
                        recommendations.
                    </p>
                    <form id="contactForm" method="post">
                        <div class="form-group">
                            <input type="text" class="styled-input" id="name" name="name" placeholder="Name" required
                                oninput="this.value = this.value.replace(/[0-9]/g, '')">
                        </div>
                        <div class="form-group">
                            <input type="email" class="styled-input" id="email" name="email" placeholder="Email"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="styled-input" id="phone" name="contact" placeholder="Phone number"
                                class="form-control" pattern="\d{10}" maxlength="10" required
                                title="please enter a valid 10-digit contact number"
                                oninput="this.value= this.value.replace(/[^0-9]/g, '');">
                        </div>
                        <div class="form-group">
                            <select class="styled-input" id="city" name="city" required>
                                <option value="">Please select location</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Bengaluru">Bengaluru</option>
                                <option value="Kolkata">Kolkata</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Pune">Pune</option>
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Jaipur">Jaipur</option>
                                <option value="Chandigarh">Chandigarh</option>
                            </select>
                        </div>
                        <button type="submit" class="button">SUBMIT NOW</button>
                    </form>

                    <div id="formMessage" class="text-center text-danger mt-3"></div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="modelimg">
                    <img src="assets\Images\model_img.jpg" alt="model_img" class="img-fluid">
                </div>
            </div>
        </div>

    </div>


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
                    <img src="assets/Images/slider1.jpg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="assets/Images/slider2.jpg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="assets/Images/slider3.jpg" class="d-block w-100" alt="Slide 3">
                </div>
                <div class="carousel-item">
                    <img src="assets/Images/slider4.jpg" class="d-block w-100" alt="Slide 4">
                </div>
                <div class="carousel-item">
                    <img src="assets/Images/slider5.jpg" class="d-block w-100" alt="Slide 5">
                </div>
                <div class="carousel-item">
                    <img src="assets/Images/slider6.jpg" class="d-block w-100" alt="Slide 6">
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

        <!-- hero section -->
        <section class="herosection">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="headingwbg">
                            <h1 class="text-center">SMART Elevators - <b>SMART Technology</b></h1>
                        </div>


                    </div>
                </div>
                <div class="service_img">
                    <img src="assets\Images\service-shape1.png" alt="Service image">
                </div>
            </div>
        </section>


        <!-- card section -->
        <section class="card_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="p_text text-center">The Internet of Things (IoT) and Artificial Intelligence (AI)
                            integrated with a Cloud Server enable real-time communication, health monitoring, and SMART
                            diagnostics. ABC Elevators is the FIRST in the country to offer this advanced capability as
                            a standard feature in our SMART Elevators.</p>
                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="card">
                                    <h4>Redefining Elevator Management</h4>
                                    <ul>
                                        <li>Group Elevator Management System (GEM)</li>
                                        <li>Advanced Analytics by (Artificial Intelligence) AI and Remote Diagnostic.
                                        </li>
                                        <li>Web based Elevator View Intelligence</li>
                                        <li>Elevator Behavioural Insights</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-md-4 ">
                                <div class="card">
                                    <h4>Digital Elevator Access & Usage</h4>
                                    <ul>
                                        <li>Touchless QR based operations</li>
                                        <li>Improved Elevator Uptime</li>
                                        <li>Improved Response Times</li>
                                        <li>Enhanced Safety and Peace of mind</li>
                                        <li>Total Transparency in Elevator Operation</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 gap-4">
                                <div class="card">
                                    <h4>Smart Customer Interface</h4>
                                    <ul>
                                        <li>Improved Elevator Uptime Availability</li>
                                        <li>Improved Facility Management.</li>
                                        <li>Real Time Notifications and Error Logs: with GEM contracts</li>
                                        <li>Total Transparency in Elevator Operation and Client Interactions.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </section>


        <!-- Video_Section -->
        <section class="smart-elevator">
            <div class="container">
                <h2>SMART <strong>Elevators</strong> at work</h2>

                <div class="video-container">
                    <video controls muted autoplay loop>
                        <source src="./assets/video/aa.mp4" type="video/mp4">

                    </video>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>
                                ABC <b>Advantage</b>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a href="smart_technology.php#carouselExample">
                            <div class="sub_card">
                                <h3>
                                    Advance SMART Digital Technology
                                </h3>
                            </div>
                        </a>

                    </div>
                    <div class="col-md-4">
                        <a href="branches.php">
                            <div class="sub_card">
                                <h3>
                                    Pan India Presence
                                </h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="company_overview.php">
                            <div class="sub_card">
                                <h3>
                                    People, Process and Culture
                                </h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="company_overview.php">
                            <div class="sub_card">
                                <h3>
                                    Enhanced Safety and Peace of Mind
                                </h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="company_overview.php">
                            <div class="sub_card">
                                <h3>
                                    Customer Centric Approach
                                </h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="company_overview.php">
                            <div class="sub_card">
                                <h3>
                                    Make In India Built for Sustainability
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Preseident Section -->
        <section class="president">
            <div class="container">
                <div class="president_card">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="president_card_img ">
                                <img src="assets\Images\manish_sikka.jpg" alt="img" class="img-fluid">
                                <a href="https://www.youtube.com/@eceelevators1" target="_black">
                                    <div class="play-button">
                                        <i class="fa fa-play"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="president_card_text">
                                <h2>Aman Sikka </h2>
                                <h4> President - ABC Elevator</h4>
                                <p>Mr. Aman Sikka, President - Elevator Division, ABC Industries Ltd, (A ABC Group
                                    Co.) shares his views and plans for the future in its 75th year of operations.
                                    Further more he also discusses plans to step up quality, technology upgradation and
                                    innovation and deliver world class products. </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Key_Variable_section -->
        <section class="key_variable">
            <div class="container">
                <h2 class="text-center">Key <b> Verticals</b></h2>
                <p class="text-center">ABC Elevators serve all segments, with designs tailored to specific requirements.
                    Whether for old and restored buildings or cutting-edge high-rise structures, our solutions are
                    meticulously crafted for efficiency, innovation, and user-friendly operation.</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card_w_i">
                            <div class="icon">

                            </div>
                            <h5>
                                Office/Commercial <br> Elevators
                            </h5>
                            <p>Development of a full cycle of project documentation on outline sketch design.</p>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card_w_i">
                            <div class="icon1">

                            </div>
                            <h5>
                                Residential / Home <br> Elevators
                            </h5>
                            <p>Convenience at your doorstep.</p>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card_w_i">
                            <div class="icon2">

                            </div>
                            <h5>
                                Hospitel Elevators
                            </h5>
                            <p>Development of a full cycle of project documentation on outline sketch design..</p>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card_w_i">
                            <div class="icon">

                            </div>
                            <h5>
                                Office/Commercial <br> Elevators
                            </h5>
                            <p>Development of a full cycle of project documentation on outline sketch design..</p>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card_w_i">
                            <div class="icon1">

                            </div>
                            <h5>
                                Residential / Home <br> Elevators
                            </h5>
                            <p>Convenience at your doorstep.</p>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card_w_i">
                            <div class="icon2">

                            </div>
                            <h5>
                                Hospitel Elevators
                            </h5>
                            <p>Development of a full cycle of project documentation on outline sketch design..</p>

                        </div>
                    </div>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">
                        <div class="card_w_i">
                            <div class="icon1">

                            </div>
                            <h5>
                                Residential / Home <br> Elevators
                            </h5>
                            <p>Convenience at your doorstep.</p>

                        </div>
                    </div>
                    <div class="col-md-4">

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

        <section class="container-flued testimonia_Section">
            <h2 class="text-center"> <b>Testimonials</b></h2>
            <div class="container testimonial-wrapper">
                <div class="testimonial-carousel " id="carousel">
                    <div class="testimonial-card ">
                        <div class="t_card_part1">
                            <div class="t_card_part_S">
                                <i class="fa-solid fa-quote-left"></i>
                                <p class="text-center">Excellent services and work. Services are very good In Shalby
                                    Hospital Jaipur by ABC Elevators team and thanks for full support.
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
                                <p class="text-center">We have been associated with ABC for last 3 years and our
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
                                <p class="text-center">The service provided by ABC team is excellent at our premises JKJ
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
                                <p class="text-center">The service provided by ABC team is excellent at our premises JKJ
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
        </section>


        <!-- feedback Section -->

        <section class="container-flued feedback_section">
            


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
        document.getElementById("contactForm").addEventListener("submit", function (event) {
            event.preventDefault();
            let formData = new FormData(this);

            fetch("model_form.php", {
                method: "POST",
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Submitted Successfully!',
                            text: 'Your data submitted successfully. We will contact you shortly for the confirmation.',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        });
                        document.getElementById("contactForm").reset();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Submission Failed!',
                            text: data.message || 'Please try again later.',
                            confirmButtonColor: '#d33'
                        });
                    }
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Something went wrong. Please try again.',
                        confirmButtonColor: '#d33'
                    });
                });
        });
    </script>


</body>

</html>