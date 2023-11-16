<?php
session_start();
include_once('db_connect.php');
// echo("Hello World");

$traget_dir = "img/products_img/";

$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$newfilename = $newfilename . '.' .end($temp);
$traget_file = $traget_dir . basename($newfilename);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($traget_file, PATHINFO_EXTENSION));

$bgmarr_id = $_POST["bgmarr_id"];
$bgmarr_name = $_POST["bgmarr_name"];
$bgmarr_desc = $_POST["bgmarr_desc"];
$bgmarr_us = $_POST["bgmarr_us"];
$bgmarr_pw = $_POST["bgmarr_pw"];
$bgmarr_price = $_POST["bgmarr_price"];
$img = $_POST["img"];

if (isset($_POST['save'])) {
    if ($_FILES["fileToUpload"]["tmp_name"] == "") {
        $newfilename = "";
        $sql = "";
        mysqli_query($conn, $sql);
        echo '<script language="javascript">';
        echo 'alert("บันทึกข้อมูลเรียบร้อยแล้ว"); location.href="products.php"';
        echo '</script>';
        
    }
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mine"] .".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if (file_exists($traget_file)) {
        echo "Sorry, file already exitsts.";
        $uploadOk = 0;
    }

    if ($_FILES["fileToUpload"]["size"] > 15000000) {
        echo '<script language="javascript">';
        echo 'alert("Sorry, your file is too large."); location.href="products.php"';
        echo '</script>';
        $uploadOk = 0;
    }

    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"
    ) {
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $traget_file)) {
            $sql = "";
            mysqli_query($conn, $sql);
            echo '<script language="javascript">';
            echo 'alert("บันทึกข้อมูลเรียบร้อยแล้ว"); location.href="products.php"';
            echo '</script>';
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

?>