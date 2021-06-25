<!-- PHP -->
<?php
// echo $variabile - stampa il contenuto della variabile
// explode(delimitatore, stringa) - crea un array dividendo una stringa ad ogni occorrenza del delimitatore
// trim(stringa) - toglie gli spazi bianchi all’inizio e alla fine di una stringa
// str_replace(porzioneDaModificare, conCosa, stringa) - sostituisce una porzione di una stringa con un nuovo valore
// strlen(stringa) - ritorna la lunghezza di una stringa
// strpos(stringa, cosaCercare) - cerca all’interno di una stringa un’altra stringa e torna la posizione in cui si trova
// ucfirst(stringa) - ucwords(stringa) - rende maiuscolo il primo carattere della stringa / il primo carattere di ogni parola


// paragrafo
$paragrafo = "Cantami, o Diva, del pelide Achille l'ira funesta che infiniti addusse lutti agli Achei, molte anzi tempo all'Orco generose ravolse alme d'eroi, e di cani e d'augelli orrido pasto lor salme abbandonò (così di Giove l'alto consiglio s'adempìa), da quando primamente disgiunse aspra contesa il re de' prodi Atride e il divo Achille.";

// bad word
$_GET["parola"];
// $parola = "Achille";
$censura = "***";

// <!-- str_replace(porzioneDaModificare, conCosa, stringa) - sostituisce una porzione di una stringa con un nuovo valore -->
$paragrafo_censurato = str_replace($_GET["parola"], "***", $paragrafo);

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
        <p><?php echo $_GET["parola"] ?></p>

        <h2>Paragrafo censurato:</h2>
        <p><?php echo $paragrafo_censurato ?></p>

        <h2>Lunghezza paragrafo censurato:</h2>
        <p><?php echo strlen($paragrafo_censurato)?> caratteri.</p>
    </body>
</html>
<!-- /HTML -->