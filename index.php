<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="Bhatnagar Informatics, Website, Website development, html, css, training, learn website development, learn php, learn html css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bhatnagar Informatics - Software Development Company</title>

    <meta name="description" content="Bhatnagr informatics is a Software Development Company provides solutions to digitalize your organization." />
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="owl/owl.carousel.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="owl/jquery.min.js"></script>
    <script src="owl/owl.carousel.js"></script>

</head>

<body>

 
  <header>
        <nav class="navbar ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="Site-logo" href="/">Bhatnagar Informatics</a>
                </div>
                <!--div class="search-sec">
                    <div class="join-user">
                        <div class="join-login"><a href="register.html"><span class="color-red"><i class="fa fa-user" aria-hidden="true"></i></span>Join</a>
                    <a href="login.html"><span class="color-green"><i class="fa fa-sign-in" aria-hidden="true"></i></span>Login</a>
                </div>
                <div class="user-logout" style="display: none">
                    <img src="images/user.png" class="img-responsive"> <span class="user-nm">Hello PK</span>
                    <a href="login.html"><span class="color-green"><i class="fa fa-sign-out" aria-hidden="true"></i></span>Logout</a>
                </div></div-->                    
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about_us">About Us </a></li>                   
                        <li><a href="#visit_sec">Visit Us</a></li>
                        <li><a href="#contact_sec">Contact Us</a></li>
                       <!--    <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact Us <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Feedback & Contact us</a></li>
                            </ul>
                        </li>-->
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- /.navbar -->
    </header>


    <!-- Slider Stat -->

    <section class="home-slider">
        <div class="owl-carousel">
            <div class="item" id="about_us">
                <p>Bhatnagar Informatics</p>
            </div>
            <div class="item">
                <p>We are a web development company.</p>
            </div>
            <div class="item">
                <p>We use latest technology to build the websites.</p>
            </div>
            <div class="item">
                <p>We are a team of most talented and expert web developer</p>
            </div>
        </div>

        <script>
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items: 1,
                loop: true,
                margin: 0,
                nav: true,
                smartSpeed: 900,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
        </script>
    </section>

    <!-- /.Slider End -->

    <!-- About Us -->
    <section class="aboutus-sec">
        <div class="about-heading theme-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>About Us</h2>
                <p>Digitalize your Business, get more clients through online platform</p>
                <p>Want to Become Web Developer <a href="#contact">Visit Us<a> </p>            
                </div>
            </div>
        </div>
            </section>
    <!-- /.About Us -->

    <!-- Blog Sec -->

                </div>
            </div>
        </div>
    </section>
    <!-- /.Blog Sec -->

    <!-- update Sec -->
   
    <!-- /.Upade Sec-->

    <!-- comment Sec -->
  

    <!-- /.Comment Sec-->

    <!-- contact Us -->
    <section class="visit-sec" >
        <div class="contact theme-heading">
            <div class="container">
                <div class="row" id="visit_sec">
                    <div class="col-md-12">
                        <h2>Visit Us</span></h2>
                        <p>#4, Model Town, Kurali, Punjab (140103)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-contant-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="ctn-form">
                            <img width="100%" src="images/mappng.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.contact Us -->

    <section class="contact-sec" id="contact_sec">
        <div class="contact theme-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>GET IN TOUCH <span>WITH US</span></h2>
                        <p>Call @+917528965550</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-contant-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="ctn-form">
                                <form class="" method="POST" action="contact.php">
                                    <div class="row">
                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <input type="text" id="user" name="first" class="control-inputs" minlength="" maxlength="100" autocomplete="off" value="" required="required">
                                                <label for="first" class="control-label">
                                                    first Name
                                                </label>
                                                <i class="bar"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" id="Last" name="Last" class="control-inputs" minlength="" maxlength="100" autocomplete="off" value="" required="required">
                                                <label for="Last" class="control-label">
                                                    Last Name
                                                </label>
                                                <i class="bar"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="email" id="Email" name="Email" class="control-inputs" minlength="" maxlength="100" autocomplete="off" value="" required="required">
                                                <label for="Email" class="control-label">
                                                    Email
                                                </label>
                                                <i class="bar"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="tel" id="Phone" name="Phone" class="control-inputs" minlength="" maxlength="100" autocomplete="off" value="" required="required">
                                                <label for="Phone" class="control-label">
                                                    Phone
                                                </label>
                                                <i class="bar"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" id="Subject" name="Subject" class="control-inputs" minlength="" maxlength="100" autocomplete="off" value="" required="required">
                                                <label for="Subject" class="control-label">
                                                    Subject
                                                </label>
                                                <i class="bar"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" id="Messageer" name="Message" class="control-inputs" minlength="" maxlength="100" autocomplete="off" value="" required="required">
                                                <label for="Message" class="control-label">
                                                    Message
                                                </label>
                                                <i class="bar"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="submit" id="submit-user" name="" class="btn-send btn-green" value="Send">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3>Company</h3>
                    <p>Bhatnagar Informatics is a Web development company, which provides all solutions to digitalize your business.
                        We are specialized in organization management systems, school management system, Bookings management systems etc.
                    </p>
                </div>
                <div class="col-sm-4">
                    <h3>Contact Us</h3>
                    <p><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>#4 Model Town, Kurali, Punjab, 140103</p>

                    <p><span><i class="fa fa-phone" aria-hidden="true"></i></span>+917528965550</p>

                    <p><span><i class="fa fa-envelope" aria-hidden="true"></i></span>bhatnagar.asso0605@gmail.com</p>


                </div>

                 <div class="col-sm-4">
                    <h3>Careers</h3>
                    <p>We are hiring!!! (Submit contact us form above, we will reach you.)</p>

                    <p><span></span>PHP Developer</p>

                    <p><span></span>Content Writer</p>

                    <p><span></span>Web Desiger</p>


                </div>
            </div>
        </div>
        <div class="footer-bottom">© 20179 Bhatnagar Informatics. All Rights Reserved.</div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://use.fontawesome.com/f58ad76126.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>