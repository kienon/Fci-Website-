<?php
$db_host = "localhost";
$db_username = "admin";
$db_pass = "fciums";
$db_name = "fciums";
$conn = mysqli_connect($db_host,$db_username,$db_pass,$db_name) or
die ("could not connect to MySQL");


$eName = $_POST['eName'];
$eDesc = $_POST['eDesc'];
$eID = $_POST['eID'];
$eDate= $_POST['eDate'];

$sql = "INSERT INTO event (eventID,eventName,event_Desc,event_Date)
VALUES('$eID','$eName','$eDesc','$eDate');";


mysqli_query($conn, $sql);

header("Location: ../index.php?add=success");

?>