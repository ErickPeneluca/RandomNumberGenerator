<head>
    <link rel="stylesheet" href="style.css">
</head>
<?php

$numero = $_POST['range_number'];
$numero = (int) $numero;

$arr = [];

// var_dump(sizeof($arr));

for ($i=0; $i < $numero; $i++) { 
    $arr[$i] = rand(0, 9);
}

$arr = array_unique($arr);

while (count($arr) < $numero) {
    $arr[] = rand(0,9);
    $arr = array_unique($arr);
}

?>

<p>
    <?php
        foreach ($arr as $x) {
            echo "$x";
        }
    ?>
</p>