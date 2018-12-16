
<?php
  session_start();
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Info</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style1.css">
<body>
 
 <div class="container contact-form">   
<header>
  <h2 style="font-size:30px">Welcome, <?php echo $_SESSION['name']; ?></h2>
<form  action="/project/logout.php" align="right">
    <button type="submit">Logout</button>
</form>
<form  action="/project/student.php" align="left">
    <button type="submit">Home</button>
</form>

</header>

<section>
  <nav>
    <ul>
      <h1><?php echo $_SESSION['name']; ?></h1>
      <br><br>
      Reg. No.<b><?php echo $_SESSION['regno']; ?></b>
      <br><br>
      Branch <b><?php echo $_SESSION['branch']; ?></b>
      <br><br>
      Total Attendance: <b><?php echo $_SESSION['atd']; ?>%</b>
    </ul>
  </nav>
  
  <article>
    <iframe src="your_leaves1.php" style="border:none; width: 100%; height: 100%;"></iframe>
  </article>
</section>

<footer>
  <p>Designed by: Team No. 11</p>
</footer>

</div>
</body>
</head>
</html>