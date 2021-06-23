<?php
    session_start();
    if(!isset($_SESSION['stavke_korpe'])){
        $_SESSION['stavke_korpe'] = [];
    }

    class Baza{
        public $conn;
        
        function __construct($baza){            
            $this->conn = new mysqli('localhost', 'root', '', $baza);
            if ($this->conn->connect_error)
                die('Greska: '. $this->conn->connect_error);
            else
                echo 'Konektovan!';
        }

        
        function izvrsi_select($upit){
            $podaci = $this->conn->query($upit);
            if($podaci === false)
                return ['uspesno'=>false, 'poruka'=>$this->conn->error];
            else{
                $niz = $podaci->fetch_all(MYSQLI_ASSOC);
                return ['uspesno'=>true, 'niz'=>$niz];
            }
        }

        function daj_proizvod_iz_baze($id){
            $proizvod = $this->izvrsi_select("SELECT * FROM proizvodi WHERE id=$id");
            if($proizvod === false)
                die("Neuspesan upit". $proizvod['poruka']);
            else{                
                return $proizvod['niz'][0];
            }
        }
    }
    

    class Stavke_korpe{        
        public $stavke_korpe;

        function __construct(){
            $this->stavke_korpe = $_SESSION['stavke_korpe'];
            
        }

        

        function dodavanje_proizvoda($id, $naziv, $cena, $kolicina){
            $nasao = false;
            for($i=0; $i<count($this->stavke_korpe); $i++){
                if($this->stavke_korpe[$i]['id'] == $id){
                    $this->promeni_kolicinu($id, $kolicina);
                    $nasao = true;
                    break;
                }
            }
            if($nasao == false){
                $nova_stavka =['id'=>$id, 'naziv'=>$naziv, 'cena'=>$cena, 'kolicina'=>$kolicina];
            array_push($this->stavke_korpe, $nova_stavka);
            }
            $_SESSION['stavke_korpe'] = $this->stavke_korpe;
        }

        function promeni_kolicinu($id, $kolicina){
            for($i=0; $i<count($this->stavke_korpe); $i++){
                if($this->stavke_korpe[$i]['id'] == $id){
                    $this->stavke_korpe[$i]['kolicina'] +=$kolicina;
                }
            }
            $_SESSION['stavke_korpe'] = $this->stavke_korpe;
        }

        function brisanje_proizvoda($id){
            for($i= 0; $i<count($this->stavke_korpe); $i++){
                if($this->stavke_korpe[$i]['id'] == $id){
                    array_splice($this->stavke_korpe, $i, 1);
                }
            }
            $_SESSION['stavke_korpe'] = $this->stavke_korpe;
        }
    }
    $b = new Baza('vodjenje_prodaje2');
    $sk = new Stavke_korpe();

    // $sk->dodavanje_proizvoda(1,'cokolada', 200, 2);
    // foreach($_SESSION['stavke_korpe'] as $stavka){
    //     echo join(", ", $stavka) . "<br>";
    // }
    // $sk->promeni_kolicinu(1, 5);
    // $sk->dodavanje_proizvoda(2,'mleko', 100, 3);
    // foreach($_SESSION['stavke_korpe'] as $stavka){
    //     echo join(", ", $stavka) . "<br>";
    // }
    // $sk->brisanje_proizvoda(1);
    // foreach($_SESSION['stavke_korpe'] as $stavka){
    //     echo join(", ", $stavka) . "<br>";
    // }
  


?>

