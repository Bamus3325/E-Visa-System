<?php
	session_start();
?>
<?php
$id = $_GET['stu'];

include 'connect.php';
$sql = "SELECT * FROM users WHERE id = '$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?>
<html>
	<head>
		<title>
			Apply visa
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
    			margin: 0px 127px
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			select {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 6.5px 75.5px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<?php
if (isset($_POST['submit'])) {
    // include 'connect.php';      

    $sname = mysqli_real_escape_string($conn, $_POST['sname']);
    $oname = mysqli_real_escape_string($conn, $_POST['oname']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $height = mysqli_real_escape_string($conn, $_POST['height']);
    $origin = mysqli_real_escape_string($conn, $_POST['origin']);
	$destination = mysqli_real_escape_string($conn, $_POST['destination']);
    $purpose = mysqli_real_escape_string($conn, $_POST['purpose']);
    $passid = mysqli_real_escape_string($conn, $_POST['passid']);
	$passidiss = mysqli_real_escape_string($conn, $_POST['passidiss']);
    $passidexp = mysqli_real_escape_string($conn, $_POST['passidexp']);
    $prof = mysqli_real_escape_string($conn, $_POST['prof']);

    $sql = "UPDATE users SET sname = '$sname',
                            oname = '$oname',
                            date = '$date',
                            status = '$status',
                            address = '$address',
                            phone = '$phone',
                            gender = '$gender',
                            height = '$height',
                            origin = '$origin',
                            destination = '$destination',
                            purpose = '$purpose',
                            passid = '$passid',
                            passidiss = '$passidiss',
                            passidexp = '$passidexp',
                            prof = '$prof'  WHERE id = '$id'";
                            
    $query =  mysqli_query($conn, $sql);

    if ($query == TRUE) {
			
        echo "<script>alert('Records Updated successful'); window.location='view_booked_tickets.php'; </script>";

       
    }else {
        echo "Records Not Updated";
    }
}  
?>
	<body>
		<img class="logo" src="images/shutterstock_22.jpg"/> 
		<h1 id="title">
		ELECTRONIC VISA
		</h1>
		<div>
			<ul>
				<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<!-- <li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li> -->
				<li><a href="contact/contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<form action="" method="POST">
			<h2>FILL YOUR INFORMATION BELOW</h2>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter Surname</td>
					<td class="fix_table">Enter Othernames</td>
					<td class="fix_table">Date of Birth</td>
					<td class="fix_table">Marital Status</td>
				</tr>
				<tr>
					<td class="fix_table">
						<input name="sname" placeholder="eg Adeola" value="<?php echo $row['sname']; ?>" required>

						<!-- <input type="text" name="origin" placeholder="From" required> --></td>
					<td class="fix_table">
					<input name="oname" value="<?php echo $row['oname']; ?>" placeholder="eg Tolulope Adisa" required>

						<!-- <input type="text" name="destination" placeholder="To" required> --></td>
						<td class="fix_table">
					<input type="date" value="<?php echo $row['date']; ?>"name="date" required>


						<!-- <input type="text" name="origin" placeholder="From" required> --></td>
						<td class="fix_table">
						<input name="status" value="<?php echo $row['status']; ?>" placeholder="eg Single" required>


						<!-- <input type="text" name="origin" placeholder="From" required> --></td> 
				</tr>
			</table>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter Address</td>
					<td class="fix_table">Enter Phone Number</td>
					<td class="fix_table">Gender</td>
					<td class="fix_table">Height</td>
				</tr>
				<tr>
					<td class="fix_table">
						<input name="address" value="<?php echo $row['address']; ?>" required>

						<!-- <input type="text" name="origin" placeholder="From" required> --></td>
					<td class="fix_table">
					<input type="number" value="<?php echo $row['phone']; ?>" name="phone" required>

						<!-- <input type="text" name="destination" placeholder="To" required> --></td>
						<td class="fix_table">
							
						<select name="gender">
                        <option><?php echo $row['gender']; ?></option>
						<option>--Select Gender--</option>
                        	<option value="Male">Male</option>
  							<option value="Female">Female</option>
  						</select>
						


						<!-- <input type="text" name="origin" placeholder="From" required> --></td>
						<td class="fix_table">
						<input name="height" value="<?php echo $row['height']; ?>"  required>


						<!-- <input type="text" name="origin" placeholder="From" required> --></td> 
				</tr>
			</table>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Origin</td>
					<td class="fix_table">Enter the Destination</td>
					<td class="fix_table">Purpose of journey</td>
					<td class="fix_table">Passport No</td>
				</tr>
				<tr>
					<td class="fix_table">
						<input list="origins" name="origin" placeholder="From"  required>
  						<datalist id="origins">
  						  	<option value="Nigeria">
  						</datalist>

						<!-- <input type="text" name="origin" placeholder="From" required> --></td>
					<td class="fix_table">
						<input list="destinations" name="destination" placeholder="To" required>
  						<datalist id="destinations">
  						  	<option value="United States">
  						  	<option value="Zimbabwe">
  						  	<option value="Yemen">
  						  	<option value="Indian">
  						  	<option value="Qatar">
  						</datalist>
						<!-- <input type="text" name="destination" placeholder="To" required> --></td>
						<td class="fix_table">
						<input type="text" name="purpose" value="<?php echo $row['purpose']; ?>" required>


						<!-- <input type="text" name="origin" placeholder="From" required> --></td>
						<td class="fix_table">
						<input type="text" name="passid" value="<?php echo $row['passid']; ?>" required>


						<!-- <input type="text" name="origin" placeholder="From" required> --></td> 
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Date of Passport Issued</td>
					<td class="fix_table">Date of Expiry</td>
					<td class="fix_table">Profession</td>
					<!-- <td class="fix_table">Passport No</td> -->
				</tr>
				<tr>
					<td class="fix_table">
					<input type="date" name="passidiss" value="<?php echo $row['passidiss']; ?>" required>


						<!-- <input type="text" name="origin" placeholder="From" required> --></td>
					<td class="fix_table">
					<input type="date" name="passidexp" value="<?php echo $row['passidexp']; ?>" required>

						<!-- <input type="text" name="destination" placeholder="To" required> --></td>
						<td class="fix_table">
						<input type="text" name="prof" value="<?php echo $row['prof']; ?>" required>


						<!-- <input type="text" name="origin" placeholder="From" required> --></td>
						<td class="fix_table">
						<!-- <input type="text" name="passid" required> -->


						<!-- <input type="text" name="origin" placeholder="From" required> -->
					</td> 
				</tr>
			</table><br>
			<input type="submit" value="Update" name="submit">
		</form>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
	</body>
</html>