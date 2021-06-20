<?php
    class Turisticka_agencija{
        public $conn;
        function __construct($baza){
        $this->conn = new mysqli('localhost', 'root','', $baza);
        if($this->conn->connect_error)
        die("greska:". $this->conn->connect_error);
        else 
        echo "konektovan";
    }

    function izvrsi_select($upit){
        $podaci = $this->conn->query($upit);
        if($podaci === false)
        return['uspesno'=> false, 'poruka'=>$this->conn->error];
        else{
            $niz = $podaci->fetch_all(MYSQLI_ASSOC);
            return['uspesno'=>true, 'niz'=>$niz];
        }
    }   

    function prikazi_destinacije(){
        $r = $this->izvrsi_select("select drzava, grad, datum_polaska, datum_povratka from destinacije JOIN putovanja ON destinacije.id=putovanja.destinacija_id");
        if($r['uspesno'] == true){
            echo "Uspesan upit, broj redova je: " . count($r['niz']). "<br>";
            return $r['niz'];
        }else{
            echo "Neuspesan upit" .$r ['poruka'];   
        }
    }

    function otkazi_rezervaciju($br_pasosa){
        $r = $this->conn->query("DELETE FROM putnici_putovanja WHERE broj_pasosa=$br_pasosa");
    }

    function prikazi_putnike(){
        $r = $this->izvrsi_select("SELECT ime_prezime, drzava, grad, datum_polaska, datum_povratka 
        FROM (putnici_putovanja JOIN putnici ON putnici_putovanja.broj_pasosa=putnici.broj_pasosa) 
            JOIN (destinacije JOIN putovanja ON putovanja.destinacija_id=destinacije.id) ON putovanja.id=putnici_putovanja.id_putovanja");

            if($r['uspesno'] == true){
                echo "Uspesan upit, broj redova je: " . count($r['niz']). "<br>";
                return $r['niz'];
            }else{
                echo "Neuspesan upit" .$r ['poruka'];   
            }
    }

}

    $ta = new Turisticka_agencija('turisticka_agencija');
    $destinacije = $ta->prikazi_destinacije();
    foreach($destinacije as $destinacija) {
        echo "Drzava: " . $destinacija['drzava']. ", grad: " .$destinacija['grad']. ", datum polaska: ". $destinacija['datum_polaska']. ", datum povratka: " . $destinacija['datum_povratka']. "<br>";
    }

    $putnici = $ta->prikazi_putnike();
    foreach($putnici as $putnik) {
        echo "Ime i prezime: " . $putnik['ime_prezime'] . ", drzava: " . $putnik['drzava']. ", grad: " .$putnik['grad']. ", datum polaska: ". $putnik['datum_polaska']. ", datum povratka: " . $putnik['datum_povratka']. "<br>";
    }

    $ta->otkazi_rezervaciju('456');
    // var_dump($destinacije);
?>