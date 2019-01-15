<?php 
require('db.php');
include("auth.php");


?>
<!DOCTYPE html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/view.css">
   <link href="bootstrap/css/bootstrap.min.css">
   <title>View Records</title>
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
   <li class='active'><a href='view.php'>Home</a></li>
   <li><a href='insert.php'>Add Contacts</a></li>
   <li><a href='logout.php'>Logout</a></li>
</ul>
</div>
<center><h1>Contact List</h1></center>

<table width="99%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>id</strong></th><th><strong>Firstname</strong></th><th><strong>Lastname</strong></th><th><strong>Number</strong></th><th><strong>Address</strong></th><th><strong>Email</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>



<?php

$username=$_SESSION['username'];
$sel_query="Select * from contacts where username='$username'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["id"]; ?></td><td align="center"><?php echo $row["firstname"]; ?></td><td align="center"><?php echo $row["lastname"]; ?></td><td align="center"><?php echo $row["number"]; ?></td><td align="center"><?php echo $row["address"]; ?></td><td align="center"><?php echo $row["email"]; ?></td><td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php  } ?>
</tbody>
</table>
</div>
</body>
</html>

