<?php
$server = "localhost";
$username = "root";
$password = null;
$database = "crud";
$conn = mysqli_connect($server, $username, $password,$database);

if(!$conn){
    die("Connection Error: ". mysqli.connect_error());
}
?>