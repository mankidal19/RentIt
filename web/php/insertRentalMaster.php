	<?php
		include('config.php');
		
		if(isset($_POST['companyName']))
		{
			$username = $_POST['companyName'];
			$establishDate = $_POST['establishDate'];
			$address1 = $_POST['address1'];
			$address2 = $_POST['address2'];
			$postcode = $_POST['postcode'];
			$country = $_POST['country'];
			$state = $_POST['state'];
			$city = $_POST['city'];
			$cemail = $_POST['CEMail'];
			$cphone = $_POST['CPhone'];
			$title=$_POST['title'];
		    $firstName =$_POST['firstName'];
		    $lastName = $_POST["lastName"];
		    $gender =$_POST['gender'];
		    $position = $_POST['position'];
		    $email = $_POST['EMail'];
		    $phone = $_POST['Phone'];
		    $password = $_POST['password'];
		}

	    $checkEmail = "select * from rentalmaster where cemail='.$cemail.'";
	    $check = mysqli_query($conn,$checkEmail) or trigger_error($conn->error."[$checkEmail]");
	    $existsEmail = mysqli_num_rows($check);
	    if($existsEmail==1 || $existsEmail>1)
	    {
	    	?>
	    	<html>
	    	<head>
	    	</head>
	    	<body onLoad="repeat();">
	    		
	    	<script>
	    		function repeat()
	    		{
	    			alert("Company Message has used");
	    		}
	    	</script>
	    	</body>
	    	</html>

	    	<?php
	    }
	    else
	    {
	    	$sql = "insert into rentalmaster(username,firstName,lastName, password, email, address1, address2, postcode, country, phone, state, city, cemail, cphone, title, gender, position, establishDate) values('$username','$firstName','$lastName', '$password', '$email', '$address1', '$address2', '$postcode', '$country', '$phone', '$state', '$city', '$cemail', '$cphone', '$title', '$gender', '$position', '$establishDate')";
	    	$result=mysqli_query($conn,$sql) or trigger_error($conn->error."[$sql]");
	    }


            // $sql = "insert into rentalmaster(username,firstName,lastName, password, email,address1, address2, postcode,country,phone,state,city,cemail,cphone,title,gender,position,establishDate) values('test','first','last','12345678','rentalmaster@gmail.com','address1','address2','postcode','country','0123546789','state','city','cemail','0123456789','title','gender','position','2017-10-29')";


	    mysqli_close($conn);
	 ?>
	 <!-- 	 if success direct to other page
 -->



	</BODY>
	</HTML>