<?php 
include('../classes/menu_items.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Menu</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary-subtle">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Welcome to Restaurant</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="view_restaurant.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container p-2 mt-5" >
    <div class="row">
        <div class="col">
            <div class="row">
                <?php 
                $menu = new MenuItems();
                $menu_items = $menu->viewMenu();
                foreach ($menu_items as $item) {
                    echo '<div class="col">
                            <div class="card bg-primary-subtle  mb-5"  style="width: 18rem;">
                                <img src="../resources/' . $item['image'] . '.jpg" class="card-img-top w-150 h-100" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">₱ ' . $item['price'] . '.00</h5>
                                    <p class="card-text">' . $item['name'] . '</p>
                                    <a href="add_to_cart.php?id=' . $item['id'] . '&name=' . urlencode($item['name']) . '&price=' . $item['price'] . '" class="btn btn-secondary">Add to cart</a>
                                </div>
                            </div>
                        </div>';    
                }
                ?>
            </div>                
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="text-center text-lg-start text-white bg-secondary">
    <div class="container p-2 pb-1">
        <section class="">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-2">
            <h6 class="text-uppercase mb-3 font-weight-bold">Mar Restaurant</h6>
            <p>Delivering your favorites fast and fresh. Order now and enjoy!</p>
            </div>
            <hr class="w-50 clearfix d-md-none" />
            <div class="col-md-2 col-lg-1 col-xl-1 mx-auto mt-2">
            <h6 class="text-uppercase mb-3 font-weight-bold">Products</h6>
            <p><a class="text-white" href="#">Pizza</a></p>
            <p><a class="text-white" href="#">Pasta</a></p>
            <p><a class="text-white" href="#">Burgers</a></p>
            <p><a class="text-white" href="#">Desserts</a></p>
            </div>
            <hr class="w-50 clearfix d-md-none" />
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-2">
            <h6 class="text-uppercase mb-3 font-weight-bold">Useful Links</h6>
            <p><a class="text-white" href="#">Your Account</a></p>
            <p><a class="text-white" href="#">Become an Affiliate</a></p>
            <p><a class="text-white" href="#">Shipping Rates</a></p>
            <p><a class="text-white" href="#">Help</a></p>
            </div>
            <hr class="w-100 clearfix d-md-none" />
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-2">
            <h6 class="text-uppercase mb-3 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
            <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
        </div>
        </section>
    </div>
    </footer>
</body>
</html>
