<?php
session_start();
include_once '../admin/db_connect.php';

$user_id = $_SESSION['user_id'];
$fullname = $_SESSION['fullname'];

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

        <!-- ======= End Page Header ======= -->
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12">
                        <h2 class="text-center">Cart</h2>

                        <!-- <a class="cta-btn" href="index.php">Back</a> -->
                        <?php
                        $sql = "SELECT id_order.id,
                                    id_order.id_order,
                                    id_order.user_id,
                                    bgmarr_tbl.bgmarr_img,
                                    id_order.id_bgmarr_name,
                                    id_order.price,
                                    id_order.quantity_hr,
                                    id_order.price * id_order.quantity_hr AS total_sum,
                                    id_order.total
                                    FROM id_order 
                                    JOIN tblclient 
                                    ON id_order.user_id = tblclient.id 
                                    JOIN bgmarr_tbl 
                                    ON id_order.id_bgmarr_name = bgmarr_tbl.bgmarr_name 
                                    WHERE id_order.user_id = '$user_id'  ORDER BY `id_order`.`id` ASC; ";
                        $result = mysqli_query($conn, $sql);

                        ?>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <div class="card cart_product">
                                    <div class="card-body">
                                        <h3>Your Cart : <?php echo "2312000001"; ?></h3>
                                        <hr>
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Product Name</th>
                                                    <th style="text-align: center;">Price</th>
                                                    <th style="text-align: center;">Quantity</th>
                                                    <th style="text-align: center;">Code</th>
                                                    <th style="text-align: center;">Total</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                if (mysqli_num_rows($result) > 0) {
                                                    // output data of each row
                                                    while ($row = mysqli_fetch_assoc($result)) {

                                                ?>
                                                        <tr>
                                                            <td style="padding-top: 15px;"><img src="../admin/uploaded_imgs/<?php echo $row['bgmarr_img'] ?>" alt="" width="120"></td>
                                                            <td style="padding-top: 15px;"><?php echo $row['id_bgmarr_name'];
                                                                                            ?></td>

                                                            <td class="table_cart"><?php echo $row['price'] ?></td>
                                                            <td>
                                                                <div class="counter">
                                                                    <span class="down" onClick='decreaseCount(event, this)'><i class="bi bi-dash-circle-fill"></i></span>
                                                                    <input type="text" value="<?php echo $row['quantity_hr'] ?>">
                                                                    <span class="up" onClick='increaseCount(event, this)'><i class="bi bi-plus-circle-fill"></i></span>
                                                                </div>
                                                            </td>
                                                            <td class="table_cart">
                                                                <input type="text"></input>
                                                            </td>
                                                            <td class="table_cart">
                                                                <h5>
                                                                    <?php echo $row['total_sum']; ?> THB
                                                                </h5>
                                                            </td>
                                                            <td class="table_cart">
                                                                <a href="Javascript:if(confirm('Want to delete it?')==true) 
                                                {window.location='cartDel.php?id_bgmarr_name=<?php echo $row["id_bgmarr_name"]; ?>';}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>

                                        </table>
                                        <hr>
                                        <a href="Javascript:if(confirm('Want to delete them all?')==true) 
                                                {window.location='cartDel.php?deleteAll=<?php echo $user_id; ?>';}" class="btn btn-danger">All Remove</a>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="card cart_product">
                                    <div class="card-body">
                                        <h3>Total shopping cart</h3>
                                        <hr>
                                        <p>Total Product()</p>
                                        <p>All product prices</p>
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