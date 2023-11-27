<?php
session_start();
include_once('db_connect.php');
// echo("Hello World");

$bgmarr_name = $_POST["bgmarr_name"];
$bgmarr_desc = $_POST["bgmarr_desc"];
$bgmarr_us = $_POST["bgmarr_us"];
$bgmarr_pw = $_POST["bgmarr_pw"];
$bgmarr_price = $_POST["bgmarr_price"];
$bgmarr_status = $_POST["bgmarr_status"];

if (isset($_POST['save'])) {

    $check_name = mysqli_query($conn, 'SELECT * FROM bgmarr_tbl WHERE bgmarr_name = "' . $_POST['bgmarr_name'] . '"');
    $check_us = mysqli_query($conn, 'SELECT * FROM bgmarr_tbl WHERE bgmarr_us = "'  . $_POST['bgmarr_us'] . '"');

    if (mysqli_num_rows($check_name) >= 1) {
        echo '<script language="javascript">';
        echo 'alert("ชื่อสินค้าซ้ำ กรุณาตรวจสอบ"); location.href="javascript:history.go(-1)"';
        echo '</script>';
    
    }else if (mysqli_num_rows($check_us) >= 1) {
        echo '<script language="javascript">';
        echo 'alert("ชื่อผู้ใช้ซ้ำ กรุณาตรวจสอบ"); location.href="javascript:history.go(-1)"';
        echo '</script>';
    
    }else if(isset($_FILES['bgmarr_img']) && $_FILES['bgmarr_img']['error'] == 0) {
        $name = $_FILES['bgmarr_img']['name'];
    
        $image_file = $_FILES['bgmarr_img']['name'];
        $type = $_FILES['bgmarr_img']['type'];
        $size = $_FILES['bgmarr_img']['size'];
        $temp = $_FILES['bgmarr_img']['tmp_name'];
    
        $path = 'uploaded_imgs/' . $image_file; // set upload folder path
    
        if ($type == "image/jpg" || $type == 'image/jpeg' || $type == "image/png" || $type == "image/gif") {
            if (!file_exists($path)) { // check file not exist in your upload folder path
                if ($size < 15000000) { // check file size 15MB
                    move_uploaded_file($temp, 'uploaded_imgs/' . $image_file); // move upload file temperory directory to your upload folder
                    $stmt = $db->prepare("INSERT INTO bgmarr_tbl (`bgmarr_name`, `bgmarr_desc`, `bgmarr_us`, `bgmarr_pw`, `bgmarr_price` , `bgmarr_img` , `bgmarr_status`) 
                        VALUES ('$bgmarr_name', '$bgmarr_desc', '$bgmarr_us', '$bgmarr_pw' , '$bgmarr_price' , :img_name , '$bgmarr_status')");
                    $stmt->bindParam(':img_name', $name);
                    if ($stmt->execute()){
                        echo '<script language="javascript">';
                        echo 'alert("บันทึกข้อมูลเสร็จสิ้น"); location.href="products.php"';
                        echo '</script>';
                    }
                } else {
                    echo '<script language="javascript">';
                    echo 'alert("ขนาดไฟล์ของคุณใหญ่เกินไป โปรดอัปโหลดขนาด 15MB");';
                    echo '</script>';
                    // $errorMsg = "ไฟล์ของคุณใหญ่เกินไป โปรดอัปโหลดขนาด 15MB"; // error message file size larger than 15MB
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
    
    
    
    
} elseif (isset($_POST['update'])){
    $bgmarr_id = $_GET['bgmarr_id'];
    $bgmarr_desc = $_POST['bgmarr_desc'];
    $bgmarr_pw = $_POST['bgmarr_pw'];
    $bgmarr_status = $_POST["bgmarr_status"];
    $sql = "UPDATE `bgmarr_tbl` SET  `bgmarr_desc` = '$bgmarr_desc', `bgmarr_pw` = '$bgmarr_pw', `bgmarr_status` = '$bgmarr_status' WHERE `bgmarr_tbl`.`bgmarr_id` = '$bgmarr_id' ";
    $result = mysqli_query($conn, $sql);
        echo '<script language="javascript">';
        echo 'alert("บันทึกข้อมูลเสร็จสิ้น"); location.href="products.php"';
        echo '</script>';
}
?>