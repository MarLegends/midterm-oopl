<?php
require_once 'classes/connection.php';
require_once 'classes/user.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    try {
        $user = User::create($name, $email, $address, $password);
        echo "
        <div class='container mx-auto mt-5 text-center'>
            <h2 class='text-success'>Registration Successful!</h2>
            <p class='lead'>Welcome, $name! You have successfully registered.</p>
        </div>
    ";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<section class="vh-100 d-flex align-items-center">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100 text-center">
      <!-- Form on the left, image on the right for registration page -->
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="register.php" method="POST">
          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Register</p>
          </div>
          <div class="form-outline mb-4">
            <input type="text" class="form-control form-control-lg" placeholder="Enter Name" name="name" required />
            <label class="form-label" for="form3Example3">Name</label>
          </div>
          <div class="form-outline mb-3">
            <input type="password" class="form-control form-control-lg" placeholder="Enter Password" name="password" required />
            <label class="form-label" for="form3Example4">Password</label>
          </div>
          <div class="form-outline mb-3">
            <input type="email"  class="form-control form-control-lg" placeholder="Enter Email" name="email" required />
            <label class="form-label" for="form3Example5">Email</label>
          </div>
          <div class="form-outline mb-3">
            <input type="text"  class="form-control form-control-lg" placeholder="Enter Address" name="address" required />
            <label class="form-label" for="form3Example5">Address</label>
          </div>
          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="login.php" class="link-danger">Login</a></p>
          </div>
        </form>
      </div>
      <div class="col-md-2 col-lg-6 col-xl-5">
        <img src="resources/user1.png" alt="Register Image" class="img-fluid" style="max-width: 50%; height: auto;">
      </div>
    </div>
  </div>
</section>
</body>
</html> 