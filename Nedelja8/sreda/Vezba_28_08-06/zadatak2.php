<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Metoda __toString, ne poziva roditeljski __toString, vec prikazuje dve cene. Cenu kreveta bez baldahina i sa baldahinom (zbirno). 
(Posto je cena u klasi Proizvod private, da bi joj se iz klase Baldahin moglo pristupiti treba ili a) uvesti protected ili b) dodati metodu "daj_cenu")
</p>
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

        public function prikazi_zbirno(){
            $zbir = $this->citanje_cene() + $this->cena_baldahina;
            return $zbir;
        }
        public function __toString(){
            $recenica = "Cena kreveta je: " . $this->citanje_cene() . " cena kreveta sa baldahinom je: " . $this->prikazi_zbirno();
            return $recenica;
        }
    }
    $krevet_sa_baldahinom = new Baldahin(250, 100, 'drvo', 20000, 50, 5000);
    echo $krevet_sa_baldahinom;
?>
</body>
</html>