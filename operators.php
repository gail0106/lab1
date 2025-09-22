<?php
$a = 10;
$b = 5;

echo "<h5>Arithmetic Operators</h5>";
echo "$a / $b = " . ($a / $b) . "<br>";
echo "$a % $b = " . ($a % $b) . "<br>";
echo "$a * $b = " . ($a * $b) . "<br>";
echo "$a - $b = " . ($a - $b) . "<br>";
echo "$a + $b = " . ($a + $b) . "<br>";


echo "<h5>Comparison Operators</h5>";
echo "$a < $b  : " . ($a < $b ? "true" : "false") . "<br>";
echo "$a == $b : " . ($a == $b ? "true" : "false") . "<br>";
echo "$a >= $b : " . ($a >= $b ? "true" : "false") . "<br>";
echo "$a != $b : " . ($a != $b ? "true" : "false") . "<br>";
echo "$a <= $b : " . ($a <= $b ? "true" : "false") . "<br>";
echo "$a > $b  : " . ($a > $b ? "true" : "false") . "<br>";


echo "<h5>Logical Operators</h5>";
echo "!($a == $b)        : " . (!($a == $b) ? "true" : "false") . "<br>";
echo "($a > 0 || $b < 0) : " . (($a > 0 || $b < 0) ? "true" : "false") . "<br>";
echo "($a > 0 && $b > 0) : " . (($a > 0 && $b > 0) ? "true" : "false") . "<br>";

?>