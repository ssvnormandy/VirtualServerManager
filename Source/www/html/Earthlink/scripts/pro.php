<?php

require '../inc/config.php';
$pross = $_POST['selection'];
if (isset($_POST['selection']) && $_POST['selection'] == 'bug') {
    $id = shell_exec('/scripts/./switchCreate.py bug '.trim($_POST['server1']));
    $queryinsert = mysql_query("INSERT INTO servers
      (server_id) VALUES ('$id')")
        or die(mysql_error());
    header('Location: ../dashboard.php');
    exit;
} elseif ((isset($_POST['selection']) && $_POST['selection'] == 'squirrel')) {
    $id = shell_exec('/scripts/./switchCreate.py squirrel '.trim($_POST['server2']));
    $queryinsert = mysql_query("INSERT INTO servers
    (server_id) VALUES ('$id')")
      or die(mysql_error());
    header('Location: ../dashboard.php');
    exit;
} elseif ((isset($_POST['selection']) && $_POST['selection'] == 'rabbit')) {
    $id = shell_exec('/scripts/./switchCreate.py rabbit '.trim($_POST['server3']));
    $queryinsert = mysql_query("INSERT INTO servers
    (server_id) VALUES ('$id')")
      or die(mysql_error());
    header('Location: ../dashboard.php');
    exit;
} elseif ((isset($_POST['selection']) && $_POST['selection'] == 'fox')) {
    $id = shell_exec('/scripts/./switchCreate.py fox '.trim($_POST['server4']));
    $queryinsert = mysql_query("INSERT INTO servers
    (server_id) VALUES ('$id')")
      or die(mysql_error());
    header('Location: ../dashboard.php');
    exit;
} elseif ((isset($_POST['selection']) && $_POST['selection'] == 'tiger')) {
    $id = shell_exec('/scripts/./switchCreate.py tiger '.trim($_POST['server5']));
    $queryinsert = mysql_query("INSERT INTO servers
    (server_id) VALUES ('$id')")
      or die(mysql_error());
    header('Location: ../dashboard.php');
    exit;
} elseif ((isset($_POST['selection']) && $_POST['selection'] == 'bear')) {
    $id = shell_exec('/scripts/./switchCreate.py bear '.trim($_POST['server6']));
    $queryinsert = mysql_query("INSERT INTO servers
    (server_id) VALUES ('$id')")
      or die(mysql_error());
    header('Location: ../dashboard.php');
    exit;
} elseif ((isset($_POST['selection']) && $_POST['selection'] == 'mammoth')) {
    $id = shell_exec('/scripts/./switchCreate.py mammoth '.trim($_POST['server7']));
    $queryinsert = mysql_query("INSERT INTO servers
    (server_id) VALUES ('$id')")
      or die(mysql_error());
    header('Location: ../dashboard.php');
    exit;
}
