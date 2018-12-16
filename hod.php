
<?php
  session_start();
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>HOD Dashboard</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style1.css">
<body>
 
 <div class="container contact-form">   
<header>
  <h2 style="font-size:30px">Welcome, <?php echo $_SESSION['desg'].' '.$_SESSION['name']; ?></h2>
<form  action="/project/logout.php" align="right">
    <button type="submit">Logout</button>
</form>

</header>

<section>
  <nav>
    <ul>
      <h1><?php echo $_SESSION['name']; ?></h1>
      <br><br>
      ID: <b><?php echo $_SESSION['id']; ?></b>
      <br><br>
      Department: <b><?php echo $_SESSION['dept']; ?></b>
      <br><br>
      Designation: <b><?php echo $_SESSION['desg']; ?></b>
    </ul>
  </nav>
  
  <article>
    <iframe src="your_leaves2.php" style="border:none; width: 100%; height: 100%;"></iframe>
  </article>
</section>

<footer>
  <p>Designed by: Team No. 11</p>
</footer>

</div>
</body>
</head>
</html>