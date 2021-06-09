<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>U klasu krevet dodati metodu "popust" koja za dati popust u procentima - i smanjuje cenu za toliko procenata.
Napraviti novi objekat klase Krevet, zatim ga prikazati, pozvati popust za 10% i prikazati ga opet.
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

        function popust($procenat){
            $this->cena = $this->cena - ($this->cena * $procenat / 100);
            return $this->cena;
        }
    }
    $krevet4 = new Krevet(280, 100, 'metal', 9500);
    echo $krevet4 . "<br>";
    $krevet4->popust(10);
    echo $krevet4 . "<br>";
?>
</p>
</body>
</html>