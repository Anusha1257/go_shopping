<?php
	$conn = mysqli_connect("localhost","root", "", "mydb") or die("Failed to connect tp");
	
	$val = mysqli_query($conn,'select 1 from kid LIMIT 1');

if($val == FALSE)
{

	$sql="CREATE TABLE kid(
id INT(6)  PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(30) ,
image MEDIUMBLOB,
price int(11))";
mysqli_query($conn,$sql);

$sql1="INSERT INTO clothes(name, image, price) VALUES ('Jacket','jacket11.jpg',500)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Jacket','jacket12.jpg',800)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Jacket','jacket13.jpg',900)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Jacket','jacket14.jpg',700)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Sherwani','sherwani3.jpg',2000)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Sherwani','sherwani4.jpg',2100)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Sherwani','sherwani5.jpg',1950)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Sherwani','sherwani7.jpg',2120)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Top','top1.jpg',600)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Top','top2.jpg',700)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Top','top3.jpg',800)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Top','top4.jpg',900)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Dress','dress1.jpg',1100)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Dress','dress2.jpg',1500)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Dress','dress3.jpg',1200)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Dress','dress4.jpg',800)";
mysqli_query($conn,$sql1);

}

	
?>