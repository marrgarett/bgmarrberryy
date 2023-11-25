<?php
include_once('db_connect.php');
$id = $_GET["id"];
// sql to delete a record
$sql = "DELETE FROM tblclient WHERE `tblclient`.`id` = $id";

if (mysqli_query($conn, $sql)) {
    echo '<script language="JavaScript">';
    echo 'alert("ลบข้อมูลเรียบร้อยแล้ว"); location.href = "manage_member.php"';
    echo '</script>';
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
?>