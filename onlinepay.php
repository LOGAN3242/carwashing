
<?php //error_reporting(0);
include('includes/config.php');?>
<html>

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

<style>
    
#myBtn{
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: green;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}
#myBtn:hover {
  background-color: darkgreen;
  color: white;
}




.bg-4{
  background-color: #2f2f2f;
  color: #ffffff;

}

footer{
  display: block;
}

.mypanel{
  border: 1px solid #eaeaec; 
  margin: -1px 19px 3px -1px; 
  box-shadow: 0 1px 2px rgba(0,0,0,0.05); 
  background-color: #FAFAFA;  
  padding:15px;
  border-radius: 5px;
}


input{
  border: 5px solid white;
}

.credit-card-div  span {
    padding-top:10px;
        }
.credit-card-div img {
    padding-top:30px;
}
.credit-card-div .small-font {
    font-size:9px;
}
.credit-card-div .pad-adjust {
    padding-top:10px;
}
    </style>

<!-- <link rel="stylesheet" type="text/css" href="css/COD.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script> -->

<body>

<!-- 
  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </button> -->

  <script type="text/javascript">
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>

  <!-- <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Le Cafe'</a>
      </div>

      <div class="collapse navbar-collapse " id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="aboutus.php">About</a></li>
          <li><a href="contactus.php">Contact Us</a></li>

        </ul>

        <?php
        if (isset($_SESSION['login_user1'])) {

        ?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        <?php
        } else if (isset($_SESSION['login_user2'])) {
        ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
                (<?php
                  if (isset($_SESSION["cart"])) {
                    $count = count($_SESSION["cart"]);
                    echo "$count";
                  } else
                    echo "0";
                  ?>)
              </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        <?php
        } else {

        ?>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
              <ul class="dropdown-menu">
                <li> <a href="customersignup.php"> User Sign-up</a></li>
                <li> <a href="managersignup.php"> Manager Sign-up</a></li>
                <li> <a href="#"> Admin Sign-up</a></li>
              </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li> <a href="customerlogin.php"> User Login</a></li>
                <li> <a href="managerlogin.php"> Manager Login</a></li>
                <li> <a href="#"> Admin Login</a></li>
              </ul>
            </li>
          </ul>

        <?php
        }
        ?>


      </div>

    </div>
  </nav> -->

<?php include_once('includes/header.php'); ?>
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Online Payments</h2>
            </div>
            <div class="col-12">
                <h4 style="color:#FFFFFF">Enter your payment details below</h4>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
      <div class="col-md-8 col-md-offset-3">
        <div class="credit-card-div">
          <div class="panel panel-default">
            <div class="panel-heading">

              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <h5 class="text-muted"> Credit Card Number</h5>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <input type="text" class="form-control" maxlength="4" placeholder="0000" required="" />
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <input type="text" class="form-control" maxlength="4" placeholder="0000" required="" />
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <input type="text" class="form-control" maxlength="4" placeholder="0000" required="" />
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <input type="text" class="form-control" maxlength="4" placeholder="0000" required="" />
                </div>
              </div>
              <br>
              <div class="row ">
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block text-muted small-font"> Expiry Month</span>
                  <input type="text" class="form-control" placeholder="MM" required="" />
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block text-muted small-font"> Expiry Year</span>
                  <input type="text" class="form-control" placeholder="YY" required="" />
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block text-muted small-font"> CCV</span>
                  <input type="text" class="form-control"  maxlength="3" placeholder="CCV" required="" />
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3"><br>
                  <img src="images/creditcard.png" class="img-rounded" required="" />
                </div>
              </div>
              <br>
              <div class="row ">
                <div class="col-md-12 pad-adjust">

                  <input type="text" class="form-control" placeholder="Name On The Card" required="" />
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12 pad-adjust">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" checked class="text-muted" required=""> Save details for fast payments. <a href="#">Learn More</a>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row ">
                <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                  <a href="appointment.php"><input type="submit" class="btn btn-danger btn-block" value="CANCEL" required="" /></a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                  <input  onclick="myFunction()" type="submit" name="submit" class="btn btn-success btn-block" value="PAY NOW" required="" />
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


</body>
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

    <script>
function myFunction() {
  location.replace("index.php")
  toastr.info('User Registered..!');
}
</script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

</html>