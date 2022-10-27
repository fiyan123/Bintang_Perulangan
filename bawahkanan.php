<?php

    $bintang = 10;

    for ($a = 1; $a <= $bintang; $a++) { 
        for ($b = $bintang; $b >= $a; $b-=1) { 
            echo "*";
        }
        echo "<br>";
    }

?>