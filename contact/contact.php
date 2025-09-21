<?php include 'inc/head.php'; ?>
<body id="single">
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header>
<?php
include("header.php");
?>
</header>

<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container clearfix">
		<div class="zerogrid">
			<div id="main-content" class="col-2-3">
				<div class="wrap-content">
					<div class="contact">
					
						<h2>Contact</h2>
						<!--Warning-->
						<center><?php echo "<span style='color:green; font-size: 35px; line-height: 40px; magin: 10px;'>Message Us Here.</span>";?></center>
						<?php
// if (isset($_POST['submit'])){
// $name=$_POST['name'];
// $email=$_POST['email'];
// $message=$_POST['message'];
// include("conn.php");
// mysql_query("INSERT INTO contact (name,email,message) VALUES('$name','$email','$message')");
// echo "<center><span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span></center>";
// }
?>
						<!---->
						<div id="contact_form">
							<form name="form1" id="ff" method="post" action="contact.php">
								<label>
								<span>Enter your name:</span>
								<input type="text"  name="name" id="name" required>
								</label>
								<label>
								<span>Enter your email:</span>
								<input type="email"  name="email" id="email" required>
								</label>
								<label>
								<span>Your message here:</span>
								<textarea name="message" id="message"></textarea>
								</label>
								<center><input class="sendButton" type="submit" name="submit" value="Submit"></center>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="sidebar" class="col-1-3">
				<div class="wrap-sidebar">
					<!---- Start Widget ---->
					<div class="widget wid-about">
						<div class="wid-header">
							<h5>About Us</h5>
						</div>
						<div class="wid-content">
							<img src="images/headlogo.png"/>
							<p>Fatest growing Polytechnic in Nigeria.</p>
						</div>
					</div>
					<div class="widget wid-archive">
						<div class="wid-header">
							<h5>Archives</h5>
						</div>
						<div class="wid-content">
							<select>
							    <option value="audi" selected>Select Month</option>
								<option value="volvo">March 2021</option>
								<option value="saab">Febuary 2022</option>
							</select>
						</div>
					</div>
					<!---- Start Widget ---->
				</div>
			</div>
		</div>	
	</div>
</section>

<!--///////////////////////////////////Footer-->
<footer>
	<?php
include("footer.php");
?>
</footer>


</div>
</body></html>