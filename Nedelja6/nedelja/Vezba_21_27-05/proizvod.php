<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .proizvod{
            width: 200px;
            float: left;
            margin-right: 20px;
        }
        .proizvod img {
            width: 200px;
            height: 200px;
        }
        .proizvod .stara_cena{
            color: red;
        }
        .proizvod .cena_sa_popustom{
            color: green;
        }
    </style>
</head>
<body>
    <?php
        function proizvod($ime, $slika, $cena, $popust = 0){
            echo "<div class='proizvod'>
                <img src='slike/$slika'>
                <p>$ime</p>";
                if($popust > 0){
                echo "<p class='stara_cena'>$cena</p>";
                echo "<p class='cena_sa_popustom'>" . ($cena - ($cena * $popust) / 100) . "</p>";
                }else{
                    echo "<p>$cena</p>";
                }
                
            echo "</div>";
        }
    ?>
</body>
</html>