<?php


  // Ouverture de la connexion à la base de données
  $dbhost = 'localhost:3306';
  $dbuser = 'root';
  $dbpass = '';
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
  

if(! $conn ) {
echo "not connected :";
exit();
}
echo "Connected successfully";

?>