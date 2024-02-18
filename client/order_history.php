<?php
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


                        <br>
                        <!-- Page Heading -->
                        <!-- <h1 class="h3 mb-4 text-gray-800">Order History</h1> -->

                        <?php
                        $sql = "SELECT history_tbl.his_id, history_tbl.order_id, history_tbl.cli_id, 
                    tblclient.fullname, 
                    id_order.discount,
                    history_tbl.bgmarr_name, 
                    bgmarr_tbl.bgmarr_name,
                    history_tbl.his_hr, 
                    history_tbl.his_hr*bgmarr_tbl.bgmarr_price-id_order.discount AS total_sum,
                    history_tbl.his_start,
                    history_tbl.his_end,
                    history_tbl.his_payment,
                    history_tbl.his_status
                    FROM history_tbl
                    JOIN tblclient
                    ON history_tbl.cli_id = tblclient.id
                    JOIN bgmarr_tbl
                    ON history_tbl.bgmarr_name = bgmarr_tbl.bgmarr_name
                    JOIN id_order 
                    ON history_tbl.order_id = id_order.id_order
                    WHERE history_tbl.cli_id = '$user_id' ORDER BY `history_tbl`.`his_id` DESC";
                        $result = mysqli_query($conn, $sql);

                        ?>
                        <div>
                            <?php

                            $month = date('m');
                            $day = date('d');
                            $year = date('Y');

                            $today = $year . '-' . $month . '-' . $day;
                            ?>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h1 class="h3 mb-4 text-gray-800">Order History</h1>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>

                                            <th>No.</th>
                                            <th>Order ID</th>
                                            <th>IDName</th>
                                            <th>Hour</th>
                                            <th>Summary</th>
                                            <th>Date/Time Start</th>
                                            <th>Date/Time End</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $his_start = substr($row["his_start"], 11);
                                                $his_hr = $row["his_hr"];

                                                $end_date_time = substr($row["his_start"], 0, -9);

                                                $a = substr($row["his_start"], 11);
                                                $b = substr($a, 0, -6);
                                                $c = $b + $his_hr;
                                                $d = substr($row["his_start"], 13);
                                                $e = ("$c" . "$d");

                                                $start_time = $row["his_start"];
                                                $now_time = date("H:i:s");
                                                $end_time = ("$c" . "$d");



                                        ?>
                                                <tr>
                                                    <th scope><?php echo $i++ ?></th>
                                                    <td><?php echo $row["order_id"] ?></td>
                                                    <td><?php echo $row["bgmarr_name"] ?></td>
                                                    <td><?php echo $row["his_hr"] ?></td>
                                                    <td><?php echo $row["total_sum"] ?></td>
                                                    <td><?php echo $row["his_start"] ?></td>
                                                    <td><?php echo $row["his_end"] ?></td>
                                                    <td><?php echo $row["his_status"] ?></td>


                                                    <!--
                                                    <a href="history_chk.php?his_id=<?php echo $row["his_id"]; ?>" class="btn btn-warning">แก้ไข</a>
                                                    <a href="" class="btn btn-warning">เปลี่ยนสถานะ</a>
                                                    -->

                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
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