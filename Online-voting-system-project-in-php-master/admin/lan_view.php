<style>
div.background {
  
  background:   linear-gradient(to right, #70e1f5, #ffd194);
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
<center><h1 style="color: orange; background-color: green" class="container shadow"> Voting So Far  </h1></center>
<?php
include "connection.php";
$member = mysqli_query($con, 'SELECT * FROM languages' );
if (mysqli_num_rows($member)== 0 ) {
	echo '<font color="red">No results found</font>';
}
else {
	echo '<table
	class="table table-bordered container shadow"  cellspacing="0" border="1" style="width: 70%; margin-left: 230px;border: 3px solid black ; text-align: center; margin-top: 80px"><tr>
<td style="color: #4682B4; border: 3px solid black;font-weight: bold ">ID</td>		
<td style="color: #4682B4; border: 3px solid black; font-weight: bold">CANDIDATES</td>
<td style="color: #4682B4; border: 3px solid black; font-weight: bold">PARTY</td>
<td style="color: #4682B4; border: 3px solid black; font-weight: bold">VOTE</td>
</tr>';
while($mb=mysqli_fetch_object($member))
		{	
			$id=$mb->lan_id;
			$name=$mb->fullname;
			$about=$mb->about;
			$vote=$mb->votecount;
			echo '<tr >';
	echo '<td style=" border: 3px solid black">'.$id.'</td>';		
	echo '<td style=" border: 3px solid black">'.$name.'</td>';
	echo '<td style=" border: 3px solid black">'.$about.'</td>';
	echo '<td style=" border: 3px solid black">'.$vote.'</td>';
	echo "</tr>";
		}
		echo'</table>';
	}
?>
<a href="adminmainpage.php" class="btn btn-danger" style="margin-left:100px; padding: 10px 10px;
			border-radius: 20%; left: 600px;top :200px;position: relative; "> <h4>BACK</h4></a>
</div>