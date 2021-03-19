<?php




echo "<hr>";


    function estPair ($n) {
        return ($n % 2 == 0);
    }

    for ($i=0; $i<10; $i++) {
        $n = rand(10,100);
        if (estPair($n)) { echo ("[$i] $n est pair\n"."<br>"); }
        else { echo ("[$i] $n est impair\n"."<br>"); }
    }

echo "<hr>";

$tableau = array();
    for ($i = 0; $i < 10; $i++) {
        $tableau[] = rand(10, 100);
    }
    print_r($tableau);
    echo ("le tableau contient les entiers : ".implode(',', $tableau)."\n");

