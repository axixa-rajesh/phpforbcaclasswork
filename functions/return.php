<?php
function sum(int|float $a,int|float $b):int|float{
        return $a+$b;
}
$x=sum(4.6,3);
var_dump($x);
// function ok($no):?string{
//     if($no==1){
//         return "welcome";
//     }
//     if($no==2){
//         return "Swagatam";
//     }
//     if($no==3){
//         return "hi bro";
//     }
//     return null;
    
// } 
// echo ok(3);
// function funname(string $name,int $age):string{
//     return "hello $name your age is $age";
// }
// echo funname("Rajesh",37);
?>