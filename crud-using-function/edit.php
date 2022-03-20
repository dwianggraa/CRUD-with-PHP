<?php 

include("includes/connection.php");
include("includes/allfunction.php");

$id =$_GET['editid'];
$data = selectdatabyid("registration",$id);

if(isset($_POST['submit']))
{
	 $data=array(
				"name"=>"'".$_POST['name']."'",
				"email"=>"'".$_POST['email']."'",
				"mobile"=>"'".$_POST['mobile']."'",
				);
	  
	  update($data,'registration',$id);
	
	header("location:listing.php");
	
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">

</head>

<body id="budy" class="addbody">
<h2>Edit data mahasiswa</h2>

<form class="form-input" method="POST">

<input type="text" name="name" value="<?php echo $data['name'];?>" placeholder="Name">
<input type="text" name="email" value="<?php echo $data['email'];?>" placeholder="Email">
<input type="text" name="mobile" value="<?php echo $data['mobile'];?>" placeholder="Mobile number">



<input class="submit" type="submit" name="submit">

</form>

</body>
</html>