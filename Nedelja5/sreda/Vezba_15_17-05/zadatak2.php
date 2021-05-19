<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napisati fju koja za zadata dva imena (globalne promenljive) vraca duze ime. Pri pozivanju prikazati rezultat.</p>
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
        $rezultat = duze_ime();
        echo $rezultat;
    ?>
</body>
</html>