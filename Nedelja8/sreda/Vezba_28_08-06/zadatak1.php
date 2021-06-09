<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napraviti klasu Baldahin (slika ispod) koja nasledjuje klasu Krevet iz domaceg broj 27, i prosiruje clanicama visina i cenaBaldahina. (odvojena cena samo za dodatak)
Napraviti konstruktor koji poziva roditeljski konstruktor i upisuje podatke i u nove dve clanice
<?php
    include "../Vezba_27_07-06/zadatak1.php";
    class Baldahin extends Krevet{
        public $visina;
        public $cena_baldahina;
        public function __construct($duzina, $sirina, $materijal, $cena, $visina, $cena_baldahina){
            $this->visina = $visina;
            $this->cena_baldahina = $cena_baldahina;
            parent:: __construct($duzina, $sirina, $materijal, $cena);
        }
    }
?>
</p>
</body>
</html>