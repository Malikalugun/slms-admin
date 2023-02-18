<?php
$id=null;
if(isset($_GET['id']))
{
include("./conn.php");
$id=$_GET['id'];
$sql="select * from tbl_book_master where book_id='$id'";
$smt=mysqli_query($conn,$sql);
$rs=mysqli_fetch_array($smt);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
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
  <script src="./scripts/book.js" type="text/javascript" language="javascript"></script>



  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Books</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Book</h5>
               <!-- Vertical Form -->
              <form class="row g-3">
              
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Book Title</label>
                  <input value="<?php echo $rs['title'] ?>" type="text" class="form-control" id="title" name="title" placeholder="Enter Books Title">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Author</label>
                  <input value="<?php echo $rs['author'] ?>" type="text" class="form-control" id="author" name="author" placeholder="Enter Author Name">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Edition</label>
                  <input value="<?php echo $rs['edition'] ?>" type="text" class="form-control" id="edition" name="edition" placeholder="Enter Edition">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Publisher</label>
                  <input value="<?php echo $rs['publisher'] ?>" type="text" class="form-control" id="publisher" name="publisher" placeholder="Enter Publisher">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Subject</label>
                  <input value="<?php echo $rs['subject'] ?>" type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Quantity</label>
                  <input value="<?php echo $rs['quantity'] ?>" type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity">
                </div>
                <div class="text-center">
                    <input type="hidden" name="id" id="id"  value="<?php echo $rs['book_id'] ?>" />
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