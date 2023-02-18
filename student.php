
<?php
include "./conn.php";
if($_GET['id'])
{
$id= $_GET['id'];
$sql = "select * from tbl_student where reg_no='$id'";
$smt  = mysqli_query($conn,$sql);
$res = mysqli_fetch_assoc($smt);

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Student</title>
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
                
                  <h5 class="card-title">Student Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Student Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $res['name']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Guardian</div>
                    <div class="col-lg-9 col-md-8"><?php echo $res['guardian']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Contact</div>
                    <div class="col-lg-9 col-md-8"><?php echo $res['contact']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Program Id</div>
                    <div class="col-lg-9 col-md-8"><?php echo $res['program_id']?></div>
                  </div>
                
                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $res['email']?></div>
                  </div>
                
                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Gender</div>
                    <div class="col-lg-9 col-md-8"><?php echo $res['gender']?></div>
                  </div>
                
                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Marital Status</div>
                    <div class="col-lg-9 col-md-8"><?php echo $res['marital_status']?></div>
                  </div>
                
                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nationality</div>
                    <div class="col-lg-9 col-md-8"><?php echo $res['nationality']?></div>
                  </div>
                
                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Catagory</div>
                    <div class="col-lg-9 col-md-8"><?php echo $res['catagory']?></div>
                  </div>
                
                
                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8"><?php echo $res['address']?></div>
                  </div>
                
                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Pin Code</div>
                    <div class="col-lg-9 col-md-8"><?php echo $res['pin_code']?></div>
                  </div>
                
                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Status</div>
                    <div class="col-lg-9 col-md-8"><?php echo $res['status']?></div>
                  </div>
                </div>

                

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