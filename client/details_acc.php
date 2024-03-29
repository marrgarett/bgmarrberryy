<?php
ini_set('display_errors', 1);
error_reporting(0);
session_start();
include_once '../admin/db_connect.php';

$user_id = $_SESSION['user_id'];
$fullname = $_SESSION['fullname'];
$session_id = session_id();

$sharp = "#";
$bgm = "BGM";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cart</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />

    <!-- =======================================================
  * Template Name: PhotoFolio
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <!-- Start.navbar -->
            <?php include_once 'sideMenu.php'; ?>
            <!-- End.navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main" data-aos="fade"> <!-- data-aos-delay="1500" -->

        <!-- ======= End Page Header ======= -->
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12">

                        <?php
                            $sql = "SELECT * FROM `tblclient` WHERE id = '$user_id'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                        ?>

                        <!-- <h3 class="text-center">ข้อมูลผู้ใช้</h3> -->
                        <div class="row">
                            <div class="form-group col-md-3">
                                
                            </div>
                            <div class="form-group col-md-6">
                                <div class="card cart_product">
                                    <div class="card-body">
                                        <h3 class="text-center"><i class="fas fa-user" style="padding:10px"></i>User information</h3>
                                        <hr>
                                        <label for="">>Username</label><br>
                                        <input type="text" class="user_detail" value="<?php echo $row['fullname'] ?>" readonly>
                                        <br><br>
                                        <label for="">>Email</label><br>
                                        <input type="email" class="user_detail" value="<?php echo $row['useremail'] ?>" readonly>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div><!-- End Page Header -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include_once 'footer.php'; ?>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- <div id="preloader">
    <div class="line"></div>
  </div> -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/quantity.js"></script>

</body>

</html>