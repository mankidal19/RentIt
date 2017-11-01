<html>
	<head></head>
	<body>
		<script>
			function repeat()
			{
				alert("User Message has used");
			}
			function success()
			{
				alert("Register Success");
			}
		<?php
		    include ("config.php");
			$userName = $_POST['username'];
			$gender = $_POST['gender'];
			$date = $_POST['gender'];
			$password = $_POST['password'];
			$email = $_POST['EMail'];
			$phone = $_POST['Phone'];
			$level = 'user';

			$checkEmail = "select * from user where email='$email'";
			$check = mysqli_query($conn,$checkEmail) or trigger_error($conn->error."[$checkEmail]");
			$existsEmail = mysqli_num_rows($check);
			if($existsEmail==1 || $existsEmail>1)
			{
			    ?>
			    window.onLoad=repeat;	
				<?php
			}
			  	// $sql = "insert into user(username, gender, birthDate,password, email, phone, level) values ('admin','male','123','123456','email','0123456789','admin')" ; 
			  	// $sql2 = "insert into user(username, gender, birthDate, password, email, phone, level) values ('user1','male','123','123456','email','0123456789','user')" ;
			    // $result=mysqli_query($conn,$sql) or trigger_error($conn->error."[$sql]");
			    // $result2=mysqli_query($conn,$sql2) or trigger_error($conn->error."[$sql]");
			else
			{
			    $sql = "insert into user(username, gender,date, password, email, phone, level) values ('$userName','$gender','$date',$password','$email','$phone','$level')" ;
			    $result=mysqli_query($conn,$sql) or trigger_error($conn->error."[$sql]");
			    if($result)
			    {
			    	header('Location:..\WEB-INF\LoginSuccess.html');
			    }
			    else
			    {
			    	?>
			    	window.onload=success;
			    	<?php
			    }
			}
			mysqli_close($conn);
		?>
		</script>
	</body>
</html>
