<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napisati fju koja vraca true ako neki dati niz ne sadrzi nule, a u suprotnom vraca false.</p>
    <?php
        function ne_sadrzi_nule($niz){
            foreach($niz as $broj){
                if($broj ==0){
                    return false;
                }
            }
            return true;
        }
        $niz = [2,3,4,0,10];
        var_dump(ne_sadrzi_nule($niz));
    ?>
</body>
</html>