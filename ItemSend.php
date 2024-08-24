<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['submit'])) {
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host       = 'etechno.lk'; 
        $mail->SMTPAuth   = true;
        $mail->Username   = 'noreply@eTechno.lk'; 
        $mail->Password   = 'SsrRotelco999@@'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Correct encryption for Office 365
        $mail->Port       = 587;

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        // Recipients
        $fname = htmlspecialchars($_POST['fname']);
        $lname = htmlspecialchars($_POST['lname']);
        $to = filter_var($_POST['to'], FILTER_SANITIZE_EMAIL);
        $name = htmlspecialchars($_POST['name']);
        $price = htmlspecialchars($_POST['price']);
        $description = htmlspecialchars($_POST['description']);
        $imagePath = $_POST['imagePath'];

        if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email address.";
            exit;
        }

        $mail->setFrom('noreply@eTechno.lk', 'TechnoLab');
        $mail->addAddress($to);

        if (!empty($imagePath) && file_exists($imagePath)) {
            $mail->addEmbeddedImage($imagePath, 'itemImage');
            $imageCID = 'itemImage'; // Content-ID for the embedded image
        } else {
            $imageCID = '';
        }

        // Content
        $mail->isHTML(true);
        $mail->Subject = "Item Details";
        $mail->Body    = "<h1>Item Details</h1>
                          <p><strong>Name:</strong> $name</p>
                          <p><strong>Price:</strong> $price</p>
                          <p><strong>Description:</strong><br>$description</p>
                          <p><strong>Image:</strong><br><img src=\"cid:$imageCID\" alt=\"Item Image\" style=\"width: 200px;\" /></p>";

        // Send the email
        $mail->send();
        echo "<script>
                alert('Send to the mail & please check $to, Thank you $fname $lname');
                window.location.href='../shop.php';
                </script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

if (isset($_POST['submit'])) {
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host       = 'etechno.lk'; 
        $mail->SMTPAuth   = true;
        $mail->Username   = 'noreply@eTechno.lk'; 
        $mail->Password   = 'SsrRotelco999@@'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Correct encryption for Office 365
        $mail->Port       = 587;

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );


        // Recipients
        $fname = htmlspecialchars($_POST['fname']);
        $lname = htmlspecialchars($_POST['lname']);
        $phone = htmlspecialchars($_POST['phone']);
        $name = htmlspecialchars($_POST['name']);
        $price = htmlspecialchars($_POST['price']);
        $description = htmlspecialchars($_POST['description']);
        $imagePath = $_POST['imagePath'];

        $mail->setFrom('noreply@eTechno.lk', 'TechnoLab');
        $mail->addAddress('noreply@eTechno.lk'); // Second recipient

        if (!empty($imagePath) && file_exists($imagePath)) {
            $mail->addEmbeddedImage($imagePath, 'itemImage');
            $imageCID = 'itemImage'; 
        } else {
            $imageCID = ''; 
        }

        // Content
        $mail->isHTML(true);
        $mail->Subject = "Item Order";
        $mail->Body    = "<h1>Item Order Details</h1>
                        <p><strong>Customer Name :</strong> $fname $lname</p>
                        <p><strong>Customer Contact No:</strong> $phone</p>
                        <p><strong>Name:</strong> $name</p>
                        <p><strong>Price:</strong> $price</p>
                        <p><strong>Description:</strong><br>$description</p>
                        <p><strong>Image:</strong><br><img src=\"cid:$imageCID\" alt=\"Item Image\" style=\"width: 200px;\" /></p>";

        // Send the email
        $mail->send();
        echo "Done";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>TechnoLab - RotelcoTechnolab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/itemsend.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="goto-here">
    <!-- Topbar -->
    <div class="py-1 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <span class="text">074 1002 400/3 (4 Lines) , 077 0647 647</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <span class="text">info@eTechno.lk</span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text">3-5 Business days delivery & Free Returns</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">TechnoLab</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item active"><a href="shop.php" class="nav-link" >Shop by Category</a>
                      <!-- <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="">Products</a>
                        <a class="dropdown-item" href="cart.php">Cart</a>
                        <a class="dropdown-item" href="checkout.php">Checkout</a>
                      </div> -->
                    </li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                    <li class="nav-item cta cta-colored"><a href="" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <!-- Hero Section -->
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Item Details</span></p>
                    <h1 class="mb-0 bread">Item Details</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Item Details Section -->
    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <form method="post" action="">
                    <div class="col-md-12 ftco-animate">
                        <div class="cart-list">
                            <div class="container d-flex justify-content-center align-items-center min-vh-100">
                                <div class="row border rounded-5 p-3 bg-white shadow box-area">
                                    <div class="header-text mb-3">
                                        <h3 id="product-name" name="product-name" style="color: black;"></h3>
                                    </div>

                                    <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #fff;"  >

                                        <div class="featured-image mb-3">
                                            <img id="product-image" src="" name="image" class="img-fluid" style="width: 250px;">
                                        </div>
                                        <input type="hidden" id="product-image-path" name="imagePath" value="">

                                         <div class="featured-image mb-3">
                                            <small class="text-black" id="product-description"></small>
                                        </div>
                                        <br>
                                    </div>

                                    <div class="col-md-6 right-box">
                                        <div class="row align-items-center">
                                           
                                            <div class="input-group mb-3">
                                                <input type="text" id="fname-input" name="fname"class="form-control form-control-lg bg-light fs-6" placeholder="Enter Your First Name" required>
                                            </div>

                                            <div class="input-group mb-3">
                                                <input type="text" id="lname-input" name="lname" class="form-control form-control-lg bg-light fs-6" placeholder="Enter Your Last Name" required>
                                            </div>

                                            <div class="input-group mb-3">
                                                <input type="text" id="phone-input" name="phone" class="form-control form-control-lg bg-light fs-6" 
                                                       placeholder="Enter Your Mobile Number" required maxlength="10" oninput="validatePhoneInput(this)" inputmode="numeric" pattern="\d*">
                                            </div>
                                            
                                            <div class="input-group mb-3">
                                                <input type="email" id="email" name="to" class="form-control form-control-lg bg-light fs-6" placeholder="Enter Your Email" required>
                                            </div>

                                            <div class="input-group mb-1">
                                                <input type="text" id="product-name-input" class="form-control form-control-lg bg-light fs-6" name="name" placeholder="Name" readonly hidden>
                                            </div>

                                            <div class="input-group mb-1">
                                                <input type="text" id="product-price-input" class="form-control form-control-lg bg-light fs-6" name="price" placeholder="Price" readonly>
                                            </div>

                                            <div class="form-group">
                                                <textarea id="product-description-input" class="form-control form-control-lg bg-light fs-6 custom-textarea" name="description" placeholder="Description" readonly hidden></textarea>
                                            </div>

                                            <div class="input-group mb-3">
                                                <button class="btn btn-lg btn-primary w-100 fs-6" name="submit" type="submit">Send</button>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Newsletter Subscription -->
    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container py-4">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-6">
                    <h2 style="font-size: 22px;" class="mb-0">Subscribe to our Newsletter</h2>
                    <span>Get e-mail updates about our latest shops and special offers</span>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" placeholder="Enter email address">
                            <input type="submit" value="Subscribe" class="submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="mouse">
                    <a href="#" class="mouse-icon">
                        <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                    </a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Technolabs</h2>
                        <p>RotelcoTechnolab</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Shop</a></li>
                            <li><a href="#" class="py-2 d-block">About</a></li>
                            <li><a href="#" class="py-2 d-block">Journal</a></li>
                            <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Help</h2>
                        <div class="d-flex">
                            <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                                <li><a href="#" class="py-2 d-block">Returns & Exchange</a></li>
                                <li><a href="#" class="py-2 d-block">Terms & Conditions</a></li>
                                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-2 d-block">FAQs</a></li>
                                <li><a href="#" class="py-2 d-block">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Question?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">No 196, Sri Gnanendra Mw, Nawala</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">074 1002 400/3 (4 Lines) , 077 0647 647</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@eTechno.lk</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
        </svg>
    </div>

    <!-- JS Libraries -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

    <!-- Custom JS -->
    <script>
      $(document).ready(function(){
        var quantitiy = 0;
        $('.quantity-right-plus').click(function(e){
          e.preventDefault();
          var quantity = parseInt($('#quantity').val());
          $('#quantity').val(quantity + 1);
        });

        $('.quantity-left-minus').click(function(e){
          e.preventDefault();
          var quantity = parseInt($('#quantity').val());
          if(quantity > 0) {
            $('#quantity').val(quantity - 1);
          }
        });
      });

    document.addEventListener("DOMContentLoaded", function() {
    const product = JSON.parse(localStorage.getItem('selectedProduct'));
    if (product) {
        document.getElementById('product-image').src = product.image;
        document.getElementById('product-name').textContent = product.name;
        document.getElementById('product-description').textContent = product.description;
        document.getElementById('product-name-input').value = product.name;
        document.getElementById('product-price-input').value = product.price;
        document.getElementById('product-description-input').value = product.description;
        document.getElementById('product-image-path').value = product.image; 
    } else {
        document.getElementById('product-image').src = '';
        document.getElementById('product-name').textContent = 'No product details found.';
        document.getElementById('product-description').textContent = '';
        document.getElementById('product-name-input').value = '';
        document.getElementById('product-price-input').value = '';
        document.getElementById('product-description-input').value = '';
        document.getElementById('product-image-path').value = ''; // Clear image path
    }
    });

    </script> 

    <script>
    function validatePhoneInput(input) {
        // Remove any non-numeric characters
        input.value = input.value.replace(/\D/g, '');

        // Limit the input to 10 characters
        if (input.value.length > 10) {
            input.value = input.value.slice(0, 10);
        }
    }
    </script>     

  </body>
</html>


