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
      <h1>Programs</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Students</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <a href="program-add.php">
    <button type="button" class="btn btn-primary"><i class="bi bi-plus me-1"></i> Add New</button>
           
    </a><br><br>
      <div class="row">
        <div class="col-lg-12">
           
          
          <div class="card">
            <div class="card-body">
            
              <h5 class="card-title">Program List</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Program Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Incharge</th>
                    
                    <th colspan="3">Action</th>

                  </tr>
                </thead>
                <tbody>
                   <?php 
                   include("./conn.php");
                   $sl=1;
                   $sql="select * from tbl_program order by program_id asc";
                   $smt=mysqli_query($conn,$sql);
                   while($rs=mysqli_fetch_array($smt))
                   {
                    echo "<tr>";
                    echo "<td>".$sl."</td>";
                    echo "<td>".$rs['program_id']."</td>";
                    echo "<td>".$rs['name']."</td>";
                    echo "<td>".$rs['department']."</td>";
                    echo "<td>".$rs['incharge']."</td>";
                    echo '<td><a href="program-edit.php?id='.$rs['program_id'].'"><button type="button" class="btn btn-primary"><i class="bi bi-pencil me-1"></i> Edit</button></td>';
                    echo '<td><a href="program-delete.php?id='.$rs['program_id'].'"><button type="button" class="btn btn-danger"><i class="ri-delete-bin-6-line"></i> Delete</button></td>';
                    echo '<td><a href="program.php?id='.$rs['program_id'].'"><button type="button" class="btn btn-primary"> View</button></td>';
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