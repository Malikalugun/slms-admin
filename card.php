
<?php
include "./conn.php";
if($_GET['id'])
{
$id= $_GET['id'];
$sql = "select * from tbl_card where card_no='$id'";
$smt  = mysqli_query($conn,$sql);
$res = mysqli_fetch_assoc($smt);

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cards</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <?php include "./templates/inc.php"?>


</head>

<body>

  <!-- ======= Header ======= -->
 <?php include "./templates/header.php"?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include "./templates/sidebar.php"?>
  <!-- End Sidebar-->

  <main id="main" class="main">


    <section class="section profile">
      <div class="row">
       
        <div class="col-md-12">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                 
                  <h5 class="card-title">Card Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Card Id</div>
                    <div class="col-lg-9 col-md-8"><?php echo $res['card_no']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Validity</div>
                    <div class="col-lg-9 col-md-8"><?php echo $res['validity']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Type</div>
                    <div class="col-lg-9 col-md-8"><?php echo $res['type']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Status</div>
                    <div class="col-lg-9 col-md-8"><?php echo $res['status']?></div>
                  </div>
                </div>
                <div class="row">
                  
               
              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include "./templates/footer.php"?>
  <!-- End Footer -->
<?php include "./templates/vendors.php"?>

</body>

</html>