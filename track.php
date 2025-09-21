<?php
	session_start();
?>
<html>
	<head>
		<title>
			Track Visa
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 60px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/shutterstock_22.jpg"/> 
		<h1 id="title">
		ELECTRONIC VISA
		</h1>
		<div>
			<ul>
				<li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Apply Visa</a></li>
				<!-- <li><a href="index.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li> -->
				<li><a href="contact/contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
			</ul>
		</div>
		<br>
		<br>
		<br>
		<form class="float_form" action="" method="POST">
			<fieldset>
				<legend>Track Visa:-</legend><br>
				<!-- <strong>Username:</strong><br>
				<input type="text" name="username" placeholder="Enter your Username" required><br><br> -->
                <strong>Track ID:</strong><br>
				<input type="text" name="trackid" placeholder="Enter your TrackID" required><br><br>
				
				<input type="submit" name="submit" value="Track">
			</fieldset>
			
		</form>
        <?php
        if (isset($_POST['submit'])) {
            include 'connect.php';
            // $username = mysqli_real_escape_string($conn, $_POST['username']);
            $trackid = mysqli_real_escape_string($conn, $_POST['trackid']);

            $sql = "SELECT * FROM users WHERE trackid = '$trackid'";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($query);

            if ($ro = mysqli_num_rows($query) > 0) {
                if ($row['sts'] == 0) {
                    echo "<strong><center>Dear".' '.$row['sname'].' '.$row['oname'].' '."your Visa Processing is still in Processed</strong></center>";
					}elseif ($row['sts'] == 1) {
                        echo "<strong><center>Congratulations!!! Dear".' '.$row['sname'].' '.$row['oname'].' '."your Visa Processing has been Approved</strong></center>";

                    }else {
                        echo "<strong><center>Dear".' '.$row['sname'].' '.$row['oname'].' '."your Visa Processing is Denied</strong></center>";

                    }
            }else{
                echo "<strong><center><font color='red'>Username or TrackID NOT Exist<font></center></strong>";
            }
        }
        ?>
		
	</body>
	
</html>