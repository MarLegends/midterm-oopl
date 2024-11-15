<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Cart</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary-subtle">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Welcome to Restaurant</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="view_restaurant.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Form Section -->
<div class="container mt-5 p-4 text-white" style="background-color: #6c757d; border-radius: 8px;">
    <h2 class="text-center mb-4">Add To Cart</h2>
    <form method="POST" action="insert.php">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="<?php echo htmlspecialchars($_GET['name']); ?>" readonly>
        </div>
        
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="<?php echo htmlspecialchars($_GET['price']); ?>" readonly>
        </div>

        <div class="mb-3">
            <label for="payment" class="form-label">Payment Method</label>
            <select class="form-select" id="payment" name="payment" required>
                <option value="" disabled selected>Select payment method</option>
                <option value="Maya">Maya</option>
                <option value="Gcash">Gcash</option>
                <option value="PayPal">PayPal</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="delivery" class="form-label">Delivery Option</label>
            <select class="form-select" id="delivery" name="delivery" required>
                <option value="" disabled selected>Select delivery option</option>
                <option value="Bike">Bike</option>
                <option value="Vehicle">Vehicle</option>
            </select>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg" name="submit">Add to Cart</button>
        </div>
    </form>
</div>

<!-- Footer -->
<footer class="text-center text-lg-start text-white bg-secondary mt-5">
  <div class="container p-2 pb-1">
    <section>
      <div class="row">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-2">
          <h6 class="text-uppercase mb-3 font-weight-bold">Mar Restaurant</h6>
          <p>Here to deliver your favorites, fast and fresh!</p>
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
