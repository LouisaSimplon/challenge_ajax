<?php
/* try{
    $db=new PDO('mysql:host=localhost; dbname=myChallenge','adminsql','mdpsql');
}
catch(PDOException $e){
  die('Erreur'.$e->getMessage());
}*/
$con=mysqli_connect("localhost","root","mdpsql","myChallenge")or die("pb connexion");
 ?>
