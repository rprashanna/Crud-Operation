<?php

include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];




if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];



$sql="update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password'where id=$id";
$result=mysqli_query($con,$sql);
if($result)
{
    header('location:display.php');
    // echo "Updated Successfully";
}
else{
    die(mysqli_error($con));
}
}
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Crud Operation</title>
</head>

<body>
    <div class="container">

        <h1 class="tile">Sign Up</h1>
        <div class="sibox">
            <form method="post">
                <div class="datareqied">
                    <label for="username">Name</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter Your Name"
                        autocomplete="off" name="name" required value=<?php echo $name;?>>
                </div>
                <div class="datareqied">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter Email" autocomplete="off"
                        name="email" required value=<?php echo $email;?>>
                </div>
                <div class="datareqied">
                    <label for="mobile">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile" placeholder="Mobile Number" autocomplete="off"
                        name="mobile" required value=<?php echo $mobile;?>>
                </div>
                <div class="datareqied">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" autocomplete="off"
                        name="password" required value=<?php echo $password;?>>
                </div>


                <!-- <input type="submit" name="update" value="update"> -->
                 <a href="update.php">
        <button type="submit" name="submit">update</button>
    </a>

            </form>

            <!-- <a href="login.php">
        <button class="btn">Login</button>
    </a> -->
            <!-- <p>Already have an Account... <a href="login.php">Login</a></p> -->
            <!-- <form action="login.php">
        <input type="submit" name="login" value="Login">
    </form> -->
        </div>

    </div>

</body>

</html>