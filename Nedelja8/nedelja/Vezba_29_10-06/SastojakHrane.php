<?php
    class SastojakHrane{
        public $naziv;
        public $mera;
        public $kalorije;

        function __construct($naziv, $mera, $kalorije){
            $this->naziv = $naziv;
            $this->mera = $mera;
            $this->kalorije = $kalorije;
        }

        function promeniMeru($mera){
            $this->mera = $mera;
        }

        function prikazi(){
            echo "<p> Naziv je: $this->naziv, Mera je:  $this->mera, Kalorije: $this->kalorije</p>";
        }
    }

?>