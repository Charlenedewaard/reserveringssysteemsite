<?php
   include_once 'dbd.inc.php';

   //connection to database
if(isset($_POST['submit'])) {
    $firstname = $_POST['first'];
    $password = $_POST['password'];

$sql = "INSERT INTO users (username, password) VALUES ('$firsname','$password');";

mysqli_query($conn2, $sql);

header("Location: test.php");
}
?>
