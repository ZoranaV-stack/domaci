<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .red {
            color:red;
        }
        .green {
            color:green;
        }
    </style>
</head>
<body>
    <p>Od niza zadatih reči, napraviti niz čiji će svaki element predstavljati span. Svaki span će imati klasu "crveni", "zeleni" u zavisnosti od toga da li je reč kraća ili duža od 5 slova. Prikazati dobijeni niz.</p>
    <?php
        $niz_reci = ["more", "reka", "brodovi","drvo","pecina"];
        $niz_span =[];
      foreach($niz_reci as $rec){
          if(strlen($rec) < 5){
              $span = "<span class='red'>$rec</span>";
              array_push($niz_span, $span);
          }else{
            $span = "<span class='green'>$rec</span>";
            array_push($niz_span, $span);
          }
      }
      echo join(",", $niz_span);
    ?>
</body>
</html>