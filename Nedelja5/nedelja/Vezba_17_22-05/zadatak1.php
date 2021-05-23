<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napisati funkciju koja prikazuje paragraf sa 2 spana unutra. Prvi span ima vase ime, drugi span vase prezime. Izracunati koliko ima slova u vasem imenu i prezimenu i zatim pozvati funkciju toliko puta. (primer: Ana Slovic - paragraf se prikazuje ukupno 9 puta)</p>
    <?php
        $ime = "Zorana";
        $prezime = "Vladisavljevic";
        $duz_ime = strlen($ime);
        $duz_prezime = strlen($prezime);
        $ukupna_duzina = $duz_ime + $duz_prezime;

        function paragraf_sa_spanovima(){
            global $ime, $prezime;
            echo "<p><span>$ime</span><span>$prezime</span></p>";
        }

        for($i = 0; $i < $ukupna_duzina; $i++){
            paragraf_sa_spanovima();
        }
    ?>
</body>
</html>