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

?>
<div class="background">
<link rel="stylesheet" type="text/css" href="style.css">
<?php include 'link.php'?>
<div style="margin-top: 30px">
</div>
<center><h1 style="color: orange; background-color: green" class="container shadow"> Delete candidate!!  </h1></center>
<?php
include "connection.php";
$member = mysqli_query($con, 'SELECT * FROM languages' );
?>

<?php
if(isset($_SESSION['success']) && $_SESSION['success']!='')
{
	echo "<h2>".$_SESSION['success'].'</h2>';
	unset($_SESSION['success']);
}
if(isset($_SESSION['status']) && $_SESSION['status']!='')
{
	echo "<h2>".$_SESSION['status'].'</h2>';
	unset($_SESSION['status']);

}
?>

<div style="margin-top: 80px">
	
</div>

<table class="table table-bordered container shadow"  cellspacing="0" border="1" style="width: 70%; margin-left: 230px;border: 3px solid black ; text-align: center;"> 
	<thead>
		<tr>
			<th style="color: #4682B4; border: 3px solid black">id</th>
			<th style="color: #4682B4; border: 3px solid black">name</th>
			<th style="color: #4682B4; border: 3px solid black">about</th>
			<th style="color: #4682B4; border: 3px solid black">vote</th>
			
			<th style="color: #4682B4; border: 3px solid black">delete</th>
		</tr>
	</thead>
	
	<tbody>
	<?php
	if (mysqli_num_rows($member)> 0 ) {
	while($row=mysqli_fetch_assoc($member))
	{
	?>
	<tr>
		<td style=" border: 3px solid black"> <?php echo $row['lan_id']; ?> </td>
		<td style=" border: 3px solid black"> <?php echo $row['fullname']; ?> </td>
		<td style=" border: 3px solid black"> <?php echo $row['about']; ?> </td>
		<td style=" border: 3px solid black"> <?php echo $row['votecount']; ?> </td>
	<td style= "border: 3px solid black">
		<form action="code.php" method="post">
			<input type="hidden" name="delete_id" value="<?php echo $row['lan_id'];?>">
			<button type="submit" name="delete_btn" class="btn" style=" color: #800000	; background-color:#FA8072;  ">delete</button>
			
		</form>
	</td>
	</tr>

<?php
	}
}
?>
</tbody>
</table>
<a href="adminmainpage.php" class="btn btn-danger" style="margin-left:100px; padding: 10px 10px;
			border-radius: 20%; left: 600px;top :190px;position: relative; "> <h4>BACK</h4></a>
</div>