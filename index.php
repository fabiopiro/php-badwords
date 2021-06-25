<!-- PHP -->
<?php

// paragrafo
$paragrafo = "Cantami, o Diva, del pelide Achille l'ira funesta che infiniti addusse lutti agli Achei, molte anzi tempo all'Orco generose ravolse alme d'eroi, e di cani e d'augelli orrido pasto lor salme abbandonò (così di Giove l'alto consiglio s'adempìa), da quando primamente disgiunse aspra contesa il re de' prodi Atride e il divo Achille.";

// bad word
// $_GET["parola"];
$parola = "Achille";
$censura = "***";

$paragrafo_censurato = str_replace($parola, "***", $paragrafo);

// <!-- strpos(stringa, cosaCercare) - cerca all’interno di una stringa un’altra stringa e torna la posizione in cui si trova -->
// <!-- str_replace(porzioneDaModificare, conCosa, stringa) - sostituisce una porzione di una stringa con un nuovo valore -->

?>
<!-- /PHP -->

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-badword</title>
    </head>
    <body>
        <h2>Paragrafo:</h2>
        <p><?php echo $paragrafo ?></p>

        <h2>Lunghezza paragrafo:</h2>
        <p><?php echo strlen($paragrafo)?> caratteri.</p>

        <h2>Parola da censurare:</h2>
        <p><?php echo $parola ?></p>

        <h2>Paragrafo censurato:</h2>
        <p><?php echo $paragrafo_censurato ?></p>

        <h2>Lunghezza paragrafo censurato:</h2>
        <p><?php echo strlen($paragrafo_censurato)?> caratteri.</p>
    </body>
</html>
<!-- /HTML -->