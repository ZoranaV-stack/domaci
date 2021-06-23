<?php
include "sesija.php";

if(isset($_GET['akcija']) && $_GET['akcija'] == 'dodaj'){
    $id = $_GET['id_proizvoda'];
    $proizvod = $b->daj_proizvod_iz_baze($id);
    $sk->dodavanje_proizvoda($id,$proizvod['naziv'], $proizvod['cena'],1);
    var_dump($_SESSION['stavke_korpe']);
}



?>