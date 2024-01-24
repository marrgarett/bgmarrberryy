<?php
session_start();
include_once '../admin/db_connect.php';

$user_id = $_SESSION['user_id'];
$fullname = $_SESSION['fullname'];

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


        <?php
        $sql = "SELECT id_order.id,
                                    id_order.id_order,
                                    id_order.user_id,
                                    bgmarr_tbl.bgmarr_img,
                                    id_order.id_bgmarr_name,
                                    id_order.price,
                                    id_order.quantity_hr,
                                    id_order.price * id_order.quantity_hr AS total_sum,
                                    id_order.discount
                                    FROM id_order 
                                    JOIN tblclient 
                                    ON id_order.user_id = tblclient.id 
                                    JOIN bgmarr_tbl 
                                    ON id_order.id_bgmarr_name = bgmarr_tbl.bgmarr_name 
                                    WHERE id_order.user_id = '$user_id' ORDER BY `id_order`.`id` ASC; ";
        $result = mysqli_query($conn, $sql);
        ?>

        <!-- ======= End Page Header ======= -->
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12">
                        <h2 class="text-center">เลือกวิธีชำระเงิน</h2>
                        <div class="row">
                            <div class="form-group col-md-8" style="margin: auto;">
                                <div class="card cart_product">
                                    <div class="card-body text-center">
                                        <?php
                                        $i = 0;
                                        $sum = 0;
                                        $sum2 = 0;
                                        $discount = 0;
                                        if (mysqli_num_rows($result) > 0) {

                                            // output data of each row
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $total = $row['total_sum'];
                                                $dis = $row['discount'];
                                                $id_order = $row['id_order'];
                                                $discount += $dis;
                                                $sum += $total;
                                                $i++;
                                        ?>
                                        <?php
                                            }
                                        }
                                        $sum2 = $sum - $discount;
                                        // $_SESSION['i'] = $i;
                                        ?>
                                        <hr>
                                        <h5>Shipping Address</h5>
                                        <br>
                                        <p style="color:brown;">อีเมลที่ใช้รับสินค้า : test@gmail.com</p>
                                        <hr>
                                        <h5>Payment Details</h5>
                                        <br>
                                        <h6>ราคารวม : <?php echo $sum2 ?>.00 บาท</h6>
                                        <br>
                                        <p>please choose your preferred method of payment.</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                            <label for="flexRadioDefault1">
                                            โอนเงินผ่านธนาคาร
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label for="flexRadioDefault1">
                                            qrPayment
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input  type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                            <label  for="flexRadioDefault2">
                                            TrueWallet
                                            </label>
                                        </div>
                                        <hr>
                                        <br>
                                        <a href="cartPayment_bank.php" class="btn btn-primary mt-3">Complete Order <i class="bi bi-arrow-right"></i></a>
                                        <!-- <p>อีเมลที่ใช้รับสินค้า</p>
                                        <input type="email" name="" id="" placeholder="Email"> -->
                                    </div>
                                </div>
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