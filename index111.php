<?php //error_reporting(0);
include('includes/config.php');

if (isset($_POST['book'])) {
    $ptype = $_POST['packagetype'];
    $wpoint = $_POST['washingpoint'];
    $fname = $_POST['fname'];
    $mobile = $_POST['contactno'];
    $date = $_POST['washdate'];
    $time = $_POST['washtime'];
    $message = $_POST['message'];
    $status = 'New';
    $bno = mt_rand(100000000, 999999999);
    $sql = "INSERT INTO carwashbooking(bookingId,packageType,carWashPoint,fullName,mobileNumber,washDate,washTime,message,status) VALUES(:bno,:ptype,:wpoint,:fname,:mobile,:date,:time,:message,:status)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':bno', $bno, PDO::PARAM_STR);
    $query->bindParam(':ptype', $ptype, PDO::PARAM_STR);
    $query->bindParam(':wpoint', $wpoint, PDO::PARAM_STR);
    $query->bindParam(':fname', $fname, PDO::PARAM_STR);
    $query->bindParam(':mobile', $mobile, PDO::PARAM_STR);
    $query->bindParam(':date', $date, PDO::PARAM_STR);
    $query->bindParam(':time', $time, PDO::PARAM_STR);
    $query->bindParam(':message', $message, PDO::PARAM_STR);
    $query->bindParam(':status', $status, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {

        echo '<script>alert("Your booking done successfully. Booking number is "+"' . $bno . '")</script>';
        echo "<script>window.location.href ='washing-plans.php'</script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again.');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Car Wash management System | Home Page</title>
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="img/icon1.png"> -->
    <link rel="icon" type="image/png" href="img/icon1.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/icon1.png" sizes="16x16">


    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" /> -->

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style_slider.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/dark.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">


</head>



<body>
    <?php include_once('includes/header.php'); ?>

    <!-- Carousel Start -->

    <section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header">
        <div class="slider-inner">
            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark">
                        <div class="">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-animate="fadeInUp">Welcome to CAr wash</h2>
                                <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Create just
                                    what you need for your Perfect Website. Choose from a wide range of Elements
                                    &amp; simply put them on your own Canvas.</p>
                            </div>
                        </div>
                        <div class="swiper-slide-bg" style="background-image: url('img/carousel-1.jpg');">
                        </div>
                    </div>
                    <div class="swiper-slide dark">
                        <div class="container">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-animate="fadeInUp">Beautifully Flexible</h2>
                                <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Looks
                                    beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with
                                    Responsive functionality that can be adapted to any screen size.</p>
                            </div>
                        </div>
                        <!-- <div class="video-wrap">
                                <video id="slide-video" poster="images/videos/deskwork.jpg" preload="auto" loop autoplay
                                    muted>
                                    <source src='images/videos/deskwork.webm' type='video/webm' />
                                    <source src='images/videos/deskwork.mp4' type='video/mp4' />
                                </video>
                                <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                            </div> 
                         </div> -->
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="slider-caption">
                                    <h2 data-animate="fadeInUp">Great Performance</h2>
                                    <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">You'll be
                                        surprised to see the Final Results of your Creation &amp; would crave for more.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide-bg" style="background-image: url('img/carousel-2.jpg'); background-position: center top;">
                            </div>
                        </div>
                    </div>
                    <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
                    <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
                </div>
                <a href="#" data-scrollto="#content" data-offset="100" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
            </div>
        </div>
    </section>








    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="img/about1.webp" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header text-left">
                        <p>About Us</p>
                        <h2>car washing and detailing</h2>
                    </div>
                    <div class="about-content">
                        <p>
                            Lorem ipsum dolor sit amet elit. In vitae turpis. Donec in hendre dui, vel blandit massa. Ut vestibu suscipi cursus. Cras quis porta nulla, ut placerat risus. Aliquam nec magna eget velit luctus dictum
                        </p>
                        <!-- <ul>
                            <li><i class="far fa-check-circle"></i>Seats washing</li>
                            <li><i class="far fa-check-circle"></i>Vacuum cleaning</li>
                            <li><i class="far fa-check-circle"></i>Interior wet cleaning</li>
                            <li><i class="far fa-check-circle"></i>Window wiping</li>
                        </ul> -->
                        <a class="btn btn-custom" href="about.php">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->




    <!-- Footer Start -->
    <?php include_once('includes/footer.php'); ?>

    <!--Model-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Car Wash Booking</h4>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <p>
                            <select name="packagetype" required class="form-control">
                                <option value="">Package Type</option>
                                <option value="1">BASIC CLEANING ($10.99)</option>
                                <option value="2">PREMIUM CLEANING ($20.99)</option>
                                <option value="3 ">COMPLEX CLEANING($30.99)</option>
                            </select>

                        <p>
                            <select name="washingpoint" required class="form-control">
                                <option value="">Select Washing Point</option>
                                <?php $sql = "SELECT * from washingpoints";
                                $query = $dbh->prepare($sql);
                                $query->execute();
                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                foreach ($results as $result) {               ?>
                                    <option value="<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->washingPointName); ?> (<?php echo htmlentities($result->washingPointAddress); ?>)</option>
                                <?php } ?>
                            </select>
                        </p>
                        <p><input type="text" name="fname" class="form-control" required placeholder="Full Name"></p>
                        <p><input type="text" name="contactno" class="form-control" pattern="[0-9]{10}" title="10 numeric characters only" required placeholder="Mobile No."></p>
                        <p>Wash Date <br /><input type="date" name="washdate" required class="form-control"></p>
                        <p>Wash Time <br /><input type="time" name="washtime" required class="form-control"></p>
                        <p><textarea name="message" class="form-control" placeholder="Message if any"></textarea></p>
                        <p><input type="submit" class="btn btn-custom" name="book" value="Book Now"></p>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
    <script src="js/plugins.min.js"></script>
    <script src="js/function.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <!-- <script>
        $(".hover").mouseleave(
            function() {
                $(this).removeClass("hover");
            }
        );
    </script> -->
</body>

</html>