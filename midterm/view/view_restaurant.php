<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<!--navbar-->
<nav class="navbar navbar-expand-lg bg-primary-subtle">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Welcome to Restaurant</a>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto"> <!-- Add ms-auto here to move links to the right -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- Menu Section with Overlay -->
<div class="container-fluid p-5 d-flex justify-content-center align-items-center" style="position: relative; background-image: url('../resources/bg1.jpg'); background-size: cover; background-position: center; height: 70vh;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.3);"></div>
      <div class="text-center text-light position-relative" style="z-index: 1;">
        <h1 class="restaurant-title mb-4" style="font-size: 4rem; font-weight: bold; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);">Mar Restaurant</h1>
        <p class="mb-5" style="font-size: 1.5rem; text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.5);">Experience the finest dining with a touch of elegance</p>
        <div class="d-flex justify-content-center gap-4">
            <a href="view_menu_items.php" class="btn px-5 py-4" style="background-color: #6c757d; color: white; font-size: 1.25rem; font-weight: bold; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);">View Menu</a>
            <a href="view_order.php" class="btn px-5 py-4" style="background-color: #6c757d; color: white; font-size: 1.25rem; font-weight: bold; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);">View Order</a>
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

    <script src="js/main.js"></script>
</body>
</html>