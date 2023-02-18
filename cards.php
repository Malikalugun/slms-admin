<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>card</title>
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
      <h1>Cards</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Cards</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <a href="card-add.php">
           <button type="button" class="btn btn-primary"><i class="bi bi-plus me-1"></i> Add New</button>
           
    </a><br><br>
      <div class="row">
        <div class="col-lg-12">
           
          
          <div class="card">
            <div class="card-body">
            
              <h5 class="card-title">Cards List</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Card No</th>
                    <th scope="col">Reg No</th>
                    <th scope="col">Issue Date</th>
                    <th scope="col">Validity</th>
                    <th scope="col">Type</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                   <?php 
                   include("./conn.php");
                   $sl=1;
                   $sql="select * from tbl_card order by issue_date desc";
                   $smt=mysqli_query($conn,$sql);
                   while($rs=mysqli_fetch_array($smt))
                   {
                    echo "<tr>";
                    echo "<td>".$sl."</td>";
                    echo "<td>".$rs['card_no']."</td>";
                    echo "<td>".$rs['reg_no']."</td>";
                    echo "<td>".$rs['issue_date']."</td>";
                    echo "<td>".$rs['validity']."</td>";
                    echo "<td>".$rs['type']."</td>";
                    echo "<td>".$rs['status']."</td>";
                    echo '<td><a href="card-edit.php?id='.$rs['card_no'].'"><button type="button" class="btn btn-primary"><i class="bi bi-pencil me-1"></i> Edit</button></td>';
                    echo '<td><a href="card-delete.php?id='.$rs['card_no'].'"><button type="button" class="btn btn-danger"><i class="ri-delete-bin-6-line"></i> Delete</button></td>';
                    echo '<td><a href="card.php?id='.$rs['card_no'].'"><button type="button" class="btn btn-primary">View</button></td>';
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