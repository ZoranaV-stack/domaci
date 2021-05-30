<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napisati fju koja za dati niz stringova pomocu fje "palindrom" (radjeno na casu) ispituje i prikazuje samo palindrome tog niza.  Npr za niz ["potop", "buducnost", "lul", "nije"]  prikazuje reci "potop" i "lul".</p>
    <?php
        function palindrom($niz){
            $duzina_niza = count($niz);
            $palindromi = "";
            for($i = 0; $i < $duzina_niza; $i++){
                $rec = strtolower($niz[$i]);
                if($rec === strrev($rec)){
                    $palindromi .= $rec . " ";
                }
            }
            echo $palindromi;
        }
        $niz = ["oko", "slovo", "drvo", "fif", "kapa", "auto"];
        palindrom($niz);
    ?>
</body>
</html>