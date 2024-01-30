
<?php
$a = session_id();
if(empty($a)) session_start();
echo "SID: ".SID."<br>session_id(): ".session_id()."<br>COOKIE: ".$_COOKIE["PHPSESSID"]."<br>";

$user_id = "3";
$session_id = session_id();

echo $session_id;
if($user_id == '3' && $session_id == '8mfiue10aaedbr2smt6nkhedjk') {
    echo "01";
}else{
    echo "00";
}
?>
