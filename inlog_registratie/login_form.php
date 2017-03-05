<?php
include("connect_db.php");
if(!empty($_POST)){
$emaillogin = $_POST["emaillogin"];
$loginpassword = $_POST["loginpassword"];
$email = $_GET['email'];
    $sql = "SELECT email, password, role FROM users WHERE email='$emaillogin' AND password='$loginpassword'";
    $resultselect = mysqli_query($conn,$sql);
    $rowselect = mysqli_fetch_assoc($resultselect);
        if($rowselect['role'] == 'user'){
    if($rowselect['email'] == $emaillogin and $rowselect['password'] == $loginpassword){
        header("location: homepage.php");
    }
}
    else if($rowselect['role'] == 'admin'){
        if($rowselect['email'] == $emaillogin and $rowselect['password'] == $loginpassword){
        header("location: homepage_admin.php");
    }
    
}
    else {
        
        echo ("<style> #incorrect{color:red;}</style> <p id='incorrect'>username or password is incorrect</p>");
        
    }
}
?>
<form action="" method="POST">
<table>
    <tr>
        <td>e-mail:</td>
        <td><input type="text" name="emaillogin"></td>
    </tr>
    <tr>
        <td>password: </td>
        <td><input type="password" name="loginpassword"></td>
    </tr>
    <tr>
        <td><input type="submit" name="submit" value="log in"></td>
    </tr>
</table>
</form>
