<style>
div.background {
  
  background: linear-gradient(to right, #00c6ff, #0072ff);
  background:cover;
  border: 3px solid black;
  opacity: 0.9;
  width: 100%;
  height: 100%;
  
}
div.transbox {
  margin-left: 200px;
  margin-right: 200px;
  background-color: #ccff66;
  border: 2px solid black;
  opacity: 0.4;
  filter: alpha(opacity=70);
  padding-left: 10px;
  /* For IE8 and earlier */
}

	div.pad{
		padding-bottom: 0px;
		margin-bottom: 0px;
	}

</style>

<?php

session_start();
if(!isset($_SESSION['user'])){
	header('location: adminlogin.php');
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include 'link.php'?>
</head>
<div class="background">
<body >
	<div > 
		<div class ="heading text-center text-uppercase text-black container shadow" style="background-color:  #c45c80; margin-top: 50px;width: 100%">
			<h1 style="color: purple">ADMIN PAGE</h1>
		</div>
		<br><br>
	</div>
	
		<div style="margin-top: 50px">
			<a href="lan_view.php"  class="btn btn-danger" style="margin-left:130px ; padding: 60px 50px;
			border-radius: 30%"> <h4>See result</h4></a>
			<a href="deletecand.php"  class="btn btn-danger" style="margin-left:100px; padding: 60px 50px;
			border-radius: 30%"> <h4>Delete Candidates</h4> </a>

			<a href="addcand.php" class="btn btn-danger" style="margin-left:100px; padding: 60px 50px;
			border-radius: 30%"> <h4>Add candidate</h4></a>
			
			<a href="logout.php" class="btn btn-danger"style="margin-left:100px; padding: 60px 50px;
			border-radius: 30%"><h4>Logout </h4></a>	
		</div>
		

  


</body>
</div>
</html>