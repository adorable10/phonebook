<?php

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link href="bootstrap-4.0.0-beta.3-dist">
<link rel="stylesheet" type="text/css" href = "css/style.css" />
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
<?php
	require('db.php');
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']);   
		$username = mysqli_real_escape_string($con,$username); 
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		
        $query = "INSERT INTO `users`( `username`, `email`, `pass`) VALUES ('$username','$email','".md5($password)."')";
        $result = mysqli_query($con,$query);
        if($result){
            header ("Location: index.php");
        }
    }else{
?>
<div class="header">
<center><h1>Registration Form</h1></center>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>
