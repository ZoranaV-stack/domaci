<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td {
        width: 50px;
        height: 50px;
        border: 1px solid black;
    }
    .obojeno{
        background: black;
    }
</style>
<body>
    <?php
        $a = mt_rand(1,64);
        echo "<table border='1'>";
        
        for($i = 1; $i <=64; $i++){
            if($i == 1 || $i == 9 || $i == 17 || $i == 25 || $i == 33 || $i == 41 || $i == 49 || $i == 57) {
                echo "<tr>";
            }  
            if($i == $a) {
                echo "<td class='obojeno'></td>";
            }else {
                echo "<td></td>";
            }
            if($i == 8 || $i == 16 || $i == 24 || $i == 32 || $i == 40 || $i == 48 || $i == 56) {
                echo "</tr>";
            }  
        }
        echo "</table>";
        echo $a;
    ?>
</body>
</html>