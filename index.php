<?php
include("./database/config.php");

if(isset($_POST["submit"]))
{
    // echo "success";
    $username = $_POST["username"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $address = $_POST["address"];

    //insert
    $sql = "INSERT INTO `users` (username, email, mobile,address) values ('$username', '$email', '$mobile', '$address')";



    if(mysqli_query($conn,$sql)){
        header('location:display.php');
    }else{
        echo "Error". mysqli_error();
    }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD BASIC</title>
</head>
<body>
    <h1>PHP CRUD Operation</h1>
    <a href="./display.php">View Users</a>

    <form action="" method="post">
        <input type="text" placeholder="Enter your name" required autocomplete="off" name="username">
        <input type="email" placeholder="Enter your Email" required  autocomplete="off" name="email">
        <input type="number" placeholder="Enter your phone number" required autocomplete="off" name="mobile">
        <input type="text" placeholder="Enter your address" required  autocomplete="off" name="address">
        <input type="submit" class="btn" name="submit">
    </form>
</body>
</html>