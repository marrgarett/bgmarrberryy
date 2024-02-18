<?php
session_start();
include_once '../admin/db_connect.php';

$user_id = $_SESSION['user_id'];
$fullname = $_SESSION['fullname'];

$id_order = $_GET['id_order'];


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



        <?php
        $sql = "SELECT id_order.id,
        id_order.id_order,
        id_order.user_id,
        bgmarr_tbl.bgmarr_img,
        id_order.id_bgmarr_name,
        id_order.price,
        id_order.quantity_hr,
        id_order.price * id_order.quantity_hr AS total_sum,
        id_order.discount,
        id_order.order_status
        FROM id_order 
        JOIN tblclient 
        ON id_order.user_id = tblclient.id
        JOIN bgmarr_tbl
        ON id_order.id_bgmarr_name = bgmarr_tbl.bgmarr_name 
        WHERE id_order.user_id = '$user_id' AND id_order.order_status = 'Uncomplete' ORDER BY `id_order`.`id` ASC;";
        $result = mysqli_query($conn, $sql);
        ?>
        <!-- ======= End Page Header ======= -->
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12">
                        <!-- <h2 class="text-center">Make Payment</h2> -->
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
                                        <h3>Bank transfer</h3>

                                        <p>You are required to transfer money through the Mobile Banking application of the bank using the QR code provided in the money transfer slip. Otherwise, the system will not be able to verify your money transfer.</p>
                                        <td style="padding-top: 15px;"><img src="img/qrpayment.jpg" alt="" width="220" height="300"></td>
                                        <br><br>
                                        <h5><img src="img/scb-logo.png" alt="" width="30" height="30" style="margin-right: 5px;">Siam Commercial Bank</h5>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>Account name</th>
                                                    <td>Ponlawat Kunna</td>
                                                </tr>
                                                <tr>
                                                    <th>Account number</th>
                                                    <td>177-8-87827-1</td>
                                                </tr>
                                                <tr>
                                                    <th>Totals</th>
                                                    <td><?php echo $sum2 ?> THB</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <form action="cartSave.php?user_id=<?php echo $user_id; ?>&id_order=<?php echo $id_order ?>" method="post" enctype="multipart/form-data">
                                            <p>After completing the transaction, please upload the money transfer slip file and provide the email address for receiving the goods. Then, press 'Confirm Payment.'</p>
                                            <input type="file" name="his_payment" id="his_payment" />
                                            <br>
                                            <br>
                                            <input type="submit" class="btn btn-primary mt-3" name="confirm" value="Confirm payment"></input>
                                        </form>
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