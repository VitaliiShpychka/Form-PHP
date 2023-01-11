<?php
include('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Register Login</title>
</head>
<body>
    
    <div class="contaiener mt-4 m-lg-4">
        <h1>Registration</h1>
        <?php
            if(isset($_GET["status"])) {
               $message = "Error";
               $type = "danger";
               if($_GET["status"] === 'ok') {
                    $message = "User registered successfully!";
                    $type = "success";
               }
               showMessage($message, $type);
            }
        ?>
        <form action="check.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Enter your logi"><br/>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name"><br/>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter your password"><br/>
            <button class="btn btn-success" type="submit">Sign up</button>
        </form> 
    </div>
</body>
</html>