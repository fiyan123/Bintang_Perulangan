<?php

    $bintang = 10;

    for ($a = 1; $a <= $bintang; $a++) { 
        for ($b = 1; $b <= $a; $b++) { 
            echo " &nbsp";
        }
        for ($c = $bintang; $c >= $a; $c-=1) { 
            echo $c;
        }
        echo "<br>";
    }

?>