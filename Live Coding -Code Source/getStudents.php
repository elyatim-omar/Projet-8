<?php 

$dbh=new PDO ("mysql:host=localhost:3306;dbname=schoolstd","root","12345");
$sql ="SELECT * FROM schoolstudents";
$studentsQuery = $dbh->query($sql);
$getStudents =$studentsQuery->fetchAll(PDO::FETCH_ASSOC);
print_r(json_encode($getStudents));

?>