<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Napisati fju koja za zadata dva imena (globalne promenljive) ispisuje duze ime.</p>
    <?php
        $ime1 = "Milan";
        $ime2 = "Aleksandar";
        function duze_ime(){
            global $ime1, $ime2;
            $duzina1 = strlen($ime1);
            $duzina2 = strlen($ime2);
            if($duzina1 > $duzina2){
                echo $ime1;
            }else{
                echo $ime2;
            }
        }
        duze_ime();
    ?>
</body>
</html>