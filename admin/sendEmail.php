<?php

session_start();
include_once('db_connect.php');

    use PHPMailer\PHPMailer\PHPMailer;

    if(isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $header = $_POST['header'];
        $detail = $_POST['detail'];
        $his_id = $_POST['his_id'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        // SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "test@lru.ac.th"; // enter your email address
        $mail->Password = "test"; // enter your password
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
            
            $sql = "UPDATE `history_tbl` SET `his_status` = 'InProgress' WHERE `history_tbl`.`his_id` = $his_id;";
            $result = mysqli_query($conn, $sql);
                  
        exit(json_encode(array("status" => $status, "response" => $response)));

        
    }
?>