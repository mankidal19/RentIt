	<HTML>
	<HEAD>
	<TITLE>Form Handler for user_form</TITLE>
	<link rel="stylesheet" type="text/css" href=""/>
	</HEAD>
	<BODY>

	 <?php
	    // $userName = $_POST["username"];
	    // $password = $_POST["password"];
	    // $email = $_POST["email"];
	    // $telNo = $_POST["telNo"];
	    // $level = 'user';

	    include ("config.php");

	    // $sql = "insert into user(username, password, email, telNo, level) values ('$userName','$password','$email','$telNo','$level')" ;
	  	// $sql = "insert into user(username, password, email, telNo, level) values ('admin','123456','email','0123456789','admin')" ; insert admin
	  	$sql = "insert into user(username, password, email, telNo, level) values ('user1','123456','email','0123456789','user')" ;
	    $result=mysqli_query($conn,$sql) or trigger_error($conn->error."[$sql]");

	    mysqli_close($conn);
	 ?>
<!-- 	 if success direct to other page
 -->


	</BODY>
	</HTML>