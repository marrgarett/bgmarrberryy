<?php
ini_set('display_errors', 1);
error_reporting(0);
session_start();
include_once '../admin/db_connect.php';

$user_id = $_SESSION['user_id'];
$fullname = $_SESSION['fullname'];

date_default_timezone_set('asia/bangkok');
$nowDateTime = date("Y-m-d H:i:s");

$outTime = date('Y-m-d H:i:s', strtotime('+15 minutes', strtotime($nowDateTime))); //บวกเวลา ไปอีก 90 นาที

$sharp = "#";
$bgm = "BGM";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BGMarrBerryy</title>
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
    </section>

    <main id="main">

        <!-- ======= End Page Header ======= -->
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">

                    <!-- ======= Gallery Single Section ======= -->
                    <section id="gallery-single" class="gallery-single">
                        <div class="container">
                            <div class="position-relative h-100">
                                <div class="slides-1 portfolio-details-slider swiper">
                                    <div class="swiper-wrapper align-items-center">
                                        <div class="swiper-slide">
                                            <img src="assets/img/imgcarousel/BGXMARRBERRYY_คูปอง_00000.png" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/img/imgcarousel/BGXMARRBERRYY_คูปอง_00001.png" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/img/imgcarousel/BGXMARRBERRYY_คูปอง_00002.png" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/img/imgcarousel/BGXMARRBERRYY_คูปอง_00003.png" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/img/imgcarousel/BGXMARRBERRYY_คูปอง_00004.png" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/img/imgcarousel/BGXMARRBERRYY_คูปอง_00005.png" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/img/imgcarousel/BGXMARRBERRYY_คูปอง_00006.png" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/img/imgcarousel/BGXMARRBERRYY_คูปอง_00007.png" alt="">
                                        </div>

                                    </div>
                                    <!-- <div class="swiper-pagination"></div> -->
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                            </div>

                        </div>
                    </section><!-- End Gallery Single Section -->

                </div>
            </div>
        </div><!-- End Page Header -->

        <main id="main">
            <section id="gallery" class="gallery">
                <!-- ======= Gallery Section ======= -->
                <h2 align="center">Recommended ID</h2>
                <div class="container-fluid">
                    <div class="row gy-4 justify-content-center">
                        <?php
                        $sql = "SELECT * FROM `bgmarr_tbl` WHERE `bgmarr_tbl`.`bgmarr_status` = 'Available' ORDER BY RAND() LIMIT 4; ";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="gallery-item">
                                    <img src="../admin/uploaded_imgs/<?php echo $row['bgmarr_img'] ?>" class="img-fluid" alt="">

                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="details_id2.php?id=<?php echo $row['bgmarr_name'] ?>" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                        <a href="../admin/uploaded_imgs/<?php echo $row['bgmarr_img'] ?>" title="<?php echo $row['bgmarr_name'] ?>" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                    </div>
                                </div>
                                <p></p>
                                <h5 class="text-center">
                                    Riot Tag : <?php echo $row['bgmarr_name'] ?> <?php echo $sharp ?><?php echo $row['bgmarr_price'] ?><?php echo $bgm ?>
                                    <br>
                                    Price : <?php echo $row['bgmarr_price'] ?> THB // <?php echo $row['bgmarr_status'] ?>
                                </h5>
                                <div class="text-center">
                                    <a class="btn btn-success" href="cartSave.php?bgmarr_name=<?php echo $row["bgmarr_name"]; ?>&id=<?php echo $row["bgmarr_id"]; ?>">Add To Cart</a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </section>


            <!-- End Gallery Section -->

        </main><!-- End #main -->
        </section>

        <!-- ======= Footer ======= -->
        <?php include_once 'footer.php'; ?>
        <!-- End Footer -->

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- <div id="preloader">   //โหลดหน้าจอตอน refresh
            <div class="line"></div>
        </div> -->

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <a class="btn btn-primary" href="login.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
    </main><!-- End #main -->
</body>

</html>