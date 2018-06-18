<?php
require_once "includes/db.inc2.php";

if(!$_GET['id']) {
    echo "id niet meegegeven";
}
else {
    $reserveringId = $_GET['id'];

    // Query voorbereiden
    $query= "DELETE FROM reserveringen  WHERE id = $reserveringId";

    if(mysqli_query($conn1, $query)) {
        mysqli_close($conn1);
        //Redirect to homepage after deletion & exit script
        header("Location: afspraken.php");
        exit;
    }
    else {
        echo "fout in query: ".$query;
    }
}
