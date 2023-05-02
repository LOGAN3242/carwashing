<?php error_reporting(1);
include('includes/config.php');

// if (isset($_POST['submit'])) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $subject = $_POST['subject'];
//     $message = $_POST['message'];

//     $sql = "INSERT INTO enquiry(FullName,EmailId,Subject,Description) VALUES(:name,:email,:subject,:message)";
//     $query = $dbh->prepare($sql);
//     $query->bindParam(':name', $name, PDO::PARAM_STR);
//     $query->bindParam(':email', $email, PDO::PARAM_STR);
//     $query->bindParam(':subject', $subject, PDO::PARAM_STR);
//     $query->bindParam(':message', $message, PDO::PARAM_STR);
//     $query->execute();
//     $lastInsertId = $dbh->lastInsertId();
//     if ($lastInsertId) {
//         echo "<script>alert('Query sent successfully');</script>";
//         echo "<script>window.location.href ='appointment.php'</script>";
//     } else {
//         echo "<script>alert('Something went wrong. Please try again.');</script>";
//     }
// }

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

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />






    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- open map street -->
    <!-- <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" /> -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
</head>

<body>
    <?php include_once('includes/header.php'); ?>
    <style>
        #map-container {
            height: 240px;
            background-color: #555555;
            display: block;
            border: 1px solid #c9caca;
        }

        .video-container,
        .map-container,
        .embed-container {
            position: relative;
            padding-bottom: 51%;
            padding-top: 30px;
            height: 0;
            overflow: hidden;
            border: none;
        }

        .embed-container iframe,
        .embed-container object,
        .embed-container embed,
        .video-container iframe,
        .map-container iframe,
        .map-container object,
        .map-container embed,
        .video-container object,
        .video-container embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        iframe {
            border: none;
        }
    </style>



    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Book Appointment</h2>
                </div>
                <div class="col-12">
                    <a href="index.php">Home</a>
                    <a href="appointment.php">Get Appointment</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="contact" style="padding: 0px!important;">
        <div class="container">
            <div class="section-header text-center">
                <p>Get an Appointment</p>
                <h2>SCHEDULE YOUR SERVICE HERE</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- <div class="contact-form"> -->
                    <div id="success"></div>
                    <!-- <form name="sentMessage" id="contactForm" method="post"> -->
                    <form>

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
                            <input type="text" class="form-control" id="phone" placeholder="Phone No" required="required" name="phone" />
                            <label class="form-label" for="typeText">Your Phone No</label>
                        </div>
                        <br />
                        <div class="control-group">
                            <select style="border-radius: 5px;border: 1px transparant;" name="packagetype" required class="form-control">
                                <option value="">Package Type</option>
                                <option value="1">BASIC CLEANING <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#x20B9;400</p>
                                </option>
                                <option value="2">PREMIUM CLEANING <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#x20B9;800</p>
                                </option>
                                <option value="3">COMPLEX CLEANING <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#x20B9;1100</p>
                                </option>
                            </select>
                            <br>
                        </div>
                        <div class="form-outline">
                            <!-- <label>vehical no</label>
                                <input type="text" class="form-control" id="vehical_no" placeholder="MH-12-JM-5268" required="required" name="phone" /> <br /> -->

                            <input type="text" placeholder="GJ-12-JM-5268" class="form-control" name="number plate" id="number_plate" pattern="^[A-Z]{2}[ -][0-9]{1,2}(?: [A-Z])?(?: [A-Z]*)? [0-9]{4}$" title="Car Number Plate">
                            <label class="form-label" for="typeText">Vehical Number</label>
                        </div>
                        <br>

                        <!-- <div class="control-group">
                                <input type="text" class="form-control" id="" placeholder="Phone No" required="required" name="phone" /> <br />
                            </div> -->
                        <style>
                            input[type="date"]::-webkit-calendar-picker-indicator {
                                background: transparent;
                                bottom: 0;
                                color: transparent;
                                cursor: pointer;
                                height: auto;
                                left: 0;
                                position: absolute;
                                right: 0;
                                top: 0;
                                width: auto;
                            }
                        </style>
                        <div class="form-outline">
                            <input type="date" name="washdate" required class="form-control"><label class="form-label" for="typeText">Date</label>
                        </div>
                        <br>

                        <style>
                            input[type="time"] {
                                position: relative;
                            }

                            input[type="time"]::-webkit-calendar-picker-indicator {
                                display: block;
                                top: 0;
                                right: 0;
                                height: 100%;
                                width: 100%;
                                position: absolute;
                                background: transparent;
                            }
                        </style>
                        <div class="form-outline">
                            <input type="time" name="washtime" required class="form-control">
                            <label class="form-label" for="typeText">Time</label>
                        </div>
                        </br>




                        <!-- <div>
                                <button class="btn btn-custom" type="submit" id="sendMessageButton" name="submit">Send Message</button>
                            </div> -->
                    </form>
                    <!-- </div> -->
                </div>
                <div class="col-md-6">
                    <!-- <div class="contact-form"> -->
                    <div id="success"></div>
                    <!-- <form name="sentMessage" id="contactForm" method="post"> -->
                    <form>
                        <div class="control-group">
                            <!-- <input class="form-control search-text-field2" id="map" name="map_location" placeholder=" LOCATION " type="text" />
                                <button class="btn btn-custom" id="btn-locate-me">My Location</button> -->

                            <div id="map" style="height: 200px; width : 550px;margin-bottom:10px;"></div>
                            <button class="btn btn-custom" style="margin-bottom: 10px;width:100%;" onclick="getLocation(); return false">Your Location</button>
                        </div>
                        <div class="form-outline">
                            <textarea class="form-control" id="textAreaExample" rows="3" placeholder="Please let us know if your car is parked inside, or if in a car park it's location, or if there are any specific service requests… "></textarea>
                            <label class="form-label" for="textAreaExample">Additional notes (Optional)</label>
                        </div>
                        <br>


                        <div><a href="onlinepay.php">
                            <button  style="width:100%;">Send Message</button></a>
                        </div>

                        <br>
                    </form>
                    <!-- </div> -->
                </div>

            </div>
        </div>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5879.497864054537!2d-73.81944709051974!3d40.6763897264457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26749046ee14f%3A0xea672968476d962c!2s123rd%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1675052098500!5m2!1sen!2sin" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
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

    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoJR2u3_JIUxV6fJKlSozAqnulDl8Jp7w&amp;libraries=places&amp;region=AE"></script> -->
    <script src="js/map.js"></script>

    <!-- Contact Javascript File -->
    <!--  -->

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <!--  latitude logitude-->
    <!-- <script>
        var x = document.getElementById("demo");

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.watchPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            x.innerHTML = "Latitude: " + position.coords.latitude +
                "<br>Longitude: " + position.coords.longitude;
        }
    </script> -->
    <!-- <script>
        let button = document.getElementById("get-location");
let latText = document.getElementById("latitude");
let longText = document.getElementById("longitude");

button.addEventListener("click", () => {
  navigator.geolocation.getCurrentPosition((position) => {
    let lat = position.coords.latitude;
    let long = position.coords.longitude;

    latText.innerText = lat.toFixed(2);
    longText.innerText = long.toFixed(2);
  });
});
        </script> -->
    <script>
        var map = L.map('map').setView([18.52, 73.85], 12);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 17,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
        // station mark
        var mk = L.marker([18.507573, 73.807247]).addTo(map);
        mk.bindPopup("<b>Station</b>").openPopup();


        function getLocation(e) {
            var LeafIcon = L.Icon.extend({
                options: {
                    iconSize: [25, 41],
                    shadowSize: [50, 64],
                    iconAnchor: [22, 94],
                    shadowAnchor: [4, 62],
                    popupAnchor: [-3, -76]

                }

            });
            var greenIcon = new LeafIcon({
                iconUrl: 'img/carpin2.png'
            })
            L.icon = function(options) {
                return new L.Icon(options);
            };

            var marker =
                navigator.geolocation.getCurrentPosition((position) => {
                    let lat = position.coords.latitude;
                    let long = position.coords.longitude;

                    var mark = L.marker([lat.toFixed(2), long.toFixed(2)], {
                        icon: greenIcon
                    }).addTo(map);
                    mark.bindPopup("<b>Your Location</b>").openPopup();
                    mark.greenIcon = new LeafIcon({
                        iconUrl: 'img/carpin2.png'
                    })




                })

        }
    </script>
    <script>
        function myFunction(e) {
            e.preventDefault();
            location.replace('onlinepay.php');
            console.log("hello");
        }
    </script>
</body>

</html>