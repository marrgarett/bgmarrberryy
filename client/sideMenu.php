<nav id="navbar" class="navbar">
    <ul>
        <?php
        if ($fullname == '') {
            print '<a href="../admin/login.php">Login</a>';
            print '<a>//</a>';
            print '<a href="../admin/register.php">Register</a>';
        } else {
            print '<a href="details_acc.php">Welcome // <i class="bi bi-person-circle" width="25px" style="margin-right: 5px;"></i> ' . $fullname . ' </a>'; // แก้ไขข้อมูลส่วนตัว
            print '<a href="logout.php" name="logout" value="Logout">logout</a>'; // ล็อคเอาท์ออกจากระบบ
        }
        ?>
    </ul>
</nav>

<nav id="navbar" class="navbar">
    <ul>
        <li><a href="index.php">Home</a></li><!-- class="active"hover ตัวหนังสือ -->
        <li><a href="all_id.php">All ID</a></li>
        <a href="index.php" class="logo d-flex align-items-center  me-auto me-lg-0">
            <img src="img/BG_Logo1.png" alt="">
        </a>
        <li><a href="how_to_order.php">How To Order</a></li>
        <li><a href="https://www.facebook.com/bgmarrberryy" target="_blank">Contact Us</a></li>

    </ul>
</nav>

<!-- End.navbar -->

<div class="header-social-links">
    <input type="text" class="sidebar-search" placeholder="search">
    <i class="bi bi-search"></i>
    <a href="cart.php"><i class="bi bi-cart"></i></a>
    <!-- <a class="nav-link" href="cart.php"><i class="bi bi-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a> -->
    
    
    <div class="cartcount">
        1
    </div>
</div>