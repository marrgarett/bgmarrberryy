<?php
session_start();
include_once('db_connect.php');

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

    <title>ManageID // BGMarrBerryy</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
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
                    <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for" aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                Counter - Alerts
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            Dropdown - Alerts
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li> -->

                        <!-- Nav Item - Messages
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                Counter - Messages
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            Dropdown - Messages
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li> -->

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

                    <div class="card">
                        <div class="card-body">
                            <h1 class="h3 mb-4 text-gray-800">Add ID</h1>
                            <form action="productsSave.php" method="post" enctype="multipart/form-data">

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">IDName</label>
                                        <input type="text" name="bgmarr_name" class="form-control" id="bgmarr_name" placeholder="IDName (Example : BGMARR000 #00BGM)" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Username</label>
                                        <input type="text" name="bgmarr_us" class="form-control" id="bgmarr_us" placeholder="Username (Example : NameGravityRN)">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Password</label>
                                        <input type="password" name="bgmarr_pw" class="form-control" id="bgmarr_pw" placeholder="Password">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="input">Price</label>
                                        <input type="number" name="bgmarr_price" class="form-control" id="bgmarr_price" placeholder="Example : 10, 15, 20, 30, 40, 50, 70 ,80">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="input">Picture</label>
                                        <input type="file" name="bgmarr_img" class="form-control" id="bgmarr_img" placeholder="Add Some Picture">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <!-- <label for="input">สถานะ</label><br> -->
                                        <select class="form-select" name="bgmarr_status" id="bgmarr_status" hidden>
                                            <option value="ว่าง">Available</option>
                                            <option value="ไม่ว่าง">Unavailable</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="inputAddress">Description</label>
                                        <textarea id="bgmarr_desc" style="width: 100%" name="bgmarr_desc" rows="4" cols="120"></textarea>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputAddress">Folder URL</label>
                                        <input type="text" name="bgmarr_url" class="form-control" id="bgmarr_url" placeholder="Folder URL">
                                    </div>
                                </div>

                                <input type="submit" name="save" value="Submit" class="btn btn-success float-left"><br><br>

                            </form>

                            <!-- Page Heading -->
                            <br>
                            <h1 class="h3 mb-4 text-gray-800">Manage ID</h1>
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>IDName</th>
                                                <th>Description</th>
                                                <th>Folder URL</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Price/Hour</th>
                                                <th>Picture</th>
                                                <th>Status</th>
                                                <th>Edit/Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            $sql = "SELECT * FROM `bgmarr_tbl` ORDER BY `bgmarr_tbl`.`bgmarr_id`";
                                            $result = mysqli_query($conn, $sql);

                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while ($row = mysqli_fetch_assoc($result)) {
                                            ?>

                                                    <tr>
                                                        <th><?php echo $i++ ?></th>
                                                        <td><a href="order_history_log.php?bgmarr_name=<?php echo $row["bgmarr_name"]; ?>"><?php echo $row["bgmarr_name"] ?></a></td>
                                                        <td><?php echo iconv_substr($row["bgmarr_desc"], 0, 12, 'UTF-8') ?>...</td>
                                                        <td><a href="<?php echo $row["bgmarr_url"] ?>" target="_blank"><?php echo iconv_substr($row["bgmarr_url"], 0, 24, 'UTF-8') ?></a></td>
                                                        <!-- <td><?php echo iconv_substr($row["bgmarr_url"], 0, 13, 'UTF-8') ?>...</td> -->
                                                        <td><?php echo $row["bgmarr_us"] ?></td>
                                                        <td><?php echo iconv_substr($row["bgmarr_pw"], 0, 20, 'UTF-8') ?></td>
                                                        <td><?php echo $row["bgmarr_price"] ?></td>
                                                        <td>
                                                            <?php if ($row["bgmarr_img"] == '') : ?>
                                                                <p>...</p>
                                                            <?php endif; ?>
                                                            <?php if ($row["bgmarr_img"] != '') : ?>
                                                                <img src="uploaded_imgs/<?php echo $row["bgmarr_img"] ?>" width="50px" height="50px">
                                                            <?php endif; ?>
                                                        </td>
                                                        <td><?php echo $row["bgmarr_status"] ?></td>
                                                        </td>
                                                        <td>
                                                            <a href="productsEdit.php?bgmarr_id=<?php echo $row["bgmarr_id"]; ?>" class="btn btn-warning">Edit</a>
                                                            <a href="Javascript:if(confirm('Confirm data deletion ?')==true) 
                                                {window.location='productsDel.php?bgmarr_id=<?php echo $row["bgmarr_id"]; ?>';}" class="btn btn-danger"><i class="bi bi-trash"></i>Delete</a>
                                                        </td>
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

        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

</body>

</html>