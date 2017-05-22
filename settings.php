<!DOCTYPE HTML>
<?php 
error_reporting(0);
session_start();
if (!isset($_SESSION['email']))
	header('location: login.php');

?>

<html>
	<head>
	<title>Flower Store | Thank You</title>
	
	</head>
	<br>
	<body style="background-color: #17375d;">
		<center>
		<div style="background-color: #ffffff; width: 850px;font-family: copperplate gothic light;">
			<!-- Code for Header-->
			<div style="width: 840px;">
				<div style="float: left;margin: 20px 0 0 20px;">
						<a href="index.php"><img src="images/logo.png"></a>
				</div>
				
				<div style="width:80px; float: right; height: 25px; margin: 40px 35px 30px 0px; padding-top:5px; background-color: #cd15a6;border-radius: 5px;">
					<a href="logout-script.php" style="color: #ffffff; font-size: 0.8em; text-decoration: none;">Logout!</a>
				</div>
				<div style="width:80px; float: right; height: 25px; margin: 80px -80px 30px 0px; padding-top:5px; background-color: #cd15a6;border-radius: 5px;">
					<a href="settings.php" style="color: #ffffff; font-size: 0.8em; text-decoration: none;">Settings!</a>
				</div>
			</div>
			<hr size="2" color="#cd15a6" width="95%" style="clear: both;">
			<br>
			<div style="min-height: 200px;width:600px;">
				<form action="settings-script.php" method="POST">
				<table style="font-family:candara;">
					<tr>
						<td colspan="2">
							Change password:
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<br>
						</td>
					</tr>
					<tr>
						<td align="right" width="200" style="padding-right:5px">Old Password:</td>
						<td align="left">
							<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="password" name="old-password" placeholder="Old Password" required = "true"/>
						</td>
					</tr>
					<tr>
						<td align="right" width="200" style="padding-right:5px">New Password:</td>
						<td align="left">
							<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="password" name="password" placeholder="New Password" required = "true"/>
						</td>
					</tr>
					<tr>
						<td align="right" width="200" style="padding-right:5px">Retype New Password:</td>
						<td align="left">
							<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="password" name="password1" placeholder="Retype New Password" required = "true"/>
						</td>
					</tr>
					<tr>
						<td align="left" style="color: red;">
							<?php
								echo "<b>".$_GET['error']."</b>";
							?>
						</td>
						<td>
							<input type="submit" name="submit" value = "Submit!" style=" background:#cd15a6;border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 100px; border-radius:5px; position:relative; left: 80px; top: 10px;">
						</td>
					</tr>
				</table>
				</form>	
			</div>
			
			<hr size="2" color="c0c0c0" width="95%" style="clear: both;">
			<br>
		</div>
	</body>
</html>