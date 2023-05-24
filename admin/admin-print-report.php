<?php
session_start();
include('vendor/inc/config.php');
include('vendor/inc/checklogin.php');
check_login();
$aid = $_SESSION['a_id'];
$dateFrom = $_POST['from'];
$dateTo = $_POST['to'];
?>
<!DOCTYPE html>
<html lang="en">

<?php include('vendor/inc/head.php'); ?>
<style type="text/css">
  @media print {
    #print {
      display: none;
    }
  }
</style>

<body id="page-top">

  <?php include("vendor/inc/nav.php"); ?>


  <div id="wrapper">

    <!-- Sidebar -->
    <script>
      function btnprint() {
        window.print();
      }

    </script>
    <div class="container">
      <div class="container-fluid"><br>
      <div class="d-flex justify-content-center">    
        <img src="assets/img/favicon.png" width="80">
      </div>
          <h3 class="d-flex justify-content-center">Vehicle Booking System Co Ltd.</h3>
          <div class="d-flex justify-content-center">Vehicle booking system reserves the right, at its sole discretion</div>

        <div style="height:50px">&nbsp;</div>
        <div id="main">
          <h2 class="d-flex justify-content-center">Report Customer of Vehicle Booking System</h2>
          <div><button onclick="btnprint()" class="btn btn-primary" id="print">Print</button></div>
          <div>Report from: <?php echo $dateFrom; ?> to: <?php echo $dateTo; ?></div>
          <table border="1" class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Fullname</th>
                <th>Direction</th>
                <th>Date</th>
                <th>Contact</th>
                <th>Time</th>
                <th>Seat</th>
              </tr>
            </thead>

            <?php

            $ret = "SELECT * FROM tms_user";
            $stmt = $mysqli->prepare($ret);
            $stmt->execute();
            $res = $stmt->get_result();
            $no = 1;
            while ($row = mysqli_fetch_assoc($res)) {
              if ($row['u_date'] >= $dateFrom && $row['u_date'] <= $dateTo) {
                ?>
                <tr>
                  <td>
                    <?php echo $no; ?>
                  </td>
                  <td>
                    <?php echo $row['u_fullname']; ?>
                  </td>
                  <td>
                    <?php echo $row['u_direction']; ?>
                  </td>
                  <td>
                    <?php echo $row['u_date']; ?>
                  </td>
                  <td>
                    <?php echo $row['u_phone']; ?>
                  </td>
                  <td>
                    <?php echo $row['u_time']; ?>
                  </td>
                  <td>
                    <?php echo $row['u_seat']; ?>
                  </td>
                </tr>
                <?php
                $no++;
              }
            }
            ?>
            <tr>
              <td colspan="6" align='center'>Total</td>
              <td>
                <?php echo $no - 1 . " People"; ?>
              </td>
            </tr>
          </table>
          <div class="sign">
            Date:
            <?php echo date('d-F-Y'); ?><br>
            Signed by <br>
            <br><br><br><br>
            Ly Tongchher
          </div>

        </div>
      </div>
      <br><br>
      <div class="d-flex justify-content-center">
        <small>Address: Watdamnak Village, Salakamrerk Commune, Siemreap. Cambodia.</small>
      </div>

    </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-danger" href="admin-logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/sb-admin.min.js"></script>
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>