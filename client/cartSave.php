<?php
session_start();
include_once '../admin/db_connect.php';
include_once '../admin/order_number_generate/yearmonth6digitnumber.php';

$user_id = $_SESSION['user_id'];

$status = 'Pending';

$session_id = session_id();
$_SESSION['session_id'] = $session_id;

if (isset($_GET["bgmarr_name"])) {

    $id_order = "$generateorder";
    $bgmarr_name = $_GET['bgmarr_name'];
    $sql = "SELECT * FROM `bgmarr_tbl` WHERE bgmarr_name  = '$bgmarr_name'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $bgmarr_id = $row['bgmarr_id'];
    $bgmarr_name = $row['bgmarr_name'];
    $bgmarr_price = $row['bgmarr_price'];
    $status_order = 'Uncomplete';

    $sql = "INSERT INTO `id_order` (`id`, `id_order`, `session_user_id`, `user_id`,  `id_bgmarr_name`, `price`, `quantity_hr`, `date_order`, `order_status`) 
    VALUES (NULL, '$id_order', '$session_id', '$user_id', '$bgmarr_name', '$bgmarr_price', '1', current_timestamp(), '$status_order');";

    if (mysqli_query($conn, $sql)) {
        $sql = "UPDATE `bgmarr_tbl` SET `bgmarr_status` = '$status' WHERE `bgmarr_tbl`.`bgmarr_name` = '$bgmarr_name'";
        $result = mysqli_query($conn, $sql);
        echo '<script language="javascript">';
        echo 'location.href="cart.php"';
        echo '</script>';
    }
} elseif (isset($_GET["continue"])) {

    $user_id = $_GET['continue'];

    $sql = "SELECT id_order, user_id, id_bgmarr_name, quantity_hr, price FROM 
    `id_order` WHERE user_id = '$user_id' AND order_status = 'Uncomplete'";
    $delete_order = "DELETE FROM history_tbl WHERE `history_tbl`.`cli_id` = $user_id AND `history_tbl`.`his_status` = 'Wait'";
    $result = mysqli_query($conn, $sql);
    $del = mysqli_query($conn, $delete_order);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $id_order = $row['id_order'];
            $user_id = $row['user_id'];
            $id_bgmarr_name = $row['id_bgmarr_name'];
            $quantity_hr = $row['quantity_hr'];
            $price = $row['price'];
            $his_status = "Wait";
            $sql = "INSERT INTO `history_tbl` (`order_id`, `cli_id`, `bgmarr_name`, `his_hr`, 
    `his_price`, `his_status`) VALUES 
    ('$id_order', '$user_id', '$id_bgmarr_name', '$quantity_hr', '$price', '$his_status');";
            if (mysqli_query($conn, $sql)) {
                echo '<script language="javascript">';
                echo 'location.href="cartPayment_bank.php?user_id=' . $user_id . '&id_order=' . $id_order . '"';
                echo '</script>';
            }
        }
    } else {
        echo "0 results";
    }
} elseif (isset($_POST['confirm'])) {

    $id_order = $_GET['id_order'];
    $user_id = $_GET['user_id'];
    $his_status = 'Pending';

    if ($_FILES['his_payment'] && $_FILES['his_payment']['error'] == 0) {
        $name = $_FILES['his_payment']['name'];

        $image_file = $_FILES['his_payment']['name'];
        $type = $_FILES['his_payment']['type'];
        $size = $_FILES['his_payment']['size'];
        $temp = $_FILES['his_payment']['tmp_name'];

        $path = 'img/' . $image_file; // set upload folder path

        if ($type == "image/jpg" || $type == 'image/jpeg' || $type == "image/png" || $type == "image/gif") {
            if (!file_exists($path)) { // check file not exist in your upload folder path
            if ($size < 15000000) { // check file size 15MB
                move_uploaded_file($temp, 'img/' . $image_file); // move upload file temperory directory to your upload folder
                $stmt = $db->prepare("UPDATE `history_tbl` SET  his_payment = :img_name, `his_status` = '$his_status'
                    WHERE `history_tbl`.`cli_id` = '$user_id' AND `history_tbl`.`his_status` = 'Wait'");
                $stmt->bindParam(':img_name', $name);
                if ($stmt->execute()) {
                    $sql = "UPDATE `id_order` SET `order_status` = 'Complete'
                        WHERE `id_order`.`user_id` = '$user_id' ";
                    $result = mysqli_query($conn, $sql);
                    echo '<script language="javascript">';
                    echo 'location.href="cartWait_product.php"';
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
} else {
    echo '<script language="javascript">';
    echo 'alert("กรุณาอัพโหลดสลิปก่อนยืนยัน");location.href="javascript:history.go(-1)"';
    echo '</script>';
    }
}