<?php

session_start();
include_once('db_connect.php');

$today = date('Y-m-d H:i:s');


    use PHPMailer\PHPMailer\PHPMailer;

    if(isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $header = $_POST['header'];
        $detail = $_POST['detail'];
        $his_id = $_POST['his_id'];
        $his_start = $_POST['his_start'];
        $his_hr = $_POST['his_hr'];
        $bgmarr_name = $_POST['bgmarr_name'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        // SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "test1@gmail.com"; // enter your email address
        $mail->Password = "test1"; // enter your password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress($email); // Send to mail
        $mail->Subject = $header;
        $mail->Body = $detail;

        if($mail->send()) {
            $status = "success";
            $response = "Email is sent";
        } else {
            $status = "failed";
            $response = "Something is wrong" . $mail->ErrorInfo;
        }

            $update_time = date('Y-m-d H:i:s', strtotime('+'.$his_hr.' hours', strtotime($his_start)));
            
            $sql = "UPDATE `history_tbl` SET `his_status` = 'InProgress', `his_end` = '$update_time' WHERE `history_tbl`.`his_id` = $his_id";
            if (mysqli_query($conn, $sql)) {
                $sql = "UPDATE `bgmarr_tbl` SET `bgmarr_status` = 'UnAvailable' WHERE `bgmarr_tbl`.`bgmarr_name` = '$bgmarr_name'";
                $result = mysqli_query($conn, $sql);
            }else{
                echo '<script language="javascript">';
                echo 'alert("Error");';
                echo '</script>';
            }
                  
        exit(json_encode(array("status" => $status, "response" => $response)));

        
    }
?>