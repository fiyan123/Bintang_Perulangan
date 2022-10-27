<?php

    $bintang = 10;

    for ($a = $bintang; $a > 0; $a--) { 
        for ($i = 1; $i <= $a; $i++) { 
            echo " &nbsp";
        }
        for ($b = $bintang; $b >= $a; $b--) { 
            echo "$b";
        }
        echo "<br>";
    }

?>