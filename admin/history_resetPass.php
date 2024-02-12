<?php
session_start();
include_once('db_connect.php');




if (isset($_GET['bgmarr_name'])) {
    $bgmarr_name = $_GET['bgmarr_name'];
    $sql = "SELECT * FROM `bgmarr_tbl` WHERE bgmarr_name = '$bgmarr_name'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $bgmarr_us = $row["bgmarr_us"];
    $bgmarr_pw = $row["bgmarr_pw"];

        $new_pass = "1111";
        $sql = "UPDATE `bgmarr_tbl` SET `bgmarr_pw` = '$new_pass' WHERE `bgmarr_tbl`.`bgmarr_name` = '$bgmarr_name' ";
        $result = mysqli_query($conn, $sql);
        
        echo '<script language="javascript">';
        echo 'alert("เปลี่ยนรหัสผ่านไอดีเสร็จสิ้น"); location.href="https://authenticate.riotgames.com/?client_id='.$bgmarr_us.'&platform='.$bgmarr_pw.'"';
        echo '</script>';
        
    }else{
        echo '<script language="javascript">';
        echo 'alert("ล้มเหลว กรุณาลองใหม่!"); location.href="history_log.php"';
        echo '</script>';
    }
    // }else{
    //     echo '<script language="javascript">';
    //     echo 'alert("ผิดพลาด ลองใหม่!"); location.href="javascript:history.go(-1)"';
    //     echo '</script>';
    // }

?>