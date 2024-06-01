<?php
include("./config.php");


$sql = "CREATE TABLE student(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    dob DATE,
    details VARCHAR(255),
    gender VARCHAR(1),
    section VARCHAR(10)
)";

if(!mysqli_query($conn, $sql)){
    die("Some Error Occurs". mysqli_error());
}
?>