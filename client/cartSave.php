<?php
session_start();
include_once '../admin/db_connect.php';

$user_id = $_SESSION['user_id'];
$fullname = $_SESSION['fullname'];

$bgmarr_name = $_GET['bgmarr_name'];
$sql = "SELECT * FROM `bgmarr_tbl` WHERE bgmarr_name  = '$bgmarr_name'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$bgmarr_id = $row['bgmarr_id'];
$bgmarr_name = $row['bgmarr_name'];
$bgmarr_price = $row['bgmarr_price'];
$total = $bgmarr_price * 1;

$status = 'Pending';

$sql = "INSERT INTO `id_order` (`id`, `id_order`, `user_id`,  `id_bgmarr_name`, `price`, `quantity_hr`, `total`, `date_order`) 
VALUES (NULL, '2312000001', '$user_id', '$bgmarr_name', '$bgmarr_price', '1', '$total', current_timestamp());";

if (mysqli_query($conn, $sql)) {
    $sql = "UPDATE `bgmarr_tbl` SET `bgmarr_status` = '$status' WHERE `bgmarr_tbl`.`bgmarr_name` = '$bgmarr_name'";
    $result = mysqli_query($conn, $sql);
    echo '<script language="javascript">';
    echo 'location.href="cart.php"';
    echo '</script>';
}
