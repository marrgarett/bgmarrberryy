<?php
 include_once('db_connect.php');

 $id = $_GET["id"];


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BGMarrBerryy - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">แก้ไขข้อมูลสมาชิก</h1>
                            </div>
                            <?php 
                                $sql = "SELECT * FROM `tblclient` WHERE id = '$id';";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                                               
                                $fullname = $row["fullname"];           // ข้อมูลที่รวมชื่อและนามสกุล
                                $nameParts = explode(" ", $fullname);   // ใช้ explode เพื่อแยกชื่อและนามสกุล
                                $firstName = $nameParts[0];             // ตัวแปรแยกชื่อ
                                $lastName = isset($nameParts[1]) ? $nameParts[1] : ''; // ตัวแปรแยกนามสกุล (หากมี)
                                
                            ?>
                            <form class="user" action="registerSave.php?id=<?php echo $row["id"]; ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="fullname" value="<?php echo $firstName ?>" class="form-control form-control-user" id="exampleFirstName" placeholder="ขื่อ" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="lastname" value="<?php echo $lastName ?>" class="form-control form-control-user" id="exampleLastName" placeholder="นามสกุล" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="useremail" value="<?php echo $row["useremail"]; ?>" class="form-control form-control-user" id="exampleInputEmail" placeholder="อีเมล" readonly>
                                </div>
                               
                                <input type="submit" name="update" value="อัเดตข้อมูล" class="btn btn-primary btn-block">


                                <hr>
                                <a href="index.php" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
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
