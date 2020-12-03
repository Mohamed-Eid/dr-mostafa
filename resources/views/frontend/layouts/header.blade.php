<!DOCTYPE html>
<html lang="en" dir="ltr ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ghoneim</title>
    <link rel="shortcut icon" href="{{ asset('frontend/Technomasr/Technomasr/img/logo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css"
        integrity="sha512-WEQNv9d3+sqyHjrqUZobDhFARZDko2wpWdfcpv44lsypsSuMO0kHGd3MQ8rrsBn/Qa39VojphdU6CMkpJUmDVw=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('frontend/Technomasr/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Technomasr/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Technomasr/css/basic.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&family=Monda:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="{{ asset('frontend/Technomasr/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Technomasr/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Technomasr/css/main.css') }}">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{ asset('frontend/Technomasr/owl-carousel/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/Technomasr/owl-carousel/owl.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/Technomasr/owl-carousel/owl.transitions.css') }}" />
</head>

<body>
    <!-- start side-menue -->
    <section>
        <div id="btn" class="">
            <div id='top'></div>
            <div id='middle'></div>
            <div id='bottom'></div>
        </div>

        <div id="box">
            <div id="items" class="services-dropdown">
                <ul id="accordion" class="accordion">
                    <li class="nav-item">
                        <div class="item">
                            <a href="index.php" class=" active">Home</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="item">
                            <a href="login.php">Patient login</a>
                        </div>
                    </li>
                    <li>
                        <div class="link">
                            </i>Our services <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu">
                            <li><a href="services.php#implement" data-value="implement">Dental Implant</a></li>
                            <li><a href="services.php#root" data-value="root">Orthodontic treatment</a></li>
                            <li><a href="services.php#orth" data-value="orth">Root canal treatment</a></li>
                            <li><a href="services.php#veneers" data-value="veneers">Veneers & cosmetics</a></li>
                            <li><a href="services.php#bleach" data-value="bleach">Bleaching</a></li>
                            <li><a href="services.php#pediatric" data-value="pediatric">Pediatric</a></li>
                            <li><a href="services.php#crowns" data-value="crowns">Crowns & Bridges</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <div class="item">
                            <a href="team.php">Our team</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="item">
                            <a href="about.php">About Us</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="item">
                            <a href="gallery.php">Gallery</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="item">
                            <a href="course.php">Educational courses</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="item">
                            <a href="appointment.php">Request appointment</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="item">
                            <a href="contact.php"> Contact Us </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end side-menue -->

    <!-- start page -->
    <div id="page-wrapper">

        <!-- start weekly offer -->
        <section class="custom-container container-fluid p-t-10 p-b-10">
            <div class="offer">
                <div class="row weekly-box">
                    <div class="logo col-sm-4 col-md-1">
                        <a href="index.php">
                            <img class="logoUpper" src="{{ asset('frontend/Technomasr/img/logo.png') }}" alt="">
                        </a>
                    </div>

                    <div class=" weekly-offer col-sm-12 col-md-6">
                        <a href="#">
                            <img class="add w-100" src="{{ asset('frontend/Technomasr/img/add.jpg') }}" alt="">
                        </a>
                    </div>

                    <div class="socialParent col-sm-8 col-md-5  pt-2">
                        <ul>
                            <li><a href="call:01000000001"> <i class="fas fa-phone-alt"
                                        style="font-size: 17px; margin: 0 0.5em 0 0.5em"></i> 01000000001 </a></li>
                            <li><a href="#"> <i class="far fa-envelope"
                                        style="font-size: 17px; margin: 0 0.5em 0 0.5em"></i> example_email@example.com
                                </a></li>
                        </ul>
                        <ul class="socialUpper">
                            <li>
                                <a href="" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
        <!-- End weekly offer -->
