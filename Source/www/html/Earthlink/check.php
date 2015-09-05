<?php
    ob_start();
    session_start();
    require_once 'inc/config.php';
    if (!isset($_POST['old_user']) || !isset($_POST['old_pass'])) {
        header('Location: index.php');
    } elseif (empty($_POST['old_user'])) {
        $errorlog = 'Please Insert A Username !';
        header('location: index.php?error='.urlencode($errorlog));
        exit();
    } elseif (empty($_POST['old_pass'])) {
        $errorlog = 'Please Insert A Password !';
        header('location: index.php?error='.urlencode($errorlog));
        exit();
    } else {
        $username = addslashes(strip_tags(trim($_POST['old_user'])));
        $userpass = addslashes(strip_tags(trim(md5(sha1($_POST['old_pass'])))));
        $check_mail = filter_var($username, FILTER_VALIDATE_EMAIL);
        if ($check_mail) {
            $query = mysql_query("
          SELECT * FROM users WHERE user_pass ='$userpass' AND user_mail='$username' limit 1")
          or die();
        } else {
            $query = mysql_query("
            SELECT * FROM users WHERE user_pass ='$userpass' AND user_name='$username' limit 1")
          or die();
        }

        $result = mysql_num_rows($query);
        if ($result > 0) {
            $row = mysql_fetch_object($query);
            $uname = stripcslashes($row->user_name);
            $umail = stripcslashes($row->user_mail);
            $_SESSION['sessionname'] = $uname;
            $_SESSION['sessionmail'] = $umail;

            if (isset($_POST['savelogin'])) {
                $expire = time() + 60 * 60 * 24 * 7; //FOR AWEEK
                setcookie('username', $username, $expair, '/');
                setcookie('password', $_POST['old_user'], $expire, '/');
            }

            header('Location: index.php');
        } else {
            if ($check_mail) {
                $errorlog = 'Error In Email Or Password !';
                header('location: index.php?errorlog='.urlencode($errorlog));
                exit();
            } else {
                $errorlog = 'Error In Username Or Password !';
                header('location: index.php?errorlog='.urlencode($errorlog));
                exit();
            }
        }
    }
ob_end_flush();
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Error !!</title>
</head>
<body>
</body>
</html>
