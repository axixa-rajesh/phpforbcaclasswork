<?php 
$a=10;
$b=1;
$c=(--$a or ++$b);
var_dump( $a);
echo "\n";
var_dump( $b);
echo "\n";
var_dump($c);