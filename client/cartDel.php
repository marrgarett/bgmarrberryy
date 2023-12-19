<?php
session_start();
include_once '../admin/db_connect.php';

$user_id = $_SESSION['user_id'];
$fullname = $_SESSION['fullname'];



if (isset($_GET["id"])) {
    $id = $_GET["id"];
    // sql to delete a record
    $sql = "DELETE FROM id_order WHERE `id_order`.`id` = $id";

    if (mysqli_query($conn, $sql)) {
        echo '<script language="JavaScript">';
        echo 'location.href = "cart.php"';
        echo '</script>';
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}elseif(isset($_GET["deleteAll"])){
    $sql = "DELETE FROM id_order WHERE `id_order`.`user_id` = $user_id";

    if (mysqli_query($conn, $sql)) {
        echo '<script language="JavaScript">';
        echo 'location.href = "cart.php"';
        echo '</script>';
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

?>




