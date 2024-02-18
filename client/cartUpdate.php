<?php
session_start();
include_once '../admin/db_connect.php';
$order_id = $_GET['id'];
$sum = $_GET['sum'];
$hours = $_POST['quantity_hr'];
$price = $_POST['price'];
// $coupon = $_POST['coupon'];

// $codeCoupon = ['cou1', 'cou2', 'cou3'];
$sum2 = $price * $hours;
$total = ($sum2*60)/100;
$discount1 = 0;

if ($hours == 24) {
    $sql = "UPDATE `id_order` SET `quantity_hr` = $hours, `discount` = $total WHERE `id_order`.`id` = $order_id; ";
    $result = mysqli_query($conn, $sql);
    echo '<script language="javascript">';
    echo 'location.href="cart.php"';
    echo '</script>';
} else {
    $sql = "UPDATE `id_order` SET `quantity_hr` = $hours, `discount` = $discount1 WHERE `id_order`.`id` = $order_id;";
    $result = mysqli_query($conn, $sql);
    echo '<script language="javascript">';
    echo 'location.href="cart.php"';
    echo '</script>';
    //echo 'alert("จำนวนชั่วโมงไม่ตรงตามเงื่อนไข"); location.href="cart.php"';
}

// if ($coupon == '') {
//     $sql = "UPDATE `id_order` SET `quantity_hr` = $hours WHERE `id_order`.`id` = $order_id; ";
//     $result = mysqli_query($conn, $sql);
//     echo '<script language="javascript">';
//     echo 'location.href="cart.php"';
//     echo '</script>';
// } else
// if ($coupon == $codeCoupon[0] || $coupon == $codeCoupon[1]) {
    
    
// } else {
//     echo '<script language="javascript">';
//     echo 'alert("โค้ดคูปองไม่ถูกต้อง"); location.href="cart.php"';
//     echo '</script>';
// }
