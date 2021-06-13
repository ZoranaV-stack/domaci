<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-size:1.5em;">
    <?php
        include "Proizvod.php";
        include "WebSite.php";
        $grupa = (isset($_GET['grupa']))? $_GET['grupa'] : "";
        $websajt1->header();
        $websajt1->menu($podaci);
        $lp->prikazi_sve_proizvode($grupa);
        $websajt1->footer();


    ?>
</body>
</html>