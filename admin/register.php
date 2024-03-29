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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-color: #000;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register With Email</h1>
                                    </div>
                                    <form class="user" action="registerSave.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" name="fullname" class="form-control form-control-user" id="exampleFirstName" placeholder="FristName" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="lastname" class="form-control form-control-user" id="exampleLastName" placeholder="Lastname (Optional)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="useremail" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email" required>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" name="password1" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required minlength="8" maxlength="20">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" name="password2" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Confirm Password" required minlength="8" maxlength="20">                   
                                            </div>
                                        </div>
                                        <!-- <p>* รหัสผ่านต้องมี 8-30 ตัว(ทั้งตัวเลขและตัวอักษร)</p> -->
                                        <input type="submit" name="save" value="Sign Up" class="btn btn-primary btn-block" style="border-radius: 25px;">

                                        
                                        <!-- <hr>
                                        <a href="index.php" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Register with Google
                                        </a>
                                        <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                        </a> -->
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.php">Forgot Password? Reset Password!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Already have an account? Sign In!</a>
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