<script>
    function failed()
    {
        alert("Login failed due to incorrect password or email");
         window.location.replace("../WEB-INF/index.html");
    }
</script>

<?php 
        // Start up your PHP Session
        session_start();
        include('config.php');
        if(isset($_POST['emailInput']) && $_POST['passwordInput'])
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
                $sql="SELECT * FROM rentalmaster WHERE cemail='$email' and password='$password'";
        }
        else if($level=="Customer")
        {
                $sql="SELECT * FROM user WHERE email='$email' and password='$password'";
        }
        else if($level=="Admin")
        {
                $sql="SELECT * FROM user WHERE email='$email' and password='$password'";
        }
        // username and password sent from form

        $result=mysqli_query($conn,$sql) or trigger_error($conn->error."[$sql]");
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        $username= $row["username"];
        $userID=$row['userID'];
        $level=$row['level'];

        if($count==1)
        {
                $_SESSION["Login"] = "YES";
                $_SESSION['USER'] = $username;
                $_SESSION['LEVEL'] =$level;
                $expire = time()+60*60*24*30;
                setcookie("userID", $userID, $expire);
                if($_SESSION["LEVEL"] == "admin")
                {
                        header("Location: ../WEB-INF/admin-main.php");
                }    
                else if($_SESSION["LEVEL"] == "user")
                {
                        header("Location: ../WEB-INF/cust-main.php");
                }
                else if($_SESSION["LEVEL"] == "RentalMaster")
                {
                        header("Location:../WEB-INF/rentalMaster-main.php");
                }
                
         }           
        else
        {
            $_SESSION["Login"] = "NO";
            ?>
            <script>window.onload=failed()</script>
            <?php
        }
?>
		 
	  

 
