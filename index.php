<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta http-equiv="refresh">
    <title>Alsol Technology Solution Pvt. Ltd.</title>
    <link rel="icon" href="./Assets/Icons/Logo/LOGO-dark.png">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
    <!-- header -->
    <nav id="navbar" style="border-bottom-radius: 0; transition: all .5s ease;"
        class="navbar navbar-expand-md navbar-light fixed-top">
        <div class="container" id="nav-container">
            <a class="navbar-brand" href="./index.html" aria-label="Logo">
                <div id="logo">
                </div>
            </a>
            <button aria-labelledby="Toggle navigation" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="nav-cont">
                    <ul class="nav-cont-ul ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="mailto:team@alsoltech.com"><i
                                    class="fas fa-envelope-open-text fa-lg me-2"></i> team@alsoltech.com</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://goo.gl/maps/tpZ81XduiSnH5GSR8"> <i
                                    class="fas fa-map-signs fa-lg me-2"></i> Kolkata, India</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="callto:9064286385"> <i class="fas fa-phone-alt fa-lg me-2"></i>
                                7980222011 / 9064286385</a>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropend">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Home
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#caro">Home</a></li>
                            <li><a class="dropdown-item" href="#services">Services</a></li>
                            <li><a class="dropdown-item" href="#progress">Progress</a></li>
                            <li><a class="dropdown-item" href="#contact">Contact</a></li>
                        </ul>
                    </li>
                    <li class="nav-item" id="mob-view">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./aboutus.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./service.html">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./contactus.php">Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link">
                            <!-- Button trigger modal -->
                            <button type="button" class="nav-link-modal" data-bs-toggle="modal"
                                data-bs-target="#signUp">
                                Login / Signup
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- header -->

    <!-- Modal -->
    <div class="modal fade" id="signUp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div style="width: 100%;display: flex;align-items: center;align-content: center;">
                        <h5 class="modal-title" id="staticBackdropLabel">Register Now</h5>
                        <p class="px-2" style="margin-bottom: 0; line-height: 25px;" id="reg-message"></p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./php/register.php" method="POST" class="row g-3" id="regForm">
                        <div class="col-md-12 mailCol">
                            <label for="UserName" class="form-label bg-primary"><i class="fas fa-user"></i></label>
                            <input type="text" class="form-control" name="user_name" placeholder="Full Name" required
                                id="UserName">
                        </div>
                        <div class="col-md-12 mailCol">
                            <label for="userEmail" class="form-label" id="env"><i class="fas fa-envelope-open"></i></label>
                            <input type="email" name="user_email" class="form-control userEmail" id="loginEmail"
                                placeholder="name@gmail.com" required>
                        </div>
                        <div class="col-md-12 mailCol">
                            <label for="inputMobile" class="form-label" id="pho"><i class="fas fa-phone-alt"></i></label>
                            <input type="number" id="userMobile" name="user_mobile" class="form-control"
                                id="inputMobile" placeholder="Mobile Number" required>
                        </div>
                        <div class="col-md-12 mailCol">
                            <label for="pass" class="form-label" id="lock"><i class="fas fa-lock"></i></label>
                            <input type="password" class="form-control pass" id="loginPass" name="user_password"
                                placeholder="8 Digit Password" required id="pass">
                        </div>
                        <div class="col-md-12 mailCol">
                            <label for="conf-pass" class="form-label" id="key"><i class="fas fa-key"></i></label>
                            <input type="text" class="form-control" name="user_password_confirm"
                                placeholder="Confirm Password" required id="conf-pass">
                        </div>
                        <div class="col-md-12 mt-4" style="display: flex; justify-content: space-between;">
                            <input type="submit" class="btn btn-danger w-50 disabled" id="signUp_btn" value="Submit">
                            <button type="button" class="btn btn-primary w-50 ms-2" data-bs-target="#signIn"
                                data-bs-toggle="modal" data-bs-dismiss="modal">Log In?</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="signIn" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div style="width: 100%;display: flex;align-items: center;align-content: center;">
                        <h5 class="modal-title" id="staticBackdropLabel">Login Now</h5>
                        <p class="px-2 text-danger" style="margin-bottom: 0; line-height: 25px;" id="log-message"></p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="logForm" action="./php/login.php" method="POST" role="form" class="row g-3">
                        <div class="col-md-12 mailCol">
                            <label for="userEmailLog" class="form-label" id="lock2"><i class="fas fa-envelope-open"></i></label>
                            <input type="email" name="user_email_login" class="form-control userEmailLog"
                                placeholder="name@gmail.com" required>
                            <span class="mail_text_log"></span>
                        </div>
                        <div class="col-md-12 passCol">
                            <label for="passLog" class="form-label" id="key2"><i class="fas fa-key"></i></label>
                            <input type="password" class="form-control passLog" name="user_password_login"
                                placeholder="1-10, a-z" required>
                            <span class="pass_text_log"></span>
                        </div>
                        <div class="col-md-12">
                            <button id="logIn_btn" type="button" class="btn btn-danger w-100">Login Now</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#signUp" data-bs-toggle="modal"
                        data-bs-dismiss="modal">Create a new account?</button>
                </div>
            </div>
        </div>
    </div>


    <!-- ================================================== -->
    <section id="all_page">
        <div class="container-fluid top-caro" id="caro">
            <a title="Click Me To Scroll" href="#services" id="scroll-down">
                <img src="./Assets/Svg/download.svg" alt="download.svg">
                <img src="./Assets/Svg/download.svg" alt="download.svg">
            </a>

            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button aria-labelledby="Slide 1" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button aria-labelledby="Slide 2" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button aria-labelledby="Slide 3" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button aria-labelledby="Slide 4" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-img-cont">
                            <img src="./Assets/carousel/development.webp" alt="./Assets/carousel/ux-store.webp"
                                class="carousel-image img-fluid" alt="Development">
                        </div>
                        <div class="carousel-caption" aria-hidden="true">
                            <a>DEVELOPMENT</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img-cont">
                            <img src="./Assets/carousel/ux-store (2).jpg" class="carousel-image img-fluid" alt="Design">
                        </div>
                        <div class="carousel-caption" aria-hidden="true">
                            <a>DESIGN</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-img-cont">
                            <img src="./Assets/carousel/seo.webp" class="carousel-image" alt="Seo / Smm">
                        </div>
                        <div class="carousel-caption" aria-hidden="true">
                            <a>SEO / SMM</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img-cont">
                            <img src="./Assets/carousel/strategy2.webp" class="carousel-image" alt="Strategy">
                        </div>
                        <div class="carousel-caption" aria-hidden="true">
                            <a>STRATEGY</a>
                        </div>
                    </div>
                </div>
            </div>
            <button aria-labelledby="prev" class="carousel-control-prev" type="button"
                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button aria-labelledby="next" class="carousel-control-next" type="button"
                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container" id="services">
            <div class="row box">
                <h1 class="service-box-head my-5 text-center">Our Services</h1>
                <div class="col-md-4 mt-5 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fas fa-desktop text-center"></i>
                            </div>
                            <div class="card-content">
                                <h1 class="card-title text-center">Website Design & Development</h1>
                                <p class="card-text text-center">We develop web application with effective UI/UX which
                                    are
                                    mobile first and user friendly</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fab fa-android text-center"></i>
                            </div>
                            <h1 class="card-title text-center">Android Application</h1>
                            <p class="card-text text-center">We have an intelligent team of hybrid developers,developing
                                various kind of business oriented applications with high end features.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fas fa-edit text-center"></i>
                            </div>
                            <div class="card-content">
                                <h1 class="card-title text-center">Content Writing</h1>
                                <p class="card-text text-center">One of our special focus is content writing, We always
                                    try to
                                    deliver plagiarism free, highly accurate content within deadline.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="middle">
                    <a href="./service.html" class="btn1 hover-btn "> Our Services <i
                            class="fas fa-angle-double-right ps-1 animate__animated animate__infinite animate__fadeOutRight"></i></a>
                </div>
            </div>
        </div>
        <!-- Our Progress--------------------------------->

        <section id="progress">
            <div class="container main-box" id="ourProgress">
                <div class="row">
                    <div class="col-md-6 Facility-text">
                        <h1 class="ourfocus-head">
                            We Seek Solutions For All Your <span>Technical Worries</span>
                        </h1>
                        <p class="lead">
                            We, Alsol Technology Solution Pvt. Ltd. are one of the most reliable IT and business
                            consulting companies in this competitive landscape of Kolkata, India.
                            We take pride in providing innovative and user-friendly web development services. Besides,
                            we offer a wide range of services like data analysis, digital marketing, android application
                            development, cloud computing services, machine learning, software automation, windows
                            application development, content writing and many more
                        </p>
                    </div>
                    <div class="col-md-6 Facility-progress">
                        <div class="container">
                            <div data-aos="fade-right">
                                <label class="progress-text" for="laravel"><img src="./Assets/Icons/laravel-brands.svg"
                                        width="24" height="24" class="pe-2" alt="Laravel"> Laravel</label>
                                <div class="progress" id="laravel">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                        role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 75%" aria-label="laravel"></div>
                                </div>
                            </div>

                            <div data-aos="fade-right">
                                <label class="progress-text" for="php">
                                    <img src="./Assets/Icons/PHP-logo.svg" width="28" height="32" class="pe-2"
                                        alt="PhP"> PHP
                                </label>
                                <div class="progress" id="php">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                        aria-label="progressbar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                        aria-valuemax="100" style="width: 75%" aria-label="php"></div>
                                </div>
                            </div>

                            <div data-aos="fade-right">
                                <label class="progress-text" for="python"><img src="./Assets/Icons/pyton.svg" width="24"
                                        alt="Python" class="pe-2" height="24">
                                    Python</label>
                                <div class="progress" id="python">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                        role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 75%" aria-label="python"></div>
                                </div>
                            </div>

                            <div data-aos="fade-right">
                                <label class="progress-text" for="angularjs"><img src="./Assets/Icons/Angular.svg"
                                        width="28" class="pe-2" alt="Angular Js" height="24"> Angular Js</label>
                                <div class="progress" id="angularjs">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                        role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 85%" aria-label="angularjs"></div>
                                </div>
                            </div>

                            <div data-aos="fade-right">
                                <label class="progress-text" for="react"><img src="./Assets/Icons/react.svg"
                                        alt="React Js" width="24" height="24"></i> React Js</label>
                                <div class="progress" id="react">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                        role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 65%" aria-label="react"></div>
                                </div>
                            </div>

                            <div data-aos="fade-right">
                                <label class="progress-text" for="node"><img src="./Assets/Icons/nodejs.svg" width="32"
                                        alt="Node JS" height="24" class="pe-2"> Node Js</label>
                                <div class="progress" id="node">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                        role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 75%" aria-label="node"></div>
                                </div>
                            </div>

                            <div data-aos="fade-right">
                                <label class="progress-text" for="mongo"><img src="./Assets/Icons/mongoDb.svg"
                                        width="36" class="pe-1" height="32" alt="MongoDB">
                                    MongoDB</label>
                                <div class="progress" id="mongo">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                        role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 85%" aria-label="mongo"></div>
                                </div>
                            </div>

                            <div data-aos="fade-right">
                                <label class="progress-text" for="Oracle"><img src="./Assets/Icons/oracle.svg"
                                        alt="./Assets/Icons/oracle.png" width="32" height="25" class="pe-2">
                                    Oracle</label>
                                <div class="progress" id="Oracle">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                        role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 75%" aria-label="Oracle"></div>
                                </div>
                            </div>

                            <div data-aos="fade-right">
                                <label class="progress-text" id="neo4j-text" for="Neo4j"><img
                                        src="./Assets/Icons/Neo4j.svg" width="32" alt="Neo4j" height="25" class="pe-2">
                                    Neo4j</label>
                                <div class="progress" id="Neo4j">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                        role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 75%" aria-label="Neo4j"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact us -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 contact-head">
                        <h1 class="contact-h1">Get In Touch</h1>
                        <p class="contact-p">Hey! We are looking forward to start a project <br>with you</p>
                        <div class="middle mt-3">
                            <a href="./contactus.php" class="btn1 hover-btn">Send Us Something? <i
                                    class="fas fa-angle-double-right ps-1"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 contact-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="cont-sec">
                                    <div class="card-sec w-50">
                                        <div class="card-title">
                                            <i class="fas fa-phone-alt"></i> Call Us
                                        </div>
                                        <div class="card-text">
                                            7980222011 <br> 9064286385
                                        </div>
                                    </div>
                                    <div class="card-sec w-50">
                                        <div class="card-title">
                                            <i class="fas fa-envelope-open"></i> Mail Us
                                        </div>
                                        <div class="card-text">
                                            team@alsoltech.com
                                        </div>
                                    </div>
                                </div>
                                <div class="card-sec">
                                    <div class="card-title">
                                        <i class="fas fa-map-marked-alt"></i> Our Location
                                    </div>
                                    <div class="card-text">
                                        Shivalay Apartment, 3rd Floor, East Enclave bus Stand, near- Coal Bhawan/ DLF 1,
                                        Kolkata- 700102
                                    </div>
                                </div>
                                <div class="card-sec">
                                    <div class="card-title">
                                        <i class="fas fa-clock"></i> Business Hours
                                    </div>
                                    <div class="card-text">
                                        Mon - Sat <i class="fa fa-angle-double-right"></i> 10am - 8pm
                                        <br>
                                        Sunday <i class="fa fa-angle-double-right"></i> Closed
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <footer id="nav-bottom">

        <button class="p-2" onclick="topFunction()" id="myBtn" title="Go to top">
            <i class="fa fa-chevron-up"></i>
        </button>

        <!-- Footer -->
        <div class="footer" id="footer">
            <div class="footer-icon">
                <a class="btn btn-footer" id="footer-btn" title="Connect With Us">
                </a>
                <div class="icons">
                    <a href=" https://wa.me/9064286385" aria-labelledby="whatsApp" class="icon-name"
                        aria-label="WhatsApp">
                        <span><i class="fab fa-whatsapp" style="color: #25D366;"></i></span>
                    </a>
                    <a href="https://www.facebook.com/AlsolTech-102593158104879" aria-labelledby="facebook"
                        aria-label="Facebook" class="icon-name">
                        <span><i class="fab fa-facebook" style="color:#1778f2;"></i></span>
                    </a>
                    <a href="https://www.instagram.com/alsoltech/" class="icon-name" aria-labelledby="instagram"
                        aria-label="Instagram">
                        <span><i class="fab fa-instagram insta"></i></span>
                    </a>
                    <a href="https://twitter.com/AlsolTech?s=09" aria-labelledby="twitter" aria-label="Twitter"
                        class="icon-name">
                        <span><i class="fab fa-twitter" style="color:#00ACEE;"></i></span>
                    </a>
                    <a href="https://www.linkedin.com/company/68019635" aria-labelledby="linkedin" aria-label="Linkedin"
                        class="icon-name">
                        <span><i class="fab fa-linkedin" style="color: #0e76a8;"></i></span>
                    </a>
                </div>
            </div>
        </div>

    </footer>


    <div class="pageloader">
        <svg id="png" viewBox="0 0 192 302" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="logo-light">
                <g id="logo_pageloader">
                    <g id="sub">
                        <g id="opachity25">
                            <path id="Ellipse 7"
                                d="M115 13C129.359 13 141 24.6406 141 39C141 53.3594 129.359 65 115 65C104.184 65 94.9109 58.3958 90.9927 49L8.74228e-08 49L-7.86805e-07 29L90.9927 29C91.277 28.3182 91.5895 27.651 91.9288 27C96.2649 18.6804 104.969 13 115 13Z"
                                fill="#1A1A1A" fill-opacity="0.7" />
                            <circle id="Ellipse 3" cx="115" cy="39" r="15" transform="rotate(90 115 39)" fill="#138BCB"
                                fill-opacity="0.7" />
                        </g>
                        <g id="opachity25_2">
                            <path id="Ellipse 6"
                                d="M115 119C129.359 119 141 130.641 141 145C141 159.359 129.359 171 115 171C104.184 171 94.9109 164.396 90.9927 155L8.74228e-08 155L-7.86805e-07 135L90.9927 135C91.277 134.318 91.5895 133.651 91.9288 133C96.2649 124.68 104.969 119 115 119Z"
                                fill="#1A1A1A" fill-opacity="0.7" />
                            <circle id="Ellipse 1" cx="115" cy="145" r="15" transform="rotate(90 115 145)"
                                fill="#138BCB" fill-opacity="0.7" />
                        </g>
                        <g id="opachity25_3">
                            <path id="Ellipse 5"
                                d="M76.9999 118C62.6405 118 50.9999 106.359 50.9999 92C50.9999 77.6406 62.6405 66 76.9999 66C87.8157 66 97.089 72.6042 101.007 82L192 82V102L101.007 102C100.723 102.682 100.41 103.349 100.071 104C95.7349 112.32 87.0308 118 76.9999 118Z"
                                fill="#1A1A1A" fill-opacity="0.7" />
                            <circle id="Ellipse 2" cx="76.9999" cy="92" r="15" transform="rotate(90 76.9999 92)"
                                fill="#138BCB" fill-opacity="0.7" />
                        </g>
                    </g>
                    <g id="main">
                        <g id="left">
                            <g id="bar-left" filter="url(#filter0_i)">
                                <path
                                    d="M17 77C17 62.6406 28.6406 51 43 51C57.3594 51 69 62.6406 69 77C69 87.8158 62.3958 97.0891 53 101.007L53 192L33 192L33 101.007C32.3181 100.723 31.651 100.41 31 100.071C22.6804 95.7351 17 87.0309 17 77Z"
                                    fill="#138BCB" />
                            </g>
                            <circle id="orange" cx="42" cy="77" r="15" fill="#F46C0F" />
                        </g>
                        <g id="center">
                            <g id="bar-center" filter="url(#filter1_i)">
                                <path
                                    d="M121 115C121 129.359 109.359 141 95 141C80.6406 141 69 129.359 69 115C69 104.184 75.6042 94.9109 85 90.9927L85 8.74228e-08L105 -7.86805e-07L105 90.9927C105.682 91.277 106.349 91.5895 107 91.9288C115.32 96.2649 121 104.969 121 115Z"
                                    fill="#138BCB" />
                            </g>
                            <circle id="white" cx="95" cy="115" r="15" fill="#FCFCFC" />
                        </g>
                        <g id="right">
                            <g id="bar-right" filter="url(#filter2_i)">
                                <path
                                    d="M122 77C122 62.6406 133.641 51 148 51C162.359 51 174 62.6406 174 77C174 87.8158 167.396 97.0891 158 101.007L158 192L138 192L138 101.007C137.318 100.723 136.651 100.41 136 100.071C127.68 95.7351 122 87.0309 122 77Z"
                                    fill="#138BCB" />
                            </g>
                            <circle id="green" cx="148" cy="77" r="15" fill="#60E20C" />
                        </g>
                    </g>
                </g>
                <g id="TECH">
                    <path id="T" d="M78.175 275.45V278.875H73.525V293H69.25V278.875H64.6V275.45H78.175Z" fill="black" />
                    <path id="E"
                        d="M85.525 278.875V282.425H91.25V285.725H85.525V289.575H92V293H81.25V275.45H92V278.875H85.525Z"
                        fill="black" />
                    <path id="C"
                        d="M95.85 284.4C95.85 282.667 96.225 281.125 96.975 279.775C97.725 278.408 98.7667 277.35 100.1 276.6C101.45 275.833 102.975 275.45 104.675 275.45C106.758 275.45 108.542 276 110.025 277.1C111.508 278.2 112.5 279.7 113 281.6H108.3C107.95 280.867 107.45 280.308 106.8 279.925C106.167 279.542 105.442 279.35 104.625 279.35C103.308 279.35 102.242 279.808 101.425 280.725C100.608 281.642 100.2 282.867 100.2 284.4C100.2 285.933 100.608 287.158 101.425 288.075C102.242 288.992 103.308 289.45 104.625 289.45C105.442 289.45 106.167 289.258 106.8 288.875C107.45 288.492 107.95 287.933 108.3 287.2H113C112.5 289.1 111.508 290.6 110.025 291.7C108.542 292.783 106.758 293.325 104.675 293.325C102.975 293.325 101.45 292.95 100.1 292.2C98.7667 291.433 97.725 290.375 96.975 289.025C96.225 287.675 95.85 286.133 95.85 284.4Z"
                        fill="black" />
                    <path id="H"
                        d="M130.226 275.45V293H125.951V285.775H119.301V293H115.026V275.45H119.301V282.325H125.951V275.45H130.226Z"
                        fill="black" />
                </g>
                <g id="text">
                    <g id="A" filter="url(#filter3_i)">
                        <path
                            d="M31.942 237.808H16.746L14.31 245H3.928L18.66 204.284H30.144L44.876 245H34.378L31.942 237.808ZM29.39 230.152L24.344 215.246L19.356 230.152H29.39Z"
                            fill="#148CCB" />
                    </g>
                    <g id="L" filter="url(#filter4_i)">
                        <path d="M175.514 236.344H188.506V244H165.596V203.284H175.514V236.344Z" fill="#138BCB" />
                    </g>
                    <g id="L_2" filter="url(#filter5_i)">
                        <path d="M59.5141 256.344H72.5061V264H49.5961V223.284H59.5141V256.344Z" fill="#138BCB" />
                    </g>
                    <g id="S" filter="url(#filter6_i)">
                        <path
                            d="M96.328 245.406C93.3507 245.406 90.6827 244.923 88.324 243.956C85.9653 242.989 84.0707 241.559 82.64 239.664C81.248 237.769 80.5133 235.488 80.436 232.82H90.992C91.1467 234.328 91.6687 235.488 92.558 236.3C93.4473 237.073 94.6073 237.46 96.038 237.46C97.5073 237.46 98.6673 237.131 99.518 236.474C100.369 235.778 100.794 234.831 100.794 233.632C100.794 232.627 100.446 231.795 99.75 231.138C99.0927 230.481 98.2613 229.939 97.256 229.514C96.2893 229.089 94.8973 228.605 93.08 228.064C90.4507 227.252 88.3047 226.44 86.642 225.628C84.9793 224.816 83.5487 223.617 82.35 222.032C81.1513 220.447 80.552 218.378 80.552 215.826C80.552 212.037 81.9247 209.079 84.67 206.952C87.4153 204.787 90.992 203.704 95.4 203.704C99.8853 203.704 103.501 204.787 106.246 206.952C108.991 209.079 110.461 212.056 110.654 215.884H99.924C99.8467 214.569 99.3633 213.545 98.474 212.81C97.5847 212.037 96.444 211.65 95.052 211.65C93.8533 211.65 92.8867 211.979 92.152 212.636C91.4173 213.255 91.05 214.163 91.05 215.362C91.05 216.677 91.6687 217.701 92.906 218.436C94.1433 219.171 96.0767 219.963 98.706 220.814C101.335 221.703 103.462 222.554 105.086 223.366C106.749 224.178 108.179 225.357 109.378 226.904C110.577 228.451 111.176 230.442 111.176 232.878C111.176 235.198 110.577 237.305 109.378 239.2C108.218 241.095 106.517 242.603 104.274 243.724C102.031 244.845 99.3827 245.406 96.328 245.406Z"
                            fill="#138BCB" />
                    </g>
                    <g id="O" filter="url(#filter7_i)">
                        <path
                            d="M137.852 264.406C134.024 264.406 130.505 263.517 127.296 261.738C124.125 259.959 121.593 257.485 119.698 254.314C117.842 251.105 116.914 247.509 116.914 243.526C116.914 239.543 117.842 235.967 119.698 232.796C121.593 229.625 124.125 227.151 127.296 225.372C130.505 223.593 134.024 222.704 137.852 222.704C141.68 222.704 145.179 223.593 148.35 225.372C151.559 227.151 154.073 229.625 155.89 232.796C157.746 235.967 158.674 239.543 158.674 243.526C158.674 247.509 157.746 251.105 155.89 254.314C154.034 257.485 151.521 259.959 148.35 261.738C145.179 263.517 141.68 264.406 137.852 264.406ZM137.852 255.358C141.1 255.358 143.691 254.275 145.624 252.11C147.596 249.945 148.582 247.083 148.582 243.526C148.582 239.93 147.596 237.069 145.624 234.942C143.691 232.777 141.1 231.694 137.852 231.694C134.565 231.694 131.936 232.757 129.964 234.884C128.031 237.011 127.064 239.891 127.064 243.526C127.064 247.122 128.031 250.003 129.964 252.168C131.936 254.295 134.565 255.358 137.852 255.358Z"
                            fill="#138BCB" />
                    </g>
                </g>
            </g>
            <defs>
                <filter id="filter0_i" x="15" y="51" width="54" height="141" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dx="-2" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow" />
                </filter>
                <filter id="filter1_i" x="67" y="0" width="54" height="141" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dx="-2" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow" />
                </filter>
                <filter id="filter2_i" x="120" y="51" width="54" height="141" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dx="-2" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow" />
                </filter>
                <filter id="filter3_i" x="1.92798" y="204.284" width="42.948" height="40.716"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dx="-2" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow" />
                </filter>
                <filter id="filter4_i" x="163.596" y="203.284" width="24.91" height="40.716"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dx="-2" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow" />
                </filter>
                <filter id="filter5_i" x="47.596" y="223.284" width="24.91" height="40.716" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dx="-2" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow" />
                </filter>
                <filter id="filter6_i" x="78.436" y="203.704" width="32.74" height="41.702" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dx="-2" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow" />
                </filter>
                <filter id="filter7_i" x="114.914" y="222.704" width="43.76" height="41.702"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dx="-2" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow" />
                </filter>
            </defs>
        </svg>
    </div>

    <!-- Java Scripts -->
    <script src="https://kit.fontawesome.com/c932ce0340.js" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js" crossorigin="anonymous"></script>
    <script src="./js/index.js" type="text/javascript"></script>
    <script type="text/javascript">
        // form validation

        function validateEmail() {
            let email = $("#loginEmail").val();
            let reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
            if (reg.test(email)) {
                return true;
            } else {
                return false;
            }

        }

        function validatePassword() {
            let pass = $(".pass").val();

            if (pass.length >= 8) {
                return true;
            } else {
                return false;
            }

        }

        function validateMobile() {
            let num = $("#userMobile").val();

            if (num.length > 9 && num.length < 11) {
                return true;
            } else {
                return false;
            }

        }

        function confirmPassword() {
            if ($("#conf-pass").val() == $(".pass").val()) {
                return true;
            } else {
                return false;
            }

        }

        $(document).ready(function () {

            $("#regForm").submit(function (e) {
                e.preventDefault();
            });

            $("#login_form").submit(function (e) {
                e.preventDefault();
            });

            $('form input').keydown(function (e) {
                if (e.keyCode == 13) {
                    e.preventDefault();
                    return false;
                }
            });

            $("#loginEmail").keyup(function () {
                if (validateEmail()) {
                    $(".userEmail").css("border", "2px solid #198754");
                    $("#env").removeClass("bg-danger");
                    $("#env").addClass("bg-success");
                }
                else {
                    $(".userEmail").css("border", "2px solid #dc3545");
                    $("#env").addClass("bg-danger");
                    $("#env").removeClass("bg-success");
                }

            });

            $("#loginPass").keyup(function () {
                // check
                if (validatePassword()) {
                    $(".pass").css("border", "2px solid #198754");
                    $("#lock").removeClass("bg-danger");
                    $("#lock").addClass("bg-success");
                } else {
                    $(".pass").css("border", "2px solid #dc3545");
                    $("#lock").addClass("bg-danger");
                    $("#lock").removeClass("bg-success");
                }
            });

            $("#conf-pass").keyup(function () {
                // check
                if (confirmPassword()) {
                    $("#conf-pass").css("border", "2px solid #198754");
                    $("#key").removeClass("bg-danger");
                    $("#key").addClass("bg-success");
                } else {
                    $("#conf-pass").css("border", "2px solid #dc3545");
                    $("#key").addClass("bg-danger");
                    $("#key").removeClass("bg-success");
                }
            });

            $("#userMobile").keyup(function () {
                // check
                if (validateMobile()) {
                    $("#userMobile").css("border", "2px solid #198754");
                    $("#pho").removeClass("bg-danger");
                    $("#pho").addClass("bg-success");
                } else {
                    $("#userMobile").css("border", "2px solid #dc3545");
                    $("#pho").addClass("bg-danger");
                    $("#pho").removeClass("bg-success");
                }
            });

            $("#regForm").keyup(function () {
                if (validateMobile() && confirmPassword() && validatePassword() && validateEmail()) {
                    $("#signUp_btn").removeClass("disabled", "btn-danger");
                    $("#signUp_btn").addClass("btn-success");
                } else {
                    $("#signUp_btn").addClass("disabled", "btn-danger");
                    $("#signUp_btn").removeClass("btn-success");
                }
            });

        });


        $(document).ready(function () {

            $("#signUp_btn").click(function () {
                    $.ajax({
                        url: "./php/register.php",
                        type: 'post',
                        data: $("#regForm input").serialize(),
                        success: function (data) {
                            if( data['status'] == 'success') {
                                $("#reg-message").addClass("text-success");
                                $("#reg-message").removeClass("text-danger");
                                $("#reg-message").html(data['message']);
                            }
                            else {
                                $("#reg-message").removeClass("text-success");
                                $("#reg-message").addClass("text-danger");
                                $("#reg-message").html(data['message']);
                            }
                        }
                    });
                });

            $("#logIn_btn").click(function () {
                    $.ajax({
                        url: "./php/login.php",
                        type: 'post',
                        data: $("#logForm input").serialize(),
                        success: function (data) {
                            if( data['status'] == 'success') {
                                console.log("Success");
                            }
                            else {
                                console.log("Error");
                            }
                        }
                    });
                });
        });





        // login page======================================================================

        function validateEmail2() {
            let email2 = $(".userEmailLog").val();
            let reg2 = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
            if (reg2.test(email2)) {
                return true;
            } else {
                return false;
            }

        }

        function validatePassword2() {
            let pass2 = $(".passLog").val();

            if (pass2.length >= 8) {
                return true;
            } else {
                return false;
            }

        }

        $(document).ready(function () {

            $(".userEmailLog").keyup(function () {
                if (validateEmail2()) {
                    $(".userEmailLog").css("border", "2px solid #198754");
                    $("#lock2").removeClass("bg-danger");
                    $("#lock2").addClass("bg-success");
                }
                else {
                    $(".userEmailLog").css("border", "2px solid #dc3545");
                    $("#lock2").addClass("bg-danger");
                    $("#lock2").removeClass("bg-success");
                }

            });

            $(".passLog").keyup(function () {
                // check
                if (validatePassword2()) {
                    $(".passLog").css("border", "2px solid #198754");
                    $("#key2").removeClass("bg-danger");
                    $("#key2").addClass("bg-success");
                } else {
                    $(".passLog").css("border", "2px solid #dc3545");
                    $("#key2").addClass("bg-danger");
                    $("#key2").removeClass("bg-success");
                }
            });

            $("#logForm").keyup(function () {
                if (validatePassword2() && validateEmail2()) {
                    $("#logIn_btn").removeClass("disabled", "btn-danger");
                    $("#logIn_btn").addClass("btn-success");
                } else {
                    $("#logIn_btn").addClass("disabled", "btn-danger");
                    $("#logIn_btn").removeClass("btn-success");
                }
            });
        });

    </script>
</body>

</html>