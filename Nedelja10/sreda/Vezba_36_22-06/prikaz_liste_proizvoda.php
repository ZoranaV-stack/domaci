<?php
    include "sesija.php";
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
    


     $proizvodi = $b->izvrsi_select("SELECT * FROM proizvodi");
    echo "<div>";
    foreach($proizvodi['niz'] as $proizvod){
        echo "<div>";
        foreach($proizvod as $val){
            echo "<span>" . $val . "</span>";
        }
        echo "<form action='promena_korpe.php'>";
        echo "<input type='hidden' name='akcija' value='dodaj'>";
        echo "<input type='hidden' name='id_proizvoda' value='". $proizvod['id']."'>";
        echo "<input type='submit' value='UBACI U KORPU'>";
        echo "</form>";
        echo "</div>";
    }
    echo "</div>";




    ?>
</body>
</html>