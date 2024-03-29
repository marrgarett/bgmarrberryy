<?php
session_start();
include_once('db_connect.php');

$sql = "SELECT * FROM `history_tbl`";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$date = $row['his_start'];

//require('order_number_generate\yearmonth6digitnumber.php');

if (!empty($_POST['his_start'])) {
    $sql = "SELECT * FROM history_tbl WHERE his_start LIKE '$date%'";
}

$fullname = $_SESSION['fullname'];

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ManageHistory // BGMarrBerryy</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once('sideMenu.php'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!-- <form action="" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" name="his_start" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $fullname; ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <br>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">History</h1>
                    <?php
                    date_default_timezone_set("Asia/Bangkok");
                    // echo "Today is " . date("d-m-Y");
                    // echo "<br>";
                    // echo "The time is " . date("H:i:s");

                    ?>
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
                    WHERE history_tbl.his_status = 'Complete' ORDER BY `history_tbl`.`his_id` DESC";
                    $result = mysqli_query($conn, $sql);

                    ?>
                    <div>
                        <?php

                        $month = date('m');
                        $day = date('d');
                        $year = date('Y');

                        // $today = $year . '-' . $month . '-' . $day;
                        ?>

                        <!-- <label for="start">Start date:</label>
                        <input type="date" name ="history_start" id="start" name="trip-start" value="<?php echo $today; ?>" min="2011-01-01"/> -->
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Order ID</th>
                                        <th>Client Name</th>
                                        <th>IDName</th>
                                        <th>Hour</th>
                                        <th>Summary(THB)</th>
                                        <th>Date/Time Start</th>
                                        <th>Date/Time End</th>
                                        <!-- <th>Slip</th> -->
                                        <th>Slip</th>
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
                                            $his_end = $row["his_end"];

                                            $end_date_time = substr($row["his_start"], 0, -9);

                                            $a = substr($row["his_start"], 11);
                                            $b = substr($a, 0, -6);
                                            $c = $b + $his_hr;
                                            $d = substr($row["his_start"], 13);
                                            $e = ("$c" . "$d");

                                            $start_time = $row["his_start"];
                                            $now_dateTime = date('Y-m-d H:i:s');
                                            $end_time = ("$c" . "$d");
                                    ?>
                                            <tr>
                                                <th scope><?php echo $i++ ?></th>
                                                <td><?php echo $row["order_id"] ?></td>
                                                <td><?php echo $row["fullname"] ?></td>
                                                <td><?php echo $row["bgmarr_name"] ?></td>
                                                <td><?php echo $row["his_hr"] ?></td>
                                                <td><?php echo $row["total_sum"] ?></td>
                                                <td><?php echo $row["his_start"] ?></td>
                                                <td><?php echo $row['his_end'] ?></td>
                                                <td>
                                                    <section id="gallery" class="gallery">
                                                        <!-- ======= Gallery Section ======= -->
                                                        <div class="gallery-item">
                                                            <img src="../admin/slip_images/<?php echo $row["his_payment"] ?>" class="img-fluid" alt="" width="40px">

                                                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                                                <a href="../admin/slip_images/<?php echo $row["his_payment"] ?>" title="" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </td>
                                                <td><?php echo $row['his_status'] ?></td>
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
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; BGMarrBerryy 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- gallery img -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>