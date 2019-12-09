<style type="text/css">
div.background {
	margin:1px;
  background: linear-gradient(to bottom left, #33ccff -1%, #ff9933 90%);
  border: 3px solid black;
}
</style>
<div class="background">
<?php include "header.php"; 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<br><link rel="stylesheet" type="text/css" href="style.css">
<?php include 'link.php'?>
<center>
<legend> <h3 class="container shadow" style="background-color: green ; color: orange">Login for Voting </h3></legend> 
<br></center>
<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>
<br><center><font size="4" >
<form action="login_action.php" method="post" id="myform"  class="container shadow" style="height: 430px">
<br>Voter-id : 
<input type="text" name="username" value="" > 
<br><br>Password : 
<input type="password" name="password" value="" >
<br><br><input type="submit" class="btn btn-success" name="login" value="login"  style="margin-left: 50px;padding: 10px 50px">
</form></font>
</center><script type="text/javascript" > 
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username" , "req" , "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req" , "Please Enter Password");
</script>
<?php include "footer.php"; ?>
</div>
