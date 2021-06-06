<?php require_once('zadatak1.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>2. Preko usort fje sortirati niz po godinama_staza (*dodatak - neobavezno, ako su godine iste pri uporedjivanju, neka prva bude starija osoba)</p>
    <?php 
        usort($x, function($a, $b){
            if($a['godine_staza'] == $b['godine_staza']){
                if($a['godine'] > $b['godine']){
                    return -1;
                } else {
                    return 1;
                }
            }elseif($a['godine_staza'] > $b['godine_staza']){
                return -1;
            } else {
                return 1;
            }
        });
        foreach($x as $osoba){
            echo join(" ", $osoba) . "<br>";
        }


    ?>
</body>
</html>