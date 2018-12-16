<?php
session_start();
$ids;
foreach ($_POST as $id => $value){
$ids=$id;
}
$ids=substr($ids,0,1);
$conn = new mysqli("172.31.77.251:3307", "cyber", "cyber","WebProject");
$sql="update WebProject.leave set Status='Denied' where ID=$ids";
if($conn->query($sql)===TRUE)
?>
<html> 
		<head>
		<meta http-equiv="refresh" content="0.1;url=your_leaves2.php">

		</head>

	</html> 