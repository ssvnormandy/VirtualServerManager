<?php
ob_start();
session_start();
        echo '<title>Sign Out </title>';
        echo "<link rel='stylesheet' href='styles/log_out.css'>";

        if (!isset($_SESSION['sessionname'])) {
            header('Location: index.php');
            exit();
        } else {
            session_destroy();
            die("
		<section>
		<span>Done</span>
		<meta http-equiv='refresh' content='1; url=index.php'>
		</section>
			");
        }
ob_end_flush();
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>LogOut</title>
  <link rel="stylesheet" href="styles/log_out.css">
</head>
<body></body>
</html>
