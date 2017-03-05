<?php
//function checking if connection works
        function dblogin()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "inlog_registratie_systeem";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if ($conn->connect_errno) {
            echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
        } 
        return $conn;
    }
?>