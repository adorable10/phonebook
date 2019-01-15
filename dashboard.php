<?php

/*require('db.php');
include("auth.php");  ?>
<!DOCTYPE html>
<html>
<head>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/dashboard.css">
   <link href="bootstrap/css/bootstrap.min.css">
   <title>Dashboard</title>
</head>
</head>
<style>
	body{
	background-image: url(image.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	width: 100%;
	}
</style>
<body>
<ul>
   <li class='active'><a href="dashboard.php?username=<?php echo $_SESSION['username']; ?>">Home</a></li>
   <li><a href="insert.php?username=<?php echo $_SESSION['username']; ?>">New record</a></li>
   <li><a href="view.php?username=<?php echo $_SESSION['username']; ?>">Logout</a></li>
   <li><a href='logout.php'>Logout</a></li>
</ul>
</div>
<center><h1>View Records</h1></center>
<br><center><h1>W-E-L-C-O-M-E <?php echo $_SESSION['username']; ?>!</h1></center><>
</div>
</body>
</html>


