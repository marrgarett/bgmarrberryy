<?php
session_start();
include_once '../admin/db_connect.php';

$status = "Available";

if (isset($_GET["id_bgmarr_name"])) {
    $id_bgmarr_name = $_GET["id_bgmarr_name"];
    // sql to delete a record
    $sql = "DELETE FROM id_order WHERE `id_order`.`id_bgmarr_name` = '$id_bgmarr_name'";
    

    if (mysqli_query($conn, $sql)) {
        $sql = "UPDATE `bgmarr_tbl` SET `bgmarr_status` = '$status' WHERE `bgmarr_tbl`.`bgmarr_name` = '$id_bgmarr_name'";
        $result = mysqli_query($conn, $sql);
        echo '<script language="JavaScript">';
        echo 'location.href = "cart.php"';
        echo '</script>';
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}elseif(isset($_GET["deleteAll"])){
    $sql = "DELETE FROM id_order WHERE `id_order`.`user_id` = $user_id";

    if (mysqli_query($conn, $sql)) {
        $sql = "UPDATE `bgmarr_tbl` SET `bgmarr_status` = '$status' WHERE `bgmarr_tbl`.`bgmarr_name` = '$id_bgmarr_name'";
        $result = mysqli_query($conn, $sql);
        echo '<script language="JavaScript">';
        echo 'location.href = "cart.php"';
        echo '</script>';
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

?>




