<?php
	$conn = mysqli_connect("localhost","root", "", "mydb") or die("Failed to connect tp");
	
	$val = mysqli_query($conn,'select 1 from woman LIMIT 1');

if($val == FALSE)
{

	$sql="CREATE TABLE woman(
id INT(6)  PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(30) ,
image MEDIUMBLOB,
price int(11))";
mysqli_query($conn,$sql);

$sql1="INSERT INTO clothes(name, image, price) VALUES ('Top','top11.jpg',700)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Top','top12.jpg',800)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Top','top13.jpg',900)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Top','top14.jpg',700)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Kurta','kurta1.jpg'1600,)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Kurta','kurta2.jpg',1200)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Kurta','kurta3.jpg',1500)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Kurta','kurta6.jpg',2000)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Jacket','jacket6.jpg',600)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Jacket','jacket7.jpg',900)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Jacket','jacket8.jpg',800)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Jacket','jacket9.jpg',900)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Shrug','shrug1.jpg',1000)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Shrug','shrug2.jpg',900)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Shrug','shrug3.jpg',800)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO clothes(name, image, price) VALUES ('Shrug','shrug4.jpg',700)";
mysqli_query($conn,$sql1);

}

	
?>