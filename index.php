<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Login to LMS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
<body style="background:url(pic1.jpg);
background-position:top right;
 background-size: 2000px 700px;">
    <div class="loginbox">
    <img src="avatar.png" style="width:100px;
	height:100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);">
        <h1>Login Here</h1>
        <form  method="POST" action="/project/connection.php">
            <p>Username</p>
            <input type="text" name="reg_no" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password">
            <br>
            <select type="select" name="user">
            <!--<option id="1">Admin</option>-->
            <option value="Student">Student</option>
            <option value="HOD">HOD</option>
            </select>
            <br>
            <br>
            <input type="submit" name="" value="Login">
            <!--<a href="#">Lost your password?</a><br>-->
        </form>
        
    </div>

</body>
</head>
</html>