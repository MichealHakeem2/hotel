<?php
ob_start();
session_start();
include './includes/head.php';
include './env.php';

if(isset($_SESSION['id'])){
  header("location: /hotel/adminpanle/");
  exit();
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email    = $_POST['email'];  
    $password = $_POST['password'];
    $select   = "SELECT * from `admins` where `email` ='$email' AND `password` ='$password'";
    $cat      = mysqli_query($conn , $select);
    $row      = mysqli_fetch_assoc($cat);
    $count    = mysqli_num_rows($cat);
    // echo $count;
    if ($count > 0) {
      $_SESSION['firstName']  = $name;
      $_SESSION['lastName']   = $row['lastName'];
      $_SESSION['id']         = $row['id'];
      $_SESSION['group']      = $row['group'];
      $_SESSION['status']     = $row['status'];
      $_SESSION['group']       = $row['roleid'];
      header("location: /hotel/adminpanle");
      exit();
  }
}

?>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate  method="POST">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="email" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->


  <?php
include './includes/scripts.php';
?>