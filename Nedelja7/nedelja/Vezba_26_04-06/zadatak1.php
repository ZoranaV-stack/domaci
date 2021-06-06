<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>1. Preko map fje dodati svakom clanu "godine_staza" (jedan slucajan broj od 1 do 3, nije niz)</p>
    <?php
        $x = [ 
            ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
            ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
            ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
            ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
           ];

        $x = array_map(function($osoba){ 
            $osoba['godine_staza'] = mt_rand(1,3);           
            return $osoba;
        }, $x);

        foreach($x as $osoba){
            echo join(" ", $osoba) . "<br>";
        }
    ?>
</body>
</html>