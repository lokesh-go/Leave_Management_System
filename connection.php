<?php

session_start();
$servername = "172.31.77.251:3307";
$username = "cyber";
$password = "cyber";
$dbname = "WebProject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{
	$regno = $_POST['reg_no'];
	$passs= $_POST['pass'];
	$user=$_POST['user'];
if(!strcmp($user,"Student"))
{
	$sql = "select * from student where RegNo='$regno'";
	$res = $conn->query($sql);

	if($result=$res->fetch_assoc())
	{
		//echo $result['Name'];
		$_SESSION['name']=$result['Name'];
		$_SESSION['regno']=$result['RegNo'];
		$_SESSION['branch']=$result['Branch'];
		$_SESSION['sem']=$result['Semester'];
		$_SESSION['atd']=$result['Attandence'];
		$_SESSION['pass']=$result['Password'];

		if(!strcmp($passs,$_SESSION['pass']))
		header('location: /project/student.php');
		else
	{
	?>
	<script> 
		alert("Invalid User or Username or Password");
	</script> 
	<html> 
		<head>
		<meta http-equiv="refresh" content="1;url=index.php">

		</head>

	</html> 
	<?php
	}
	
	}
	
	else
	{
	?>
	<script> 
		alert("Invalid User or Username or Password");
	</script> 
	<html> 
		<head>
		<meta http-equiv="refresh" content="1;url=index.php">

		</head>

	</html>  
	<?php
	}
	
}


else if(!strcmp($user,"HOD"))
{
	$sql = "select * from hod where Id='$regno'";
	$res = $conn->query($sql);

	if($result=$res->fetch_assoc())
	{
		//echo $result['Name'];
		$_SESSION['id']=$result['ID'];
		$_SESSION['name']=$result['Name'];
		$_SESSION['desg']=$result['Desg'];
		$_SESSION['dept']=$result['Dept'];

		if(!strcmp($passs,$_SESSION['id']))
		header('location: /project/hod.php');
	else 
	{
	?> 
	<script> 
		alert("Invalid User or Username or Password");
	</script> 
	<html> 
		<head>
		<meta http-equiv="refresh" content="1;url=index.php">

		</head>

	</html> 
	<?php
	}
	}
	else 
	{
	?> 
	<script> 
		alert("Invalid User or Username or Password");
	</script> 
	<html> 
		<head>
		<meta http-equiv="refresh" content="1;url=index.php">

		</head>

	</html> 
	<?php
	}
	
}
}
$conn->close();
?>