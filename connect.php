<?php
$servername = "mysql-jakubkrawczynski.alwaysdata.net";
$username = "233316";
$password = "Killer2775";
$dbname = "jakubkrawczynski_2701";

$conn=new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
?>
