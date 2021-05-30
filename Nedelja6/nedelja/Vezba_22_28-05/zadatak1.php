<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napisati fju koja za dati niz brojeva izracunava i prikazuje da li ima vise trocifrenih ili dvocifrenih brojeva. (koristiti for)</p>
    <?php
        function vise_trocifrenih_ili_dvocifrenih($niz){
            $br_dvocifrenih = 0;
            $br_trocifrenih = 0;
            $duzina_niza = count($niz);
            for($i = 0; $i < $duzina_niza; $i++){
                if($niz[$i] > 9 && $niz[$i] < 100){
                    $br_dvocifrenih++;
                }
                if($niz[$i] > 99 && $niz[$i] < 1000){
                    $br_trocifrenih++;
                }
            }
            if($br_dvocifrenih > $br_trocifrenih){
                echo "Ima vise dvocifrenih brojeva";
            }elseif($br_dvocifrenih == $br_trocifrenih){
                echo "Ima jednak broj dvocifrenih i trocifrenih brojeva";
            }else{
                echo "Ima vise trocifrenih brojeva";
            }
        }
        $niz = [22,3,555,6,665,90909,765,88,96,99];
        vise_trocifrenih_ili_dvocifrenih($niz);
    ?>
</body>
</html>