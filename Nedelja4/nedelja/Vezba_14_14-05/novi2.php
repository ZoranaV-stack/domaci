<?php
$ime_prezime = "";
if(isset($_GET["ime_i_prezime"])){
    $ime_prezime = $_GET["ime_i_prezime"];
}
$inic_ime = substr($ime_prezime, 0, 1);
$index_prvo_slovo_prezime = strpos($ime_prezime," ") + 1;
 $inic_prezime = substr($ime_prezime, $index_prvo_slovo_prezime, 1);
 echo $inic_ime . "." . $inic_prezime . ".";

?>