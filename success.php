<!DOCTYPE HTML>
<?php 
error_reporting(0);
session_start();
if (!isset($_SESSION['email']))
	header('location: login.php');
?>
<?php
$to = $_SESSION['email'];
$subject = "Test mail";
$message = "Your order has been confirmed. Your Flowers will be delivered soon !";
mail($to, $subject, $message, "");
// Mail to the Flowershop owner
$to_owner = "owner@Flowershop.com";
$subject_owner = "New Order";
$message_owner = "New Order made by $to.<br>";
$message_owner = $message_owner.$_POST['flowerid'];
mail($to_owner, $subject_owner, $message_owner, "");
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
				<p style="font-family:candara; font-size: 20px;">Thank you for ordering from Petals.<br>The Flowers shall be delivered to you shortly.</p>
				<p style="font-family:candara; font-size: 20px;">Order some more Flowers <a href="home.php">here</a>.</p>
			</div>
			
			<hr size="2" color="c0c0c0" width="95%" style="clear: both;">
			<br>
		</div>
	</body>
</html>