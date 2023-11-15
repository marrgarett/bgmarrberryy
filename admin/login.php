<?php
    include_once 'db_connect.php';

    if (isset($_POST['login'])) {

        $sql = "SELECT * FROM `tbladmin` WHERE `username` = ? AND `password` = ?";
        $uname = $_POST['username'];
        $password = md5($_POST['password']);
      
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ss', $uname, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        if ($row > 0) {
          $_SESSION['id'] = $row['id'];
          $_SESSION['fullname'] = $row['fullname'];
          $_SESSION['username'] = $row['username'];
          session_write_close();
          echo '<script type="text/javascript">';
          echo 'setTimeout(function () { swal.fire({
                  title: "สำเร็จ!",
                  text: "เข้าสู่หน้าแก้ไขรหัสผ่าน",
                  type: "success",
                  icon: "success"
              });';
          echo '}, 500 );</script>';
      
          echo '<script type="text/javascript">';
          echo 'setTimeout(function () { 
                  window.location.href = "pass_update.php";';
          echo '}, 3000 );</script>';
        } else if ($row > 0 && $row['pass_update'] == '1') {
          $_SESSION['id'] = $row['id'];
          $_SESSION['fullname'] = $row['fullname'];
          $_SESSION['username'] = $row['username'];
          $_SESSION['faculty'] = $row['faculty'];
          $_SESSION['position'] = $row['position'];
          $_SESSION['faculty_id'] = $row['faculty_id'];
          session_write_close();
          echo '<script type="text/javascript">';
          echo 'setTimeout(function () { swal.fire({
                  title: "สำเร็จ!",
                  text: "เข้าสู่ระบบเรียบร้อย!",
                  type: "success",
                  icon: "success"
              });';
          echo '}, 500 );</script>';
      
          echo '<script type="text/javascript">';
          echo 'setTimeout(function () { 
                  window.location.href = "index.php";';
          echo '}, 3000 );</script>';
        } else {
          echo '<script type="text/javascript">';
          echo 'setTimeout(function () { swal.fire({
                  title: "ผิดพลาด!",
                  text: "กรุณาลองใหม่!",
                  type: "warning",
                  icon: "error"
              });';
          echo '}, 500);</script>';
      
          echo '<script type="text/javascript">';
          echo 'setTimeout(function () { 
              window.location.href = "login.php";';
          echo '}, 3000 );</script>';
        }
      }
      ?>

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BGMarrBerryy - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" form name="myForm" method="post">
                                        <div class="form-group">
                                            <input type="email" name="username" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" name="login" class="btn btn-primary btn-user btn-block">Login</button>
                                        <!--
                                        <hr>
                                        <a href="index.php" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                        -->
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.php">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>