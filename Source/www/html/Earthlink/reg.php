<?php
    require_once 'inc/config.php';
        function encrypt_pass($password)
        {
            $pasword = base64_encode(pack('a*', md5($password)));
            $mix = strrev(sha1($pasword));

            return $mix;
        }
    /* # Get User From DB # */
    $getUser = '';
    $qUser = mysql_query("SELECT * FROM users WHERE user_name='{$_POST['new_user']}' limit 1") or die(mysql_error());
    if (mysql_num_rows($qUser) > 0) {
        $getUserRow = mysql_fetch_object($qUser);
        $getUser = $getUserRow->user_name;
    }
    /* # Get Mail From DB # */
    $getMail = '';
    $qMail = mysql_query("SELECT * FROM users WHERE user_mail='{$_POST['new_user_mail']}' limit 1") or die(mysql_error());
    if (mysql_num_rows($qMail) > 0) {
        $getMailRow = mysql_fetch_object($qMail);
        $getMail = $getMailRow->user_mail;
    }
    /* # Check # */
    if (!isset($_POST['new_user']) || !isset($_POST['new_user_mail']) || !isset($_POST['new_user_pass']) || !isset($_POST['new_user_pass_a'])) {
        $error = 'Refresh Your Page And Try Again !';
        header('location: index.php?error='.urlencode($error));
        exit();
    } elseif (empty($_POST['new_user']) || empty($_POST['new_user_mail']) || empty($_POST['new_user_pass']) || empty($_POST['new_user_pass_a'])) {
        $error = 'Please Fill All Fields !';
        header('location: index.php?error='.urlencode($error));
        exit();
    } elseif ($getUser != '') {
        $error = 'Username Already Taken !';
        header('location: index.php?error='.urlencode($error));
        exit();
    } elseif (!filter_var($_POST['new_user_mail'], FILTER_VALIDATE_EMAIL)) {
        $error = 'Insert Your E-mail Correctly !';
        header('location: index.php?error='.urlencode($error));
        exit();
    } elseif ($getMail != '') {
        $error = 'Email Already Taken !';
        header('location: index.php?error='.urlencode($error));
        exit();
    } elseif ($_POST['new_user_pass'] != $_POST['new_user_pass_a']) {
        $error = 'The Password You Entered Does Not Match !';
        header('location: index.php?error='.urlencode($error));
        exit();
    } else {
        $newusername = addslashes(strip_tags(trim($_POST['new_user'])));
        $newemail = addslashes(strip_tags(trim($_POST['new_user_mail'])));
        $newpass = md5(sha1($_POST['new_user_pass']));
        $queryinsert = mysql_query("INSERT INTO users
			(user_name,user_mail,user_pass) VALUES ('$newusername','$newemail','$newpass')")
            or die(mysql_error());
        if (isset($queryinsert)) {
            $query = mysql_query("SELECT * FROM users WHERE `user_mail`='".$newemail."'");
            if (mysql_num_rows($query) > 0) {
                $done = 'Registration Successful';
                header('location: index.php?done='.urlencode($done));
                exit();
            }
        }
    }
