<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Écrivez un programme qui affiche la température la plus proche de 0 parmi les données d'entrée. Si deux nombres sont aussi proches de zéro, alors l'entier positif sera considéré comme étant le plus proche de zéro (par exemple, si les températures sont -5 et 5, alors afficher 5).</p>
    <strong>Using PHP</strong>
    <?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

// $n: the number of temperatures to analyse
$STDIN = [1,-11,11,23,55];
//fscanf(STDIN, "%d", $n);
 $inputs = explode(" ", fgets($STDIN));
/*for ($i = 0; $i < $n; $i++)
{
    $t = intval($inputs[$i]); // a temperature expressed as an integer ranging from -273 to 5526
}*/

function TempclosestToZero(array $ts)
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

$result = 0;
//echo (count($inputs));
//print_r(array_values($inputs));
//echo gettype($inputs);

if(count($inputs) > 1){
    $result = TempclosestToZero($inputs);
}


echo $result;
// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    ?>
    <hr>
    <strong>Using Javascript</strong>
    <script>
    /**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

const n = parseInt(readline()); // the number of temperatures to analyse
var inputs = readline().split(' ');
var con = inputs.map(x=>+x)

var proche = 0;
if(con != null ){
    
 
proche = parseInt(con[0])

for (let i = 0; i < n; i++) {
    const t = parseInt(con[i]);// a temperature expressed as an integer ranging from -273 to 5526
    if(Math.abs(t) == Math.abs(proche)){
            proche = Math.abs(proche);
    } else if (Math.abs(t) < Math.abs(proche) ){

        proche = t;

    }
}
}

// Write an answer using console.log()
// To debug: console.error('Debug messages...');
//console.log(inputs);

console.log(proche);

    </script>
</body>
</html>