<!DOCTYPE HTML>
<?php 
session_start();
if (isset($_SESSION['email']))
	header('location: home.php');

error_reporting(0);
?>
<html>
	<head>
	<title>Flower Store | Login</title>
	
	</head>
	<br>
	<body style="background-color: #17375d;">
		<center>
			<div style="background-color: #ffffff; width: 850px;font-family: copperplate gothic light;" >
				<!-- Code for Header-->
				<div style="width: 850px;height: 120px;font-size: 1.5em;">
					<div style="float: left;margin: 10px 0 0 15px;">
						<a href="index.php"><img src="images/logo.png" ></a>
					</div>
				</div>
				<hr size="2" color="#cd15a6" width="95%" style="clear: both;">
				<div style="width:720px;height: 360px; padding-top:20px;">
				<form action="signup-script.php" method="POST">
					<div style="background-color:#EEEEEE; width:310px; float: left;padding-right:20px; height:330px; border-radius:5px;">
						<h2 style="color:#cd15a6; text-align: right;">SIGNUP</h2>
						<table border="0" align="center" width = "200" style="font-family:georgia;font-size:15px;">
							<tr>
								<td align="right" width="120" style="padding-right:5px">Name:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="name" placeholder="Your Name" required = "true" />
								</td>
							</tr>
							<tr>
								<td align="right" width="120" style="padding-right:5px">E-mail:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="e-mail" placeholder="E-mail" required = "true" value=""/><?php echo $_GET['m1'];?>
								</td>
							</tr>
							<tr>
								<td align="right" width="120" style="padding-right:5px">Password:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="password" name="password" placeholder="Password" required = "true"/>
								</td>
							</tr>
							<tr>
								<td align="right" width="120" style="padding-right:5px">Contact:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="contact" placeholder="Ten digit mobile number" required = "true" /><?php echo $_GET['m2'];?>
								</td>
							</tr>
							<tr>
								<td align="right" width="120" style="padding-right:5px">City:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="city" placeholder="City" required = "true"/>
									
								</td>
							</tr>
							<tr>
								<td align="right" width="120" style="padding-right:5px">Address:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="address" placeholder="Address" required = "true"/>
									
								</td>
							</tr>
							<tr>
								<td colspan = "2">
									<input type="submit" name="submit" value = "Sign Up!" style=" background:#cd15a6;border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 100px; border-radius:5px; position:relative; left: 150px; top: 10px;">
								</td>
							</tr>
						</table>
					</div>
				</form>
				
				<form action="login-script.php" method="POST">
					<div style="background-color: #EEEEEE;float: right;width: 310px;padding-right: 20px;margin-right: 20px; border-radius:5px;">
						<h2 style="color:#cd15a6; text-align: right;">LOGIN</h2>
						<table border="0" align="center" width = "200" style="font-family:georgia;font-size:15px;">
							<tr>
								<td align="right" width="120" style="padding-right:5px">E-mail:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="e-mail" placeholder="E-mail" required = "true"/><?php echo $_GET['ml1'];?>
								</td>
							</tr>
							<tr>
								<td align="right" width="120" style="padding-right:5px">Password:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="password" name="password" placeholder="Password" required = "true"/><?php echo $_GET['ml2'];?>
								</td>
							</tr>
							<tr>
								<td colspan = "2">
									<input type="submit" name="submit" value = "Login!" style=" background:#cd15a6;border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 100px; border-radius:5px; position:relative; left: 150px; top: 10px;">
								</td>
							</tr>
							 <tr>
								<td colspan = "2">
									<br>
								</td>
							</tr>
							 <tr>
								<td colspan = "2" align="left" style="padding-left:10px;padding-top:10px;">
									<a href="#" style="color:black;font-family:georgia;font-size:15px;">Forgot Password</a>
								</td>
							</tr>
						</table>
						<br>
					</div>
					</form>
				</div>
			<hr size="2" color="c0c0c0" width="95%" style="clear: both;">
			<br>
			</div>
		</center>

	</body>
</html>