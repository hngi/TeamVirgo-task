<?php

session_start();
if (!isset($_SESSION['username'])) {
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>

	<a class="float-right" href="logout.php">LOGOUT</a>
<p style="color: red;">Login Success!</p>
<h1>Welcome <?php echo $_SESSION['username'];?></h1>

</body>
</html>
