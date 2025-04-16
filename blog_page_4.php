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
            height: 60px;
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
            padding: 11px 0px;
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

        

        .blog_cards {
            padding: 30px 0px;
        }

        .card-text {
            font-size: 1rem;
            color: #555;
        }

        .d_e_blog_text h3 {
            font-size: 35px;
        }

        .d_e_blog_img img {
            width: 360px;
            height: auto;
            object-fit: cover;
        }

       
        @media (max-width:1026px) {
            .d_e_blog_text {
                padding: 0px 55px;
            }

        }

        @media (max-width:769px) {
            .factory_hero_section {
                margin-top: 127px;
            }

            .d_e_blog_text {
                padding: 20px 0px;
            }

        }

        @media (max-width: 426px) {
            .factory_hero_section {
                margin-top: 92px;
            }
        }

        @media (max-width: 376px) {
            .d_e_blog_img img {
                width: 350px;
            }
        }

        @media (max-width: 321px) {
            .d_e_blog_img img {
                width: 280px;
            }

            .d_e_blog_text h3 {
                font-size: 27px;
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
        <!-- factory_hero_sectioin -->
        <section class="factory_hero_section">
            <div class="factory_hero_section_bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="fac_h_sec_text text-center">
                                <div class="hero_sec_link text-center">
                                    <span>
                                        <a href="blog.php">Blog</a>
                                    </span>
                                    <span>Page 4th</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="d_e_blog">
            <div class="container">
                <div class="blog_cards">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="d_e_blog_img">
                                <img src="assets\Images\blog_card_img4.jpeg" alt="Freight Elevator">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="d_e_blog_text">
                                <h3>ABC Goods / Freight / Cargo Elevators</h3>
                                <h3>Redefining Vertical Mobility for Industrial
                                    Buildings
                                    and Warehouses</h3>
                                <p class="card-date">NOVEMBER 2, 2023</p>
                                <p>
                                    Goods elevators, also known as freight elevators or cargo lifts, are specialized
                                    lifting systems designed specifically for the vertical transportation of goods,
                                    materials, or heavy equipment within buildings. These elevators are commonly used in
                                    factories, warehouses, retail stores, hospitals, and construction sites where the
                                    movement of bulky or heavy items between floors is essential.

                                    Unlike passenger elevators, goods elevators are built with a stronger structure to
                                    handle large loads safely. They often feature reinforced walls, heavy-duty doors,
                                    and non-slip floors. The materials used in their construction are chosen for
                                    durability and the ability to withstand frequent loading and unloading, often with
                                    the help of forklifts, trolleys, or pallet jacks.

                                    Goods elevators come in various sizes and weight capacities, ranging from small
                                    lifts for light materials to large-scale systems capable of moving several tons.
                                    They can be manually or automatically operated and are often fitted with safety
                                    mechanisms such as emergency stop buttons, overload indicators, and interlocking
                                    doors to prevent accidents during use.

                                    One of the key benefits of using goods elevators is improved operational efficiency.
                                    Instead of manually carrying items up and down stairs or using less reliable means,
                                    these elevators streamline the movement process, saving time, reducing labor costs,
                                    and minimizing the risk of injury.

                                    Additionally, goods elevators help protect fragile or valuable items from damage
                                    during transport. In buildings with high storage demands or multiple levels, they
                                    become an indispensable part of the infrastructure.

                                    In summary, goods elevators are a crucial element in the logistics and operational
                                    systems of many businesses. They contribute to safer, faster, and more efficient
                                    handling of materials, supporting productivity and ensuring that heavy goods are
                                    transported smoothly within a facility.
                                </p>

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