<!DOCTYPE HTML>
<?php 
session_start();
if (!isset($_SESSION['email']))
	header('location: login.php');
?>


<html>
	<head>
	<title>Flower Store | Thank You</title>
	
	</head>
	<form action="success.php" method="POST">
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
				<br><font size="5em;">YOUR ORDER</font><hr width="20%" style="margin-top: 0px;"size="2" color="#cd15a6" style="clear: both;">
				<div style="min-height: 100px;">
					<p style="font-family:candara;font-size: 1em;">Please confirm that you wish to order the following items.</p>
					<table border="0" style="font-family:georgia;">
						<tr>
							<td style="font-size: 15px;border-right: 1pt solid #cccccc;border-bottom : 1pt solid #cccccc;padding: 5px;"><b>Item Number</b></td>
							<td style="padding: 5px;border-bottom: 1pt solid #cccccc;text-align:right;"><b>Cost</b></td>
						</tr>
						<?php
						if (!empty($_GET['flower']))
							{
							$ordered = $_GET['flower'];
							$totalprice = 0;
							$price = 0;
							$message = "Flower ID : ";
							if (empty($ordered))
								header('location: home.php');
							else							
								{
									for ($i=0; $i<count($ordered); $i++)
										{
										$id = $ordered[$i];
                                                                                //echo "$id";
										$message = $message.$id." ";
										$con = mysqli_connect("localhost", "root", "","vtc");
										$db = mysqli_select_db($con,"vtcc");
                                                                                //var_dump($db);
										$sql = "SELECT PID,PRICE FROM flowers where PID=$id";
										$result = mysqli_query($con,$sql);
										$row = $result->fetch_assoc();

        									$price=$row["PRICE"];
										$totalprice += $price;
                                                                                //var_dump($totalprice);
										echo "<tr>";
										echo "<td style=\"font-size: 15px;border-right: 1pt solid #cccccc;padding: 5px; \">#$id</td>";
										echo "<td style=\"padding: 5px; text-align:right;\">Rs $price</td>";
										echo "<tr>";
										}
									echo "<tr>";
									echo "<td style=\"font-size: 15px;border-right: 1pt solid #cccccc;padding: 5px; border-top: 1pt solid #cccccc;\">Total</td>";
									echo "<td style=\"padding: 5px;text-align:right;border-top: 1pt solid #cccccc;\">Rs $totalprice</td>";
								}
							}
						else
							header('location: home.php');
						?>
						
						
						
					</table>
					<input type="hidden" name="flowerid" value="<?php echo $message; ?>">
					<input type="submit" name="submit" value = "Confirm!" style=" background:#cd15a6;border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 100px; position: relative;top: 20px; left: 20px;border-radius:5px; ">
				</div>
				<br><br>
				<hr size="2" color="c0c0c0" width="95%" style="clear: both;">
				<br>
			</div>
		</body>
	</form>
</html>