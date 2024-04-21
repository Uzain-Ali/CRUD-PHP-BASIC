<?php
include("./config.php");

$sql = "CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(50) NOT NULL,
    mobile VARCHAR(11) NOT NULL,
    address VARCHAR(255) NOT NULL
)";

if(mysqli_query($conn, $sql)){
    echo "Table Created";
}else{
    die("Some Error Occurs". mysqli_error());
}
?>