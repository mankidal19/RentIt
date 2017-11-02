<html>
	<head></head>	
	<body>
		<script>
			function repeat()
	    	{
	    		alert("Company Email or User Email has used");
	    	}
	    	function success()
	    	{
	    		alert("Register Success");
	    		 window.location.replace("../WEB-INF/index.html");
	    	}
	    </script>
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

			    $checkEmail = "select * from rentalmaster where cemail='$cemail' or email='$email'";
			    $check = mysqli_query($conn,$checkEmail) or trigger_error($conn->error."[$checkEmail]");
			    $existsEmail = mysqli_num_rows($check);
			    if($existsEmail==1 || $existsEmail>1)
			    {
			    	?>
			    	<script>window.onload=repeat;</script>
			    	<?php
			    }
			    else
			    {
			    	$sql = "insert into rentalmaster(username,firstName,lastName, password, email, address1, address2, postcode, country, phone, state, city, cemail, cphone, title, gender, position, establishDate) values('$username','$firstName','$lastName', '$password', '$email', '$address1', '$address2', '$postcode', '$country', '$phone', '$state', '$city', '$cemail', '$cphone', '$title', '$gender', '$position', '$establishDate')";
			    	$result=mysqli_query($conn,$sql) or trigger_error($conn->error."[$sql]");
			    	if($result)
			    	{
			    		?>
			    		<script>window.onload=success()</script>
			    		<?php
			    	}
			    }

			    mysqli_close($conn);
			 ?>
	</body>
</html>