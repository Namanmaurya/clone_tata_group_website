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
            margin: 0px 40px;
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

        .fhs_mtzero{
            margin-top: 40px;
        }


        @media(max-width: 769px) {
            .factory_hero_section {
                margin-top: 127px;
            }

            .residential_card_section {
                padding: 40px 0px;
            }

            .resedential_card_title {
                bottom: -50px;
                margin: 0px 20px;
            }

        }

        @media(max-width: 426px) {
            .factory_hero_section {
                margin-top: 92px;
            }

            .resedential_card_title {
                margin: 0px 38px;
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
        <section class="factory_hero_section" id="factory_hero_sec">
            <div class="factory_hero_section_bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="fac_h_sec_text text-center">
                                <h1>
                                    Residential
                                </h1>
                                <div class="hero_sec_link text-center">
                                    <span>
                                        <a href="index.php">Home</a>
                                    </span>
                                    <span>Residential</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="residential_card_section">
            <div class="container">
                <div class="row ">
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\residential_img1.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                AWHO
                            </h4>
                            <H5>
                                JABALPUR
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\residential_img2.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                SHIVAARTH ELANZA
                            </h4>
                            <H5>
                                JABALPUR
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\residential_img3.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                EDEN PARK
                            </h4>
                            <H5>
                                JABALPUR
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\residential_img4.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                VIJAYLAXMI PLATINUM
                            </h4>
                            <H5>
                                JODHPUR
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\residential_img5.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                UNIQUE PRIME
                            </h4>
                            <H5>
                                JAIPUR
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\residential_img6.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                AADESHWAR ROYAL
                            </h4>
                            <H5>
                                PALI
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\residential_img7.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                SAI LIFE STYLE
                            </h4>
                            <H5>
                                BHUBANESWAR
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\residential_img8.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                KOKILA GREEN
                            </h4>
                            <H5>
                                BHUBANESWAR
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\residential_img9.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                KOKILA GARDER
                            </h4>
                            <H5>
                                BHUBANESWAR
                            </H5>
                        </div>

                    </div>

                </div>


            </div>
        </section>


        <!-- factory_hero_sectioin -->
        <section class="factory_hero_section fhs_mtzero" id="factory_hero_section_comercial">
            <div class="factory_hero_section_bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="fac_h_sec_text text-center">
                                <h1>
                                    Commercial
                                </h1>
                                <div class="hero_sec_link text-center">
                                    <span>
                                        <a href="index.php">Home</a>
                                    </span>
                                    <span>Commercial</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="residential_card_section">
            <div class="container">
                <div class="row ">
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\commercial_img1.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                ST. ALOYSIUS COLLEGE
                            </h4>
                            <H5>
                                JABALPUR
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\commercial_img2.jpeg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                ST. ALOYSIUS HR. SEC.
                            </h4>
                            <H5>
                                JABALPUR
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\commercial_img3.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                BAZAR INDIA
                            </h4>
                            <H5>
                                BHUBANESWAR
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\commercial_img4.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                VISHAL MEGA MART
                            </h4>
                            <H5>
                                KOHIMA
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\commercial_img5.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                J.B. LAW COLLEGE
                            </h4>
                            <H5>
                                GUWAHATI
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\commercial_img6.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                WEBEL IT PARK
                            </h4>
                            <H5>
                                DURGAPUR
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\commercial_img7.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                BAZAR INDIA
                            </h4>
                            <H5>
                                GUWAHATI
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\commercial_img8.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                TAMIL NADU HOUSE
                            </h4>
                            <H5>
                                TAMIL NADU
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\commercial_img9.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                C&S ELECTRIC
                            </h4>
                            <H5>
                                GREATER NOIDA
                            </H5>
                        </div>

                    </div>

                </div>


            </div>
        </section>


        <!-- factory_hero_sectioin -->
        <section class="factory_hero_section fhs_mtzero" id="factory_hero_section_hospital">
            <div class="factory_hero_section_bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="fac_h_sec_text text-center">
                                <h1>
                                    Hospital
                                </h1>
                                <div class="hero_sec_link text-center">
                                    <span>
                                        <a href="index.php">Home</a>
                                    </span>
                                    <span>Hospital</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="residential_card_section">
            <div class="container">
                <div class="row ">
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\hospital_p_img1.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                SHALBY HOSPITAL
                            </h4>
                            <H5>
                                JAIPUR
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\hospital_p_img2.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                SHRISTI HOSPITAL
                            </h4>
                            <H5>
                                DIBRUGARH
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\hospital_p_img3.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                SANJIVANI HOSPITAL
                            </h4>
                            <H5>
                                DIBRUGARH
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\hospital_p_img4.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                LNJP HOSPITAL
                            </h4>
                            <H5>
                                DELHI
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\hospital_p_img5.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                SHALBY HOSPITAL
                            </h4>
                            <H5>
                                MOHALI
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\hospital_p_img6.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                SHALBY HOSPITAL
                            </h4>
                            <H5>
                                INDORE
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\hospital_p_img7.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                MILITORY HOSPITAL
                            </h4>
                            <H5>
                                DEHRADUN
                            </H5>
                        </div>

                    </div>


                </div>


            </div>
        </section>

        <!-- factory_hero_sectioin -->
        <section class="factory_hero_section fhs_mtzero" id="factory_hero_section_hotel">
            <div class="factory_hero_section_bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="fac_h_sec_text text-center">
                                <h1>
                                    Hotel
                                </h1>
                                <div class="hero_sec_link text-center">
                                    <span>
                                        <a href="index.php">Home</a>
                                    </span>
                                    <span>Hotel</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="residential_card_section">
            <div class="container">
                <div class="row ">
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                            <img src="assets\Images\hospital_p_img1.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                SHALBY HOTEL
                            </h4>
                            <H5>
                                JAIPUR
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                        <img src="assets\Images\hospital_p_img1.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                SHRISTI HOTEL
                            </h4>
                            <H5>
                                DIBRUGARH
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                        <img src="assets\Images\hospital_p_img1.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                SANJIVANI HOTEL
                            </h4>
                            <H5>
                                DIBRUGARH
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                        <img src="assets\Images\hospital_p_img1.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                LNJP HOTEL
                            </h4>
                            <H5>
                                DELHI
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                        <img src="assets\Images\hospital_p_img1.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                SHALBY HOTEL
                            </h4>
                            <H5>
                                MOHALI
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                        <img src="assets\Images\hospital_p_img1.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                SHALBY HOTEL
                            </h4>
                            <H5>
                                INDORE
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                        <img src="assets\Images\hospital_p_img1.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                MILITORY HOTEL
                            </h4>
                            <H5>
                                DEHRADUN
                            </H5>
                        </div>

                    </div>


                </div>


            </div>
        </section>

        <!-- factory_hero_sectioin -->
        <section class="factory_hero_section fhs_mtzero" id="factory_hero_section_industry">
            <div class="factory_hero_section_bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="fac_h_sec_text text-center">
                                <h1>
                                Industry
                                </h1>
                                <div class="hero_sec_link text-center">
                                    <span>
                                        <a href="index.php">Home</a>
                                    </span>
                                    <span>Industry</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="residential_card_section">
            <div class="container">
                <div class="row ">
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                        <img src="assets\Images\residential_img1.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                SHALBY PVL
                            </h4>
                            <H5>
                                JAIPUR
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                        <img src="assets\Images\residential_img1.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                SHRISTI PVL
                            </h4>
                            <H5>
                                DIBRUGARH
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                        <img src="assets\Images\residential_img1.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                SANJIVANI PVL
                            </h4>
                            <H5>
                                DIBRUGARH
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                        <img src="assets\Images\residential_img1.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                LNJP PVL
                            </h4>
                            <H5>
                                DELHI
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                        <img src="assets\Images\residential_img1.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                SHALBY PVL
                            </h4>
                            <H5>
                                MOHALI
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                        <img src="assets\Images\residential_img1.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                SHALBY PVL
                            </h4>
                            <H5>
                                INDORE
                            </H5>
                        </div>

                    </div>
                    <div class="col-md-4 my-5 ">
                        <div class="resedential_card_img ">
                        <img src="assets\Images\residential_img1.jpg" alt="residential_img" class="img-fluid">

                        </div>
                        <div class="resedential_card_title text-center">
                            <h4>
                                MILITORY PVL
                            </h4>
                            <H5>
                                DEHRADUN
                            </H5>
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

</body>

</html>