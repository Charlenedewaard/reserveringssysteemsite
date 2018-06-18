<?php
include_once 'config.php';
 require_once "includes/db.inc2.php";

 // resultaat van database halen met sql query

$query = "SELECT * FROM reserveringen";
$result = mysqli_query($conn1,$query);

// ga door de info om een array te maken
$afspraken = [];
while ($row = mysqli_fetch_assoc($result)) {
    $afspraken[] = $row;
}

// connectie sluiten
mysqli_close($conn1);

// admin check
if($_SESSION['user']['user_type'] != 'admin'){
    header('location: login.php');
}



?>

<?php
 include_once 'header.php';
 ?>

<div class="table">
<table>
    <h1>Afspraken</h1>
    <thead>
    <tr>
        <th>Verblijf optie</th><br>
        <th>Begin Datum</th><br>
        <th>Eind Datum</th><br>
        <th>Electriciteit</th><br>
        <th>Verblijf optie</th><br>
    </tr>
    </thead>
    <?php foreach ($afspraken as $afspraak) { ?>
    <tr>
        <td><?= $afspraak['woonplek'];?></td>
        <td><?= $afspraak['beginD'];?> </td>
        <td><?= $afspraak['endD'];?> </td>
        <td><?= $afspraak['electriciteit'];?></td>
        <td><?= $afspraak['woonop'];?> </td>
        <td><a href="delete.php?id=<?= $afspraak['id'];?>"><button type="submit" name="delete" class="btn waves-effect waves-light">Delete</button></a></td>
    </tr>
<?php } ?>
</table>
</div>

