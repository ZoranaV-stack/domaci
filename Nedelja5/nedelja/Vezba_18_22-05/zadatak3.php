<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Prikazati brojeve od 30 do 99, ali preskociti sve one cija je prva cifra deljiva sa 3, ili je druga cifra deljiva sa 4.</p>
    <?php
        for($i = 30; $i< 99; $i++){
            $prva_cifra = substr($i, 0, 1);
            $druga_cifra = substr($i, 1, 1);
            if($prva_cifra % 3 == 0 || $druga_cifra % 4 == 0){
                continue;
            }
            echo $i . "<br>";
        }
    ?>
</body>
</html>