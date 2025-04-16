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
        .branches_btn_section {
            padding: 90px 0px;
        }

        .card_bran {
            opacity: 1;
            transform: translateY(0);
            transition: transform 0.5s ease-in-out;
            visibility: visible;
            position: static;
        }

        .card_bran.hidden {
            opacity: 0;
            transform: translateY(50px);
            visibility: hidden;
            position: absolute;
        }

        .city-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }



        .card-body {
            box-shadow: 0 0 15px rgb(0 0 0 / 10%);
            text-align: center;
            background: #fff;
            box-shadow: 0 0 15px rgb(0 0 0 / 10%);
            border-radius: 10px;
            margin-bottom: 30px;
            transition: .5s;
            min-height: 366px;
            border-bottom: 2px solid #ed3b3e;
        }

        .card-body a {
            display: inline-block;
        }

        .card-body:hover {
            color: white;
            background-color: red;
        }

        .card-body:hover h3 {
            color: white;
        }

        .card-body:hover h4 {
            color: white;
        }

        .card-body:hover a {
            color: white;
        }

        .card-body h3 {
            font-size: 22px;
            line-height: 1.2;
            font-weight: 600;
            margin-bottom: 6px;
            color: black;
        }

        .card-body h4 {
            font-size: 20px;
            line-height: 1.2;
            font-weight: 400;
        }

        .card-body .address {
            margin-bottom: 3px;
            line-height: 1.5;
            font-size: 16px;
            min-height: 130px;
            text-transform: uppercase;
        }

        .card-body .phone_c {
            margin-bottom: 3px;
            line-height: 1.5;
            font-size: 16px;
        }

        .card-body .email-c {
            display: block;
            margin-bottom: 15px;
            font-size: 16px;
        }

        .card-body .visit {
            font-weight: 600;
            font-size: 16px;
            color: #ed3b3e;
        }


        /* Custom Button Styles */

        .city_btn {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: black;
            background-color: transparent;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
            transition: background-color 0.3s, transform 0.2s;
            border: 1px solid black;
        }

        .city_btn:hover {
            background-color: black;
            transform: scale(1.05);
            color: white;
        }

        .city_btn.active {
            background-color: red;
            color: white;
            border: none;
            border: none !important;
            box-shadow: none !important;
        }

        .city_btn:focus,
        .city_btn:active {
            outline: none !important;
            box-shadow: none !important;
        }

        /* Centering Buttons */
        #buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 20px;
        }


        @media (max-width: 769px) {
            .branches_btn_section {
                padding: 55px 0px;
            }
        }

        @media (max-width: 426px) {
            .city_btn {
                padding: 5px 10px;
                font-size: 16px;

            }

            .branches_btn_section {
                padding: 35px 0px;
            }

        }

        @media (max-width: 321px) {

            .branches_btn_section {
                padding: 25px 0px;
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
        <section class="hero_section">
            <div class="container-fluid">
                <img src="assets\Images\enquiry_bg_img.jpg" alt="hero_img" class="img-fluid">
            </div>
        </section>

        <section class="branches_btn_section">
            <div class="container">
                <div class="d-flex flex-column align-items-center">
                    <div id="buttons">
                        <button class="city_btn active" onclick="filterCities('all', this)">All</button>
                        <button class="city_btn" onclick="filterCities('north', this)">North</button>
                        <button class="city_btn" onclick="filterCities('south', this)">South</button>
                        <button class="city_btn" onclick="filterCities('west', this)">West</button>
                        <button class="city_btn" onclick="filterCities('east', this)">East</button>
                        <button class="city_btn" onclick="filterCities('central', this)">Central</button>
                    </div>
                    <div id="city-container" class="city-container">
                        <div class="card_bran text-center north" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title">New Delhi</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                                    class="email-c">
                                    contact@eceelevators.com </a>
                                <a
                                    href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


                            </div>
                        </div>
                        <div class="card_bran text-center north" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title">Jaipur</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                                    class="email-c">
                                    contact@eceelevators.com </a>
                                <a
                                    href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


                            </div>
                        </div>
                        <div class="card_bran text-center north" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title">Lucknow</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                                    class="email-c">
                                    contact@eceelevators.com </a>
                                <a
                                    href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


                            </div>
                        </div>
                        <div class="card_bran text-center north" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title">Mohali</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                                    class="email-c">
                                    contact@eceelevators.com </a>
                                <a
                                    href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


                            </div>
                        </div>
                        <div class="card_bran text-center north" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title">Noida</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                                    class="email-c">
                                    contact@eceelevators.com </a>
                                <a
                                    href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


                            </div>
                        </div>
                        <div class="card_bran text-center north" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title">Dehradun</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                                    class="email-c">
                                    contact@eceelevators.com </a>
                                <a
                                    href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


                            </div>
                        </div>
                        <div class="card_bran text-center west" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Mumbai</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a
                                    href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                                    contact@eceelevators.com </a>

                                <a href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D"
                                    class="visit">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


                            </div>
                        </div>
                        <div class="card_bran text-center west" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Pune</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a
                                    href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                                    contact@eceelevators.com </a>

                                <a href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D"
                                    class="visit">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


                            </div>
                        </div>
                        <div class="card_bran text-center west" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Vododara</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a
                                    href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                                    contact@eceelevators.com </a>

                                <a href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D"
                                    class="visit">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


                            </div>
                        </div>
                        <div class="card_bran text-center west" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Valsad</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a
                                    href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                                    contact@eceelevators.com </a>

                                <a href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D"
                                    class="visit">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


                            </div>
                        </div>
                        <div class="card_bran text-center south" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Chennai</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a
                                    href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                                    contact@eceelevators.com </a>

                                <a href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D"
                                    class="visit">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


                            </div>
                        </div>
                        <div class="card_bran text-center south" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Mysore</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a
                                    href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                                    contact@eceelevators.com </a>

                                <a href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D"
                                    class="visit">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


                            </div>
                        </div>
                        <div class="card_bran text-center south" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Hubli</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a
                                    href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                                    contact@eceelevators.com </a>

                                <a href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D"
                                    class="visit">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


                            </div>
                        </div>
                        <div class="card_bran text-center south" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Bangalore</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a
                                    href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                                    contact@eceelevators.com </a>

                                <a href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D"
                                    class="visit">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


                            </div>
                        </div>
                        <div class="card_bran text-center south" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Hyderabad</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a
                                    href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                                    contact@eceelevators.com </a>

                                <a href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D"
                                    class="visit">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


                            </div>
                        </div>
                        <div class="card_bran text-center east" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Kolkata</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a
                                    href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                                    contact@eceelevators.com </a>

                                <a href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D"
                                    class="visit">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


                            </div>
                        </div>
                        <div class="card_bran text-center east" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Guwahati</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a
                                    href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                                    contact@eceelevators.com </a>

                                <a href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D"
                                    class="visit">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


                            </div>
                        </div>
                        <div class="card_bran text-center east" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Ranchi</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a
                                    href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                                    contact@eceelevators.com </a>

                                <a href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D"
                                    class="visit">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


                            </div>
                        </div>
                        <div class="card_bran text-center east" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Bhubaneswar</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a
                                    href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                                    contact@eceelevators.com </a>

                                <a href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D"
                                    class="visit">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


                            </div>
                        </div>
                        <div class="card_bran text-center central" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Raipur</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a
                                    href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                                    contact@eceelevators.com </a>
                                <a
                                    href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


                            </div>
                        </div>
                        <div class="card_bran text-center central" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title">Nagpur</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                                    class="email-c">
                                    contact@eceelevators.com </a>
                                <a
                                    href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


                            </div>
                        </div>
                        <div class="card_bran text-center central" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Indore</h3>
                                <h4>ABC Industries LTD.</h4>
                                <h4>(Elevator Division)</h4>
                                <p class="address">
                                    Plot No. 53/C, Sarkar House,Near NIT Garden, NIT Layout, Ring Road, Trimurti Nagar,
                                    Nagpur, Maharastra -440022
                                </p>
                                <p class="phone_c">Toll-Free No.
                                    <a href="#"> 1800 5 320 323</a>
                                </p>
                                <a
                                    href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASSHykoN4LNv5cHSRcZozB2gYxXVkn8DnPlBHsoFKWEZPLVba27dogN7Q5BihOcqHS-domn9YEmCSg&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                                    contact@eceelevators.com </a>

                                <a href="https://www.google.com/maps/place/ECE+Elevators+-+Birla+Group/@21.1104451,79.0423311,660m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bd4c181c8a5f9f3:0x2188bb129d9e4987!8m2!3d21.1104451!4d79.0423311!16s%2Fg%2F11thj_52hs?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D"
                                    class="visit">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Visit our Branch
                                </a>


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

    <script>
        function filterCities(region, btn) {
            // Remove active class from all buttons
            document.querySelectorAll(".city_btn").forEach(button => {
                button.classList.remove("active");
            });
            btn.classList.add("active");

            let cards = document.querySelectorAll(".card_bran");

            // Hide all cards smoothly
            cards.forEach(card => {
                card.classList.add("hidden");
            });

            // Show relevant cards with a delay for smooth effect
            setTimeout(() => {
                cards.forEach(card => {
                    if (region === "all" || card.classList.contains(region)) {
                        card.classList.remove("hidden");
                    }
                });
            }, 200);
        }
    </script>
</body>

</html>