<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Dodati u prethodni program fju koja vraca krace ime. Prikazati duze ime u crvenoj, a krace ime u zelenoj boji.</p>
    <?php
        $ime1 = "Milan";
        $ime2 = "Milena";
        function duze_ime(){
            global $ime1, $ime2;
            $duzina1 = strlen($ime1);
            $duzina2 = strlen($ime2);
            if($duzina1 > $duzina2){
                return $ime1;
            }else{
                return $ime2;
            }
        }

        function krace_ime(){
            global $ime1, $ime2;
            $duzina1 = strlen($ime1);
            $duzina2 = strlen($ime2);
            if($duzina1 < $duzina2){
                return $ime1;
            }else{
                return $ime2;
            }
        }

        $rezultat_duze_ime = duze_ime();
        $rezultat_krace_ime = krace_ime();       
        echo "<p style='color:red'>$rezultat_duze_ime</p>";
        echo "<p style='color:green'>$rezultat_krace_ime</p>";

    ?>
</body>
</html>