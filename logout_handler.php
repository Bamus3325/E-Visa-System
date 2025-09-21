<html>
	<head>
		<title>Logout Handler</title>
	</head>
	<body>
		<?php
			session_start();
			session_destroy();

			echo "<script>alert('logout successful'); window.location='index.php'; </script>";
			// header("location: index.php");
		?>
	</body>
</html>