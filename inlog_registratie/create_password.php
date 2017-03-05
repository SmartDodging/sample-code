<?php
include("connect_db.php");
$hash = $_GET['hash'];
if ( !empty($_POST)){
$password = $_POST['password'];
$password2 = $_POST['password2'];
$message = "Password has been set, you can now log in!";
$error = "Password does not match";
$email = $_GET['email'];

    if($password == $password2){
        echo "<script type='text/javascript'>alert('$message');</script>";
        $sql = "UPDATE users SET password='$password' WHERE hash='$hash'";
        mysqli_query($conn, $sql);
        header("location: ./index.php?content=login_form&email=$email");
        
    }
    else{
        echo "<script type='text/javascript'>alert('$error');</script>";
    }

    
}
?>


<!DOCTYPE html>
<html>
<head>
<title>create password</title>
</head>
<body>
<form action="" method="POST">
<table>
    <tr>
        <td>password:</td>
        <td><input type="password" name="password"></td>
    </tr>
    <tr>
        <td>repeat password:</td>
        <td><input type="password" name="password2"></td>
    </tr>
    <tr>
        <td><input type="submit" name="passregister" value="Klik hier!"></td>
    </tr>
</table>
</body>
</html>