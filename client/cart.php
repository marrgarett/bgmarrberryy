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

                        <?php
                        if ($user_id == '') {
                            $sql = "SELECT id_order.id,
                            id_order.id_order,
                            id_order.session_user_id,
                            id_order.user_id,
                            bgmarr_tbl.bgmarr_img,
                            id_order.id_bgmarr_name,
                            id_order.price,
                            id_order.quantity_hr,
                            id_order.price * id_order.quantity_hr AS total_sum,
                            id_order.discount,
                            id_order.order_status
                            FROM id_order
                            JOIN bgmarr_tbl
                            ON id_order.id_bgmarr_name = bgmarr_tbl.bgmarr_name
                            WHERE id_order.session_user_id = '$session_id' AND id_order.order_status = 'Uncomplete' ORDER BY `id_order`.`id` ASC; ";
                            $result = mysqli_query($conn, $sql);
                        } else {
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
                        WHERE id_order.user_id = '$user_id' AND id_order.order_status = 'UnComplete' ORDER BY `id_order`.`id` ASC;";
                            $result = mysqli_query($conn, $sql);
                        }

                        //$row = mysqli_fetch_assoc($result);
                        ?>

                        <h2 class="text-center">Cart</h2>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <div class="card cart_product">
                                    <div class="card-body">


                                        <h3>Your Item</h3>
                                        <hr>
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Product Name</th>
                                                    <th style="text-align: center;">Price</th>
                                                    <th style="text-align: center;">hours</th>
                                                    <th style="text-align: center;">Total</th>
                                                    <th style="text-align: center;">discount</th>
                                                    <th style="text-align: center;"></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
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
                                                ?>
                                                        <form action="cartUpdate.php?id=<?php echo $row['id']; ?>&sum=<?php echo $sum ?>" method="post">
                                                            <tr>
                                                                <td style="padding-top: 15px;"><img src="../admin/uploaded_imgs/<?php echo $row['bgmarr_img'] ?>" alt="" width="120"></td>
                                                                <td style="padding-top: 15px;"><?php echo $row['id_bgmarr_name']; ?> <?php echo $sharp ?><?php echo $row['price'] ?><?php echo $bgm ?></td>

                                                                <td class="table_cart"><?php echo $row['price'] ?></td>
                                                                <input type="hidden" name="price" value="<?php echo $row['price'] ?>">
                                                                <td>
                                                                    <div class="counter">
                                                                        <span class="down" onClick='decreaseCount(event, this)'><i class="bi bi-dash-circle-fill"></i></span>
                                                                        <input type="text" name="quantity_hr" value="<?php echo $row['quantity_hr'] ?>">
                                                                        <span class="up" onClick='increaseCount(event, this)'><i class="bi bi-plus-circle-fill"></i></span>
                                                                    </div>
                                                                </td>
                                                                <td class="table_cart">
                                                                    ฿<?php echo $row['total_sum']; ?>.00
                                                                </td>
                                                                <?php
                                                                if ($row['discount'] == 0) {
                                                                    echo '<td style="padding-top: 14px;text-align: center;">0.00</td>';
                                                                } else {
                                                                    echo '<td style="padding-top: 14px;text-align: center;">-฿' . $row['discount'] . '.00</td>';
                                                                }
                                                                ?>

                                                                <!-- <td class="table_cart">
                                                                    <input type="text" name="coupon">
                                                                </td> -->
                                                                <td class="text-center">
                                                                    <input type="submit" class="btn btn-success" value="update">
                                                                    <a href="Javascript:if(confirm('Want to delete it?')==true) 
                                                {window.location='cartDel.php?id_bgmarr_name=<?php echo $row["id_bgmarr_name"]; ?>';}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                        </form>

                                                <?php
                                                    }
                                                }
                                                $sum2 = $sum - $discount;
                                                ?>
                                            </tbody>
                                            <tbody>
                                                <?php
                                                if ($sum != 0) {
                                                    echo '<tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td style="float: right;">
                                                            <h5>Total</h5>
                                                            <h5>Total discount</h5>
                                                            <h5>Totals</h5>
                                                        </td>
                                                        <td style="text-align:right">
                                                            <h5>
                                                                ฿' . $sum . '.00
                                                            </h5>';
                                                            if($discount != 0){
                                                                echo '<h5>
                                                                        -฿' . $discount . '.00
                                                                        </h5>';
                                                            }else{
                                                                echo '<h5>
                                                                    ฿' . $discount . '.00
                                                                    </h5>';
                                                            }
                                                            
                                                            echo '<h5 style="color:red;">
                                                                ฿' . $sum2 . '.00
                                                            </h5>
                                                        </td>
                                                        <td></td>
                                                    </tr>';
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                        <!-- <a href="Javascript:if(confirm('Want to delete them all?')==true) 
                                                {window.location='cartDel.php?deleteAll=<?php echo $user_id; ?>';}" class="btn btn-danger">All Remove</a> -->
                                    </div>
                                </div>
                            </div>
                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                if ($user_id == '') {
                                    echo '<a href="../admin/login.php" class="btn btn-primary mt-3" style="float: right;">Proceed to payment</a>';
                                } else {
                                    echo '<a href="cartContinue.php?user_id=' . $user_id . '&id_order=' . $id_order . '" class="btn btn-primary mt-3" style="float: right;">Proceed to payment</a>';
                                }
                            } else {
                                echo '';
                            }
                            ?>

                            <!-- <div class="form-group col-md-12">
                                <div class="card cart_product">
                                    <div class="card-body">
                                        <h3>Total shopping cart</h3>
                                        <hr>
                                        <p>Total Product()</p>
                                        <p>All product prices</p>
                                    </div>
                                </div>
                            </div> -->
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