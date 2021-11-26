
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
          <title>TUT Booking System</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Law Firm Website Template" name="keywords">
        <meta content="Law Firm Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <style media="screen">
        ============
/*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
.login,
.image {
min-height: 100vh;
}

.bg-image {
background-image: url('https://bootstrapious.com/i/snippets/sn-page-split/bg.jpg');
background-size: cover;
background-position: center center;
}

        </style>
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.php">

                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="top-bar-right">


                                <div class="social">
                                    <a href="https://twitter.com/HealthZA"><i class="fab fa-twitter"></i></a>


                                  <a href="https://api.whatsapp.com/send/?phone=27600123456&text=Hi&app_absent=0"><i class="fab fa-whatsapp"></i></a>
                                    <a href="https://www.instagram.com/sacoronavirus.co.za/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="index.php" class="nav-item nav-link active">Home</a>
                                <a href="booking.php" class="nav-item nav-link">Make Bus Booking</a>
                                <a href="mybooking.php" class="nav-item nav-link">View Booking</a>
                                <a href="Profile.php" class="nav-item nav-link ">Profile</a>
                                  <a href="logout.php" class="nav-item nav-link ">Logout</a>
                            </div>

                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->





            <!-- Top Feature Start-->
            <div class="feature-top">
                <div class="container-fluid">
                    <div class="row align-items-center">
                      <h3 class="text-center">Corona Stats</h3>
                          <div style="width: 100%; background-color: white; padding: 10px 0px 10px 0px; text-align: center; box-sizing: border-box;">
                          <a style="display: flex; justify-content: center; flex-wrap: wrap; width:100%; text-decoration:none; text-align:center;" href="https://sacoronavirus.co.za/">
                          <div class="main-corona-banner" style="display: inline-block; background-color: white; flex-grow: 2;">
                          <img style="width: 294px !important;" src="https://embracecloud.s3.eu-west-2.amazonaws.com/main.png" alt="South African Government COVID-19 Portal" />
                          </div>
                          <div style="display: flex; flex-grow: 4; justify-content: center; flex-wrap: wrap;">
                          <div style="display: flex; flex-grow: 1; justify-content: space-around; flex-wrap: wrap;">
                          <div class="corona-icon" style="display: inline-block; flex-grow: 0; background-color: white;">
                            <img style="width: 179px !important;" src="https://embracecloud.s3.eu-west-2.amazonaws.com/tested.png" alt="South Africa COVID-19 Tested Numbers" />
                          </div>
                          <div class="corona-icon" style="display: inline-block; flex-grow: 0; background-color: white;">
                            <img style="width: 179px !important;" src="https://embracecloud.s3.eu-west-2.amazonaws.com/positive.png" alt="South Africa COVID-19 Positive Cases" />
                          </div>
                          </div>
                          <div style="display: flex; flex-grow: 1; justify-content: space-around; flex-wrap: wrap;">
                          <div class="corona-icon" style="display: inline-block; flex-grow: 0; background-color: white;">
                            <img style="width: 179px !important;" src="https://embracecloud.s3.eu-west-2.amazonaws.com/cured.png" alt="South Africa COVID-19 Recovered Numbers" />
                          </div>
                          <div class="corona-icon" style="display: inline-block; flex-grow: 0; background-color: white;">
                            <img style="width: 179px !important;" src="https://embracecloud.s3.eu-west-2.amazonaws.com/deaths.png" alt="South Africa COVID-19 Death Numbers" />
                          </div>
                          </div>
                          </div>
                          </a>
                          <div style="text-align: center; background-color: white;">
                          <a style="font-family: arial; text-decoration: none; font-size: 11px; color: #878787;" href="https://embrace.co.za/sacoronavirus-link"></a>
                          </div>
                          </div>
                    </div>
                </div>
            </div>
            <!-- Top Feature End-->


            <!-- About Start -->

            <!-- About End -->





            <!-- Feature Start -->

            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>

                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="covid-Photos/dsc_5185.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">We fight for your Health</h1>
                            <p class="animated fadeInRight">Together we can Beat Covid-19</p>
                            <a class="btn animated fadeInUp" href="#">Get free consultation</a>
                        </div>
                    </div>



                    <div class="carousel-item">
                        <img src="covid-Photos/amogelang.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">We fight for your privilege</h1>
                            <p class="animated fadeInRight">LET'S BEAT CORONAVIRUS</p>
                            <a class="btn animated fadeInUp" href="#">Get free consultation</a>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->
            <!-- Carousel End -->
            <!-- Feature End -->


            <!-- Team Start -->





            <script type="text/javascript">
                           function validate() {

                                   var stud = document.getElementById('studnum').value;
                                   if (stud != "")
                                   {
                                         document.getElementById('e').value = stud+"@tut4life.ac.za";
                                   }
                                   else
                                   {
                                     document.getElementById('e').value = "";
                                   }



                           }
               </script>







            <!-- Footer Start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-about">
                                <h2>About Us</h2>
                                <p>
                                    At TUT, we embrace engaged scholarship whereby learning, teaching, research and engagement is integrated with our everyday realities. Our University is committed towards breaking down the ivory towers of academia by finding authentic and enduring solutions to our communities' most pressing problems.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <div class="row">

                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="">About Us</a>

                                <a href="">FAQs</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h2>Get In Touch</h2>
                                <p><i class="fa fa-map-marker-alt"></i> 2 Aubrey Matlakala St, Soshanguve - K, Soshanguve, 0001</p>
                                <p><i class="fa fa-phone-alt"></i>+27 64 770 7188</p>
                                <p><i class="fa fa-envelope"></i>cphaandile@gmail.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#">TUT</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Designed By <a href="#">Siyabonga Gumede</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
