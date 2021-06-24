<?php
    class Baza{
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

       function prikazi_destinacije($grad, $drzava){
            $r = $this->izvrsi_select("SELECT id FROM destinacije WHERE drzava = '$drzava' AND grad = '$grad'");
            if($r['uspesno'] === false){
                echo "Neuspesan upit" .$r ['poruka']; 
            }else{
                 
                echo "Uspesan upit, broj redova je: " . count($r['niz']). "<br>";
                return $r['niz'][0];
            }
        }

        function sva_putovanja($destinacija_id){
            $r = $this->izvrsi_select("SELECT id FROM putovanja WHERE destinacija_id=$destinacija_id");
            if($r['uspesno'] === false){
                echo "Neuspesan upit" .$r ['poruka']; 
            }else{
                 
                echo "Uspesan upit, broj redova je: " . count($r['niz']). "<br>";
                return $r['niz'];
            }
        }

        function otkazi_rezervaciju($id_putovanja){
            $r = $this->conn->query("DELETE FROM putnici_putovanja WHERE id_putovanja=$id_putovanja");
        }
       
    }


    function id_destinacije($grad, $drzava){
        $r = $this->izvrsi_select("SELECT drzava, grad FROM destinacije WHERE id = '$id'");
        if($r['uspesno'] === false){
            echo "Neuspesan upit" .$r ['poruka']; 
        }else{
             
            echo "Uspesan upit, broj redova je: " . count($r['niz']). "<br>";
            return $r['niz'][0];
        }
    }
    $baza = new Baza('turisticka_agencija');
    $destinacija_id = $baza->prikazi_destinacije('Barsa', 'Spanija');
    echo "ID je: " . join(", ", $destinacija_id);
    $putovanja = $baza->sva_putovanja(intval($destinacija_id));
    // var_dump($putovanja);
    foreach($putovanja as $putovanje) {
        echo "Putovanja su: " . join(", ", $putovanje) . "<br>";
    }
    
   $otkazane_rezervacije = $baza->otkazi_rezervaciju($putovanja[0]['id']);

    // var_dump($putovanja[0]['id']);
    var_dump($destinacija_id);
?>        