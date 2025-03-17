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

        .blog_section{
            padding: 150px 0px;
            position: relative;
        }
        /* Card hover effect */
        .blog_card {
            transition: transform 0.3s ease-in-out;
        }

        

        /* Pagination container */
        .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        /* Page transition effects */
        .page-container {
            
            min-height: 200px;
        }

        .page {
            position: absolute;
            width: 100%;
            transition: opacity 0.5s ease-in-out, transform 0.3s ease-in-out;
            opacity: 0;
            pointer-events: none;
            transform: translateY(10px);
        }

        .page.active {
            opacity: 1;
            pointer-events: auto;
            transform: translateY(0);
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
                    <a href="#" class="dropdown-toggle" onclick="toggleDropdown()">About Us</a>
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
                    <a href="#" class="dropdown-toggle" onclick="toggleDropdown()">Products</a>
                    <ul class="dropdown-menu">
                        <li><a href="car-design.php">By Design</a></li>
                        <li><a href="products-technology.php">Category</a></li>
                        <li><a href="industry.php">Industry</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#">SMART Technology</a>
            </li>
            <li>
                <a href="#">Career</a>
            </li>
            <li>
                <a href="blog.php">Blogs</a>
            </li>
            <li>
                <a href="fap.php">FAQ</a>
            </li>
            <li>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" onclick="toggleDropdown()">Contact us</a>
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
                    <div class="blog_title text-center">
                        <h2>My Blog</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="page-container">
                            <!-- Page 1: 4 Cards -->
                            <div class="row page active" id="page-1">
                                <div class="col-md-12 mb-3">
                                    <div class="blog_card p-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Card 1</h5>
                                            <p class="card-text">This is the first card.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="blog_card p-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Card 2</h5>
                                            <p class="card-text">This is the second card.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="blog_card p-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Card 3</h5>
                                            <p class="card-text">This is the third card.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="blog_card p-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Card 4</h5>
                                            <p class="card-text">This is the fourth card.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Page 2: 1 Card -->
                            <div class="row page" id="page-2">
                                <div class="col-md-12 mb-3">
                                    <div class="blog_card p-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Card 5</h5>
                                            <p class="card-text">This is the fifth card.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination Controls -->
                        <div class="pagination-container">
                            <button id="prevBtn" class="btn btn-primary me-2" onclick="prevPage()"
                                style="display: none;">Previous</button>
                            <button class="btn btn-outline-primary" onclick="changePage(1)">1</button>
                            <button class="btn btn-outline-primary mx-2" onclick="changePage(2)">2</button>
                            <button id="nextBtn" class="btn btn-primary ms-2" onclick="nextPage()">Next</button>
                        </div>
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
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href=""> <i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                        <a href=""><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer_down">
            <div class="row">
                <div class="col-md-12 widget">
                    <h3 class="widget-title">
                        Toll Free Number
                    </h3>

                    <div class="icon_number">
                        <img src="assets/Images/footer_user.png" alt="user">
                        <h3><a href="#">18005320323</a></h3>
                    </div>
                    <div class="footer_button">
                        <button><a href="">ENQUIRY</a></button>
                    </div>
                </div>
                <div class="col-md-3 widget">
                    <h3 class="widget-title">
                        Company
                    </h3>
                    <div class="footer_nav_links">
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our History</a></li>
                            <li><a href="#">Factory</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Blogs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 widget">
                    <h3 class="widget-title">
                        Applications
                    </h3>
                    <div class="footer_nav_links">
                        <ul>
                            <li><a href="#">Residential</a></li>
                            <li><a href="#">Commercial</a></li>
                            <li><a href="#">Hospitals</a></li>
                            <li><a href="#">Hotel</a></li>
                            <li><a href="#">Industry</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 widget">
                    <h3 class="widget-title">
                        Contact Us
                    </h3>
                    <div class="footer_nav_links">
                        <ul>
                            <li><a href="#">Enquiry</a></li>
                            <li><a href="#">Branches</a></li>
                            <li><a href="#">Smart Customer Connect</a></li>
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