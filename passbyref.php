<?php 
$a=10;
$b=&$a;
$a=30;
$b=$b-5;
echo $a,"\n";
echo $b;
?>