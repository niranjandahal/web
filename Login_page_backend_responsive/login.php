<?php
session_start();
if($_POST)
{
$earth=mysqli_connect("localhost","root","","users");
$checkname=$_POST['name'];
$checkpassword=$_POST['password'];

$result=mysqli_query($earth,"SELECT * FROM `logindata` WHERE `name` = '$checkname' AND `password` = '$checkpassword'");
if(mysqli_num_rows($result) >= 1)
{
    $_SESSION['name']=$checkname;
    header("location:homewebsite.php");
}
else
{
    echo '<script>alert("incorrect credentials")</script>';
}

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login system</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>

    <div class="login-page">
        <div class="form">


            <form method="post" class="login-form">
                <input type="text" placeholder="username" name="name" />
                <input type="password" placeholder="password" name="password" />
                <button name="login" value="login">login</button>
            </form>


        </div>
    </div>

</body>

</html>