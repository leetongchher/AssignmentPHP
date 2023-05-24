<?php
session_start();
include('vendor/inc/config.php');
include('vendor/inc/checklogin.php');
check_login();
$aid = $_SESSION['a_id'];
if (isset($_GET['del'])) {
  $id = intval($_GET['del']);
  $adn = "delete from tms_user where u_id=?";
  $stmt = $mysqli->prepare($adn);
  $stmt->bind_param('i', $id);
  $stmt->execute();
  $stmt->close();

  if ($stmt) {
    $succ = "Vehicle Removed";
  } else {
    $err = "Try Again Later";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include('vendor/inc/head.php'); ?>

<body id="page-top">
  <?php include("vendor/inc/nav.php"); ?>
  <div id="wrapper">
    <?php include('vendor/inc/sidebar.php'); ?>
    <div id="content-wrapper">
      <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item font-weight-bold font-italic">
            <a href="#">Tickets</a>
          </li>
          <li class="breadcrumb-item active">Manage Tickets</li>
        </ol>
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

        <div class="card mb-3">
          <div class="card-header font-weight-bold font-italic">
            <i class="bi bi-bag-fill"></i>
            Purchase Tickets
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Fullname</th>
                    <th>Direction</th>
                    <th>Date</th>
                    <th>Contact</th>
                    <th>Time</th>
                    <th>Seat</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <?php

                $ret = "SELECT * FROM tms_user ORDER BY RAND() LIMIT 1000 ";
                $stmt = $mysqli->prepare($ret);
                $stmt->execute();
                $res = $stmt->get_result();
                $cnt = 1;
                while ($row = $res->fetch_object()) {
                  ?>
                  <tbody>
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
                      <td>
                        <a href="admin-manage-single-usr.php?u_id=<?php echo $row->u_id; ?>"
                          class="badge badge-success font-weight-bold font-italic"><i class="fa fa-user-edit"></i>
                          Update</a>
                        <a href="admin-manage-user.php?del=<?php echo $row->u_id; ?>"
                          class="badge badge-danger font-weight-bold font-italic" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                  </tbody>
                  <?php $cnt = $cnt + 1;
                } ?>

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
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
  <script src="js/sb-admin.min.js"></script>
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>