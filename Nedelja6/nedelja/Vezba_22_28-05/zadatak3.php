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
        function lista($niz){
            $duzina_niza = count($niz);
            $lista = "";
            $lista .= "<ul>";
            for($i = 0; $i < $duzina_niza; $i++){
                $lista.= "<li>" . $niz[$i] . "</li>";
            }
            $lista.= "</ul>";
            return $lista;
        }
        $niz = ["Stavka 1", "Stavka 2", "Stavka 3", "Stavka 4"];
        echo lista($niz);
    ?>
</body>
</html>