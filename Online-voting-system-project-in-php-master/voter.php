<style>
div.background {
  background: linear-gradient(to right, #f1f2b5, #135058);
  border: 3px solid black;
  width: 100%;
  height: 100%;
  
}
div.transbox {
  margin-left: 250px;
  margin-right: 250px;
  background: linear-gradient(to right, #feac5e, #c779d0, #4bc0c8); 
  border: 2px solid black;
  opacity: 70;
  filter: alpha(opacity=100);
  padding-left: 10px;
  /* For IE8 and earlier */
}


</style>
<div class ="background">
<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>

<link rel="stylesheet" type="text/css" href="style.css">
<?php include 'link.php'?>
<h4> Welcome <i><b><?php echo $_SESSION['SESS_NAME']; ?> </i></b></h4>
<br>
<div style="text-align: center;"><h3>Make a Vote </h3>
<div class="transbox">
<form action="submit_vote.php" name="vote" method="post" id="myform" class="container shadow" style="height: 450px">


<center><div class="container shadow" style="background-color: green"><font size='6' > VOTE your candidate:</font> </div><center><br>


<?php
$con = mysqli_connect("localhost","root","","polltest") or die ("error" . mysqli_error($con));
if($con->connect_error){
	die("Connection failed:".$con->connect_error);
}
$sql="SELECT fullname FROM languages";
$result = $con->query($sql);
if($result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
		echo "<input type='radio' name='lan' value='". $row["fullname"]. "'>" .$row["fullname"]. "<br>";
	}
}else{
	echo "NO PARTIES";
}
$con->close();
?>

</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>

<center><input type="submit" class="btn btn-success" name="submit"  value="Submit Vote" style="margin-left: 50px;padding: 10px 50px;margin-top: 30px"></center>
</form>
</div>
</div>
