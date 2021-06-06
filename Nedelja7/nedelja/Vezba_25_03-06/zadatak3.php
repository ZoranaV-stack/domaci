<?php require_once('zadatak1.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>3. Napisati fju koja prikazuje sve podatke neke date osobe. Pozivajuci tu funkciju prikazati sve osobe cije ime sadrzi slovo s.
</p>
<?php 
    function podaci_osobe($osoba){
        echo join(', ', $osoba) . '<br>';
    }

    foreach($x as $osoba) {
        if(stripos($osoba['ime'], 's') !== false){
            podaci_osobe($osoba);            
        }
    }
?>
</body>
</html>