<?php

function swap(&$x, &$y) {
    $tmp = $x;
    $x = $y;
    $y = $tmp;
}
$a = 45;
$b = 60;
swap($a, $b);

echo "$a . $b";
?>