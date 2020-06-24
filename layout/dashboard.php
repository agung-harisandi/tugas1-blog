<?php 

// Kalau sesi user_name tidak ada, redirect
/*if (!isset($_SESSION['user_name'])) {	
	header("location:index.php"); 
}*/ 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tugas By Agung</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/style.css">
	<link href="<?php echo ASSET; ?>images/icon.ico" rel="shortcut icon">
</head>
<body>
	<div class="container">
		<div class="header">
			<img src="<?php echo ASSET;?>images/header.png">
		</div>

		<div class="menu">
			<a href="dashboard.php">Dashboard</a>|
			<a href="dashboard.php?page=post_tampil">Post</a>|
			<a href="dashboard.php?page=category_tampil">Category</a>|
			<a href="dashboard.php?page=photo_tampil">Photo</a>|
			<a href="dashboard.php?page=album_tampil">Album</a>|
			<a href="dashboard.php?page=user_tampil">User</a>|
			<a href="user_logout.php">Logout</a>
		</div>

		<div class="isi">
			
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "dashboard_main.php";
			}

			?>

		</div>

		<div class="footer">
			Copyright 2020 &copy; Programmed By Agung Dwi 
		</div>
	</div>
</div>
</body>
</html>