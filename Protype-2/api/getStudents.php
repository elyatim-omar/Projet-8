<?php
$dbh = new PDO("mysql:host=localhost;dbname=schoolstd","root","Solicode28");
$sql = " SELECT * FROM schoolstudents ";
$studentsQuery = $dbh->query($sql);
$getStudents = $studentsQuery->fetchAll(PDO::FETCH_ASSOC);
print_r(json_encode($getStudents));
?>
