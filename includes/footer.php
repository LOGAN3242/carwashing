<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer-contact">
                    <div class="top-bar" style="background-color: #202C45;padding-right:2px">
                        <div class="logo">
                            <h1 style="margin-right: 5px;">Wash<span style="color:#ffffff">&</span>Shine</h1>
                        </div>
                    </div>

                    <h2>Get In Touch</h2>
                    <?php
                    $sql = "SELECT * from webpages where type='contact'";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    foreach ($results as $result) {
                    ?>

                        <p><i class="fa fa-map-marker-alt"></i><?php echo $result->detail; ?></p>
                        <p><i class="fa fa-phone-alt"></i>+91 <a style="color: #ffffff;" href="tel:<?php echo $result->phoneNumber; ?>"><?php echo $result->phoneNumber; ?></p></a>
                        <p><i class="fa fa-envelope"></i>
                            <a style="color: #ffffff;" href="mailto:<?php echo $result->emailId; ?>">
                                <?php echo $result->emailId; ?>
                        </p>
                        </a>

                    <?php } ?>
                    <div class="footer-social">
                        <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-link">
                    <h2>Quick Links</h2>
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="washing-plans.php">Washing Plans</a>
                    <a href="location.php">Washing Points</a>
                    <a href="contact.php">Contact Us</a>



                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-link">
                    <h2>Washing Plans</h2>
                    <a href="washing-plans.php">BASIC CLEANING</a>
                    <a href="washing-plans.php">PREMIUM CLEANING</a>
                    <a href="washing-plans.php">COMPLEX CLEANING</a>




                </div>
            </div>

        </div>
    </div>
    <div class="container copyright">
        <p style="float: left;">© 2021 <a href="index.php">Wash & Shine </a> All rights reserved.</p>
        <p style="float: right;">Design & Developed By LOGAN</p>
    </div>
</div>
<!-- Footer End --> <!-- Back to top button -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- Pre Loader -->
<div id="loader" class="show">
    <div class="loader"></div>
</div>