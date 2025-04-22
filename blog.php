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
        /* Blog Section Styling */
        .blog_section {
            margin-top: 100px;
            padding: 50px 0;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .blog_title {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 100%;
            margin-bottom: 20px;
        }

        .blog_title h2 {
            font-family: "Poppins", Sans-serif;
            font-size: 60px;
            font-weight: 500;
            line-height: 1.4em;
            color: #ED3B3E;
        }

        .blog_card {

            transition: transform 0.3s ease-in-out;
        }

        .blog_card:hover {
            transform: translateY(-5px);
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #007bff;
        }

        .card-text {
            font-size: 1rem;
            color: #555;
        }

        .pagination-container {
            text-align: center;
            margin-top: 20px;
        }

        .pagination-container button {
            font-size: 1rem;
            padding: 7px 14px;
            color: black;
        }

        /* Hide inactive pages */
        .page {
            display: none;
        }

        .page.active {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .blog_card {
            display: flex;
            align-items: center;
            border-radius: 10px;
            overflow: hidden;
        }

        .blog_card:hover .card-content a {
            opacity: 1;
        }

        .card-image {
            flex: 0 0 40%;
        }

        .card-image img {
            width: 375px;
            height: auto;
            object-fit: cover;
        }

        .card-content {
            flex: 1;
            padding: 0px 20px;
        }

        .card-content a {
            color: red;
            text-decoration: none;
            opacity: 0;
        }





        .card-category {
            color: #002b5b;
            font-size: 16px;
            font-weight: 600;
        }

        .card-title {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            color: #002c42 !important;
            font-size: 28px;
            line-height: 1.5em;
        }

        .card-date {
            font-style: normal;
            font-size: 14px;
            display: inline-block;
            font-family: "Rubik", sans-serif;
            color: #002c42 !important;
        }

        .card-text {
            font-family: "Rubik", sans-serif;
            font-weight: 400;
            color: #555c63 !important;
            font-size: 18px;
            line-height: 1.5em;
        }

        .read-more {
            display: inline-block;
            padding: 8px 16px;
            font-size: 14px;
            font-weight: bold;
            text-transform: uppercase;
            color: black;
            border: 1px solid black;
            text-decoration: none;
        }



        .read-more:hover {
            text-decoration: none;
            border: none;
            background: red;
            color: white;
        }

        .next_p_btn {
            border: 1px solid black;
        }

        .next_p_btn:hover {
            background-color: black;
            color: white;
        }



        @media (max-width:1025px) {
            .card-content {

                padding: 0px 40px;
            }

            .card-image img {
                width: 330px;
            }
        }

        @media (max-width:769px) {
            .card-content {
                padding: 15px 0px;
            }
        }

        @media (max-width: 426px) {
            .blog_section {
                margin-top: 80px;
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
        <section class="blog_section">
            <div class="container">
                <div class="row">
                    <div class="blog_title">
                        <h2>My Blog</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="page-container">
                            <!-- Page 1: 4 Cards -->
                            <div class="row page active" id="page-1">
                                <div class="col-md-12 mb-3">
                                    <div class="blog_card p-3 d-flex">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card-image">
                                                    <img src="assets\Images\blog_card_img1.jpeg" alt="Freight Elevator">
                                                </div>

                                            </div>
                                            <div class="col-lg-8">
                                                <div class="card-content">

                                                    <h2 class="card-title">ABC Goods / Freight / Cargo
                                                        Elevators-Redefining
                                                        Vertical Mobility for Industrial Buildings
                                                        and Warehouses</h2>
                                                    <p class="card-date">NOVEMBER 2, 2023</p>
                                                    <p class="card-text">
                                                        Goods elevators, also known as freight elevators or cargo lifts,
                                                        play a
                                                        crucial role in various industries, warehouses, and buildings,
                                                        facilitating the efficient movement of...
                                                    </p>

                                                    <a href="blog_page_1.php" class="read_more">
                                                        <h5>Read More..</h5>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <div class="blog_card p-3 d-flex">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card-image">
                                                    <img src="assets\Images\blog_card_img2.jpg" alt="Freight Elevator">
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="card-content">
                                                    <h5 class="card-category">ABC Goods / Freight / Cargo Elevators</h5>
                                                    <h3 class="card-title">Redefining Vertical Mobility for Industrial
                                                        Buildings
                                                        and Warehouses</h3>
                                                    <p class="card-date">NOVEMBER 2, 2023</p>
                                                    <p class="card-text">
                                                        Goods elevators, also known as freight elevators or cargo lifts,
                                                        are designed to transport heavy goods in warehouses, factories,
                                                        and commercial buildings. Built for strength and safety, they
                                                        reduce manual labor, improve efficiency, and prevent damage.
                                                        These elevators are essential for smooth, reliable vertical
                                                        movement of materials in various industries.
                                                    </p>

                                                    <a href="blog_page_2.php" class="read_more">
                                                        <h5>Read More..</h5>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="blog_card p-3 d-flex">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card-image">
                                                    <img src="assets\Images\blog_card_img3.jpeg" alt="Freight Elevator">
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="card-content">
                                                    <h5 class="card-category">ABC Goods / Freight / Cargo Elevators</h5>
                                                    <h3 class="card-title">Redefining Vertical Mobility for Industrial
                                                        Buildings
                                                        and Warehouses</h3>
                                                    <p class="card-date">NOVEMBER 2, 2023</p>
                                                    <p class="card-text">
                                                        Goods elevators, also known as freight elevators or cargo lifts,
                                                        play a
                                                        crucial role in various industries, warehouses, and buildings,
                                                        facilitating the efficient movement of...
                                                    </p>

                                                    <a href="blog_page_3.php" class="read_more">
                                                        <h5>Read More..</h5>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="blog_card p-3 d-flex">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card-image">
                                                    <img src="assets\Images\blog_card_img4.jpeg" alt="Freight Elevator">
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="card-content">
                                                    <h5 class="card-category">ABC Goods / Freight / Cargo Elevators</h5>
                                                    <h3 class="card-title">Redefining Vertical Mobility for Industrial
                                                        Buildings
                                                        and Warehouses</h3>
                                                    <p class="card-date">NOVEMBER 2, 2023</p>
                                                    <p class="card-text">
                                                        Goods elevators, also known as freight elevators or cargo lifts,
                                                        play a
                                                        crucial role in various industries, warehouses, and buildings,
                                                        facilitating the efficient movement of...
                                                    </p>

                                                    <a href="blog_page_4.php" class="read_more">
                                                        <h5>Read More..</h5>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!-- Page 2: 1 Card -->
                            <div class="row page" id="page-2">
                                <div class="col-lg-12 mb-3">
                                    <div class="blog_card p-3 d-flex">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card-image">
                                                    <img src="assets\Images\blog_card_img5.jpeg" alt="Freight Elevator">
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="card-content">
                                                    <h5 class="card-category">ABC Goods / Freight / Cargo Elevators</h5>
                                                    <h3 class="card-title">Redefining Vertical Mobility for Industrial
                                                        Buildings
                                                        and Warehouses</h3>
                                                    <p class="card-date">NOVEMBER 2, 2023</p>
                                                    <p class="card-text">
                                                        Goods elevators, also known as freight elevators or cargo lifts,
                                                        play a
                                                        crucial role in various industries, warehouses, and buildings,
                                                        facilitating the efficient movement of...
                                                    </p>

                                                    <a href="blog_page_5.php" class="read_more">
                                                        <h5>Read More..</h5>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination Controls -->
                        <div class="pagination-container">
                            <button id="prevBtn" class="next_p_btn me-2" onclick="prevPage()"
                                style="display: none;">Previous</button>
                            <button class="next_p_btn " onclick="changePage(1)">1</button>
                            <button class="next_p_btn " onclick="changePage(2)">2</button>
                            <button id="nextBtn" class="next_p_btn ms-2" onclick="nextPage()">Next</button>
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
        let currentPage = 1;
        const totalPages = 2;

        function displayPage(page) {
            document.querySelectorAll(".page").forEach(p => p.classList.remove("active"));
            document.getElementById(`page-${page}`).classList.add("active");

            // Show/hide Previous button
            document.getElementById("prevBtn").style.display = (page === 1) ? "none" : "inline-block";

            // Show/hide Next button
            document.getElementById("nextBtn").style.display = (page === totalPages) ? "none" : "inline-block";
        }

        function changePage(page) {
            if (page < 1 || page > totalPages) return;
            currentPage = page;
            displayPage(currentPage);
        }

        function nextPage() {
            if (currentPage < totalPages) {
                changePage(currentPage + 1);
            }
        }

        function prevPage() {
            if (currentPage > 1) {
                changePage(currentPage - 1);
            }
        }
    </script>

</body>

</html>