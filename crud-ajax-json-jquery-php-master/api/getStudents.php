<?php
$dbh = new PDO("mysql:host=localhost:8080;dbname=schoolstd","root","solicode123");
$sql = " SELECT * FROM schoolstudents ";
$studentsQuery = $dbh->query($sql);
$getStudents = $studentsQuery->fetchAll(PDO::FETCH_ASSOC);
print_r(json_encode($getStudents));
?>
