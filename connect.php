<?php
// Connect to MySQL
$connect = mysqli_connect('localhost', 'root', '', 'assignment1');

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>