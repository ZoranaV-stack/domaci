<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napraviti klasu SastojakHrane koja ce imati clanice: naziv, mera, kalorije. I metode: konstruktor, "promeniMeru" koja menja meru i "prikazi" koja samo prikazuje sve podatke zajedno u jednom paragrafu.
</p>
<?php
    include "SastojakHrane.php";
    $sastojak1 = new SastojakHrane('brasno', 250, 1000);
    // $sastojak2 = new SastojakHrane('voda', 100, 100);
    // $sastojak3 = new SastojakHrane('secer', 500, 5000);
    $sastojak1->prikazi() . "<br>";
    $sastojak1->promeniMeru(100);
    $sastojak1->prikazi();

    
?>
</body>
</html>