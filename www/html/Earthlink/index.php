<?php
    ob_start();
    session_start();
    if (isset($_SESSION['sessionname'])) {
        header('Location: dashboard.php');
        exit();
    }
?>
<html>
<head>
	<title>Earthlink Telecom</title>
	<link rel="stylesheet" type="text/css" href="styles/index_css.css">

</head>
<body>


<?php if (isset($_GET['errorlog'])) : ?>
<div>
<?php echo $_GET['errorlog']; ?>
</div><!-- False Msg -->
<?php endif; ?>

<div class="sign">
<form action="check.php" method="post">
	<div class="signin">
<input class="input" type="text" placeholder="Username" name="old_user"
value="<?=isset($_COOKIE['old_user']) ? $_COOKIE['old_user'] : null ?>"><br>

<input class="input" type="password" placeholder="Password" name="old_pass"
value="<?=isset($_COOKIE['old_pass']) ? $_COOKIE['old_pass'] : null ?>"><br>

<input class="input_checkbox" type="checkbox" name="savelogin" va>Remember me!<br>
<input type="submit" name="log_in_old" placeholder="Sign In" value="Login" class="btn">

</form><!--SignIn -->


<?php if (isset($_GET['error'])) : ?>
<div>
	<?php echo $_GET['error']; ?>
</div><!-- False Msg -->
<?php endif; ?>

<?php if (isset($_GET['done'])) : ?>
<div>
	<?php echo $_GET['done']; ?>
</div><!-- True Msg -->
<?php endif; ?>


<form action="reg.php" method="post">
		<input type="text" placeholder="Username" name="new_user" class="input"><br>
		<input type="text" placeholder="Email" name="new_user_mail" class="input"><br>
		<input type="password" placeholder="Password" name="new_user_pass" class="input"><br>
		<input type="password" placeholder="Password" name="new_user_pass_a" class="input"><br>
		<input type="submit" name="reg" placeholder="Sign Up" value="Signup" class="btn">
	</div>
</form><!-- SignUp -->
</div>

</body>
</html>
<?php ob_end_flush(); ?>
