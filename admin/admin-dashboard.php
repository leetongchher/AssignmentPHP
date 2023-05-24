<?php
session_start();
include('vendor/inc/config.php');
include('vendor/inc/checklogin.php');
check_login();
$aid = $_SESSION['a_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Vehicle Booking System Transport Saccos, Matatu Industry">
  <meta name="author" content="MartDevelopers">

  <title>Vehicle Booking System - Admin Dashboard</title>
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="vendor/css/sb-admin.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/5794840617.js" crossorigin="anonymous"></script>

</head>

<body id="page-top">
  <?php include("vendor/inc/nav.php"); ?>
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include("vendor/inc/sidebar.php"); ?>
    <div id="content-wrapper">
      <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item font-weight-bold font-italic">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item">Overview</li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="bi bi-bag-fill"></i>
                </div>
                <?php
                $result = "SELECT count(*) FROM tms_user";
                $stmt = $mysqli->prepare($result);
                $stmt->execute();
                $stmt->bind_result($user);
                $stmt->fetch();
                $stmt->close();
                ?>
                <div class="mr-5 font-weight-bold font-italic"><span class="badge badge-danger">
                    <?php echo $user; ?>
                  </span>Tickets</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="admin-view-user.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                <i class="bi bi-currency-dollar"></i>
                </div>
                <?php
                //code for summing up number of vehicles
                $result = "SELECT SUM(u_price) as total from tms_user";
                $stmt = $mysqli->prepare($result);
                $stmt->execute();
                $stmt->bind_result($price);
                $stmt->fetch();
                $stmt->close();
                ?>
                <div class="mr-5 font-weight-bold font-italic"><span class="badge badge-danger">
                    <?php echo $price; ?>$
                  </span>Total</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="admin-income.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="card mb-3">
          <div class="card-header font-weight-bold font-italic">
            <i class="bi bi-bag-fill"></i>
            Tickets
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
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

                <tbody>
                  <?php

                  $ret = "SELECT * FROM tms_user";
                  $stmt = $mysqli->prepare($ret);
                  $stmt->execute();
                  $res = $stmt->get_result();
                  $cnt = 1;
                  while ($row = $res->fetch_object()) {
                    ?>
                    <tr>
                      <td>
                        <?php echo $cnt; ?>
                      </td>
                      <td>
                        <?php echo $row->u_fullname; ?>
                      </td>
                      <td>
                        <?php echo $row->u_direction; ?>
                      </td>
                      <td>
                        <?php echo $row->u_date; ?>
                      </td>
                      <td>
                        <?php echo $row->u_phone; ?>
                      </td>
                      <td>
                        <?php echo $row->u_time; ?>
                      </td>
                      <td>
                        <?php echo $row->u_seat; ?>
                      </td>

                    </tr>
                    <?php $cnt = $cnt + 1;
                  } ?>

                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted font-weight-bold font-italic">
            <?php
            date_default_timezone_set("Asia/Bangkok");
            echo "Generated : " . date("h:i:sa");
            ?>
          </div>
        </div>
      </div>
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
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
  <script src="vendor/js/sb-admin.min.js"></script>
  <script src="vendor/js/demo/datatables-demo.js"></script>
  <script src="vendor/js/demo/chart-area-demo.js"></script>

</body>
</html>