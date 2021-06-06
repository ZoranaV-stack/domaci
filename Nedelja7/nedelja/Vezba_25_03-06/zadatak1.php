<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>1. Dodati u gornji niz jos 4 osobe po zelji.</p>
    <?php

$x = [ 
    ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
    ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
    ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
    ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
   ];
   
    array_push($x, ['ime'=>"Viktorija", "godine"=>22, "grad"=>"BG", "pozicija"=>"programer"]);
    array_push($x, ['ime'=>"Luka", "godine"=>29, "grad"=>"NS", "pozicija"=>"menadzer"]);
    array_push($x, ['ime'=>"Veronika", "godine"=>35, "grad"=>"Kraljevo", "pozicija"=>"programer"]);
    array_push($x, ['ime'=>"Kosta", "godine"=>39, "grad"=>"Krusevac", "pozicija"=>"dizajner"]);    
    ?>
</body>
</html>