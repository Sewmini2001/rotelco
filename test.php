<?php
include 'connection.php'; // Include connection.php to start the session and connect to the database

// Fetch products from the database (example query, adjust as needed)
$sql = "SELECT id, item_name, item_price, item_image,item_description FROM items";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Technolab - RotelcoTechnolab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body class="goto-here">

<div class="row">
                <?php if ($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
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
        
        </body>
        </html>
<?php
$conn->close(); // Close the database connection
?>