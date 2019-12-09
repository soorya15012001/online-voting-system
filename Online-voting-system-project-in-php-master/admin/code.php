<?php
session_start();
$con = mysqli_connect("localhost","root","","polltest");




if(isset($_POST['delete_btn']))
{
	$id =  $_POST['delete_id'];

	$query = "DELETE FROM languages WHERE lan_id='$id' ";
	$query_run = mysqli_query($con,$query);

	if($query_run ){
		$_SESSION['success'] = "Your data is deleted";
		header('Location: deletecand.php');
	} 
	else{
		$_SESSION['status'] = "Your data is not deleted";
		header('Location: deletecand.php');
	}
}

?>
