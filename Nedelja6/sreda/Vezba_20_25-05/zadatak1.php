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
        function najveci_br($a, $b, $c){ 
            if($a >= $b && $a >= $c){
                return $a;
            }elseif($b >= $c && $b >= $a){
                return $b;
            }else{
                return $c;
            }
        }
        echo najveci_br(7, 9, 5);
    ?>        
</body>