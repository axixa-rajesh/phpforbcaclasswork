<?php
$city= readline("Enter city : ") ;
$exp=readline("Enter exp : ");
$salary=55000;
if(!($city=="jaipur" or $exp<=5)){
$salary+= $salary*0.10;
} 
echo $salary;
// $a=0;
// $b=0;
// $c=--$a && $a+1 && $b++;

// var_dump( $a);
// echo "\n";
// var_dump( $b);
// echo "\n";
// var_dump($c);