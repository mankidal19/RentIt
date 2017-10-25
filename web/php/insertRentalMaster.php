	<HTML>
	<HEAD>
	<TITLE>Form Handler for user_form</TITLE>
	<link rel="stylesheet" type="text/css" href=""/>
	</HEAD>
	<BODY>

	 <?php
	    $firstName = $_POST["firstname"];
	    $lastName = $_POST["lastname"];
	    $password = $_POST["password"];
	    $jobPosition=$_POST['jobPosition'];
	    $address=$_POST["address"]
	    $email = $_POST["email"];
	    $telNo = $_POST["telNo"];

	    include ("config.php");

	    $sql = "insert into user(firstName,lastName, password, email,jobPosition,address, telNo) values($firstName,$lastName, $password, $email,$jobPosition, $address, $telNo)" 

	    $result=mysqli_query($conn,$sql) or trigger_error($conn->error."[$sql]");

	    mysqli_close($conn);
	 ?>
	 <!-- 	 if success direct to other page
 -->



	</BODY>
	</HTML>