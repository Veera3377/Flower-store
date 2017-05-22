<?php

//Check create_database.php code before you this.
//Run this script to generate the required tables in your local computer (WampServer). 
//This script only needs to be run once. Then, you can use these tables by simply connecting to the database.

$con = mysqli_connect("localhost", "root", "","vtc");
$db = mysqli_select_db($con,"vtcc");

if (mysqli_query($con,"CREATE TABLE persons (PID INT NOT NULL AUTO_INCREMENT PRIMARY KEY, Name CHAR(50) NOT NULL,Email CHAR(50) NOT NULL UNIQUE,Password CHAR(50) NOT NULL,Contact CHAR(50) NOT NULL,City CHAR(50) NOT NULL,Address CHAR(50) NOT NULL)"))
	echo "persons table successfully created"."<br>";
else
	echo "Error in creating Persons table: ".mysqli_error($con)."<br>";


if (mysqli_query($con,"CREATE TABLE flowers (PID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,PRICE INT(10) NOT NULL)"))
	echo "Flowers table successfully created"."<br>";
else
	echo "Error in creating Flowers table: ".mysqli_error($con)."<br>";

$query = "INSERT INTO flowers VALUES (1,500)";
mysqli_query($con, $query);
$query = "INSERT INTO flowers VALUES (2,600)";
mysqli_query($con, $query);
$query = "INSERT INTO flowers VALUES (3,700)";
mysqli_query($con, $query);
$query = "INSERT INTO flowers VALUES (4,200)";
mysqli_query($con, $query);
$query = "INSERT INTO flowers VALUES (5,100)";
mysqli_query($con, $query);
$query = "INSERT INTO flowers VALUES (6,100)";
mysqli_query($con, $query);
$query = "INSERT INTO flowers VALUES (7,1000)";
mysqli_query($con, $query);
$query = "INSERT INTO flowers VALUES (8,750)";
mysqli_query($con, $query);
$query = "INSERT INTO flowers VALUES (9,850)";
mysqli_query($con, $query);
$query = "INSERT INTO flowers VALUES (10,1100)";
mysqli_query($con, $query);
$query = "INSERT INTO flowers VALUES (11,250)";
mysqli_query($con, $query);
$query = "INSERT INTO flowers VALUES (12,320)";
mysqli_query($con, $query);

printf ("New Record has id %d.\n", mysqli_insert_id($con));


mysqli_close($con);
?>

