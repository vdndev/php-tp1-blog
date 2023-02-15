<?php
  include '../config.inc.php';

  $bdd = new PDO('mysql:host='.$config['DB_HOST'].';dbname='.$config['DB_DB'], $config['DB_USER'], $config['DB_PASSWORD'], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION))
?>
