<?php
include_once "./database/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Display Data</title>
    <style>
        th,td{
            border: 2px double black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Current Users</h1>
    <a href="./index.php">Back</a>


<?php
    $sql = "SELECT * FROM USERS";
    $num = 1;
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        echo "<table>
        <thead>
            <th>S.No</th>
            <th>Username</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Address</th>
            <th>Operations</th>
        </thead>
        <tbody>";
        while($row = mysqli_fetch_assoc($result)){
?>
<tr>
            <td><?php echo $num?></td>
            <td><?php echo $row["username"]?></td>
            <td><?php echo $row["email"]?></td>
            <td><?php echo $row["mobile"]?></td>
            <td><?php echo $row["address"]?></td>
            <td>
                <a  href="./database/delete.php?delete=<?php echo $row["id"]?>" onclick="return confirm('Are you want to delete this data?');">Delete</a>
                <a href="./database/update.php?update=<?php echo $row["id"]?>">Update</a>
            </td>
</tr>



<?php
$num++;
        }
    }else{
        echo "<div>No data</div>";
    }
?>
    

        </tbody>
    </table>
</body>
</html>