<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Množiti sve brojeve od 30 ka 1, sve dok proizvod ne predje 100.000. Prikazati konacan rezultat crvenom bojom a poslednje pomnozeni broj - zelenom.</p>
    <?php
        $proizvod = 1;
        for($i = 30; $i >= 1; $i--){
            $proizvod *= $i;
            if($proizvod > 100000){
                break;
            }
        }
       $konacan_rezultat = $proizvod / $i;
       $poslednje_pomnozen_br = $i + 1;
       echo "<span style='color:red'>$konacan_rezultat</span>";
       echo "<br>";
       echo "<span style='color:green'>$poslednje_pomnozen_br</span>";
    ?>
</body>
</html>