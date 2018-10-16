<?php

require_once("admin/User.php");

session_start();

if(!empty($_SESSION['userid'])){
    header("location: http://localhost/portfolio/main.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portfolio</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->
            <div class="top_bar">
                <div class="top_bar_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Content -->
            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container">
                                    <a href="#">
                                        <div class="logo_text">E<span>learning</span></div>
                                    </a>
                                </div>
                                <nav class="main_nav_contaner ml-auto">
                                    <ul class="main_nav">
                                        <li><a href="#" data-toggle="modal" data-target="#register">Register</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>
                                    </ul>




                                    <!-- Hamburger -->
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Search Panel Its is Important things don't delete-->
            <div class="header_search_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                                <form action="#" class="header_search_form">
                                    <input type="search" class="search_input" placeholder="Search" required="required">
                                    <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Home -->

        <div class="home">
            <div class="home_slider_container">

                <!-- Home Slider -->
                <div class="owl-carousel owl-theme home_slider">

                    <!-- Home Slider Item -->
                    <div class="owl-item">
                        <div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
                        <div class="home_slider_content">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <div class="home_slider_title">Make Creation Great Again</div>
                                        <div class="home_slider_subtitle">You Can Make Our Future </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Home Slider Item -->
                    <div class="owl-item">
                        <div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
                        <div class="home_slider_content">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <div class="home_slider_title">Make Creation Great Again</div>
                                        <div class="home_slider_subtitle">You Can Make Our Future </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Home Slider Item -->
                    <div class="owl-item">
                        <div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
                        <div class="home_slider_content">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <div class="home_slider_title">Make Creation Great Again</div>
                                        <div class="home_slider_subtitle">You Can Make Our Future</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Home Slider Nav -->

            <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
            <div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
        </div>

        <!-- Features -->

        <div class="features">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <h2 class="section_title">Welcome To Our E-Learning</h2>
                            <div class="section_subtitle">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu.
                                    Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
        <!-- Footer -->

        <footer class="footer">
            <div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
            <div class="container">
                <div class="row footer_row">
                    <div class="col">
                        <div class="footer_content">
                            <div class="row">

                                <div class="col-lg-3 footer_col">

                                    <!-- Footer About -->
                                    <div class="footer_section footer_about">
                                        <div class="footer_logo_container">
                                            <a href="#">
                                                <div class="footer_logo_text">E<span>lerning</span></div>
                                            </a>
                                        </div>
                                        <div class="footer_about_text">
                                            <p>Lorem ipsum dolor sit ametium, consectetur adipiscing elit.</p>
                                        </div>
                                        <div class="footer_social">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3 footer_col">

                                    <!-- Footer Contact -->
                                    <div class="footer_section footer_contact">
                                        <div class="footer_title">Contact Us</div>
                                        <div class="footer_contact_info">
                                            <ul>
                                                <li>Email: Info.deercreative@gmail.com</li>
                                                <li>Phone: +(88) 111 555 666</li>
                                                <li>40 Baria Sreet 133/2 New York City, United States</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3 footer_col">

                                    <!-- Footer links -->
                                    <div class="footer_section footer_links">
                                        <div class="footer_title">Contact Us</div>
                                        <div class="footer_links_container">
                                            <ul>
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="#">Features</a></li>
                                                <li><a href="courses.html">Courses</a></li>
                                                <li><a href="#">Events</a></li>
                                                <li><a href="#">Gallery</a></li>
                                                <li><a href="#">FAQs</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3 footer_col clearfix">

                                    <!-- Footer links -->
                                    <div class="footer_section footer_mobile">
                                        <div class="footer_title">Mobile</div>
                                        <div class="footer_mobile_content">
                                            <div class="footer_image"><a href="#"><img src="images/mobile_1.png" alt=""></a></div>
                                            <div class="footer_image"><a href="#"><img src="images/mobile_2.png" alt=""></a></div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row copyright_row">
                    <div class="col">
                        <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
                            <div class="cr_text">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script>
                                All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i>
                                by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                            <div class="ml-lg-auto cr_links">
                                <ul class="cr_list">
                                    <li><a href="#">Copyright notification</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <!-- modal -->
    <div class="modal fade" id="register" role="dialog" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="demoModalTitle">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="container">

                        <form method="post" action="UserAction.php">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <input type="submit" value="SUBMIT" class="btn btn-primary" name="add"> 
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>     

                        </form>
                    </div>

                </div>
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->
    <div class="modal fade" id="login" role="dialog" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="demoModalTitle">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">

                        <form action="UserAction.php" method="post">
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Username" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="pass" placeholder="Password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary" name="login">SUBMIT</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                        </form>

                    </div>

                </div>
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>



    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>