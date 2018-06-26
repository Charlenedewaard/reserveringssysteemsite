<?php
include_once 'config.php';
      include_once 'header.php';
?>
<section class="main-container">
    <div class="main.wrapper">
        <h2>Ochtend Gloren</h2>
        <div class="row">
            <div class="col push-s1">

                <img src="1.jpg" alt="welkoms bord" class="col s5" width="500">
                <div class="col m3">
                    <h3>Welkom op Camping Ochtend Gloren!</h3>
                    <p>Camping Ochtend Gloren in Zeeland is de perfecte campingsite voor jong en oud.</p>
                </div>
            </div>

        </div>
</section>


<section>
    <div class="row">
        <div class="col push-s1">
            <img src="campingplek1.jpg" alt="camping plek 2" class="col s12 m5"  >
            <div class="col m3">
                <h2>Oost West Oost Best</h2>
                <p>Een mooie campingplek in het oosten! De campingplek is geschikt voor elke vakantieganger. Hier kunt u zowel met camper of tent staan. Deze plek ligt
                vlakbij het Woeste Water Zwembad die wij hiernaast ook aanbieden. </p>

                <a href="reservering.php" target="_blank">klik hier om te reserveren!</a>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col push-s1">
            <img src="campingplek2.jpg" alt="camping plek 2" class="col s5" >
            <div class="col m3">
                <h2>Wild West</h2>
                <p>Een prettige plek voor gezinnen met jonge kinderen! Deze campingplek is inclusief een kinderspeelpark, het Woeste Water Zwembad
                ligt op 5-10 minuten loopafstand vanaf de locatie. Op deze locatie kunt u een caravan of tent opzetten </p>
                <a href="reservering.php" target="_blank">klik hier om te reserveren!</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col push-s1">
            <img src="campingplek3.jpg" alt="camping plek 3" class="col s5" >
            <div class="col m3">
                <h2>South Side</h2>
                <p>Voor de vakantieganger die graag nog van extra privacy houdt. De locatie is voorzien van heggen tussen
                de plekken en is geschikt voor mensen die wat meer rust zoeken! Het locale café is vanaf deze locatie te bereiken op 15 minuten loopafstand. Ook op deze locatie kunt u een caravan of tent opzetten</p>
                <a href="reservering.php" target="_blank">klik hier om te reserveren!</a>
            </div>
        </div>
    </div>
</section>
<?php
include_once 'footer.php';
if(isset($_SESSION))
?>

