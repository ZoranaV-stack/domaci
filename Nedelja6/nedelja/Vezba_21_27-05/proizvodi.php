<?php
include_once "proizvod.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        proizvod("Proizvod 1", "slika1.jpg", 130);
        proizvod("Proizvod 2", "slika2.jpg", 150, 20);
        proizvod("Proizvod 3", "slika3.jpg", 2400, 50);
    ?>
</body>
</html>