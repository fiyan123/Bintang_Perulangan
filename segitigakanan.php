<?php

    $bintang = 10;
    for ($a = $bintang; $a > 0; $a--) { 
        for ($b = $bintang; $b >= $a; $b--) { 
            echo $a."&nbsp;";
        }
        echo "<br>";
    }

?>