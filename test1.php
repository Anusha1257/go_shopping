<?php
	$conn = mysqli_connect("localhost","root", "", "mydb") or die("Failed to connect tp");
	
	$val = mysqli_query($conn,'select 1 from clothes LIMIT 1');

if($val == FALSE)
{

	$sql="CREATE TABLE clothes(
id INT(6)  PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(30) ,
image MEDIUMBLOB,
price int(11))";
mysqli_query($conn,$sql);

$sql1="INSERT INTO clothes(name, image, price) VALUES ('tshirt','tshirt1.jpg',500)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('tshirt','tshirt2.jpg',800)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('tshirt','tshirt3.jpg',900)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('tshirt','tshirt5.jpg',700)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('suit','suit1.jpg',1600)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('suit','suit2.jpg',1200)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('suit','suit3.jpg',1500)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('suit','suit6.jpg',2000)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Jacket','jacket1.jpg',500)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Jacket','jacket2.jpg',900)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Jacket','jacket3.jpg',800)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Jacket','jacket4.jpg',600)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Blazer','blazer1.jpg',700)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Blazer','blazer2.jpg',900)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Blazer','blazer3.jpg',800)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Blazer','blazer4.jpg',700)";
mysqli_query($conn,$sql1);

}

	
?>