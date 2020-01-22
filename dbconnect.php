<?php
$time_zone = 'Asia/jakarta';

$con = mysqli_connect("localhost", "root", "", "todo_db");

if(!$con) {
    echo "Error connecting to MySQL <br>";
    exit;
}
?>
