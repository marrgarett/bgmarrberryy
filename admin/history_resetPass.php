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
    $bgmarr_status = $row['bgmarr_status'];

        date_default_timezone_set('asia/bangkok');
        $newTime = date("His");
        $new_bgmarr_pw = substr($bgmarr_pw, 0, 10);
        $new_pass = "$new_bgmarr_pw$newTime";
        $status = "Available";
        $sql = "UPDATE `bgmarr_tbl` SET `bgmarr_pw` = '$new_pass', `bgmarr_status` = '$status' WHERE `bgmarr_tbl`.`bgmarr_name` = '$bgmarr_name' ";
        if($result = mysqli_query($conn, $sql)){
            $his_status = 'Complete';
            $sql_his = "UPDATE `history_tbl` SET `his_status` = '$his_status' WHERE `history_tbl`.`bgmarr_name` = '$bgmarr_name' ";
            $result = mysqli_query($conn, $sql_his);
        }
        
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