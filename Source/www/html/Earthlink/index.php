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
<div class="info">
<div class="textinfo">
  <h3 style="margin:6px;">We Are With You Every Step Of The Way!</h3>
  <br>
  Whether you are a seasoned Internet pro, or just starting out with your first website, our professional staff is here to assist you every step of the way. We are here 24/7/365 to assist you with any aspect of your hosting experience. Allow us the opportunity to exceed your expectations.
</div>
<div class="textinfo">
  <h3 style="margin:6px;">Transferring From Another Host?</h3>
  <br>
  Our dedicated Migrations Team is standing by to transfer your existing content from your prior host and configure it to perform optimally on our platform. We can also transfer domain registrations from other registrars in order to provide you complete management of your entire online portfolio all in one place!
</div>
<div class="textinfo">
  <h3 style="margin:6px;">Get Started Quickly & Easily</h3>
  <br>
  Earthlink Telecom provides every customer with the necessary tools to get a fully-functional website up and running as quickly as possible. From our integration with Openstack, providing an incredibly convenient server management dashboard, you can have an amazing website online in no time!
</div>
<div class="textinfo">
  <br>
<img src="styles/logo4.png" height="50px" alt="" />
</div>
</div>
</div>

</body>
</html>
<?php ob_end_flush(); ?>
