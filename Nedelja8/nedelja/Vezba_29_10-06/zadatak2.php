<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napraviti klasu Jelo koja ima naslov, opis i niz sastojaka hrane. U konstruktoru se dobija naslov, opis i niz $podaci. Naslov i niz samo upisati u this, a preko niza $podaci napraviti niz objekata koji su tip SastojakHrane. 
Napraviti metode "prikazi" i metodu za "promeniMeru" za promenu mere jednog sastojka.  

Proveriti kod sledecim naredbama:
$podaci = [
	["naziv"=>"jaja", "mera"=>"2", "kalorije"=>300],
	["naziv"=>"brasno", "mera"=>"200g", "kalorije"=>600],
	["naziv"=>"secer", "mera"=>"20g", "kalorije"=>100],
	["naziv"=>"so", "mera"=>"5g", "kalorije"=>40]
]
$jelo  = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
$jelo->prikazi();
$jelo->promeniMeru("brasno", "400g");
$jelo->prikazi();
</p>
<?php
    include "podaci.php";
    include "SastojakHrane.php";
    class Jelo{
        public $naslov;
        public $opis;
        public $niz_obj_sastojaka;

        function __construct($naslov, $opis, $podaci){
            $this->naslov = $naslov;
            $this->opis = $opis;
            $this->niz_obj_sastojaka = [];
            foreach($podaci as $podatak){
                $objekat_sastojak_hrane = new SastojakHrane($podatak['naziv'], $podatak['mera'], $podatak['kalorije']);
                array_push($this->niz_obj_sastojaka, $objekat_sastojak_hrane);
            }
        }
        
        function promeniMeru($naziv, $nova_mera){
            for($i = 0; $i<count($this->niz_obj_sastojaka); $i++){
                if($this->niz_obj_sastojaka[$i]->naziv == $naziv){
                    $this->niz_obj_sastojaka[$i]->mera = $nova_mera;
                }
            }
        }
        function prikazi(){
            echo $this->naslov . ", " . $this->opis . ", sa sastojcima: <br>";
            foreach($this->niz_obj_sastojaka as $objekat){
               echo $objekat->naziv . ", " . $objekat->mera . ", " . $objekat->kalorije . "<br>";
            }
        }
    }
    $jelo  = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
    $jelo->prikazi();
    $jelo->promeniMeru("brasno", "400g");
    $jelo->prikazi();
?>
</body>
</html>