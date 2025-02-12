<?php 
/* 
when a function passed into a function as an agrument called callback function.
*/
function myfun($fun,$ary){
    foreach($ary as $k=>$val){
        $ary[$k]=$fun($val);
    }
    return $ary;
}
$a=[2,5,3];
$x = myfun(fn($v)=> $v * $v, $a);
// $x=myfun(function($v){
//     return $v*$v;
// },$a);
print_r($x);
?>