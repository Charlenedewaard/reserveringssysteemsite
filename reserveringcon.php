<?php
 include_once 'db.inc2.php';

 // connection to database -> inserting value into database
if(isset($_POST['submit'])) {
 $woonplek = $_POST['woonplek'];
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
$electriciteit = $_POST['electriciteit'];
$woonop = $_POST['woonop'];

$sql ="INSERT INTO reserveringen (woonplek, beginD, endD, electriciteit, woonop) VALUES('$woonplek','$startdate', '$enddate', '$electriciteit','$woonop');";

mysqli_query($conn1,$sql);

header("Location: index.php");
exit;
}
?>
