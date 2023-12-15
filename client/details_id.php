<?php
session_start();
include_once '../admin/db_connect.php';

$fullname = $_SESSION['fullname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $row['bgmarr_name'] ?></title>
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
            <nav id="navbar" class="navbar">
                <ul>
                    <?php
                    if ($fullname == '') {
                        print '<a href="../admin/login.php">Login</a>';
                        print '<a>//</a>';
                        print '<a href="../admin/register.php">Register</a>';
                    } else {
                        print '<a href="details_acc.php"><i class="bi bi-person-circle" width="25px" style="margin-right: 5px;"></i>Welcome // ' . $fullname . '</a>'; // แก้ไขข้อมูลส่วนตัว
                        print '<a href="logout.php" name="logout" value="Logout">logout</a>'; // ล็อคเอาท์ออกจากระบบ
                    }
                    ?>

                </ul>
            </nav>
            <nav id="navbar" class="navbar">
                <ul>

                    <li><a href="index.php">Home</a></li>
                    <li><a href="all_id.php">All ID</a></li>
                    <a href="index.php" class="logo d-flex align-items-center  me-auto me-lg-0">
                        <img src="img/BG_Logo1.png" alt="">
                    </a>
                    <li><a href="how_to_order.php">How To Order</a></li>
                    <li><a href="https://www.facebook.com/bgmarrberryy">Contact Us</a></li>
                </ul>
            </nav><!-- .navbar -->
            <div class="header-social-links">
                <input type="text" class="sidebar-search" placeholder="Search...">
                <button class="bi bi-search"></button>
            </div>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <?php
    $bgmarr_name = $_GET['id'];
    $bgmarr_url = $_GET['bgmarr_url'];

    $sql = "SELECT * FROM `bgmarr_tbl` WHERE bgmarr_name = '$bgmarr_name'; ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>
              <?php echo $row['bgmarr_name'] ?>
            </h2>
            <a class="cta-btn" href="contact.php">Add To Cart</a>
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Gallery Single Section ======= -->
    <section id="gallery-single" class="gallery-single">
      <div class="container">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="../admin/uploaded_imgs/<?php echo $row['bgmarr_img']; ?>" alt="">
              </div>

            </div>

            <div class="row justify-content-between gy-4 mt-4">

              <div class="col-lg-12">
                <div class="portfolio-description">
                  <h2>รายละเอียด</h2>
                  <p>
                    <?php echo $row['bgmarr_desc'] ?>
                  </p>


                  <div class="testimonial-item">
                    <p>
                      <!-- <i class="bi bi-quote quote-icon-left"></i> -->
                      <a href="<?php echo $row['bgmarr_url'] ?>">Google Drive</a>
                      <!-- <i class="bi bi-quote quote-icon-right"></i> -->

                    </p><br>
                    <div>
                      <!-- <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4> -->
                    </div>
                  </div>


                </div>
              </div>
              <!--
              <div class="col-lg-3">
                <div class="portfolio-info">
                  <h3>Project information</h3>
                  <ul>
                    <li><strong>Category</strong> <span>Nature Photography</span></li>
                    <li><strong>Client</strong> <span>ASU Company</span></li>
                    <li><strong>Project date</strong> <span>01 March, 2022</span></li>
                    <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                    <li><a href="#" class="btn-visit align-self-start">Visit Website</a></li>
                  </ul>
                </div>
              </div>
              -->
            </div>
          </div>
    </section><!-- End Gallery Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>BGMarrBerryy</span></strong>.
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

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