<?php
include_once '../database/dbConn.php';
session_start();

$studEmail =$_SESSION['studEmail'];
$studId =$_SESSION['studid'];
$studCamp =$_SESSION['campus'];



if (isset($_GET['id'])&&isset($_GET['type'])&&isset($_SESSION['studid'])&&isset($_SESSION['studEmail']))
{

            $type = $_GET['type'];


            if ($type == "cancel")
            {
                $id = $_GET['id'];

                $sql = "DELETE FROM tripbook WHERE tripID = '$id' AND studID = '$studId';";
                mysqli_query($conn,$sql);

                $_SESSION['message'] = "Trip Successfully Cancelled";
                $_SESSION['msg_type'] = "success";

                echo "<script>location.replace('mybooking.php');</script>";
                exit();
            }


}


?>
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
                                <a href="index.php" class="nav-item nav-link ">Home</a>
                                <a href="booking.php" class="nav-item nav-link ">Make Bus Booking</a>
                                <a href="mybooking.php" class="nav-item nav-link active">View Booking</a>
                                <a href="Profile.php" class="nav-item nav-link ">Profile</a>
                                  <a href="logout.php" class="nav-item nav-link ">Logout</a>
                            </div>

                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->






            <!-- Top Feature End-->



            <section id="team" data-stellar-background-ratio="0.5">
<div class="container">
<div class="row ">
  <div class="col-lg-12 text-center rounded border light my-5">
    <h4>Manager Bookings</h4>
    <br>
    <?php

                 if (isset($_SESSION['message'])): ?>
                 <div class="alert alert-<?=$_SESSION['msg_type']?>">

                   <?php
                       echo $_SESSION['message'];
                       unset($_SESSION['message']);
                   ?>

               </div>
             <?php endif ?>
</div>
<div class="col-lg-9">
<table class="table">
<thead class="text-center">
<tr>
<th  scope="col" style="text-align:center">BOOKING ID</th>
<th scope="col" style="text-align:center">FROM</th>
<th scope="col" style="text-align:center">TO</th>
<th scope="col" style="text-align:center">TIME</th>
<th scope="col" style="text-align:center"></th>
<th scope="col" style="text-align:center"></th>




<th scope="col"></th>


</tr>
</thead>
<tbody class="text-center">
<?php

        $sql = "SELECT* FROM tripbook WHERE studID = '$studId'";
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        $countB = 0;
        if ($num >0)
        {


          while ($row = mysqli_fetch_assoc($result))
          {

              $tId = $row['tripID'];
              $t = $row['tripTime'];
              $combo = $row['tripName'];
              $toCampus = substr($combo,
                           3+strpos($combo," to "));
              $frmCampus = substr($combo,0,
                                 strpos($combo," to "));
                $countB = $countB + 1;

                echo "
                <tr>
                <td>
                    $tId
                </td>
                <td>
                    $frmCampus
                </td>
                <td>
                    $toCampus
                </td>
                <td>
                    $t
                </td>
                <td>

                </td>
                <td>
                    <a class='btn btn-danger' href='mybooking.php?type=cancel&id=$tId'>Cancel</a>
                </td>




                </tr>";
          }
        }
        else
        {
                           echo "<td colspan='9'>No product found</td>";
        }


?>

</tbody>
</table>


</div>
<div class="col-lg-3">
<div class="border bg-light rounded p-4">
          <h6 class="text-center"><?php echo "Number of Trip: ".$countB; ?></h6>

</div>

</div>
</div>
</div>
</section>



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
