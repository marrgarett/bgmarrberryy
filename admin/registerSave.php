<?php
session_start();
include_once('db_connect.php');

$fullname = $_POST["fullname"];
$useremail = $_POST["useremail"];
$password1 = $_POST["password1"];
$password2 = $_POST["password2"];

if (isset($_POST['save'])) {

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
        $sql = "INSERT INTO `tblclient` (`id`, `fullname`, `useremail`, `pass_word`, `regdate`)
            VALUES (NULL, '$fullname', '$useremail', '$password1', current_timestamp());";
        mysqli_query($conn, $sql);
        echo '<script language="javascript">';
        echo 'alert("บันทึกข้อมูลเสร็จสิ้น"); location.href="register.php"';
        echo '</script>';
    }
}
