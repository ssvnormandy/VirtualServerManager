<?php
    ob_start();
    session_start();
  if (!isset($_SESSION['sessionname'])) {
      header('Location: index.php');
      exit();
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/menu.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>Earthlink Telecom</title>
  </head>
  <body>
    <div class="headerbox">
      <img src="styles/logo3.png" alt="logo" height="100">
    </div>
    <form action="scripts/pro.php" method="post">
      <div class="boxes">
        <div class="sub1">
          <h3 class="text_in_sub_menu">Class: Bug</h3>
          <h3 class="text_in_sub_menu">VCPUs: 1 cores</h3>
          <h3 class="text_in_sub_menu">RAM: 64MB</h3>
          <h3 class="text_in_sub_menu">Disk: 0GB</h3>
          <input type="text" name="server1" value="" placeholder="Server name..." class="servername">
          <button type="submit" name="selection" value="bug" class="btn">Deploy server!</button>
        </div>
        <div class="sub2">
          <h3 class="text_in_sub_menu">Class: Squirrel</h3>
          <h3 class="text_in_sub_menu">VCPUs: 1 cores</h3>
          <h3 class="text_in_sub_menu">RAM: 128MB</h3>
          <h3 class="text_in_sub_menu">Disk: 0GB</h3>
          <input type="text" name="server2" value="" placeholder="Server name..." class="servername">
          <button type="submit" name="selection" value="squirrel" class="btn">Deploy server!</button>
        </div>
        <div class="sub3">
          <h3 class="text_in_sub_menu">Class: Rabbit</h3>
          <h3 class="text_in_sub_menu">VCPUs: 1 cores</h3>
          <h3 class="text_in_sub_menu">RAM: 512MB</h3>
          <h3 class="text_in_sub_menu">Disk: 1GB</h3>
          <input type="text" name="server3" value="" placeholder="Server name..." class="servername">
          <button type="submit" name="selection" value="rabbit" class="btn">Deploy server!</button>
        </div>
        <div class="sub4">
          <h3 class="text_in_sub_menu">Class: Fox</h3>
          <h3 class="text_in_sub_menu">VCPUs: 1 cores</h3>
          <h3 class="text_in_sub_menu">RAM: 2GB</h3>
          <h3 class="text_in_sub_menu">Disk: 20GB</h3>
          <input type="text" name="server4" value="" placeholder="Server name..." class="servername">
          <button type="submit" name="selection" value="fox" class="btn">Deploy server!</button>
        </div>
        <div class="sub5">
          <h3 class="text_in_sub_menu">Class: Tiger</h3>
          <h3 class="text_in_sub_menu">VCPUs: 2 cores</h3>
          <h3 class="text_in_sub_menu">RAM: 4GB</h3>
          <h3 class="text_in_sub_menu">Disk: 40GB</h3>
          <input type="text" name="server5" value="" placeholder="Server name..." class="servername">
          <button type="submit" name="selection" value="tiger" class="btn">Deploy server!</button>
        </div>
        <div class="sub6">

          <h3 class="text_in_sub_menu">Class: Bear</h3>
          <h3 class="text_in_sub_menu">VCPUs: 4 cores</h3>
          <h3 class="text_in_sub_menu">RAM: 8GB</h3>
          <h3 class="text_in_sub_menu">Disk: 80GB</h3>
          <input type="text" name="server6" value="" placeholder="Server name..." class="servername">
          <button type="submit" name="selection" value="bear" class="btn">Deploy server!</button>
        </div>
        <div class="sub7">
          <h3 class="text_in_sub_menu">Class: Mammoth</h3>
          <h3 class="text_in_sub_menu">VCPUs: 8 cores</h3>
          <h3 class="text_in_sub_menu">RAM: 16GB</h3>
          <h3 class="text_in_sub_menu">Disk: 160GB</h3>
          <input type="text" name="server7" value="" placeholder="Server name..." class="servername">
          <button type="submit" name="selection" value="mammoth" class="btn">Deploy server!</button>
        </div>

      </div>
   </form>
   <footer class="footer">Copyright 2015 Earthlink Telecom</footer>
  </body>
</html>
<?php ob_end_flush(); ?>
