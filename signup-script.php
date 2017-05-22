<?php

$con = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('vtc');

$name = $_POST['name'];
$name = mysql_real_escape_string($name);
$name = strip_tags($name);

$email = $_POST['e-mail'];
$email = mysql_real_escape_string($email);
$email = strip_tags($email);

$password = $_POST['password'];
$password = mysql_real_escape_string($password);
$password = strip_tags($password);
$password = MD5($password);

$contact = $_POST['contact'];
$contact = mysql_real_escape_string($contact);
$contact = strip_tags($contact);

$city = $_POST['city'];
$city = mysql_real_escape_string($city);
$city = strip_tags($city);

$address = $_POST['address'];
$address = mysql_real_escape_string($address);
$address = strip_tags($address);


$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_num = "/^[789][0-9]{9}$/";
$query = "SELECT * FROM persons WHERE Email='$email'";
$result = mysql_query($query);
$num = mysql_num_rows($result);

if ($num != 0)
	{
	$m = "<span style='color:red;'>Email Already Exists</span>";
	header('location: login.php?m1='.$m);
	}
else if (!preg_match($regex_email, $email))
	{
	$m = "<span style='color: red;'>Not a valid Email Id</span>";
	header('location: login.php?m1='.$m);
	}
else if (!preg_match($regex_num, $contact))
	{
	$m = "<span style='color: red;'>Not a valid phone number</span>";
	header('location: login.php?m2='.$m);
	}
else
	{
	$query = "INSERT INTO persons
	(Name, Email, Password, Contact, City, Address)
	VALUES
	('$name','$email','$password','$contact','$city','$address')";
	mysql_query($query);
	session_start();
	$_SESSION['email']=$email;
	header('location: home.php');
	}
?>