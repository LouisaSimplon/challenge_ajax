<?php
require('connectDb.php');

$id=$_POST['var'];

$req='SELECT * FROM clients WHERE idClient='.$id;
$res=mysqli_query($con,$req)or die("pb req");
while ($data=$res->fetch_assoc()) {
  echo $data['Nom'];
  echo $data['Prenom'];
  echo $data['Age'];
  echo $data['Adresse'];
  echo $data['Profession'];
}
 ?>
