<?php
 
  require "utils/saludar.php";
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $e=$_POST['equipo'];

    echo saludar($e);
  }
?>


