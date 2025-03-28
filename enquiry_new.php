<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'enquiry_now_db';

$con = mysqli_connect($hostname, $username, $password, $dbname);

if (!$con) {
    die(json_encode(["status" => "error", "message" => "Database connection failed!"]));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['contact'];
    $company_name = $_POST['companyname'];
    $subject = $_POST['subject'];
    $street_address = $_POST['street_address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $massage = $_POST['massage']; 

    $sql = "INSERT INTO `enquiry_form`(`name`, `email`, `phone number`, `company_name`, `subject`, `street_address`, `city`, `state`, `zip`, `massage`) 
            VALUES ('$name','$email','$phone_number','$company_name','$subject','$street_address','$city','$state','$zip','$massage')";

    if (mysqli_query($con, $sql)) {
        echo json_encode(["status" => "success", "message" => "Your data has been successfully submitted!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error submitting data. Please try again."]);
    }
    exit();
}
?>

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
        <section class="hero_section">
            <div class="container-fluid">
                <img src="assets\Images\enquiry_bg_img.jpg" alt="hero_img" class="img-fluid">
            </div>
        </section>

        <section class="enquiry_form">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="enquiry_text">
                            <h2> Enquiry <b>Now</b></h2>
                            <p>Are you planning lift installation for your home, office, or any residential or
                                commercial property, etc.? Our expert assesses your space, discusses your requirements,
                                and provides recommendations tailored to your needs. Resolve your queries, and explore
                                various lift options & cabin designs, safety features, installation processes, and cost
                                estimates.</p>
                            <p>We ensure a safe, smooth, efficient lift installation that meets your requirements.</p>

                            <form id="enquiryForm">
                                <div class="row custom-row">
                                    <div class="col-md-4 custom-col">
                                        <span class="text-input">
                                            <input type="text" class="form-control" name="name" placeholder="Name"
                                                required>
                                        </span>
                                    </div>
                                    <div class="col-md-4 custom-col">
                                        <span class="text-input">
                                            <input type="email" class="form-control" name="email" placeholder="Email"
                                                required>
                                        </span>
                                    </div>
                                    <div class="col-md-4 custom-col">
                                        <span class="text-input">
                                            <input type="tel" name="contact" placeholder="Phone number"
                                                class="form-control" pattern="\d{10}" maxlength="10" required
                                                title="Please enter a valid 10-digit contact number"
                                                oninput="this.value= this.value.replace(/[^0-9]/g, '');">
                                        </span>
                                    </div>
                                    <div class="col-md-4 custom-col">
                                        <span class="text-input">
                                            <input type="text" name="companyname" class="form-control"
                                                placeholder="Company Name (Optional)">
                                        </span>
                                    </div>
                                    <div class="col-md-4 custom-col">
                                        <span class="text-input">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject"
                                                required>
                                        </span>
                                    </div>
                                    <div class="col-md-4 custom-col">
                                        <span class="text-input">
                                            <input type="text" name="street_address" class="form-control"
                                                placeholder="Street Address" required>
                                        </span>
                                    </div>
                                    <div class="col-md-4 custom-col">
                                        <span class="text-input">
                                            <input type="text" name="city" class="form-control" placeholder="City"
                                                required>
                                        </span>
                                    </div>
                                    <div class="col-md-4 custom-col">
                                        <span class="text-input">
                                            <input type="text" name="state" class="form-control" placeholder="State"
                                                required>
                                        </span>
                                    </div>
                                    <div class="col-md-4 custom-col">
                                        <span class="text-input">
                                            <input type="tel" name="zip" placeholder="Zip" class="form-control"
                                                pattern="[0-9]{6}" maxlength="6" required
                                                title="Please enter a valid 6-digit number"
                                                oninput="this.value = this.value.replace(/\D/g, '').slice(0,6);">
                                        </span>
                                    </div>
                                    <div class="col-md-12 custom-full-width">
                                        <span class="text-input">
                                            <textarea class="form-control" rows="4" placeholder="Message" name="massage"
                                                required></textarea>
                                        </span>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="robotCheck" required>
                                        <label class="form-check-label" for="robotCheck">I'm not a robot</label>
                                        <div class="robot_img">
                                            <img src="assets/Images/not_robot_img.png" alt="image">
                                            <p>reCAPTCHA</p>
                                            <p><a href="#">Privacy</a> - <a href="#">Terms</a></p>
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
                            <li><a href="credentials.php">Residential</a></li>
                            <li><a href="credentials.php">Commercial</a></li>
                            <li><a href="credentials.php">Hospitals</a></li>
                            <li><a href="credentials.php">Hotel</a></li>
                            <li><a href="credentials.php">Industry</a></li>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $("#enquiryForm").submit(function(event) {
                event.preventDefault(); // Prevent page reload

                $.ajax({
                    url: "", // Same PHP file
                    type: "POST",
                    data: $(this).serialize(), // Serialize form data
                    dataType: "json",
                    success: function(response) {
                        if (response.status === "success") {
                            Swal.fire({
                                icon: "success",
                                title: "Success!",
                                text: response.message,
                            });
                            $("#enquiryForm")[0].reset(); // Reset form
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Oops!",
                                text: response.message,
                            });
                        }
                    }
                });
            });
        });
    </script>


</body>

</html>