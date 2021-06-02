<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napisati fju koja za dati niz koji predstavlja kolika je uspesnost uradjenih domacih po danima ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'>28, 'petak=>28] pronalazi:
Koji dan je najuspesniji
Kolika je prosecna uspesnost
Razliku izmedju najbolje i najgore uspesnosti
</p>
<?php
    $niz = ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'=>28, 'petak'=>28];
    function uspesnost_domacih($niz){
        $ind = "";
        $max = -INF;
        $zbir = 0;
        $min = INF;
        foreach($niz as $dan=>$uspesnost){
            if($max < $uspesnost){
                $max = $uspesnost;
                $ind = $dan;
            }
            if($min > $uspesnost){
                $min = $uspesnost;
            }
            $zbir += $uspesnost;
        }
        $raslika_izmedju_nabolje_i_najgore_uspesnosti = $max - $min;
        echo "najuspesniji je $ind";
        $prosecna_uspesnost = $zbir / count($niz);
        echo "<p>Prosecna uspesnost je $prosecna_uspesnost</p>";
        echo "<p>Razlika je $raslika_izmedju_nabolje_i_najgore_uspesnosti</p>";

    }
    uspesnost_domacih($niz);
?>
</body>
</html>