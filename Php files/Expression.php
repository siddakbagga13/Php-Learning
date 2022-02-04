<?php 

$a=2;
$b=3;
$c=4;
$c=$a++ + --$b + $c++ + $b++ + ++$a + $c--;
echo $a;
echo $b;
echo $c;
?>