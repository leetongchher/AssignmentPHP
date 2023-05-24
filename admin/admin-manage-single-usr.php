<?php
session_start();
include('vendor/inc/config.php');
include('vendor/inc/checklogin.php');
check_login();
$aid = $_SESSION['a_id'];
//Add User
if (isset($_POST['update_user'])) {
  $u_id = $_GET['u_id'];
  $u_fullname = $_POST['u_fullname'];
  $u_direction = $_POST['u_direction'];
  $u_date = $_POST['u_date'];
  $u_country = $_POST['u_country'];
  $u_email = $_POST['u_email'];
  $u_phone = $_POST['u_phone'];
  $u_price = $_POST['u_price'];
  $u_time = $_POST['u_time'];
  $u_seat = $_POST['u_seat'];
  $query = "update tms_user set u_fullname=?, u_direction=?, u_date=?, u_country=?, u_email=?, u_phone=?, u_price=?, u_time=?, u_seat=? where u_id=?";
  $stmt = $mysqli->prepare($query);
  $rc = $stmt->bind_param('sssssssssi', $u_fullname, $u_direction, $u_date, $u_country, $u_email, $u_phone, $u_price, $u_time, $u_seat, $u_id);
  $stmt->execute();
  if ($stmt) {
    $succ = "User Updated";
  } else {
    $err = "Please Try Again Later";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include('vendor/inc/head.php'); ?>

<body id="page-top">
  <?php include("vendor/inc/nav.php"); ?>
  <div id="wrapper">
    <?php include("vendor/inc/sidebar.php"); ?>
    <div id="content-wrapper">

      <div class="container-fluid">
        <?php if (isset($succ)) { ?>
          <script>
            setTimeout(function () {
              swal("Success!", "<?php echo $succ; ?>!", "success");
            },
              100);
          </script>

        <?php } ?>
        <?php if (isset($err)) { ?>
          <script>
            setTimeout(function () {
              swal("Failed!", "<?php echo $err; ?>!", "Failed");
            },
              100);
          </script>
        <?php } ?>
        <ol class="breadcrumb">
          <li class="breadcrumb-item font-weight-bold font-italic">
            <a href="#">Tickets</a>
          </li>
          <li class="breadcrumb-item active">Edit Ticket</li>
        </ol>
        <hr>
        <div class="card">
          <div class="card-header font-weight-bold font-italic">
            Edit Ticket
          </div>
          <div class="card-body">
            <?php
            $aid = $_GET['u_id'];
            $ret = "select * from tms_user where u_id=?";
            $stmt = $mysqli->prepare($ret);
            $stmt->bind_param('i', $aid);
            $stmt->execute(); //ok
            $res = $stmt->get_result();
            while ($row = $res->fetch_object()) {
              ?>
              <form method="POST">
                <div class="form-group">
                  <label for="Input">Fullname</label>
                  <input type="text" class="form-control" value="<?php echo $row->u_fullname; ?>" id="Input"
                    name="u_fullname">
                </div>
                <div class="form-group">
                  <label for="Input">Direction</label>
                  <select name='u_direction' class="form-control">
                    <option>Siem Reap -> Phnom Penh</option>
                    <option>Siem Reap -> Kompong Thom</option>
                    <option>Phnom Penh -> Siem Reap</option>
                    <option>Phnom Penh -> Kompong Thom</option>
                    <option>Kompong Thom -> Phnom Penh</option>
                    <option>Kompong Thom -> Siem Reap</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="Input">Date</label>
                  <input type="date" class="form-control" value="<?php echo $row->u_date; ?>" id="Input" name="u_date">
                </div>

                <div class="form-group">
                  <label for="Input">Country</label>
                  <input type="text" class="form-control" value="<?php echo $row->u_country; ?>" id="Input"
                    name="u_country">
                </div>

                <div class="form-group">
                  <label for="Input">Email address</label>
                  <input type="email" value="<?php echo $row->u_email; ?>" class="form-control" name="u_email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Contact</label>
                  <input type="text" class="form-control" value="<?php echo $row->u_phone; ?>" name="u_phone"
                    id="exampleInputPassword1">
                </div>

                <div class="form-group">
                  <label for="Input">Price</label>
                  <input type="number" class="form-control" value="<?php echo $row->u_price; ?>" name="u_price">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Time</label>
                  <input type="time" class="form-control" value="<?php echo $row->u_time; ?>" name="u_time"
                    id="exampleInputPassword1">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Seat</label>
                  <select name='u_seat' class="form-control">
                    <option>TC001</option>
                    <option>TC002</option>
                    <option>TC003</option>
                    <option>TC004</option>
                    <option>TC005</option>
                    <option>TC006</option>
                    <option>TC007</option>
                    <option>TC008</option>
                    <option>TC009</option>
                    <option>TC010</option>
                    <option>TC011</option>
                  </select>
                </div>

                <button type="submit" name="update_user" class="btn btn-success font-weight-bold font-italic">Update
                  Ticket</button>
              </form>
              <!-- End Form-->
            <?php } ?>
          </div>
        </div>

        <hr>
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
    <script src="vendor/js/swal.js"></script>

</body>

</html>