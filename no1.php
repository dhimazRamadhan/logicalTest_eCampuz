<?php
    $aplikasi[1] = "gtAkademik";
    $aplikasi[2] = "gtFinansi";
    $aplikasi[3] = "gtPerizinan";
    $aplikasi[4] = "eCampuz";
    $aplikasi[5] = "e0viz";

    $index = 1;
    while (isset($aplikasi[$index])) {
        echo $aplikasi[$index] . "<br>";
        $index++;
    }