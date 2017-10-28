	<HTML>
	<HEAD>
	<TITLE>Form Handler for user_form</TITLE>
	<link rel="stylesheet" type="text/css" href=""/>
	</HEAD>
	<BODY>

	 <?php
//            $usernme=$_POST['userName']
//	    $firstName =$_POST['firstName'];
//	    $lastName = $_POST["lastName"];
//	    $password = $_POST["password"];
//	    $jobPosition=$_POST['jobPosition'];
//	    $address=$_POST["address"];
//	    $email = $_POST["email"];
//	    $telNo = $_POST["telNo"];
//	    $title = $_POST['title'];

	    include ("config.php");

//	    $sql = "insert into rentalmaster(username,firstName,lastName, password, email,jobPosition,address, telNo) values($username,$firstName,$lastName, $password, $email,$jobPosition, $address, $telNo)";

            $sql = "insert into rentalmaster(username,firstName,lastName, password, email,jobPosition,address, telNo, title) values('test','first','last','123456','123@gmail.com','jobPosition','address','0123456789','title')";

	    $result=mysqli_query($conn,$sql) or trigger_error($conn->error."[$sql]");

	    mysqli_close($conn);
	 ?>
	 <!-- 	 if success direct to other page
 -->



	</BODY>
	</HTML>