<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .red {
            color: red;
        }
        .green {
            color: green;
        }
    </style>
</head>
<body>
    <?php
    $a = mt_rand(1,100);
    $b = mt_rand(10,100);
    if($a > $b){
        echo "<p class='green'>$a </p>";
        echo "<p class='red'>$b</p>";
    }else{
        echo "<p class='red'>$a</p>";
        echo "<p class='green'>$b</p>";
    }
    ?>
</body>
</html>