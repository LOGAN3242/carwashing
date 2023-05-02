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
    <link href="img/favicon.ico" rel="icon">

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
</head>
<!-- <style>
    @keyframes slidy {
        0% {
            left: 0%;
        }

        20% {
            left: 0%;
        }

        25% {
            left: -100%;
        }

        45% {
            left: -100%;
        }

        50% {
            left: -200%;
        }

        70% {
            left: -200%;
        }

        75% {
            left: -300%;
        }

        95% {
            left: -300%;
        }

        100% {
            left: -400%;
        }
    }


    div#slider {
        overflow: hidden;
    }

    div#slider figure img {
        width: 20%;
        float: left;
    }

    div#slider figure {
        position: relative;
        width: 500%;
        margin: 0;
        left: 0;
        text-align: left;
        font-size: 0;
        animation: 30s slidy infinite;
    }
</style> -->
<style>
    .one-page-arrow {
        position: absolute;
        z-index: 3;
        bottom: 20px;
        left: 50%;
        margin-left: -16px;
        width: 32px;
        height: 32px;
        font-size: 32px;
        text-align: center;
        color: #222
    }
</style>

<body>
    <?php include_once('includes/header.php'); ?>

    <!-- Carousel Start -->
    <!-- <div class="carousel">
        <div class="container-fluid" style="height:50rem">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img style="height:50%!important;" src="img/carousel-1.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h3>Washing & Detailing</h3>
                        <h1>Keep your Car Newer</h1>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img style="height:50%!important;" src="img/carousel-2.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h3>Washing & Detailing</h3>
                        <h1>Quality service for you</h1>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img style="height:50%!important;" src="img/carousel-3.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h3>Washing & Detailing</h3>
                        <h1>Exterior & Interior Washing</h1>

                    </div>
                </div>

            </div>
        </div>
    </div> -->
    <!-- <div id="carouselExampleIndicators" class="carousel slide" data-mdb-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="d-block w-100" alt="Wild Landscape" />
            </div>
            <div class="carousel-item">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="d-block w-100" alt="Camera" />
            </div>
            <div class="carousel-item">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp" class="d-block w-100" alt="Exotic Fruits" />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->
    <!-- Carousel End -->
    <!-- 
    <div id="slider">
        <figure>
            <img src="img/carousel-1.jpg" alt>
            <img src="img/carousel-2.jpg" alt>
            <img src="img/carousel-3.jpg" alt>
        </figure>
    </div> -->


    <a href="#" data-scrollto="#content" data-offset="100" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>


    <!-- About Start -->
    <div class="about" id="content">
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


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>What We Do?</p>
                <h2>Premium Washing Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <!-- <div style="text-align: center;"> -->
                        <i class="flaticon-car-wash-1" style="padding-left: 20%;"></i>
                        <!-- </div> -->
                        <h3>Exterior Washing</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-car-wash" style="padding-left: 20%;"></i>
                        <h3>Interior Washing</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-vacuum-cleaner" style="padding-left: 23%;"></i>
                        <h3>Vacuum Cleaning</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-seat" style="padding-left: 12%;"></i>
                        <h3>Seats Washing</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-car-service" style="padding-left: 17%;"></i>
                        <h3>Window Wiping</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-car-service-2" style="padding-left: 12%;"></i>
                        <h3>Wet Cleaning</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-car-wash" style="padding-left: 12%;"></i>
                        <h3>Oil Changing</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-brush-1" style="padding-left: 14%;"></i>
                        <h3>Brake Reparing</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Facts Start -->
    <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="fa fa-map-marker-alt"></i>
                        <div class="facts-text">
                            <h3 data-toggle="counter-up">25</h3>
                            <p>Service Points</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="fa fa-user"></i>
                        <div class="facts-text">
                            <h3 data-toggle="counter-up">350</h3>
                            <p>Engineers & Workers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="fa fa-users"></i>
                        <div class="facts-text">
                            <h3 data-toggle="counter-up">1100</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="fa fa-check"></i>
                        <div class="facts-text">
                            <h3 data-toggle="counter-up">5000</h3>
                            <p>Projects Completed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Price Start -->
    <div class="price">
        <div class="container">
            <div class="section-header text-center">
                <p>Washing Plan</p>
                <h2>Choose Your Plan</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="price-item">
                        <div class="price-header">
                            <h3>Basic Cleaning</h3>
                            <h2><span>
                                    <p>&#x20B9;</p>
                                </span><strong>400</strong></h2>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                <li><i class="far fa-times-circle"></i>Interior Wet Cleaning</li>
                                <li><i class="far fa-times-circle"></i>Window Wiping</li>
                            </ul>
                        </div>
                        <div class="price-footer">
                            <!-- <a class="btn btn-custom" data-toggle="modal" data-target="#myModal">Book Now</a> -->
                            <a class="btn btn-custom" href="appointment.php">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-item featured-item">
                        <div class="price-header">
                            <h3>Premium Cleaning</h3>
                            <h2><span>
                                    <p>&#x20B9;</p>
                                </span><strong>800</strong></h2>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                <li><i class="far fa-times-circle"></i>Window Wiping</li>
                            </ul>
                        </div>
                        <div class="price-footer">
                            <!-- <a class="btn btn-custom" data-toggle="modal" data-target="#myModal">Book Now</a> -->
                            <a class="btn btn-custom" href="appointment.php">Book Now</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-item">
                        <div class="price-header">
                            <h3>Complex Cleaning</h3>
                            <h2><span>
                                    <p>&#x20B9;</p>
                                </span><strong>1100</strong></h2>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                <li><i class="far fa-check-circle"></i>Window Wiping</li>
                            </ul>
                        </div>
                        <div class="price-footer">
                            <!-- <a class="btn btn-custom" data-toggle="modal" data-target="#myModal">Book Now</a> -->
                            <a class="btn btn-custom" href="appointment.php">Book Now</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Price End -->

    <!-- Client Testimonial Start -->
    <div class="price">
        <div class="container">
            <div class="section-header text-center">
                <p>Customers Feedback</p>
                <h2>Testimonial</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <figure class="snip1390">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/profile-sample3.jpg" alt="profile-sample3" class="profile" />
                        <figcaption>
                            <h2>Eleanor Crisp</h2>
                            <h4>UX Design</h4>
                            <blockquote>Dad buried in landslide! Jubilant throngs fill streets! Stunned father inconsolable - demands recount!</blockquote>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4">
                    <figure class="snip1390 hover"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/profile-sample5.jpg" alt="profile-sample5" class="profile" />
                        <figcaption>
                            <h2>Gordon Norman</h2>
                            <h4>Accountant</h4>
                            <blockquote>Wormwood : Calvin, how about you? Calvin : Hard to say ma'am. I think my cerebellum has just fused. </blockquote>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4">
                    <figure class="snip1390"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/profile-sample6.jpg" alt="profile-sample6" class="profile" />
                        <figcaption>
                            <h2>Sue Shei</h2>
                            <h4>Public Relations</h4>
                            <blockquote>The strength to change what I can, the inability to accept what I can't and the incapacity to tell the difference.</blockquote>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- Client Testimonial -->




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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        $(".hover").mouseleave(
            function() {
                $(this).removeClass("hover");
            }
        );
    </script>
</body>

</html>