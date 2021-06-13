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
        if(!isset($_GET['id'])){
            die("Trazite nepostojecu stranicu!");
        }
        $id =  $_GET['id'];
        include "Proizvod.php";
        include "WebSite.php";
        $websajt1->header();
        $websajt1->menu($podaci);
        $lp->prikazi_jedan_proizvod_detaljnije($id);
        $websajt1->footer();
    ?>
</body>
</html>