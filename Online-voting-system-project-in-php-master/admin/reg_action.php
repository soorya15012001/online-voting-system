<?php
session_start();

//include "connection.php"; 

$con = mysqli_connect("localhost","root","","polltest") or die ("error" . mysqli_error($con));


if(isset($_POST['submit'])) 
{

$name = mysqli_real_escape_string($con, $_POST['firstname']);
$name2 = mysqli_real_escape_string($con,$_POST['lastname']);
$name3 = mysqli_real_escape_string($con,$_POST['username']);


$sq = mysqli_query($con, "SELECT lan_id FROM languages WHERE lan_id='$name3'");
$exist = mysqli_num_rows($sq);
	
		if($exist==1){
		$nam="<center><h4><font color='#FF0000'>The  already exist, peak another.</h4></center></font>";
		unset($name3);
		include('addcand.php');
		exit();
		}
$sql = mysqli_query($con, "INSERT INTO languages(fullname,about,lan_id) VALUES('$name','$name2','$name3')");
		 if (!$sql) 
		 { 
		 die (mysqli_error($con));
		 }
		 else {
		 echo "Successfully Registered!  <a href= 'adminmainpage.php'>Click here to Go back </a>";
		 }
}
else {
	 $error="<center><h4><font color='#FF0000'>Registration Failed Due To Error !</h4></center></font>";
     include"adminmainpage.php";
}
?>
