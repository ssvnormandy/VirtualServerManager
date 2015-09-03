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
  $a = array('<','>','[',']','{','}','(',')','u','string');
  $s = shell_exec('/scripts/./switch.py diag '.$id);
  $o = str_replace($a,'',$s);
  $diag = explode(',',$o);
  foreach ($diag as $value) {
echo "$value <br>";
}
?>
