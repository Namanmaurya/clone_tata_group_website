

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
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



        .custom-row_2 {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: space-between;
        }

        .feedback_box {
            box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
            padding: 25px 35px;
            text-align: center;
        }

        .btn_f {
            margin-left: 5px;
        }

        .star-rating {
            direction: rtl;
            font-size: 50px;
            unicode-bidi: bidi-override;
            display: inline-block;


        }

        .star-rating input {
            display: none;
        }

        .star-rating label {
            color: #ccc;
            cursor: pointer;
            padding: 0 5px;
        }

        .star-rating input:checked~label,
        .star-rating label:hover,
        .star-rating label:hover~label {
            color: red;
        }

        .feed_form-control {
            display: block;
            width: 100%;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-clip: padding-box;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            border: 1px solid #ced4da;
            padding: 10px;
            font-size: 16px;
            height: 50px;
            background-color: #f8f8f8;
            border-radius: 0px;
        }

        .feed_form-control:focus {
            border-color: #dc3545;
            background-color: #f8f8f8;
            box-shadow: 0 0 5px rgba(240, 240, 240, 0.5);
        }





        @media (max-width: 1026px) {}

        @media(max-width: 769px) {
            .factory_hero_section {
                margin-top: 125px;
            }

            .feedback_box {
                padding: 15px 15px;
            }



            .feedback_text {
                font-size: 35px !important;
                margin-bottom: 0px !important;
            }

        }

        @media(max-width: 426px) {
            .factory_hero_section {
                margin-top: 92px;
            }

            .btn-container {
                margin: 0px 50px;
            }



            .feedback_text {
                font-size: 28px !important;
                line-height: 35px;
            }
        }

        @media (max-width: 321px) {
            .feedback_text {
                font-size: 22px !important;
                line-height: 35px;
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
        <!-- Factory Hero Section -->
        <section class="factory_hero_section">
            <div class="factory_hero_section_bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="fac_h_sec_text">
                                <h1 id="heroTitle">ABC Elevators</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="enquiry_form">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="feedback_box">
                            <h2 class="feedback_text">Give Your Valuable Feedback</h2>


                            <form id="enquiryForm" method="POST">
                                <div class="row custom-row_2">
                                    <div class="col-md-12 custom-full-width">
                                        <div class="text-center">
                                            <div class="star-rating">
                                                <input type="radio" name="rating" id="star5" value="5"><label
                                                    for="star5">★</label>
                                                <input type="radio" name="rating" id="star4" value="4"><label
                                                    for="star4">★</label>
                                                <input type="radio" name="rating" id="star3" value="3"><label
                                                    for="star3">★</label>
                                                <input type="radio" name="rating" id="star2" value="2"><label
                                                    for="star2">★</label>
                                                <input type="radio" name="rating" id="star1" value="1"><label
                                                    for="star1">★</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 custom-full-width">


                                        <span class="text-input">

                                            <input type="text" class="form-control" name="name" placeholder="Name"
                                                required oninput="this.value = this.value.replace(/[0-9]/g, '')">
                                        </span>
                                    </div>
                                    <div class="col-md-12 custom-full-width">
                                        <span class="text-input">
                                            <input type="email" class="form-control" name="email" placeholder="Email"
                                                required>
                                        </span>
                                    </div>
                                    <div class="col-md-12 custom-full-width">
                                        <span class="text-input">
                                            <input type="tel" name="contact" placeholder="Phone number"
                                                class="form-control" pattern="\d{10}" maxlength="10" required
                                                title="Please enter a valid 10-digit contact number"
                                                oninput="this.value= this.value.replace(/[^0-9]/g, '');">
                                        </span>
                                    </div>

                                    <div class="col-md-12 custom-full-width">
                                        <span class="text-input">
                                            <textarea class="form-control" rows="4" placeholder="Message" name="massage" maxlength="200"
                                                required></textarea>
                                        </span>
                                    </div>

                                    <div class="form-check my-3">
                                        <input class="form-check-input" type="checkbox" id="robotCheck" required>
                                        <label class="form-check-label" for="robotCheck">I'm not a robot</label>
                                        <div class="robot_img">
                                            <img src="assets/Images/not_robot_img.png" alt="image">
                                            <p>reCAPTCHA</p>
                                            <p><a href="#">Privacy</a> - <a href="#">Terms</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="footer_button btn_f">
                                    <button type="submit">SUBMIT</button>
                                </div>
                            </form>


                        </div>
                    </div>
                    <div class="col-md-1"></div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AJAX with SweetAlert -->
    <script>
        $(document).ready(function () {
            $('#enquiryForm').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'form_feedback.php',
                    data: $(this).serialize(),
                    success: function (response) {
                        let res = JSON.parse(response);
                        if (res.status === "success") {
                            Swal.fire({
                                icon: 'success',
                                title: 'Feedback Submitted!',
                                text: 'Thanks for your feedback 😊',
                                confirmButtonColor: '#3085d6'
                            });
                            $('#enquiryForm')[0].reset();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong: ' + res.message,
                                confirmButtonColor: '#d33'
                            });
                        }
                    }
                });
            });
        });
    </script>


</body>

</html>