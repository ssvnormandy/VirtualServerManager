<?php
	ob_start();
	session_start();
	if (!isset($_SESSION['sessionname'])) {
		header('Location: index.php');
		exit();
	}
echo "yyyyyyyy";
echo "<a href='log_out.php'>LogOut</a>";
?>