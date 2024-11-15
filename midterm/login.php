<?php
require_once 'classes/user.php';
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = user::authenticate($email, $password);
    if ($user) {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_name'] = $user->name;
        header("Location: view/view_restaurant.php");
        exit;
    } else {
        $error = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<section class="vh-100 d-flex align-items-center">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100 text-center">
      <div class="col-md-2 col-lg-6 col-xl-5">
        <img src="resources/user.png" alt="Login Image" class="img-fluid" style="max-width: 50%; height: auto;">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

      <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
      
        <form action="login.php" method="POST">
          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Login In</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email"  class="form-control form-control-lg" placeholder="Enter a valid email address" name="email" required />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" class="form-control form-control-lg" placeholder="Enter password" name="password" required />
            <label class="form-label" for="form3Example4">Password</label>
          </div>
          <!-- Login / register -->
          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php" class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>

    <script src="js/main.js"></script>
</body>
</html>