<?php
include_once 'db.inc2.php';

// connection to database -> inserting value into database
if(isset($_POST['submit'])) {
    $first = $_POST['first'];
    $last = $_POST['last'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $room = $_POST['meetingroom'];

    $sql ="INSERT INTO reserveringen (firstname, achternaam, time, date, kamer) VALUES('$first', '$last', '$time','$date','$room');";

    mysqli_query($conn1,$sql);

    header("Location: test.php");
}
?>
