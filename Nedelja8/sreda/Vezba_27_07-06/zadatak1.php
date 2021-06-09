<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napraviti klasu Krevet, koja ima clanice: duzina, sirina, materijal i cena. Cena je private. 
Napisati konstruktor koji dobija i  postavlja sve clanice.
Napisati metodu za citanje cene.
Napisati metodu __toString koja prikazuje: "Krevet je duzine... i sirine.... napravljen od.... po ceni ...."
</p>
<?php
    class Krevet{
        public $duzina;
        public $sirina;
        public $materijal;
        private $cena;
        public function __construct($duzina, $sirina, $materijal, $cena){
            $this->duzina = $duzina;
            $this->sirina = $sirina;
            $this->materijal = $materijal;
            $this->cena = $cena;

        }

        function citanje_cene(){
            return $this->cena;
        }


        function __toString(){
            $recenica = "Krevet je duzine: $this->duzina i sirine: $this->sirina napravljen od: $this->materijal, po ceni: " . $this->citanje_cene();
            return $recenica;
        }
    }
    $krevet1 = new Krevet(250,80, 'drvo', 8000);
    echo $krevet1 . "<br>";
?>
</body>
</html>