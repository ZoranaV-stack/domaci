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
    $a = mt_rand(1,100);
    $b = mt_rand(1,100);
    $c = mt_rand(1,100);
    if($a < $b && $a < $c){
        if($b < $c){
            echo "$a , $b , $c";
        }else{
            echo "$a , $c , $b";
        }
    }elseif($b < $a && $b < $c){
        if($a < $c){
            echo "$b , $a , $c";
        }else{
            echo "$b , $c , $a";
        }
    }elseif($c < $a && $c < $b){
        if($a < $b){
            echo "$c , $a , $b";
        }else{
            echo "$c , $b , $a";
        }
    }else{
        echo "Nesto nije u redu :)";
    }
    ?>
</body>
</html>