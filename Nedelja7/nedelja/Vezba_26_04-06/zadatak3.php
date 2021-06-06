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
    <p>Preko filter fje napraviti niz od osoba cija je godina_staza najveca. (uputstvo, prvo izracunati max, pa onda filter)</p>
    <?php 
        $max = 0;
        foreach($x as $osoba){
            if($max < $osoba['godine_staza']){
                $max = $osoba['godine_staza'];
            }
        }

        $najveca_god_staza = array_filter($x, function($osoba){
            global $max;
            if($osoba['godine_staza'] == $max){
                return true;
            }else{
                return false;
            }
        });

        foreach($najveca_god_staza as $osoba){
            echo join(" ", $osoba) . "<br>";
        }
    ?>
</body>
</html>