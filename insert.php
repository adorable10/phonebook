<?php
 
require('db.php');
include("connect.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{

$firstname =$_REQUEST['firstname'];
$lastname =$_REQUEST['lastname'];
$email = $_REQUEST['email'];
$address =$_REQUEST['address'];
$number =$_REQUEST['number'];
$username = $_SESSION["username"];
$ins_query="INSERT INTO `contacts`( `username`, `firstname`, `lastname`, `number`, `address`, `email`) VALUES ('$username','$firstname','$lastname','$number','$address','$email')";
mysqli_query($con,$ins_query) or die(mysql_error());
header ("Location: view.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add Contact</title>
<link href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="insert.css" />
<style>
	body{
	background-image: url(image.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	width: 100%;
	}
</style>
</head>
<body>
<div class="form">


<div>
<h1>Add Contact</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="firstname" placeholder="Enter Firstname" required /></p>
<p><input type="text" name="lastname" placeholder="Enter Lastname" required /></p>
<p><input type="text" name="email" placeholder="Enter Email" required /></p>
<p><input type="text" name="address" placeholder="Enter Address" required /></p>
<p><input type="text" name="number" placeholder="Enter Number" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#0ae4f1;"><?php echo $status; ?></p>
<h1 style="color:#0ae4f1;"/h1>

</div>
</div>
</body>
</html>
