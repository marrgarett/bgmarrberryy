<?php
session_start();
$fullname = $_SESSION['fullname'];

include_once('db_connect.php');
$bgmarr_id = $_GET["bgmarr_id"];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EditID // BGMarrBerryy</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h3 mb-4 text-gray-800">Edit ID</h1>
                            <?php
                            $sql = "SELECT * FROM `bgmarr_tbl` WHERE bgmarr_id = '$bgmarr_id';";
                            $result = mysqli_query($conn, $sql);

                            $row = mysqli_fetch_assoc($result);
                            ?>
                            <form action="productsSave.php?bgmarr_id=<?php echo $row["bgmarr_id"]; ?>" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">IDName</label>
                                        <input type="text" name="bgmarr_name" class="form-control" id="bgmarr_name" readonly value="<?php echo $row['bgmarr_name'] ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Username</label>
                                        <input type="text" name="bgmarr_us" class="form-control" id="bgmarr_us" readonly value="<?php echo $row['bgmarr_us'] ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Password</label>
                                        <input type="password" name="bgmarr_pw" class="form-control" id="bgmarr_pw" value="<?php echo $row['bgmarr_pw'] ?>">
                                    </div>
                                </div>
                                <?php
                                    $bgmarr_id = $_GET['bgmarr_id'];
                                    $sql = "SELECT * FROM `bgmarr_tbl` WHERE bgmarr_id = '$bgmarr_id'";
                                    $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();
                                ?>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input">Price</label>
                                        <input type="number" name="bgmarr_price" class="form-control" id="bgmarr_price" value="<?php echo $row['bgmarr_price'] ?>">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="input">Status</label><br>
                                        <select class="form-control" name="bgmarr_status" id="bgmarr_status" value="<?php echo $row['bgmarr_status']; ?>">
                                            <?php
                                            $sql = "SELECT * FROM `status`";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($optionData = $result->fetch_assoc()) {
                                                    $option = $optionData["status"];
                                            ?>
                                                    <option value="<?php echo $option; ?>" <?php if ($option == $row["bgmarr_status"]) echo 'selected="selected"'; ?>>
                                                        <?php echo $option; ?>
                                                    </option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Description</label>
                                        <textarea id="bgmarr_desc" style="width: 100%" name="bgmarr_desc" rows="4" cols="120"><?php echo $row['bgmarr_desc'] ?></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Folder URL</label>
                                        <input type="text" name="bgmarr_url" class="form-control" id="bgmarr_url" value="<?php echo $row['bgmarr_url'] ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input">Picture</label><br>
                                        <img src="uploaded_imgs/<?php echo $row['bgmarr_img']; ?>" alt="" width="400px">
                                        <input type="file" name="bgmarr_img" class="form-control" id="bgmarr_img" style="margin-top: 20px;">
                                    </div>


                                </div>
                                <br>



                                <input type="submit" name="update" value="Update" class="btn btn-success float-left"><br><br>

                            </form>

                            <!-- Page Heading -->



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

</body>

</html>