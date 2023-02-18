<?php
$id=null;
if(isset($_GET['id']))
{
include("./conn.php");
$id=$_GET['id'];
$sql="select * from tbl_location where location_id='$id'";
$smt=mysqli_query($conn,$sql);
$rs=mysqli_fetch_array($smt);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>location</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php include("templates/inc.php") ?>

</head>

<body>

  <!-- ======= Header ======= -->
  <?php include("templates/header.php");?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include("templates/sidebar.php"); ?>
  <!-- End Sidebar-->
  <script src="./scripts/location.js" type="text/javascript" language="javascript"></script>



  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">location</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Location</h5>
               <!-- Vertical Form -->
              <form class="row g-3">
              
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Section</label>
                  <input value="<?php echo $rs['section'] ?>" type="text" class="form-control" id="section" name="section" placeholder="Enter name">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Column Name</label>
                  <input value="<?php echo $rs['column_name'] ?>" type="text" class="form-control" id="column_name" name="column_name" placeholder="Enter price">
                </div>
                <!-- <div class="col-12">
                  <label for="inputPassword4" class="form-label">Status</label>
                  <input value="<?php echo $rs['status'] ?>" type="text" class="form-control" id="status" name="status" placeholder="Enter quantity">
                </div> -->
                <div class="text-center">
                    <input type="hidden" name="id" id="id"  value="<?php echo $rs['location_id'] ?>" />
                  <div id="msg"></div><br>
                  <button type="button" class="btn btn-primary" id="btnSubmitUpdate" name="btnSubmitUpdate">Update</button>
                </div>
              </form><!-- Vertical Form -->
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <?php include("templates/footer.php"); ?>
  <!-- End Footer -->

  <?php include("templates/vendors.php") ?>

</body>

</html>