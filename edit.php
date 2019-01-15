<?php
 
require('db.php');
include("connect.php");
$id=$_REQUEST['id'];
$query = "SELECT * FROM `contacts` WHERE id='$id'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link href="bootstrap-4.0.0-beta.3-dist">
<link rel="stylesheet" type="text/css" href="css/edit.css" />
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
<div class="form">
<center><p><a href="view.php">Home</a> | <a href="logout.php">Logout</a></p></center>
<center><h1>Update Record</h1></center>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$firstname =$_REQUEST['firstname'];
$lastname =$_REQUEST['lastname'];
$email =$_REQUEST['email'];
$address =$_REQUEST['address'];
$number =$_REQUEST['number'];

$update="UPDATE `contacts` SET `firstname`='$firstname',`lastname`='$lastname',`number`='$number',`address`='$address',`email`='$email' where id='$id'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="firstname" placeholder="Enter your Firstname" required value="<?php echo $row['firstname'];?>" /></p>
<p><input type="text" name="lastname" placeholder="Enter your Lastname" required value="<?php echo $row['lastname'];?>" /></p>
<p><input type="text" name="email" placeholder="Enter your Email" required value="<?php echo $row['email'];?>" /></p>
<p><input type="text" name="address" placeholder="Enter your Address" required value="<?php echo $row['address'];?>" /></p>
<p><input type="text" name="number" placeholder="Enter your Number" required value="<?php echo $row['number'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>

</div>
</div>
</body>
</html>
