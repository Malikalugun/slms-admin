<?php include("templates/inc.php"); ?>
<?php include("templates/global.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $settings['org_name']; ?> :Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <?php include("templates/inc.php"); ?>
  <script src="./scripts/index.js" type="text/javascript" language="javascript"></script>

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.php" class="logo d-flex align-items-center w-auto">
              
                  <span class="d-none d-lg-block"><?php echo $settings['org_name'];?></span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="username" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="button" id="btnLogin" name="btnLogin">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0" id="msg"></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits text-center">
               
              &copy; Copyright &copy; -<?php echo $settings['year']; ?>. All Rights Reserved,<?php echo $settings['org_name']; ?> 
            <br>Powered by <a target="_blank" href="<?php echo $settings['powered_url']; ?> "><?php echo $settings['powered_by']; ?> </a>  
            </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <?php include("templates/vendors.php"); ?>

</body>

</html>