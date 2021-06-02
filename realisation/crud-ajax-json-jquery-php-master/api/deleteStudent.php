<?php
$id = $_POST["sid"];
$dbh = new PDO("mysql:host=localhost;dbname=schoolstd", "root", "solicode123");
$sql = "DELETE FROM schoolstudents WHERE id = $id";
$getStudents = $dbh->prepare($sql) ;
$getStudents->execute();
?>
