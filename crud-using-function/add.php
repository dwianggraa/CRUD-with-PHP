<?php 

include("includes/connection.php");
include("includes/allfunction.php");

if(isset($_POST['submit']))
{
	 $data=array(
				"name"=>"'".$_POST['name']."'",
				"email"=>"'".$_POST['email']."'",
				"mobile"=>"'".$_POST['mobile']."'"
				);
	  
	  insert($data,'registration');
	
	header('location:listing.php');
	
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">

</head>

<body id="budy" class="addbody">
	<h2>Form input data mahasiswa</h2>
<form class="form-input" method="POST">
<input type="text" name="name" placeholder="Name">
<input type="text" name="email" placeholder="Email">
<input type="text" name="mobile" placeholder="Mobile number">

<input class="submit" type="submit" name="submit">

</form>
</body>
</html>