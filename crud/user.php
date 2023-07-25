<?php

include 'connect.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];


// 
$sql="Select * from `crud` where name='$name'";
$result=mysqli_query($con,$sql);
if($result)
{
    $num=mysqli_num_rows($result);
    // echo $num;
    if($num>0)
    {
        echo "User Already Exists So Login Now";
    }
    else{
        $sql="insert into `crud` (name,email,mobile,password)values('$name','$email','$mobile','$password')";
$result=mysqli_query($con,$sql);
if($result)
{
    header('location:display.php');
}
else{
    echo "some errors";
}
    }
}}
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

        <h1 class="tile">C R U D operation</h1>
        <div class="sibox">
            <form method="post">
                <div class="datareqied">
                    <label for="username">Name</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter Your Name"
                        autocomplete="off" name="name" required>
                </div>
                <div class="datareqied">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter Email" autocomplete="off"
                        name="email" required>
                </div>
                <div class="datareqied">
                    <label for="mobile">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile" placeholder="Mobile Number" autocomplete="off"
                        name="mobile" required>
                </div>
                <div class="datareqied">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" autocomplete="off"
                        name="password" required>
                </div>


                <input type="submit" name="submit" value="Submit">

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