<?php 
	session_start();
	?>
<!DOCTYPE HTML>

<html>
<head>
</head>
<body>
<h2>HELLO, <?php echo $_SESSION['username'];?></h2>
<a href="logout.php">LOGOUT</a>

</body>
</html>