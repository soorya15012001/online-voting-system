
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include 'link.php'?>
	
</head>
<body class="bg ">
	<div class="background">
	<div class="container shadow" style="margin-top: 50px; ">
		<div class ="heading text-center text-uppercase text-black">
			<h1 style="color: green">ADMIN LOGIN PAGE</h1>
		</div>
		<div class="container row" style="margin-left: 450px;margin-top: 300px">
			<div class="admin-form">
				<form action="logincheck.php" method="POST" >
					<div class="form-group">
						<label style="color: orange ;font-weight: bold">EMAIL ID</label>
						<input type="text" name="user" value="" class="form-control">
					</div>
					<div class="form-group">
						<label style="color: orange ;font-weight: bold">Password</label>
						<input type="password" name="pass" value="" class="form-control">
					</div>
					<input type="submit" class="btn btn-success" name="submit" style="margin-left: 50px">
				</form>
			</div>
		</div>
	</div>
</div>
</header>
</body>
</html>