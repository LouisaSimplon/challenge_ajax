<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>

<?php
require('connectDb.php');
 ?>

<select onchange="change(this.value)">

<?php
$req=sdb->query('SELECT * FROM clients ORDER BY id DESC');
while ($data=$req->fetch()) {
  $nom=$data['Nom'];
    $id=$data['Prenom'];
    echo "<option value=".$id.">$nom</option>";

}
 ?>
</select>
<div id="reponse"></div>
<script type="text/javascript"></script>
