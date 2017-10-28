<?php
 
	  include('config.php');


$sql = "CREATE TABLE user
        (
		userID int(11) NOT NULL AUTO_INCREMENT,
 		username varchar(100) NOT NULL,
 		password varchar(12) NOT NULL,
 		email varchar(50) NOT NULL,
 		telNo varchar(15) NOT NULL,
		level varchar(20) NOT NULL,

		PRIMARY KEY (userID)
        )";

$result=mysqli_query($conn,$sql) or trigger_error($conn->error."[$sql]");

mysqli_close($conn);
?>