<?php
session_start();
session_destroy();
header("location:/project/index.php");
exit();
?>