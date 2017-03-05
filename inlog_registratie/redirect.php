<?php
if(isset($_GET))
{
    $page = $_GET["content"].".php";
}
else{
    $page = "home.php";
}
include($page);
?>