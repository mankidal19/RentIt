<?php 
        // Start up your PHP Session
        session_start();
        include('config.php');
        if(isset($_POST['emailInput']) && $_POST['emailInput'])
        {
                $email=$_POST['emailInput'];
                $password=$_POST['passwordInput'];
                $level=$_POST['usertype'];
        }
        else
        {
                echo("Email and password is not set");
        }

        if($level=="RentalMaster")
        {
                $sql="SELECT * FROM rentalmaster WHERE email='$email' and password='$password'";
        }
        else if($level=="Customer")
        {
                $sql="SELECT * FROM user WHERE email='$email' and password='$password'";
        }
        else if($level=='Admin')
        {
                $sql="SELECT * FROM user WHERE email='$email' and password='$password' and level='admin'";
        }
        // username and password sent from form

        $result=mysqli_query($conn,$sql) or trigger_error($conn->error."[$sql]");
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        printf ($row["level"], $row["username"]);

                if($count==1)
                {
                        $_SESSION["Login"] = "YES";
                        $_SESSION['USER'] = $username;
                        $_SESSION['LEVEL'] =$level;
                        $expire = time()+60*60*24*30;
                        setcookie("userID", $userID, $expire);
                        if($_SESSION["LEVEL"] == "admin"){
                                header("Location: ../WEB-INF/index.html");
                        }
                    
                        else if($_SESSION["LEVEL"] == "User"){
                                header("Location: index.html");
                        }
                }           
                else{
                        $_SESSION["Login"] = "NO";
                        echo "<h1>User are not found </h1>";
                        echo "<p><a href='document.php'>Link to protected file</a></p>";
                }

?>
		 
	  

 
