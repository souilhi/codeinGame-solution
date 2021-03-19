<?php
echo "
    <strong>Test 1</strong>
    <p>
    Écrivez un programme qui affiche la température la plus proche de 0 parmi les données d'entrée. Si deux nombres sont aussi proches de zéro, alors l'entier positif sera considéré comme étant le plus proche de zéro (par exemple, si les températures sont -5 et 5, alors afficher 5).
    </p>
<hr/>

<code>
function closestToZero(array $ts)
{
    $result = 0;
    if (!empty($ts)) {
        $result = $ts[0];
        for($i = 1; $i < count ($ts) ; $i ++) {
            if(abs($result) > abs($ts[$i]) or (abs($result) == abs($ts[$i]) and $ts[$i] > $result)) {
                $result = $ts[$i];
            }
        }
    }
    return $result;
}

$a = closestToZero([70,3,5,-9,-4,]);

echo $a;

</code>
";

function closestToZero(array $ts)
{
    $result = 0;
    if (!empty($ts)) {
        $result = $ts[0];
        for($i = 1; $i < count ($ts) ; $i ++) {
            if(abs($result) > abs($ts[$i]) or (abs($result) == abs($ts[$i]) and $ts[$i] > $result)) {
                $result = $ts[$i];
            }
        }
    }
    return $result;
}

$result = closestToZero([-11,-2,-8,-4,-5]);

echo $result;

echo "<br>";

$n = [70,3,5,-9,-4];
fscanf(STDIN, "%d", $n);
$inputs = explode(" ", fgets(STDIN));

echo $inputs;
echo $inputs;

$a = 2;
$b = 5;
$c = $a ** $b;
echo $c;
/* 
for ($i = 0; $i < $n; $i++)
{

    $t = intval($inputs[$i]);
    echo $t;
} */

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

