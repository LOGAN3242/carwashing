<?php //error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Car Wash management System | About Us Page</title>
    <link rel="icon" type="image/png" href="img/icon1.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/icon1.png" sizes="16x16">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include_once('includes/header.php'); ?>
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                </div>
                <div class="col-12">
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="img/about.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header text-left">
                        <p>About Us</p>
                        <h2>car washing and detailing</h2>
                    </div>
                    <div class="about-content">
                        <?php
                        $sql = "SELECT type,detail from webpages where type='aboutus'";
                        $query = $dbh->prepare($sql);
                        $query->execute();
                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                        foreach ($results as $result) {
                        ?>

                            <p>
                                <?php echo $result->detail; ?>
                            </p>
                        <?php } ?>
                        <hr />
                        <ul>
                            <li><i class="far fa-check-circle"></i>Seats washing</li>
                            <li><i class="far fa-check-circle"></i>Vacuum cleaning</li>
                            <li><i class="far fa-check-circle"></i>Interior wet cleaning</li>
                            <li><i class="far fa-check-circle"></i>Window wiping</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- vision End -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-lg-6">
                    <div class="section-header text-left">
                        <p>About Us</p>
                        <h2>Our Vision</h2>
                    </div>
                    <div class="about-content">
                        <!-- <?php
                        $sql = "SELECT type,detail from webpages where type='aboutus'";
                        $query = $dbh->prepare($sql);
                        $query->execute();
                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                        foreach ($results as $result) {
                        ?> -->

                            <p>Our vision is to provide the highest quality car washing and detailing services to our customers while maintaining a commitment to environmental sustainability. We strive to exceed customer expectations by utilizing the latest technology and employing highly trained staff who take pride in their work.
                                <!-- <?php echo $result->detail; ?> -->
                            </p>
                        <!-- <?php } ?> -->
                        <!-- <hr /> -->
                    

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="img/vision.jpg" alt="Image">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<!-- our Mission -->

    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="img/mission.png" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header text-left">
                        <p>About Us</p>
                        <h2>Our Mission</h2>
                    </div>
                    <div class="about-content">
                        <!-- <?php
                        $sql = "SELECT type,detail from webpages where type='aboutus'";
                        $query = $dbh->prepare($sql);
                        $query->execute();
                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                        foreach ($results as $result) {
                        ?> -->

                            <p>
                                <!-- <?php echo $result->detail; ?> -->
                                Our mission is to make every customer's experience exceptional by providing a clean, safe, and welcoming environment, and to build long-lasting relationships through outstanding customer service. We aim to be the go-to destination for car washing and detailing services in our community and beyond.
                            </p>
                        <!-- <?php } ?>
                        <hr /> -->
                        <!-- <ul>
                            <li><i class="far fa-check-circle"></i>Seats washing</li>
                            <li><i class="far fa-check-circle"></i>Vacuum cleaning</li>
                            <li><i class="far fa-check-circle"></i>Interior wet cleaning</li>
                            <li><i class="far fa-check-circle"></i>Window wiping</li>
                        </ul> -->

                    </div>
                </div>
            </div>
        </div>
    </div>







    <?php include_once('includes/footer.php'); ?>
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
</body>

</html>