<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napraviti niz od svih brojeva koji su veći od aritmetičke sredine niza (prosečne vrednosti). </p>
    <?php
        $zbir = 0;
        $nov_niz =[];
        $niz = [3,5,6,8,9,11,22,33,54,65,12];
        $duzina_niza = count($niz);
        // $niz_brojevi_veci_od_aritmeticke_sredine[];
        for($i = 0; $i < $duzina_niza; $i++){
            $zbir+= $niz[$i];
            
        }
        $prosecna_vrednost = $zbir / $duzina_niza;
        echo $zbir;
        echo "<br>";
        echo $prosecna_vrednost. "<br>";
        for($i = 0; $i < $duzina_niza; $i++){
            if($niz[$i] > $prosecna_vrednost){
                array_push($nov_niz, $niz[$i]);
            }
        }
        echo join(" ", $nov_niz);
    ?>
</body>
</html>