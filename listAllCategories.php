<?php
  require_once './utils/connect-bdd.php';

  $req = $bdd->prepare('SELECT id_categorie, nom_categorie FROM categories');

  $req->execute();

  $data = $req->fetchAll(PDO::FETCH_ASSOC);
?>

<pre>
  <?php
  print_r($data);
  ?>
</pre>
