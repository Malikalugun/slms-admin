<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Book</title>
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
      <h1> BOOKS</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Book</h5>
               <!-- Vertical Form -->
              <form class="row g-3">
                <!-- <div class="col-12">
                  <label for="inputNanme4" class="form-label">Book Id</label>
                  <input type="text" class="form-control" id="book_id" name="book_id" placeholder="Enter name">
                </div> -->
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Author</label>
                  <input type="text" class="form-control" id="author" name="author" placeholder="Enter Author Name">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Edition</label>
                  <input type="text" class="form-control" id="edition" name="edition" placeholder="Enter Edition">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Publisher</label>
                  <input type="text" class="form-control" id="publisher" name="publisher" placeholder="Enter Publisher">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Subject</label>
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Quantity</label>
                  <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity">
                </div>
                               
                <div class="text-center">
                  <div id="msg"></div><br>
                  <button type="button" class="btn btn-primary" id="btnSubmitAdd" name="btnSubmitAdd">Submit</button>
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