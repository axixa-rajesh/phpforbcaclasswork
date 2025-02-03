<?php 
$a=[12,44=>3,4,5=>5,78,4];
$findele=42;
$f=0;
foreach($a as $k=>$val){
    if($val==$findele){
        $f=1;
        echo "value $findele found at $k key \n";
    }
}
if(!$f){
    echo "Element not found in array";
}
// $sum=0;
// foreach($a as $val){
//     $sum+=$val;
// }
// echo "Total is : $sum";
// $names=['Jainam','Teju','Karan','Ashish','Prem'];
// foreach ($names as $v) {
//     echo "$v  \n";
// }
// foreach($names as $key =>$value){
//     echo "$key = $value \n";
// }
?>