<?php
//connecting to the database
include("connect_db.php");
$hash = $_GET['hash']; 
$email = $_GET['email'];
//checking if account has already been activated
$sqlselect = "SELECT active FROM users WHERE hash='$hash' LIMIT 1";
$resultselect = mysqli_query($conn, $sqlselect);
$rowselect = mysqli_fetch_assoc($resultselect);
if ($rowselect['active'] == 0)
{
    $sql = "UPDATE users
                SET active = '1'
                WHERE hash = '$hash'";
    mysqli_query($conn, $sql);
    header("Location: ./index.php?content=create_password&hash=$hash&email=$email");
}
else
{
    echo 'Already activated!';
}
?>