<?php
    $ime = "";
    $prezime = "";
    if(isset($_GET["ime"])){
        $ime = $_GET["ime"];
    }
    if(isset($_GET["prezime"])){
        $prezime = $_GET["prezime"];
    }
    $in_ime = substr($ime, 0, 1);
    $in_prezime = substr($prezime, 0, 1);
    echo strtoupper($in_ime . "." . $in_prezime . ".");
?>