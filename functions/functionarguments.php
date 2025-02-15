<?php
function sum(int $x,float $y){
    echo $x+$y;
}
sum(5.8,6.2);
#optional argument
//3 variable length arguemnt(...)
// function sum(...$args){
//     echo array_sum($args),"\n";
// }
// sum(2,3,4,56);
// sum(4,3);
//2 func_get_args function
// function myfun(){
//     $args=func_get_args();
//   echo array_sum($args);
//   echo "\n";
// }
// myfun(4,3,4, 54);
// myfun(4, 3);
//1 using set default value
// function myfun($a=0,$b=5){
//     echo $a+$b,"\n";
// } 
// myfun(7, 3);
// myfun(3);
// myfun();
//mandatory parameters
// function show($a,$b){
//     echo $a," ",$b,"\n";
// }
// show(5, 3);
// show(12,34,4,5);