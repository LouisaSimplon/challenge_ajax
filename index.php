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
$req='SELECT * FROM clients ORDER BY idClient DESC';
$res=mysqli_query($con,$req)or die("pb req");
while ($data=$res->fetch_assoc()) {
  $nom=$data['Nom'];
 $prenom=$data['Prenom'];
 $age=$data['Age'];
 $adresse=$data['Adresse'];
 $profession=$data['Profession'];
   $id=$data['idClient'];
  echo "<option value=".$id.">$prenom</option>";


}



?>
</select>
<div id="reponse"></div>
<script src="script.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
