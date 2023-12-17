<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <title>Document</title>

</head>

<body>
    <div class="container">
        <h1>RESET PASSWORD</h1>
        <div class="row">
            <div class="col-xl-3 col-lg-12 col-md-9">
                <form action="check_email.php" method="post" class="user">
                    <div class="form-group">
                        <input type="email" name="useremail" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="อีเมล" required>
                    </div>
                    <input type="submit" name="check" value="รีเซ็ตรหัสผ่าน" class="btn btn-primary btn-user btn-block"></input>
                </form>

            </div>
        </div>
    </div>

</body>

</html>