<?php error_reporting(0);
include('includes/config.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO enquiry(FullName,EmailId,Phone,Subject,Description) VALUES(:name,:email,:phone,:subject,:message)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':phone', $phone, PDO::PARAM_STR);
    $query->bindParam(':subject', $subject, PDO::PARAM_STR);
    $query->bindParam(':message', $message, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
        echo "<script>alert('Query sent successfully');</script>";
        echo "<script>window.location.href ='contact.php'</script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again.');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CWMS | Contact Us</title>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />


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
                    <h2>Contact Us</h2>
                </div>
                <div class="col-12">
                    <a href="index.php">Home</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="contact" style="padding: 0px!important;">
        <div class="container">
            <div class="section-header text-center">
                <p>Get In Touch</p>
                <h2>Contact for any query</h2>
            </div>
            <div class="row">
                <?php
                $sql = "SELECT * from webpages where type='contact'";
                $query = $dbh->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                foreach ($results as $result) {
                ?>


                    <div class="col-md-4">
                        <div class="contact-info">
                            <h2>Quick Contact Info</h2>

                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fa fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Address</h3>
                                    <p>+<?php echo $result->detail; ?></p>
                                </div>
                            </div>


                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Opening Hour</h3>
                                    <p><?php echo $result->openignHrs; ?></p>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Call Us</h3>
                                    <p>+91 <a style="color: #ffffff;" href="tel:<?php echo $result->phoneNumber; ?>"><?php echo $result->phoneNumber; ?></p></a>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Email Us</h3>
                                    <p><a style="color: #ffffff;" href="mailto:<?php echo $result->emailId; ?>">
                                            <?php echo $result->emailId; ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-md-7">
                    <!-- <div class="contact-form"> -->
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" method="post">
                        <div class="form-outline">
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" name="name" />
                            <label class="form-label" for="typeText">Your Name</label>

                        </div>
                        <br />
                        <div class="form-outline">
                            <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" required="required" />
                            <label class="form-label" for="typeText">Your Email</label>
                        </div>
                        <br />
                        <div class="form-outline">
                            <input type="tel" class="form-control" id="phone" placeholder="Your Phone No" name="phone" required="required" />
                            <label class="form-label" for="typeText">Your Phone</label>
                        </div>
                        <br />
                        <div class="form-outline">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" name="subject" />
                            <label class="form-label" for="typeText">Subject</label>
                        </div>
                        <br />
                        <div class="form-outline">
                            <textarea class="form-control" id="message" placeholder="Message" rows="3" required="required" name="message"></textarea>
                            <label class="form-label" for="typeText">Message</label>
                        </div>
                        <br />
                        <div>
                            <button class="btn btn-custom" type="submit" id="sendMessageButton" name="submit">Send Message</button>
                        </div>
                    </form>
                    <!-- </div> -->
                </div>

            </div>
        </div>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5879.497864054537!2d-73.81944709051974!3d40.6763897264457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26749046ee14f%3A0xea672968476d962c!2s123rd%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1675052098500!5m2!1sen!2sin" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4125.945833467015!2d73.80626216266329!3d18.505882772307018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1678681528791!5m2!1sen!2sin" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16823.891326927805!2d73.7980806478085!3d18.513373061184698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bfb9e4400f6f%3A0x648e4c3a4aefb302!2sSiddhi%20Medical%20And%20General%20Stores!5e0!3m2!1sen!2sin!4v1678681639374!5m2!1sen!2sin" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div style="margin-top: -50px!important;">
        <?php include_once('includes/footer.php'); ?>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>

    <!-- Contact Javascript File -->
    <!--  -->

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>