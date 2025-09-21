<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Booked Tickets
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
    			margin: 0px 390px
			}
			table {
			 border-collapse: collapse;
			 text-align: center;
			 padding: 10px; 
			 /* margin-left: 10%; */
			 margin-right: 10%;
			}
			.set_nice_size{
				font-size: 17pt;
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
				<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<!-- <li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li> -->
				<li><a href="contact/contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<h2>VIEW APPLIED VISA</h2>
		<h3 class='set_nice_size'><center><u>APPLIED VISA</u></center></h3>
		
		<div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                                <table border="2" width="100%">
                                    <thead>
                                        <tr>
											<th>SN</th>
                                            <th>TrackID</th>
                                            <th>Fullname</th>
                                            <th>Gender</th>
                                            <th>Phone</th>
                                            <th>Origin</th>
                                            <th>Destination</th>
                                            <th>Marital Status</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									$user_id = $_SESSION['id'];
                                    $i = 1;
                                    include 'connect.php';
									$user_id = $_SESSION['login_user'];
									
                                    $sql = "SELECT * FROM users WHERE userid = '$user_id' ORDER BY id DESC";
                                    $query = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($query)){
                                        ?>
                                      <tr class="odd gradeX">
                                            <td><?php echo $i; ?></td>
											<td class="center"><?php echo $row['trackid']; ?></td>
                                            <td><?php echo $row['sname'].' '.$row['oname']; ?></td>
                                            <td class="center"><?php echo $row['gender']; ?></td>
                                            <td class="center"><?php echo $row['phone']; ?></td>
                                            <td><?php echo $row['origin']; ?></td>
                                            <td><?php echo $row['destination']; ?></td>											
                                            <td><?php echo $row['status']; ?></td>
                                            <td><?php if ($row['sts'] == 0) {?>
												<button class="btn btn-primary" style="background-color: yellow;"><i class="fa fa-expand"></i> Processing</button>
												<?php
											}elseif ($row['sts'] == 1) {
												?>
												<button class="btn btn-primary" style="background-color: green; color: white;"><i class="fa fa-check"></i> Approved</button>
												<?php
											} else {
												?>
												<button class="btn btn-primary" style="background-color: red; color: white;"><i class="fa fa-times"></i> Denied</button>
												<?php
											} 
											?>
											</td>
                                            <td>
                                            <a onclick="return confirm('Are You Sure You want to Edit This Record');" href="edit_user.php?stu=<?php echo $row['id']; ?>"><button class="btn btn-primary" style="background-color: blue; color: aliceblue;"><i class="fa fa-pencil"></i> Edit</button></a>
                                               <a onclick="return confirm('Are You Sure You want to Delete This Record');" href="delete_user.php?stu=<?php echo $row['id']; ?>"><button class="btn btn-danger" style="background-color: red; color: aliceblue;"><i class="fa fa-trash-o"></i> Delete</button></a>
                                            </td>
                                        </tr>

                                    <?php
                                    $i++;
                                    }
                                    ?>
                                      
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
	</body>
</html>