<?php

fscanf(STDIN, "%d %d %d", $a, $b, $c);

$maior_ab = ($a + $b + abs($a - $b)) / 2;

$maior = ($maior_ab + $c + abs($maior_ab - $c)) / 2;

echo $maior . " eh o maior\n";

?>
