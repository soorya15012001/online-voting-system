<style>
div.background {
  
  background:  linear-gradient(to right, #70e1f5, #ffd194);
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
if(!isset($_SESSION)) {
session_start();
}

/*if (isset($_SESSION['SESS_NAME'])!="") 
{
	header("Location: adminmainpage.php");
}*/
?>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="background">
<?php include 'link.php'?>

<br>
<br>
<center>
<h1 style="color: orange; background-color: green" class="container shadow"> Add Candidate </h1></center>
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
<center><font size="4" >
<form action= "reg_action.php" method= "post" id="myform"  class="container shadow" style="height: 400px;margin-top: 40px">

<br>
<div style="margin-top: 100px">
	
</div>
<label style="color: orange ;font-weight: bold">Candidate-id :</label>
<input type="text" name="username" />

<br>
<br>
<label style="color: orange ;font-weight: bold">Fullname :</label>
<input type="text" name="firstname"  />
<br>
<br>
 <label style="color: orange ;font-weight: bold">party :</label>
<input type="text" name="lastname"  />
<br>
 
<br>
<input type="submit" name="submit" value="ADD" class="btn btn-success" />
</form>
</font>
</center>
<a href="adminmainpage.php" class="btn btn-danger" style="margin-left:100px; padding: 10px 10px;
			border-radius: 20%; left: 600px;top :90px;position: relative; "> <h4>BACK</h4></a>
</div>


