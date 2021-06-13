<?php
    include "podaci.php";
    class WebSite {
        function header(){
            echo "<h1 style='text-align:center'>Dobrodosli u web-shop</h1>";
            echo "<a href='index.php'>Početna</a>";
        }

        function footer(){
            echo "<footer style='clear:both; background-color: lightgray; height:200px; display:flex; align-items:center; justify-content:center'>Bolje vas nasli</footer>";
        }

        function menu($podaci){
            $grupe = array_column($podaci, 'grupa');
            $grupe = array_unique($grupe);
            echo "<ul style='clear:both'>";
            foreach($grupe as $grupa){
                echo "<li><a href='index.php?grupa=$grupa'>$grupa</a></li>";
            }
            echo "</ul>";
        }
        
    }
    $websajt1 = new WebSite();
?>