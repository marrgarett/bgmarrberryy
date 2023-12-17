<?php
session_start();
include_once('db_connect.php');


$useremail = $_POST["useremail"];


if (isset($_POST['check'])) {
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
    $check_email = mysqli_query($conn, 'SELECT * FROM tblclient WHERE useremail = "' . $_POST['useremail'] . '"');
    
    

    if (mysqli_num_rows($check_email) < 1) {
        
        echo '<script language="javascript">';
        echo 'alert("ไม่พบอีเมล กรุณาลองใหม่!"); location.href="javascript:history.go(-1)"';
        echo '</script>';
        
    }else if (trim($_POST['password1']) != trim($_POST['password2'])){
            echo '<script language="javascript">';
            echo 'alert("รหัสผ่านไม่ตรงกัน กรุณาลองใหม่!"); location.href="javascript:history.go(-1)"';
            echo '</script>';
    
    }else{
        $new_pass = md5($password1);
        $sql = "UPDATE `tblclient` SET `pass_word` = '$new_pass' WHERE `tblclient`.`useremail` = '$useremail' ";
        $result = mysqli_query($conn, $sql);
        echo '<script language="javascript">';
        echo 'alert("เปลี่ยนรหัสผ่านสำเร็จ"); location.href="login.php"';
        echo '</script>';
    }
    // }else{
    //     echo '<script language="javascript">';
    //     echo 'alert("ผิดพลาด ลองใหม่!"); location.href="javascript:history.go(-1)"';
    //     echo '</script>';
    // }
}
?>