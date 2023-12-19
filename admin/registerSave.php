<?php
session_start();
include_once('db_connect.php');

$fullname = $_POST["fullname"];
$lastname = $_POST["lastname"];
$name = $fullname. ' ' . $lastname;
$useremail = $_POST["useremail"];


if (isset($_POST['save'])) {
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
    $user_status = "C";
    $check_email = mysqli_query($conn, 'SELECT * FROM tblclient WHERE useremail = "' . $_POST['useremail'] . '"');
    
    if (trim($_POST['password1']) != trim($_POST['password2'])){
        echo '<script language="javascript">';
        echo 'alert("รหัสผ่านไม่ตรงกัน"); location.href="javascript:history.go(-1)"';
        echo '</script>';
    
    }else if (mysqli_num_rows($check_email) >= 1) {
        echo '<script language="javascript">';
        echo 'alert("อีเมลซ้ำ"); location.href="javascript:history.go(-1)"';
        echo '</script>';
    
    }else{
        $password = md5($password1);
        $sql = "INSERT INTO `tblclient` (`id`, `fullname`, `useremail`, `pass_word`, `regdate` , `user_status`)
            VALUES (NULL, '$name', '$useremail', '$password', current_timestamp() ,'$user_status');";
        mysqli_query($conn, $sql);
        echo '<script language="javascript">';
        echo 'alert("ลงทะเบียนสำเร็จ"); location.href="login.php"';
        echo '</script>';
    }
} elseif (isset($_POST['update'])){
    $id = $_GET['id'];
    $fullname = $_POST["fullname"];
    $lastname = $_POST["lastname"];
    $name = $fullname. ' ' . $lastname;
    $useremail = $_POST["useremail"];
    $sql = "UPDATE `tblclient` SET `fullname` = '$name', `useremail` = '$useremail'
    WHERE `tblclient`.`id` = '$id' ";
    $result = mysqli_query($conn, $sql);
        echo '<script language="javascript">';
        echo 'alert("บันทึกข้อมูลเสร็จสิ้น"); location.href="manage_member.php"';
        echo '</script>';

}

