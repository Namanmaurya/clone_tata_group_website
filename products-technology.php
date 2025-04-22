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
        /* body {
            font-family: Arial, sans-serif;
        } */

        /* Hero Section */
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
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .fac_h_sec_text h1 {
            font-weight: 700;
            text-transform: capitalize;
            font-size: 44px;
            line-height: 54px;
            margin-bottom: 0;
            color: #fff;
        }

        .hero_sec_link {
            display: flex;
            justify-content: center;
            padding: 9px 0px;
        }

        .hero_sec_link span {
            color: white;
            font-weight: 400;
            text-transform: capitalize;
            font-size: 15px;
            line-height: 20px;
            position: relative;
        }

        .hero_sec_link span a {
            color: white;
            text-decoration: none;
        }

        .hero_sec_link span:first-child {
            padding-right: 24px;
        }

        .hero_sec_link span:first-child::after {
            position: absolute;
            content: "";
            width: 7px;
            height: 7px;
            border-radius: 50%;
            right: 10px;
            top: 6px;
            background-color: #ed3b3e;
        }

        /* Buttons */
        .btn-container {
            max-width: 300px;
        }

        .custom-btn {
            background: #f8f8f8;
            border: 1px solid #ddd;
            padding: 12px;
            font-size: 18px;
            text-align: left;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: bold;
            transition: 0.3s;
            color: black;
            position: relative;
            margin: 20px 0;
        }

        /* Add a separator line below each button */
        .custom-btn::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: -15px;
            right: -15px;
            height: 1px;
            background: #ddd;
        }

        /* Remove line for last button */
        .custom-btn:last-child::after {
            display: none;
        }

        .custom-btn:hover {
            background: #ececec;
        }

        .custom-btn.active {
            border-left: 4px solid red;
            background: white;
            color: black;
        }

        .content {
            padding: 20px;
            display: none;
        }

        .content.active {
            display: block;
        }

        .content h3 {
            font-family: 'Poppins', sans-serif;
            margin-bottom: 15px;
            font-weight: 500;
            color: #002c42;
            font-size: 27px;
            line-height: 30px;
        }

        .pdf_down_div {
            background-color: #f8f8f8;
            position: relative;
            padding: 20px 30px;
            display: flex;
            margin: 20px 0px;
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

        @media(max-width: 769px) {
            .factory_hero_section {
                margin-top: 125px;
            }

        }

        @media(max-width: 426px){
            .factory_hero_section {
                margin-top: 92px;
            }

            .btn-container {
                margin: 0px 50px;
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

        <!-- Factory Hero Section -->
        <section class="factory_hero_section">
            <div class="factory_hero_section_bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="fac_h_sec_text">
                                <h1 id="heroTitle">Products & Technology</h1>
                                <div class="hero_sec_link">
                                    <span><a href="index.php">Home</a></span>
                                    <span id="heroBreadcrumb">Products & Technology</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container my-4">
            <div class="row">
                <!-- Buttons (Left Side) -->
                <div class="col-md-4">
                    <div class="btn-container">
                        <button class="custom-btn active" onclick="showContent('elita', this)">Elita
                            <span>›</span></button>
                        <button class="custom-btn" onclick="showContent('primus', this)">Primus <span>›</span></button>
                        <button class="custom-btn" onclick="showContent('primus-echo', this)">Primus Echo
                            <span>›</span></button>
                        <button class="custom-btn" onclick="showContent('apto', this)">Apto <span>›</span></button>
                        <button class="custom-btn" onclick="showContent('primus-mini', this)">Primus Mini
                            <span>›</span></button>
                    </div>

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
                </div>

                <!-- Content (Right Side) -->
                <div class="col-md-8">
                    <div id="elita" class="content active">
                        <h3>BUILT FOR SUSTAINABILITY</h3>
                        <p>Elita is the high end solution for the luxurious high-rise buildings today. With its
                            top-notch technology, Elita is tailor made for the sleekest of constructions. Elita is a
                            premium gearless elevator, travels at high speeds, has best in class ride quality, is
                            environment friendly and a perfect fit for modern green buildings.</p>
                        <img src="assets\Images\elita1.jpeg" class="img-fluid" alt="Elita">

                        <h3 class="my-2">SUSTAINABILITY</h3>

                        <p>Green Technology – Elita is inspired by green technology, incorporating latest innovations in
                            design and manufacturing Energy Efficiency: Equipped with latest 5th Generation Permanent
                            Magnet Synchronous Motor, latest generation variable voltage variable frequency integrated
                            drive, LED lighting, which delivers significant energy savings.</p>

                        <h3>LUXURY</h3>
                        <p>Best in class smooth and comfortable ride at high speeds coupled with exquisite interiors,
                            making Elita a premier choice in the luxury segment</p>

                        <h3>BUILD TO SUIT</h3>
                        <p>Elita is for the fashionable, the trendy and we endevour to customise it for your special
                            taste..</p>
                    </div>

                    <div id="primus" class="content">
                        <h3>BUILT FOR EFFICIENCY</h3>
                        <p>The green sustainable elevator with PMSM Gearless machine is here to transform your elevator
                            riding experience. Conceptualized, engineered and developed in India, the Primus in both
                            Machine Room (MR) & Machine Room Less (MRL) version is all set to exhibit the qualities and
                            flexibilities of being truly Indian.</p>
                        <img src="assets\Images\elita1.jpeg" class="img-fluid" alt="Elita">
                        <h3 class="my-2">EFFICIENT</h3>
                        <p>Operational cost benefits achieved through energy savings by using a permanent magnet
                            synchronous motor (PMSM) gearless machine, Integrated VVVF Drive and LED lighting.
                            Sustainability with elimination of polluting lubricant using gearless machine and sealed
                            bearings.Primus brings to fore the best in class life cycle. Space saving by achieving
                            “Indian Standard” specified car area in minimum shaft sizes. Industry best in class.</p>
                        <h3>TRENDY</h3>
                        <p>Primus is trendy, fashionable and modern, it is designed keeping your need in mind. Equipped
                            with amazing features, it offers you all that you would want in your dream building. Framed
                            Glass Doors is a standard option available for buildings upto 15 mtrs rise. Primus is
                            available for customized options too.</p>
                    </div>

                    <div id="primus-echo" class="content">
                        <h3>MODEL OF SMART ENGINEERING</h3>
                        <p>Comfort of gearless technology and developed to fulfill requirement of low rise residential
                            buildings with reduced overhead height. Primus Echo utilizes the space economically and
                            enhances the aesthetic look of the building</p>
                        <img src="assets\Images\elita1.jpeg" class="img-fluid" alt="Elita">

                        <h3 class="my-2">SMART ENGINEERING</h3>
                        <p>With all major components located inside the hoistway, the streamlined installation process
                            of Primus Echo enhances the building construction and aesthetics.</p>
                        <h3>PIONEERING</h3>
                        <p>Use of innovative technologies allowed us to redesign key components into a compact
                            integrated unit powered by PMSM gearless machine. Primus Echo delivers substantially more
                            energy saving than the conventional geared one.</p>
                        <h3>LIFE CYCLE</h3>
                        <p>Primus Echo is a standard product which focusses on bringing in economies of scale for the
                            low rise application and offers industries best in class life cycle</p>
                    </div>

                    <div id="apto" class="content">
                        <h3>BUILT TO BE VERSATILE</h3>
                        <p>Versatile APTO with its new and improved features is a step ahead. Its unique design combines
                            style with comfort and performance, making it a technology that surpasses all expectations.
                            The versatile APTO is a geared machine room elevator made in India exclusively for buildings
                            that need that special style quotient. What’s more, it is a cost effective solution which
                            enhances the look and style of the building. APTO is designed to meet the challenging
                            demands of your building allowing positive integration with your building aesthetics.</p>
                        <img src="assets\Images\elita1.jpeg" class="img-fluid" alt="Elita">
                        <h3 class="my-2">VALUE FOR MONEY</h3>
                        <p>Lowest acquisition cost.
                            Amazingly low cost of ownership Optimized and customized shaft dimensions</p>

                        <h3>ROBUST</h3>
                        <p>Apto is a tried and tested robust solution for low and mid rise segment and comes with
                            features like Variable Voltage Variable Frequency as standard.</p>
                    </div>

                    <div id="primus-mini" class="content">
                        <h3>HOME / VILLA LIFT</h3>
                        <p>The elegant Primus Minisuits the delicate requirement of your Home/ Villa Lift and fits into
                            the space provided, without disturbing the aesthetic look of your home. Primus Mini offers a
                            sustainable, comfortable and tranquil ride.</p>

                        <h3>COMPACT</h3>
                        <p>Reduced overhead and pit in compact hoistway. Use of single phase input power supply.</p>
                        <h3>STYLISH</h3>
                        <p>Pleasing and modern aesthetics with bubble type curved side panels to compliment the
                            architecture of your home. Framed Glass Doors is a standard offering</p>
                        <h3>DESIGN DETAILS</h3>
                        <p>Low Pit, Low Overhead, Single Phase Gearless Machine</p>
                        <img src="assets\Images\elita1.jpeg" class="img-fluid" alt="Elita">
                    </div>
                </div>
            </div>
        </div>


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
        function showContent(id, btn) {
           
            document.querySelectorAll('.content').forEach(content => content.classList.remove('active'));

           
            document.getElementById(id).classList.add('active');

            document.querySelectorAll('.custom-btn').forEach(button => button.classList.remove('active'));

            btn.classList.add('active');

            document.getElementById('heroTitle').textContent = btn.textContent.trim();
            document.getElementById('heroBreadcrumb').textContent = btn.textContent.trim();
        }
    </script>

</body>

</html>