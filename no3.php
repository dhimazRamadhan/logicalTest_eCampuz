<?php
    function pembagian($var1, $var2) {
        if ($var1 < $var2) {
            return 0;
        }
    
        $hasil_bagi = 0;
        while ($var1 >= $var2) {
            $var1 -= $var2;
            $hasil_bagi++;
        }
    
        return $hasil_bagi;
    }

    $var1 = 7;
    $var2 = 2;
    $result = pembagian($var1, $var2);
    echo "Hasil pembagian " . $var1 . " dan " . $var2 . " adalah " . $result;