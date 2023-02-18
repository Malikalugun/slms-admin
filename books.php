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


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Books</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Books</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <a href="book-add.php">
    <button type="button" class="btn btn-primary"><i class="bi bi-plus me-1"></i> Add New</button>
           
    </a><br><br>
      <div class="row">
        <div class="col-lg-12">
           
          
          <div class="card">
            <div class="card-body">
            
              <h5 class="card-title">Books List</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Book Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Edition</th>
                    <!-- <th scope="col">Publisher</th>
                    <th scope="col">Subject</th> -->
                    <th scope="col">Quantity</th>
                    <th scope="col">Status</th>
                    <th colspan="3">Active</th>
                    
                    

                  </tr>
                </thead>
                <tbody>
                   <?php 
                   include("./conn.php");
                   $sl=1;
                   $sql="select * from tbl_book_master order by book_id asc";
                   $smt=mysqli_query($conn,$sql);
                   while($rs=mysqli_fetch_array($smt))
                   {
                    echo "<tr>";
                    echo "<td>".$sl."</td>";
                    echo "<td>".$rs['book_id']."</td>";
                    echo "<td>".$rs['title']."</td>";
                    echo "<td>".$rs['author']."</td>";
                    echo "<td>".$rs['subject']."</td>";
                    echo "<td>".$rs['quantity']."</td>";
                    echo "<td>".$rs['status']."</td>";
                    echo '<td><a href="book-edit.php?id='.$rs['book_id'].'"><button type="button" class="btn btn-primary"><i class="bi bi-pencil me-1"></i> Edit</button></td>';
                    echo '<td><a href="book-delete.php?id='.$rs['book_id'].'"><button type="button" class="btn btn-danger"><i class="ri-delete-bin-6-line"></i> Delete</button></td>';
                    echo '<td><a href="book.php?id='.$rs['book_id'].'"><button type="button" class="btn btn-primary">View</button></td>';
                    echo "</tr>";
                    $sl++;
                   }

                   ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->


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