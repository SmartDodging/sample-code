<?php session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <style>
    </style>
        <title>LoginRegistration</title>
         <link rel='stylesheet' type='text/css' href='css/style.css'>
    </head>
    <body >
        <div id="container" style="background-color: grey;">
            <div id="banner">
                <?php include ("banner.php"); ?>
            </div>
            <div id="link">
                <?php include ("link.php"); ?>
            </div>
            <div id="inside">
            <div id="content">
                <?php include ("redirect.php"); ?>
            </div>
            </div>
            <div id="footer">
                <?php include ("footer.php"); ?>
            </div>
        </div>
    </body>
</html>