<?php
session_start();
include_once '../admin/db_connect.php';
include_once '../admin/order_number_generate/yearmonth6digitnumber.php';

$user_id = $_SESSION['user_id'];
$fullname = $_SESSION['fullname'];

$status = 'Pending';

if (isset($_GET["bgmarr_name"])) {
    $id_order = $generateorder;
    $bgmarr_name = $_GET['bgmarr_name'];
    $sql = "SELECT * FROM `bgmarr_tbl` WHERE bgmarr_name  = '$bgmarr_name'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $bgmarr_id = $row['bgmarr_id'];
    $bgmarr_name = $row['bgmarr_name'];
    $bgmarr_price = $row['bgmarr_price'];
    $status_order = 'ucomplete';

    $sql = "INSERT INTO `id_order` (`id`, `id_order`, `user_id`,  `id_bgmarr_name`, `price`, `quantity_hr`, `date_order`, `status`) 
    VALUES (NULL, '$id_order', '$user_id', '$bgmarr_name', '$bgmarr_price', '1', current_timestamp(), '$status_order');";

    if (mysqli_query($conn, $sql)) {
        $sql = "UPDATE `bgmarr_tbl` SET `bgmarr_status` = '$status' WHERE `bgmarr_tbl`.`bgmarr_name` = '$bgmarr_name'";
        $result = mysqli_query($conn, $sql);
        echo '<script language="javascript">';
        echo 'location.href="cart.php"';
        echo '</script>';
    }
}elseif(isset($_GET["id_order"])){
    echo 'hello';
    $id_order = $_GET['id_order'];
    $price = $_POST['price'];
    echo $id_order;
    echo $price;
    
}
