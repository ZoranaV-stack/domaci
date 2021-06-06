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
    <p>2. Napisati fju koja prikazuje imena svih programera.</p>
    <?php
        function imena_programera($osobe){
            foreach($osobe as $osoba) {
                echo $osoba['ime'] . "<br>";
            }
        }
        imena_programera($x);
    ?>
</body>
</html>