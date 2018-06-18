<?php
include_once 'config.php';
      include_once 'header.php';
?>
<section class="main-container">
    <div class="main.wrapper">
        <h2>Ochtendgloren</h2>
        <div class="row">
            <div class="col push-s1">

                <img src="1.jpg" alt="welkoms bord" class="col s5" width="500">
                <div class="col m3">
                    <h3>Welkom op Camping Ochtend Gloren!</h3>
                    <p>Camping Ochtend Gloren in Zeeland is de perfecte campingsite voor bezoekers van jong en oud.</p>
                </div>
            </div>

        </div>
</section>


<section>
    <div class="row">
        <div class="col push-s1">
            <img src="campingplek1.jpg" alt="camping plek 2" class="col s5" width="500"  />
            <div class="col m3">
                <h2>Oost west Oost best</h2>
                <p>Een mooie campingplek in het oosten! Deze campingplek is geschikt voor elke campingganger. Hier kan u zowel met camper of tent staan. Deze plek ligt
                dicht bij het Woeste Water zwembad die wij aanbieden. </p>

                <a href="reservering.php" target="_blank">klik hier om te reserveren!</a>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col push-s1">
            <img src="campingplek2.jpg" alt="camping plek 2" class="col s5" width="500">
            <div class="col m3">
                <h2>Wild West</h2>
                <p>Een leuke plek voor gezinnen met jongere kinderen! Deze campingplek is inclusief een kinderspeelparkje. Het Woeste Water Zwembad
                ligt op 5-10 minuten lopen vanaf deze locatie. Op deze locatie kunt u een caravan of tent opzetten </p>
                <a href="reservering.php" target="_blank">klik hier om te reserveren!</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col push-s1">
            <img src="campingplek3.jpg" alt="camping plek 3" class="col s5" width="500">
            <div class="col m3">
                <h2>South Side</h2>
                <p>Voor de echte vakantiegenieter die graag nog van een beetje privacy houdt. Deze locatie is voorzien van heggen tussen
                de plekken. Geschikt voor mensen die wat meer rust zoeken! locale café is vanaf deze locatie 15 minuten lopen. Op  deze locatie kunt u een caravan of tent opzetten</p>
                <a href="reservering.php" target="_blank">klik hier om te reserveren!</a>
            </div>
        </div>
    </div>
</section>
<?php
include_once 'footer.php';
if(isset($_SESSION))
?>

