<?php
session_start();
include_once('db_connect.php');
// echo("Hello World");

$bgmarr_id = $_POST["bgmarr_id"];
$bgmarr_name = $_POST["bgmarr_name"];
$bgmarr_desc = $_POST["bgmarr_desc"];
$bgmarr_us = $_POST["bgmarr_us"];
$bgmarr_pw = $_POST["bgmarr_pw"];
$bgmarr_price = $_POST["bgmarr_price"];
$bgmarr_status = $_POST["bgmarr_status"];

if(isset($_FILES['bgmarr_img']) && $_FILES['bgmarr_img']['error'] == 0) {
    $name = $_FILES['bgmarr_img']['name'];

    $image_file = $_FILES['bgmarr_img']['name'];
    $type = $_FILES['bgmarr_img']['type'];
    $size = $_FILES['bgmarr_img']['size'];
    $temp = $_FILES['bgmarr_img']['tmp_name'];

    $path = 'img/' . $image_file; // set upload folder path

    if ($type == "image/jpg" || $type == 'image/jpeg' || $type == "image/png" || $type == "image/gif") {
        if (!file_exists($path)) { // check file not exist in your upload folder path
            if ($size < 5000000) { // check file size 5MB
                move_uploaded_file($temp, 'img/' . $image_file); // move upload file temperory directory to your upload folder
                $stmt = $db->prepare("INSERT INTO bgmarr_tbl (bgmarr_img) VALUES (:img_name)");
                $stmt->bindParam(':img_name', $name); 
                $stmt->execute();
            } else {
                echo '<script language="javascript">';
                echo 'alert("ไฟล์ของคุณใหญ่เกินไป โปรดอัปโหลดขนาด 5MB");';
                echo '</script>';
                // $errorMsg = "ไฟล์ของคุณใหญ่เกินไป โปรดอัปโหลดขนาด 5MB"; // error message file size larger than 5MB
            }
        } else {
            echo '<script language="javascript">';
            echo 'alert("มีไฟล์อยู่แล้ว... ตรวจสอบการอัปโหลด");location.href="javascript:history.go(-1)"';
            echo '</script>';
            // $errorMsg = "มีไฟล์อยู่แล้ว... ตรวจสอบตัวกรองการอัปโหลด"; // error message file not exists your upload folder path
        }
    }
    
    // insert the image data into the database
 }

?>