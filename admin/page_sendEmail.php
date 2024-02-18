<?php
session_start();
$fullname = $_SESSION['fullname'];

include_once('db_connect.php');
$his_id = $_GET["his_id"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send PHPMailer</title>

    <link rel="stylesheet" href="css/style_sendEmail.css">
</head>

<body>

    <?php
    $sql = "SELECT history_tbl.his_id, 
                                history_tbl.order_id, history_tbl.cli_id, 
                                tblclient.fullname, 
                                tblclient.useremail, 
                                id_order.discount, 
                                history_tbl.bgmarr_name, 
                                bgmarr_tbl.bgmarr_name, 
                                bgmarr_tbl.bgmarr_us, 
                                bgmarr_tbl.bgmarr_pw, 
                                history_tbl.his_hr, 
                                history_tbl.his_hr*bgmarr_tbl.bgmarr_price-id_order.discount AS total_sum, 
                                history_tbl.his_start, 
                                history_tbl.his_payment, 
                                history_tbl.his_status 
                                FROM history_tbl 
                                JOIN tblclient 
                                ON history_tbl.cli_id = tblclient.id 
                                JOIN bgmarr_tbl 
                                ON history_tbl.bgmarr_name = bgmarr_tbl.bgmarr_name 
                                JOIN id_order 
                                ON history_tbl.order_id = id_order.id_order
                                WHERE history_tbl.his_id = '$his_id' AND history_tbl.his_status = 'Pending' ORDER BY `history_tbl`.`order_id` ASC ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    ?>
    <form id="myForm" class="card">
        <div class="msg"></div>

        <h2>Send Email</h2>
            <input type="text" id="his_id" class="txt" placeholder="insert name" value="<?php echo $his_id ?>" readonly hidden/>
            <input type="text" id="his_start" class="txt" placeholder="insert name" value="<?php echo $row['his_start'] ?>" readonly hidden/>
            <input type="text" id="his_hr" class="txt" placeholder="insert name" value="<?php echo $row['his_hr'] ?>" readonly hidden/>
            <input type="text" id="bgmarr_name" class="txt" placeholder="insert name" value="<?php echo $row['bgmarr_name'] ?>" readonly hidden/>
        <div class="form-control">
            <p>Name</p>
            <input type="text" id="name" class="txt" placeholder="insert name" value="BGMarrBerryy" readonly />
        </div>

        <div class="form-control">
            <p>Email</p>
            <input type="text" id="email" class="txt" placeholder="insert email" value="<?php echo $row['useremail'] ?>" readonly>
        </div>
        
        <div class="form-control">
            <p>Header</p>
            <input type="text" id="header" class="txt" placeholder="insert header" value="Order #<?php echo $row['order_id'] ?> has been shipped." readonly>
        </div>
        <div class="form-control">
            <p>Detail</p>
            <textarea id="detail" class="txt txtarea" placeholder="insert detail" readonly>
<b>ข้อมูลสินค้าที่ทำการเช่า</b><br/>
<b>Username: </b><?php echo $row['bgmarr_us'] ?><br/>
<b>Password: </b><?php echo $row['bgmarr_pw'] ?><br/><br/>
<b>คำแนะนำในการใช้งานสินค้า</b><br/>
สอบถามหรือแจ้งปัญหา :<br/>
https://www.facebook.com/bgmarrberryy<br/><br/>
<b>จำนวนเงิน: </b><?php echo $row['total_sum'] ?> บาท<br/>
<b>ช่องทางการชำระเงิน: </b>ธนาคาร
            </textarea>
        </div>

        <button type="button" onclick="sendEmail()" value="Send an email" class="btn-submit">Send</button>
    </form>


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function sendEmail() {
            var his_id = $("#his_id");
            var his_start = $("#his_start");
            var his_hr = $("#his_hr");
            var bgmarr_name = $("#bgmarr_name");
            var name = $("#name");
            var email = $("#email");
            var header = $("#header");
            var detail = $("#detail");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(header) && isNotEmpty(detail)) {
                $.ajax({
                    url: 'sendEmail.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        his_id: his_id.val(),
                        his_start: his_start.val(),
                        his_hr: his_hr.val(),
                        bgmarr_name: bgmarr_name.val(),
                        name: name.val(),
                        email: email.val(),
                        header: header.val(),
                        detail: detail.val()
                    },
                    success: function(response) {
                        $('#myForm')[0].reset();
                        $('.msg').text("Message send successfully");
                        location.href = 'dashboard.php';
                    }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else caller.css('border', '');

            return true;
        }
    </script>
</body>

</html>