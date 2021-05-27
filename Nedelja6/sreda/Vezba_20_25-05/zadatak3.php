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
        function create_n_div_m_span($m, $n){
            for($i = 1; $i <=$m; $i++){
                echo "<div>";
                for($j = 1; $j <=$n; $j++){
                    echo "<span>$j</span>";
                }
                echo "</div>";
            } 
        }
        create_n_div_m_span(5,4);
    ?>
</body>
</html>