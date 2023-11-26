<?php
include_once('db_connect.php');
$bgmarr_id = $_GET["bgmarr_id"];
// sql to delete a record
$sql = "DELETE FROM bgmarr_tbl WHERE `bgmarr_tbl`.`bgmarr_id` = $bgmarr_id";

if (mysqli_query($conn, $sql)) {
    echo '<script language="JavaScript">';
    echo 'alert("ลบข้อมูลสำเร็จ"); location.href = "products.php"';
    echo '</script>';
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
?>