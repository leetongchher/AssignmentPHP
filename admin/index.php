<?php
session_start();
include('vendor/inc/config.php'); //get configuration file
if (isset($_POST['admin_login'])) {
    $a_email = $_POST['a_email'];
    $a_pwd = ($_POST['a_pwd']);
    $stmt = $mysqli->prepare("SELECT a_email, a_pwd, a_id FROM tms_admin WHERE a_email=? and a_pwd=? "); //sql to log in user
    $stmt->bind_param('ss', $a_email, $a_pwd); //bind fetched parameters
    $stmt->execute(); //execute bind
    $stmt->bind_result($a_email, $a_pwd, $a_id); //bind result
    $rs = $stmt->fetch();
    $_SESSION['a_id'] = $a_id; //assaign session to admin id
    if ($rs) {
        header("location:admin-dashboard.php");
    } else {
        $error = "Access Denied Please Check Your Credentials";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Vehicle Booking System Transport Saccos, Matatu Industry">
    <meta name="author" content="MartDevelopers">
    <title>Vehicle Booking System - Admin Login</title>
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-light">
    <?php if (isset($error)) { ?>
        <script>
            setTimeout(function () {
                swal("Failed!", "<?php echo $error; ?>!", "error");
            },
                100);
        </script>

    <?php } ?>

    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-body">

                <form method="POST">
                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                        <p class="text-center small">Enter your email address & password to login</p>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" name="a_email" class="form-control"
                                placeholder="Email address" required="required" autofocus="autofocus">
                            <label for="inputEmail">Email address</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" name="a_pwd" class="form-control"
                                placeholder="Password" required="required">
                            <label for="inputPassword">Password</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me">
                                Remember Password
                            </label>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" name="admin_login" value="Login">
                </form>

                <div class="text-center">
                    <a class="d-block small mt-3" href="../index.php">Home</a>
                    <a class="d-block small" href="admin-reset-pwd.php">Forgot Password?</a>
                </div>

            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/js/swal.js"></script>
</body>

</html>