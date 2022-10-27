<?php

    $bintang = 10;

    for ($a = $bintang; $a > 0; $a--) { 
        for ($i = 1; $i <= $a; $i++) { 
            echo "&nbsp;";
        }

        for ($b = $bintang; $b >= $a; $b--) { 
            echo "*";
        }

        echo "<br>";
    }

    for ($a = 1; $a <= $bintang; $a++) { 
        for ($b = 1 ; $b <= $a; $b++) { 
            echo "&nbsp";
        }

        for ($c = $bintang; $c >= $a; $c-=1) { 
            echo "*";
        }

        echo "<br>";
    }

?>