<?php
 
	  include('config.php');


$sql = "CREATE TABLE rentalmaster
        (
		userID int(11) NOT NULL AUTO_INCREMENT,
		userName varchar(30) NOT NULL,
 		firstName varchar(100) NOT NULL,
 		lastName varchar(100) NOT NULL,
 		jobPosition varchar(100) NOT NULL,
 		password varchar(12) NOT NULL,
 		email varchar(50) NOT NULL,
 		address varchar(250)NOT NULL,
 		telNo varchar(15) NOT NULL,
 		title varchar(3) NOT NULL,

		PRIMARY KEY (userID)
        )";

$result=mysqli_query($conn,$sql) or trigger_error($conn->error."[$sql]");

mysqli_close($conn);
?>