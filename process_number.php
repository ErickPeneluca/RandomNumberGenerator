<?php

$numero = $_POST['range_number'];
$numero = (int) $numero;

$arr = [];

// var_dump(sizeof($arr));

for ($i=0; $i < $numero; $i++) { 
    $arr[$i] = rand(0, 9);

    if ($i > 0) {
        if ($arr[$i] == $arr[$i - 1]) {
            while ($arr[$i] == $arr[$i - 1]) { 
                $arr[$i] = rand(0, 9);
            }

        }
    }
}

foreach ($arr as $x) {
    echo "$x";
}

?>