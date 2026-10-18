<?php
$a = 10;
$b = "10";
$c = 7;

var_dump($a == $b);
echo "<bz>";

var_dump($a === $b);
echo "<bz>";

var_dump($a != $c);
echo "<bz>";

var_dump($a > $b);
echo "<bz>";

var_dump($a < $c);
echo "<bz>";

var_dump($a >= 10);
echo "<bz>";

var_dump($a <= 9);
echo "<bz>";

echo "Spaceship: " . ($a <=> $c);
?>