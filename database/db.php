<?php
  session_start();

  $scon = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_crud_juanmontilla_23ago23'
  ) or die(mysqli_error($mysqli));
?>