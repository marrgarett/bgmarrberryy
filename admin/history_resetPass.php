<?php
session_start();
include_once('db_connect.php');




if (isset($_GET['bgmarr_id'])) {
    $bgmarr_id = $_GET['bgmarr_id'];
        $new_pass = "1111";
        $sql = "UPDATE `bgmarr_tbl` SET `bgmarr_pw` = '$new_pass' WHERE `bgmarr_tbl`.`bgmarr_id` = '$bgmarr_id' ";
        $result = mysqli_query($conn, $sql);
        echo '<script language="javascript">';
        echo 'alert("เปลี่ยนรหัสผ่านเสร็จสิ้น"); location.href="history_log.php"';
        echo '</script>';
    }else{
        echo '<script language="javascript">';
        echo 'alert("ล้มเหลว"); location.href="history_log.php"';
        echo '</script>';
    }
    // }else{
    //     echo '<script language="javascript">';
    //     echo 'alert("ผิดพลาด ลองใหม่!"); location.href="javascript:history.go(-1)"';
    //     echo '</script>';
    // }

?>