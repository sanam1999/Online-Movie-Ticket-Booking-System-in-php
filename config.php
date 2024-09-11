<?php
$host = '127.0.0.1'; // or 'localhost'
$username = 'root'; // replace with your MySQL username
$password = ''; // replace with your MySQL password
$database = 'db_movie'; // your database name


$con = mysqli_connect($host, $username, $password, $database);

if (!$con) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>