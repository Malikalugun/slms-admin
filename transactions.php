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
  <?php include("templates/header.php"); ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include("templates/sidebar.php"); ?>
  <!-- End Sidebar-->


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Transaction</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Transaction</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">


          <div class="card">
            <div class="card-body">

              <h5 class="card-title">Transaction List</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Transaction Id</th>
                    <th scope="col">Date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Card Number</th>
                    <th scope="col">Book Id </th>
                    <!-- <th scope="col">Status</th> -->




                  </tr>
                </thead>
                <tbody>
                  <?php
                  include("./conn.php");
                  $sl = 1;
                  $sql = "select * from tbl_transaction order by book_id asc";
                  $smt = mysqli_query($conn, $sql);
                  while ($rs = mysqli_fetch_array($smt)) {
                    echo "<tr>";
                    echo "<td>" . $sl . "</td>";
                    echo "<td>" . $rs['transaction_id'] . "</td>";
                    echo "<td>" . $rs['date'] . "</td>";
                    echo "<td>" . $rs['type'] . "</td>";
                    echo "<td>" . $rs['card_no'] . "</td>";
                    echo "<td>" . $rs['book_id'] . "</td>";
                    // echo "<td>" . $rs['status'] . "</td>";

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