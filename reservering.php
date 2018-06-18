<?php
include_once 'config.php';
    include_once 'header.php';

if(!isset($_SESSION['user']['user_type'])){
    header('location: register.php');
}

?>


<section>
<div class="reserveer-achtergrond">
    <form action="reserveringcon.php" method="POST">
        <h3>Afspraak maken</h3>
        <p>Op welke kamping plek wilt u verblijven?*</p>
        <label><input type="radio" name="woonplek" value="Oost"><span>Oost West Oost Best</span></label><br>
        <label><input type="radio" name="woonplek" value="West"><span>Wild West</span></label><br>
        <label><input type="radio" name="woonplek" value="Zuid"><span>South Side</span></label><br>
        <p>Begin Datum</p><input id="date" type="date" name="startdate" placeholder="Begin Datum" required> <br>
        <p>Eind Datum</p><input id="date" type="date" name="enddate" placeholder="Eind Datum" required> <br>
        <p>Wilt u gebruik maken van de electriciteit?</p><br>
        <label><input type="radio" name="electriciteit" value="yes"><span>Ja</span></label><br>
        <label><input type="radio" name="electriciteit" value="No"><span>Nee</span></label> <br>
        <p>Wat voor verblijft optie gaat u gebruiken?</p><br>
        <label><input type="radio" name="woonop" value="Caravan"><span>Caravan</span></label><br>
        <label><input type="radio" name="woonop" value="Tent"><span>Tent</span></label><br>
        <button type="submit" name="submit" class="btn waves-effect waves-light">Reserveren</button><br>
            <div class="linkhome">
                <a href="index.php" target="_blank">*Via deze link kunt u zien welke kampingplekken er beschikbaar zijn.</a>
            </div>

    </form>
</div>

