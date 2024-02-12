<?php
session_start();
include_once('db_connect.php');

if (isset($_POST['save'])) {
    $check_status = mysqli_query($conn, 'SELECT * FROM `history_tbl` WHERE his_status = "Pending"');
    
} elseif (isset($_GET['his_id'])){
    $his_id = $_GET['his_id'];
    $sql = "UPDATE `history_tbl` SET `his_status` = 'InProgress' WHERE `history_tbl`.`his_id` = $his_id;";
    $result = mysqli_query($conn, $sql);
    
    echo '<script language="javascript">';
    echo 'alert("success"); location.href="dashboard.php"';
    echo '</script>';
        
}