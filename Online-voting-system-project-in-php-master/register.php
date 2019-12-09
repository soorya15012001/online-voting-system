<script src='https://www.google.com/recaptcha/api.js'></script>

<link rel="stylesheet" type="text/css" href="style.css">
<?php include 'link.php'?>
<style type="text/css">
div.background {
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

<br>
<center>
<legend> <h3 class="container shadow" style="background-color: green ; color: orange">  Register </h3></legend> </center>
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
<center><font size="4" >
<form action= "reg_action.php" method= "post" id="myform"
style="margin-top: 50px;height: 450px" class="container shadow"  >
<br>
Firstname:
<input type="text" style="box-shadow: " name="firstname" value="" />
<br>
<br>
Lastname: 
<input type="text" name="lastname" value="" />
<br>
<br>
Voter-id : 
<input type="text" name="username" value="" />
<br>
<br>
Password: 
<input type="password" name="password" value="" />
<br>
<br>
<div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div> 
<br>
<br>

<input type="submit" class="btn btn-success" name="submit"   style="margin-left: 50px;padding: 10px 50px">
</form>
</font>
</center>

<script type= "text/javascript" >
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("firstname","req","Please enter student firstname"); 
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("lastname","req","Please enter student lastname"); 
 frmvalidator.addValidation("lastname","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter student username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter student password"); 
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");

</script>
<?php include "footer.php" ;?>
</div>
