<?php
   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = 'solicode123';
   $dbname = 'first';
   
   $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
   if ($mysqli->connect_errno) {
      echo "Échec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
   }

   $res = $mysqli->query("SELECT * FROM first.offices");


   $res->data_seek(0);
   while ($row = $res->fetch_assoc()) {
      echo " id = " . $row['Id'] . "\n";
      echo " Price = " . $row['Price'] . "\n";
      echo " Title = " . $row['Title'] . "\n";
   }


?>