<?php
session_start();
include_once '../admin/db_connect.php';
?>

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
  </section>

  <main id="main">

    <!-- ======= End Page Header ======= -->