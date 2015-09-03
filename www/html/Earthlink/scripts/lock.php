<?php
require('../inc/config.php');
$query = mysql_query('SELECT * FROM servers limit 1') or die (mysql_error);
$getIdRow = mysql_num_rows($query);
if ($getIdRow > 0)
{
  $getInfo = mysql_fetch_object($query);
  $id = $getInfo->server_id;
  $iid = $getInfo->id;
}
shell_exec('/scripts/./switch.py lock '.$id);
header('Location: ../dashboard.php');
?>
