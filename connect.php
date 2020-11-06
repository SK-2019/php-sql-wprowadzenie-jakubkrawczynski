<?php
$servername = "remotemysql.com";
$username = "nbP1XCD1RY";
$password = "9pZxtLQnhv";
$dbname = "nbP1XCD1RY";

$conn=new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
?>
