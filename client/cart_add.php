<?php
session_start();
include_once '../admin/db_connect.php';

if(!empty($_GET['id'])){

    if(empty($_SESSION['cart'][$_GET['id']])){
        $_SESSION['cart'][$_GET['id']] = 1;
    }else{
        $_SESSION['cart'][$_GET['id']] += 1;
    }
}

header('location: cart.php');
?>
