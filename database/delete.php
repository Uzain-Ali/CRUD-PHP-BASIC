<?php
include 'config.php';

if(isset($_GET['delete'])){
    $deleteID = $_GET['delete'];

    $sql = "DELETE FROM users WHERE id=$deleteID";
    $result = mysqli_query($conn, $sql) or die("Query Failed". mysqli_error());
    if($result){
        header('location:../display.php');
    }else{
        header('location:../display.php');

    }
    
}
?>