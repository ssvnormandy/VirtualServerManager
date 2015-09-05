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
$co = shell_exec('/scripts/switch.py console '.$id);
$console = substr($co,24,82);
header('Location: '.$console)
?>
