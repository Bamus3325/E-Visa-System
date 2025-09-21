<?php
	session_start();
?>
<html>
	<head>
		<title>
			E-Visa
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body background="images/shutterstock_1.jpg">
		<img class="logo" src="images/shutterstock_22.png"/> 
		<h1 id="title">
			ELECTRONIC VISA
		</h1>
		<div>
			<ul>
				<li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Apply Visa</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Apply Visa</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Apply Visa</a>";
						}
					?>
				</li>
				<!-- <li><a href="index.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li> -->
				<li><a href="contact/contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
					?>
				</li>
			</ul>
		</div>
		<div class="container">
			<div class="welcome_text">Welcome! </div>
			<!-- <img src="images/shutterstock_1.jpg" width=100%> -->
			
		</div>
		<p style="font-weight: bold; margin-top: 100px; text-align: center; font-size: 40px; font-family: arial black;">
			DESIGN AND IMPLEMENTATION OF AN E-Visa</p>
			<h3 style="text-align: center;">By<h3>
		<!--check out addling local host in links and other places

			shift login/logout buttons to right side
		-->
		
	</body>
</html>