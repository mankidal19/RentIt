<?php
	include('config.php');
	$sql1 = "insert into rentalmaster(username,firstName,lastName, password, email,address1, address2, postcode,country,phone,state,city,cemail,cphone,title,gender,position,establishDate) values('test','first','last','12345678','rentalmaster@gmail.com','address1','address2','postcode','country','0123546789','state','city','cemail','0123456789','title','gender','position','2017-10-29')";
	$sql2 = "insert into user(username, gender, birthDate,password, email, phone, level) values ('admin','male','123','123456','admin@gmail.com','0123456789','admin')" ; 
	$sql3 = "insert into user(username, gender, birthDate, password, email, phone, level) values ('user1','male','123','123456','user@gmail.com','0123456789','user')" ;
	$result1=mysqli_query($conn,$sql1) or trigger_error($conn->error."[$sql]");
	$result2=mysqli_query($conn,$sql2) or trigger_error($conn->error."[$sql]");
	$result3=mysqli_query($conn,$sql3) or trigger_error($conn->error."[$sql]");
?>