<?php
require('connectDb.php');

$id=$_POST['var'];

$req = $db->query('SELECT * FROM clients WHERE id='.$id);
while($data = $req->fetch())
{
  echo $data['nom'];
}
 ?>
