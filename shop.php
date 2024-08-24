

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Technolab - RotelcoTechnolab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

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
    <link rel="stylesheet" href="css/shop.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text"> 074 1002 400/3 (4 Lines)  , 077 0647 647</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">info@eTechno.lk</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">24/7 Service  &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Technolab - RotelcoTechnolab</a>
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

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="container">
				    <div class="row justify-content-center">
				        <div class="col-md-10 mb-5 text-center">
				            <ul class="product-category">
				                <li><a href="#" data-category="All" class="category-filter">All</a></li>
				                <li><a href="#" data-category="Bio Metric Products" class="category-filter">Bio Metric Products</a></li>
				                <li><a href="#" data-category="UPS" class="category-filter">UPS</a></li>
				                <li><a href="#" data-category="Power Supply" class="category-filter">Power Supply</a></li>
				                <li><a href="#" data-category="other" class="category-filter">...</a></li>
				            </ul>
				        </div>
				    </div>
				</div>

		<!-- All -->

		<?php
			include 'connection.php';

			$sqlall = "SELECT * FROM items";
			$result = $conn->query($sqlall);
		?>

        <div class="row">
    		<?php if ($result->num_rows > 0): ?>
        	<?php while ($row = $result->fetch_assoc()): ?>
            <div class="col-md-6 col-lg-3 ftco-animate limited-height" id="product-item" data-category="All">
                <div class="product">
                    <a href="product-single.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="img-prod">
                        <img class="img-fluid" src="<?php echo htmlspecialchars($row['item_image']); ?>" alt="<?php echo htmlspecialchars($row['item_name']); ?>">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="product-details.php?id=<?php echo htmlspecialchars($row['id']); ?>"><?php echo htmlspecialchars($row['item_name']); ?></a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span>Rs. <?php echo number_format($row['item_price']); ?> /=</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="?add_to_cart=<?php echo htmlspecialchars($row['id']); ?>" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a href="product-details.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                <a href="wishlist.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="heart d-flex justify-content-center align-items-center">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        	<?php endwhile; ?>
    		<?php else: ?>
        <p>No products found.</p>
    		<?php endif; ?>
			</div>

	<?php
	$conn->close();
	?>

	<!-- All end -->

	<!-- Bio Metric Products -->

	<?php
	include 'connection.php';

	$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

	// Filter items by category 'BioMetricProducts'
	$category = 'BioMetricProducts';
	$sqlbiomteric = "SELECT id, item_name, item_price, item_image FROM items WHERE item_category = '" . $conn->real_escape_string($category) . "'";

	$result = $conn->query($sqlbiomteric);

	if ($result === false) {
	    // Handle SQL error here
	    echo "Error: " . $conn->error;
	    exit;
	}
	?>

	<div class="row">
	    <?php if ($result->num_rows > 0): ?>
	        <?php while ($row = $result->fetch_assoc()): ?>
	            <div class="col-md-6 col-lg-3 ftco-animate limited-height" id="product-item" data-category="Bio Metric Products">
	                <div class="product">
	                    <a href="product-single.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="img-prod">
	                        <img class="img-fluid" src="<?php echo htmlspecialchars($row['item_image']); ?>" alt="<?php echo htmlspecialchars($row['item_name']); ?>">
	                        <div class="overlay"></div>
	                    </a>
	                    <div class="text py-3 pb-4 px-3 text-center">
	                        <h3><a href="product-details.php?id=<?php echo htmlspecialchars($row['id']); ?>"><?php echo htmlspecialchars($row['item_name']); ?></a></h3>
	                        <div class="d-flex">
	                            <div class="pricing">
	                                <p class="price"><span>Rs. <?php echo number_format($row['item_price']); ?> /=</span></p>
	                            </div>
	                        </div>
	                        <div class="bottom-area d-flex px-3">
	                            <div class="m-auto d-flex">
	                                <a href="?add_to_cart=<?php echo htmlspecialchars($row['id']); ?>" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	                                    <span><i class="ion-ios-menu"></i></span>
	                                </a>
	                                <a href="product-details.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
	                                    <span><i class="ion-ios-cart"></i></span>
	                                </a>
	                                <a href="wishlist.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="heart d-flex justify-content-center align-items-center">
	                                    <span><i class="ion-ios-heart"></i></span>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        <?php endwhile; ?>
	    <?php else: ?>
	        <p>No products found in the 'BioMetricProducts' category.</p>
	    <?php endif; ?>
	</div>

	<?php
	$conn->close();
	?>

	<!-- Bio Metric Product end -->

	<!-- UPS -->

	<?php
	include 'connection.php';

	// Filter items by category 'UPS'
	$category = 'UPS';
	$sqlups = "SELECT id, item_name, item_price, item_image FROM items WHERE item_category = '" . $conn->real_escape_string($category) . "'";

	$result = $conn->query($sqlups);

	if ($result === false) {
	    
	    echo "Error: " . $conn->error;
	    exit;
	}
	?>

	<div class="row">
	    <?php if ($result->num_rows > 0): ?>
	        <?php while ($row = $result->fetch_assoc()): ?>
	            <div class="col-md-6 col-lg-3 ftco-animate limited-height" id="product-item" data-category="UPS">
	                <div class="product">
	                    <a href="product-single.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="img-prod">
	                        <img class="img-fluid" src="<?php echo htmlspecialchars($row['item_image']); ?>" alt="<?php echo htmlspecialchars($row['item_name']); ?>">
	                        <div class="overlay"></div>
	                    </a>
	                    <div class="text py-3 pb-4 px-3 text-center">
	                        <h3><a href="product-details.php?id=<?php echo htmlspecialchars($row['id']); ?>"><?php echo htmlspecialchars($row['item_name']); ?></a></h3>
	                        <div class="d-flex">
	                            <div class="pricing">
	                                <p class="price"><span>Rs. <?php echo number_format($row['item_price']); ?> /=</span></p>
	                            </div>
	                        </div>
	                        <div class="bottom-area d-flex px-3">
	                            <div class="m-auto d-flex">
	                                <a href="?add_to_cart=<?php echo htmlspecialchars($row['id']); ?>" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	                                    <span><i class="ion-ios-menu"></i></span>
	                                </a>
	                                <a href="product-details.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
	                                    <span><i class="ion-ios-cart"></i></span>
	                                </a>
	                                <a href="wishlist.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="heart d-flex justify-content-center align-items-center">
	                                    <span><i class="ion-ios-heart"></i></span>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        <?php endwhile; ?>
	    <?php else: ?>
	        <p>No products found in the 'UPS' category.</p>
	    <?php endif; ?>
	</div>

	<?php
	$conn->close();
	?>

	<!-- End UPS -->

	<!-- Power Supply -->

	<?php
	include 'connection.php';

	// Filter items by category 'Power Supply'
	$category = 'PowerSupply';
	$sqlups = "SELECT id, item_name, item_price, item_image FROM items WHERE item_category = '" . $conn->real_escape_string($category) . "'";

	$result = $conn->query($sqlups);

	if ($result === false) {
	    
	    echo "Error: " . $conn->error;
	    exit;
	}
	?>

	    <div class="row">
	    <?php if ($result->num_rows > 0): ?>
	        <?php while ($row = $result->fetch_assoc()): ?>
	            <div class="col-md-6 col-lg-3 ftco-animate limited-height" id="product-item" data-category="Power Supply">
	                <div class="product">
	                    <a href="product-single.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="img-prod">
	                        <img class="img-fluid" src="<?php echo htmlspecialchars($row['item_image']); ?>" alt="<?php echo htmlspecialchars($row['item_name']); ?>">
	                        <div class="overlay"></div>
	                    </a>
	                    <div class="text py-3 pb-4 px-3 text-center">
	                        <h3><a href="product-details.php?id=<?php echo htmlspecialchars($row['id']); ?>"><?php echo htmlspecialchars($row['item_name']); ?></a></h3>
	                        <div class="d-flex">
	                            <div class="pricing">
	                                <p class="price"><span>Rs. <?php echo number_format($row['item_price']); ?> /=</span></p>
	                            </div>
	                        </div>
	                        <div class="bottom-area d-flex px-3">
	                            <div class="m-auto d-flex">
	                                <a href="?add_to_cart=<?php echo htmlspecialchars($row['id']); ?>" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	                                    <span><i class="ion-ios-menu"></i></span>
	                                </a>
	                                <a href="product-details.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
	                                    <span><i class="ion-ios-cart"></i></span>
	                                </a>
	                                <a href="wishlist.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="heart d-flex justify-content-center align-items-center">
	                                    <span><i class="ion-ios-heart"></i></span>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        <?php endwhile; ?>
	    <?php else: ?>
	        <p>No products found in the 'Power Supply' category.</p>
	    <?php endif; ?>
	</div>

	<?php
	$conn->close();
	?>

	<!-- End Power Supply -->

	    <div class="col-md-4 product-item" data-category="Accessories">
	  	</div>
	    	
	    <div class="col-md-4 product-item" data-category="Software Solutions">
	    </div>

			</div>
    	</div> 

    <!-- Dewmin Edit End -->

    	</div>


    	<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);">
    	<div class="container">
    		<div class="row justify-content-center py-5">
    			<div class="col-md-10">

						<div class="row justify-content-center">
    					<div class="col-md-10 d-flex justify-content-center">
		            <div class="block-100 text-center">
		              <div class="text">
		                <h3>Please Click your Category</h3>
		              </div>
		            </div>
		          </div>
		        </div>
		        <br>
		        <hr>

		    		<div class="row justify-content-center">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text"  >
		                <strong class="number" data-number="20">0</strong>
		                <span>Bio Metric Products</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="2">0</strong>
		                <span>UPS</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="2">0</strong>
		                <span>Power Sully</span>
		              </div>
		            </div>
		          </div>

		        </div>
	        </div>
        </div>
    	</div>
    </section>
    </section>

    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="product-details.php?id=1" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Technolab - RotelcoTechnolab</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="product-details.php?id=1"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="product-details.php?id=1"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="product-details.php?id=1"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="product-details.php?id=1" class="py-2 d-block">Shop</a></li>
                <li><a href="product-details.php?id=1" class="py-2 d-block">About</a></li>
                <li><a href="product-details.php?id=1" class="py-2 d-block">Journal</a></li>
                <li><a href="product-details.php?id=1" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="product-details.php?id=1" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="product-details.php?id=1" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="product-details.php?id=1" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="product-details.php?id=1" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="product-details.php?id=1" class="py-2 d-block">FAQs</a></li>
	                <li><a href="product-details.php?id=1" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">No 196, Sri Gnanendra Mw, Nawala</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">074 1002 400/3 (4 LINES) , 077 0647 647
</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">INFO@ETECHNO.LK</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

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
	<script src="js/singleproduct.js"></script>

	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    	document.addEventListener('DOMContentLoaded', function() {
    const categoryLinks = document.querySelectorAll('.product-category a');
    const productItems = document.querySelectorAll('#product-item');

    categoryLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const category = this.getAttribute('data-category');

            // Remove 'active' class from all links
            categoryLinks.forEach(link => link.classList.remove('active'));
            // Add 'active' class to the clicked link
            this.classList.add('active');

            // Show/Hide products based on the selected category
            productItems.forEach(item => {
                if (category === 'all' || item.getAttribute('data-category') === category) {
                    item.classList.add('show');
                } else {
                    item.classList.remove('show');
                }
            });
        });
    });
});
</script>


</body>

</body>
</html>
