<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napraviti dva slucajna broja $n i $x u opsegu od 1-10. Prikazati ih.
Napisati funkciju koja pravi i prikazuje "n" span elemenata. Svaki span ima text Ovo je span 1, Ovo je span 2… 
Napraviti "x" divova, pri cemu svaki div dobija "n" spnova pozivajuci prethodnu funkciju.
</p>
    <?php
        $n = mt_rand(1,10);
        $x = mt_rand(1,10);
        echo $n . " " . $x . "<br>";
        function span_elementi(){
            global $n;
           for($i = 1; $i <= $n; $i++){
            echo "<span>Ovo je span $i</span>"; 
           }
        } 
        
        for($i = 1; $i <= $x; $i++){
            echo "<div>"; 
            echo span_elementi();
            echo "</div>";
        }
    ?>
</body>
</html>