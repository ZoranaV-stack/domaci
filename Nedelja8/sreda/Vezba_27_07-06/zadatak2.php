<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napraviti dva objekta klase Krevet, sa podacima po zelji. Prikazati samo Krevet sa vecom cenom.</p>
    <?php
        include "zadatak1.php";
        $krevet2= new Krevet(280,90, 'metal', 1400000);
        $krevet3= new Krevet(288,100, 'kovano gvozdje', 120000);
        if($krevet2->citanje_cene() > $krevet3->citanje_cene()){
            echo $krevet2;
        }else{
            echo $krevet3;
        }
    // ?>
</body>
</html>