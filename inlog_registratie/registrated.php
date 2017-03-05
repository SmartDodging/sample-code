<?php
//connecting to the database
include("connect_db.php");
//making a hash from the password
$hash = md5( rand(0,1000)); 
//setting up the mail for the registered email
$email = $_POST["email"];
$subject = "activation";
$message = "Click the link to activate your account. http://localhost/2016-2017/DavidAle/inlog_registatie_systeem/index.php?content=activation&hash=$hash&email=$email";
//checking the database to see if registered email is in use
$sqlselect = "SELECT `email` FROM `users` WHERE email='$email'";
$resultselect = mysqli_query($conn, $sqlselect);
$rowselect = mysqli_fetch_assoc($resultselect);
//if form is filled in and email is not in use send data to database
if(!empty($_POST) && $email != $rowselect['email']){
        $sql = "INSERT INTO `users` (`id`, 
                                     `firstname`, 
                                     `infix`, 
                                     `surname`, 
                                     `email`,
                                     `username`,
                                     `hash`)
        VALUES              (NULL,
                             '".$_POST["firstname"]."',
                             '".$_POST["infix"]."',
                             '".$_POST["surname"]."',
                             '".$_POST["email"]."',
                             '".$_POST["username"]."',
                             '".$hash."')";
                             
        mysqli_query($conn, $sql);
//sending email to registered email with info
        mail($email,$subject,$message);
        echo "You have succesfully registered! There will be an email sent to the given e-mail address containing a link to set your password.";
         
}
elseif(empty($_POST)){
    ("Fill all the fields!");
}
else{
    echo ("Email is already in use!");
    };

?>
