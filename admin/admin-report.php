<?php
session_start();
include('vendor/inc/config.php');
include('vendor/inc/checklogin.php');
check_login();
$aid = $_SESSION['a_id'];
?>
<!DOCTYPE html>
<html lang="en">

<?php include('vendor/inc/head.php'); ?>
<style>
  #btn{
    float: right;
    margin-bottom: 15px;
    margin-top: -35px;
  }
</style>

<body id="page-top">
  <?php include("vendor/inc/nav.php"); ?>
  <div id="wrapper">
    <?php include('vendor/inc/sidebar.php'); ?>
    <div id="content-wrapper">
      <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item font-weight-bold font-italic">
            <a href="#">Report</a>
          </li>
          <li class="breadcrumb-item">Overview</li>
        </ol>
        <div>
          <form method="post">
            <div class="form-group font-weight-bold font-italic">
              <label>From</label>
              <input type="date" name="from" class="form-control">
            </div>
            <div class="form-group font-weight-bold font-italic">
              <label>To</label>
              <input type="date" name="to" class="form-control">
            </div>
            <input type="submit" value="Show Report" class="btn btn-primary font-weight-bold font-italic">
          </form>
        </div>


        <?php
        if (isset($_POST['from'])) {
          $dateFrom = $_POST['from'];
          $dateTo = $_POST['to'];
          ?>
          <div> <!-- Print report-->
            <form method="post" action="admin-print-report.php">
              <input type="hidden" name="from" value="<?php echo $dateFrom; ?>">
              <input type="hidden" name="to" value="<?php echo $dateTo; ?>">
              <input type="submit" value="Print Report" class="btn btn-primary font-weight-bold font-italic" id="btn">
            </form>
          </div><!-- Print report-->

          <?php
          $ret = "SELECT * FROM tms_user";
          $stmt = $mysqli->prepare($ret);
          $stmt->execute();
          $res = $stmt->get_result();
          $no = 1;
          ?>
          <table class='table table-bordered table-striped table-hover' id='dataTable' width='100%' cellspacing='0'>
            <tr>
              <th>
                <?php echo $no; ?>
              </th>
              <th>Fullname</th>
              <th>Direction</th>
              <th>Date</th>
              <th>Contact</th>
              <th>Time</th>
              <th>Seat</th>
            </tr>
            <?php

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
              <td colspan="6" align='right'>Total</td>
              <td>
                <?php echo $no - 1 . " People"; ?>
              </td>
            </tr>
            <?php
        }
        ?>
          <?php include("vendor/inc/footer.php"); ?>
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