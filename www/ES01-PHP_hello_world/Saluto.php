<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BENVENUTO NELLA MIA PAGINA PHP</title>
</head>
<body>
    <h1>Benvenuto nella mia pagina PHP- Davide Hu</h1>
    <?php
    $today= new DateTime("now", new DateTimeZone('Europe/Rome'));
    echo $today-> format(' H:i:s '); //per ore in formato 24 ore, 'h' sarebbe 12
    $ora= $today-> format('H');
    echo "Sono le ore $ora<br><br>";

    $nome="Paolo";

    if($ora>=8 && $ora<12){
        $saluto= "\nBuongiorno\n";
    }
    else{
        if($ora>=12 && $ora<20){
            $saluto= "\nBuonasera\n";
        }
        else
        $saluto= "\nBuonanotte\n";
    }

    echo "$saluto $nome, benvenuto nella mia pagina PHP.<br><br>";
    $browser= $_SERVER['HTTP_USER_AGENT'];
    echo "Stai usando il browser: $browser";
    ?>  
</body>
</html>