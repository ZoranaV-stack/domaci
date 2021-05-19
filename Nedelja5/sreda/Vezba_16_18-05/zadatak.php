<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Uneti 4 broja preko forme. U php fajlu ucitati ta 4 broja preko $_GET.
(nastavak) Proveriti uslov da li je drugi broj veci od prvog, i četvrti od treceg. Ako uslov nije ispunjen, prikazati gresku (die).
(nastavak) Ako je uslov ispunjen, izračunati 
zbir onih brojeva od prvog do drugog koji su deljivi sa 4, 
pa zbir onih brojeva od trećeg do četvrtog koji su deljivi sa 3. 
Prikazati koji je zbir veći.
</p>
<?php
    $br1 = "";
    $br2 = "";
    $br3 = "";
    $br4 = "";
    if(isset($_GET['br1']))
       $br1 = $_GET['br1'];
    if(isset($_GET['br2']))
        $br2 = $_GET['br2'];
    if(isset($_GET['br3']))
        $br3 = $_GET['br3'];
    if(isset($_GET['br4']))
        $br4 = $_GET['br4'];

    if($br2 > $br1 && $br4 > $br3){
        $zbir1 = 0;
        $zbir2 = 0;
        for($i = $br1; $i<=$br2; $i++){
            if($i % 4 ==0){
                $zbir1 += $i;
            }
        }
        for($i = $br3; $i<=$br4; $i++){
            if($i % 3 ==0){
                $zbir2 += $i;
            }
        }
        if($zbir1 > $zbir2){
            echo $zbir1;
        }else{
            echo $zbir2;
        }
    }else{
        echo "die";
    }
?>
</body>
</html>