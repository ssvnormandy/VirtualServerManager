<?php
$pross = $_POST['selection'];



if (isset($_POST['selection']) && $_POST['selection'] == 'bug') {
  shell_exec('/scripts/./bug.py');
  header('Location: ../dashboard/index.html');
  exit;
}
elseif((isset($_POST['selection']) && $_POST['selection'] == 'squirrel')){
  shell_exec('/scripts/./squirrel.py');
  header('Location: ../dashboard/index.html');
  exit;
}
elseif((isset($_POST['selection']) && $_POST['selection'] == 'rabbit')){
  shell_exec('/scripts/./rabbit.py');
  header('Location: ../dashboard/index.html');
  exit;
}
elseif((isset($_POST['selection']) && $_POST['selection'] == 'fox')){
  shell_exec('/scripts/./fox.py');
  header('Location: ../dashboard/index.html');
  exit;
}
elseif((isset($_POST['selection']) && $_POST['selection'] == 'tiger')){
  shell_exec('/scripts/./tiger.py');
  header('Location: ../dashboard/index.html');
  exit;
}
elseif((isset($_POST['selection']) && $_POST['selection'] == 'bear')){
  shell_exec('/scripts/./bear.py');
  header('Location: ../dashboard/index.html');
  exit;
}
elseif((isset($_POST['selection']) && $_POST['selection'] == 'mammoth')){
  shell_exec('/scripts/./mammoth.py');
  header('Location: ../dashboard/index.html');
  exit;
}

?>
