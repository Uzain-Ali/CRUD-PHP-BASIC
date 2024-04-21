<?php
include 'config.php';

if(isset($_POST['update_btn'])){
    $dataID = $_POST["dataID"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $address = $_POST["address"];

    $sql = "UPDATE users SET username = '$username', email = '$email', mobile='$mobile', address='$address' where id=$dataID";

    $result = mysqli_query($conn,$sql);

    if($result){
        header('location:../display.php');
    }else{
        die("Error in updating data". mysqli_error());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Update Data</title>
</head>
<body>
    <h1>Update Data</h1>
    <a href="../display.php">View Users</a>

    <?php
    if(isset($_GET['update'])){
        $updateID=$_GET['update'];

        $sql = "SELECT * FROM users where id = $updateID";

        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
            $fetData = mysqli_fetch_assoc($result);
            ?>
    <form action="" method="post">
        <input type="hidden" name="dataID" value="<?php echo $fetData['id']?>">
        <input type="text"  required autocomplete="off" value="<?php echo $fetData['username']?>" name="username">
        <input type="email"  required  autocomplete="off" value="<?php echo $fetData['email']?>" name="email">
        <input type="number"  required autocomplete="off" value="<?php echo $fetData['mobile']?>" name="mobile">
        <input type="text"  required  autocomplete="off" value="<?php echo $fetData['address']?>" name="address">
        <input type="submit" class="btn" name="update_btn" value="update">
    </form>
            <?php
        }
    }
    ?>


</body>
</html>