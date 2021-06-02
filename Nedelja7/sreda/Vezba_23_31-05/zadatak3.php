<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>a) Napisati funkciju koja ucitava niz iz forme iz inputa. Sve brojeve u inputu razdvojiti razmakom. Fja vraca ucitani niz
    b) Napisati funkciju koja ispituje i vraca da li neki dati niz X ima bar 3 parna broja.
    c) Napisati funkciju koja ispituje i vraca da li neki dati niz ima sve brojeve manje od 1000.
    d) Pomocu gornjih funkcija za niz dobijen iz inputa ispitati i prikazati da li taj niz ima sve brojeve manje od 1000 i bar 3 parna. 
    </p>
    <?php
        
        function ucitava_niz(){
            $niz_iz_forme = "";
            if(isset($_GET["forma"])){
            $niz_iz_forme = $_GET["forma"];
            }
            $niz = explode(" ", $niz_iz_forme);
            $niz_brojeva = [];
            foreach($niz as $broj){
                $broj = intval($broj);
                array_push($niz_brojeva, $broj);
            }
            return $niz_brojeva;
        }   
        $rezultat = ucitava_niz();
        var_dump($rezultat);

        function da_li_niz_ima_3_parna_broja($niz){
            $brojac = 0;
            foreach($niz as $broj){
                if($broj % 2 == 0){
                    $brojac++;
                }
            }
            if($brojac >= 3){
                return "Ima";
            }else{
                return "nema";
            }
        }
        $neki_niz = [1,1,2,4,4,1300];
        echo da_li_niz_ima_3_parna_broja($neki_niz);
        echo "<br>";

        function da_li_niz_ima_sve_br_manje_od_1000($niz){
            foreach($niz as $broj){
                if($broj > 1000){
                    return "nema";
                }
            }return "ima";
        }
        echo da_li_niz_ima_sve_br_manje_od_1000($neki_niz);

       $niz_iz_forme_svi_manji_od_hiljadu = da_li_niz_ima_sve_br_manje_od_1000($rezultat);
       $niz_iz_forme_min_tri_parna = da_li_niz_ima_3_parna_broja($rezultat);
       echo "<div> Niz iz forme $niz_iz_forme_svi_manji_od_hiljadu sve brojeve manje od hiljadu, i $niz_iz_forme_min_tri_parna minimum 3 parna broja.</div>";
    ?>
</body>
</html>