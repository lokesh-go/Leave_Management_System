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
	$dt = $_POST['date'];
	$nofdys = $_POST['leave'];
	$reson = $_POST['subject'];
	$temp = $_SESSION['regno'];
	
	$sql ="insert into WebProject.leave (`RegNo`, `L_Date`, `Days`, `Reason`, `Status`) values ('$temp','$dt','$nofdys','$reson','Under Process')";

	if($conn->query($sql)==TRUE)
	{
		echo "Aplication Successfully Submitted! Click on Home Button to return to your Home Page";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
		echo "not";
		echo $dt;
		echo $nofdys;
		echo $reson;
		echo $temp;
	}

}

?>