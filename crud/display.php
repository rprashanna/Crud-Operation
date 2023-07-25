<?php
include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="con">
        <button><a href="user.php">Add User</a></button>

        <button><a href="user.php">Logout</a></button>

        <table>
            <tr>
                <th>Sl No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Password</th>
                <th>Operation</th>
            </tr>

            <?php


            $sql="select * from `crud`";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result))
                {
                    $id=$row['id'];
                    $name=$row['name'];
                    $email=$row['email'];
                    $mobile=$row['mobile'];
                    $password=$row['password'];

                    echo'<tr>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$password.'</td>
                    <td>
    <button><a href="update.php?updateid='.$id.'">Update</a></button>
    <button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
</td>
                </tr>
                    ';

                }
            }

?>

          




        </table>

    </div>
</body>

</html>