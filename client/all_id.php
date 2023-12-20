<?php
session_start();
include_once '../admin/db_connect.php';

$fullname = $_SESSION['fullname'];

$bgmarr_name = $_GET['id'];

$sql = "SELECT * FROM `bgmarr_tbl` WHERE bgmarr_name = '$bgmarr_name'; ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$sharp = "#";
$bgm = "BGM";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ALL ID</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet">

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

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>ALL ID</h2>
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= About Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">
        <div class="row gy-4 justify-content-center">
          <?php
          $sql = "SELECT * FROM `bgmarr_tbl`";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery-item h-100">
                <img src="../admin/uploaded_imgs/<?php echo $row['bgmarr_img'] ?>" class="img-fluid" alt="">
                <p></p>
                <h5 class="text-center">
                  Riot Tag : <?php echo $row['bgmarr_name'] ?> <?php echo $sharp ?><?php echo $row['bgmarr_price'] ?><?php echo $bgm ?>
                  <br>
                  Price : <?php echo $row['bgmarr_price']?> THB // Status : <?php echo $row['bgmarr_status']?>
                </h5>
                <!-- ดึงรูปสินค้านั้นๆจาก database มาแสดง -->
                <div class="gallery-links d-flex align-items-center justify-content-center">
                  <a href="details_id2.php?id=<?php echo $row['bgmarr_name'] ?>" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                  <!-- ลิงก์ไปยังสินค้านั้นๆ -->
                  <a href="../admin/uploaded_imgs/<?php echo $row['bgmarr_img'] ?>"
                    title="<?php echo $row['bgmarr_name'] ?>" class="glightbox preview-link"><i
                      class="bi bi-arrows-angle-expand"></i></a>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                  <a class="cta-btn" href="cartSave.php?bgmarr_name=<?php echo $row["bgmarr_name"]; ?>">Add To Cart</a>
                </div>
              </div>
            </div>
            <?php
          }
          ?>
        </div>
      </div>
    </section>
    <!-- End About Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include_once 'footer.php'; ?>
  <!-- End Footer -->


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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

</body>

</html>