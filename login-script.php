<?php
$con = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('vtc');


$email = $_POST['e-mail'];
$email = mysql_real_escape_string($email);
$email = strip_tags($email);

$password = $_POST['password'];
$password = mysql_real_escape_string($password);
$password = strip_tags($password);
$password = MD5($password);

$query = "SELECT Email, Password FROM persons WHERE Email='$email'";
$result = mysql_query($query);
$num = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($num == 0)
	{
	$m = "<span style='color: red'>Email Doesn't Exist</span>";
	header('location: login.php?ml1='.$m);
	}
else
	if ($password == $row['Password'])
		{
		session_start();
		$_SESSION['email']=$row['Email'];
		header('location: home.php');		
		}
	else
		{
		$m = "<span style='color: red'>Incorrect Password</span>";
		header('location: login.php?ml2='.$m);
		}



?>