<?php
#19 array_filter: return new filtered array. Only return those elements who pass a test case.
// $a=[12,44,5,6,89,0,9,1,3,2];
// $b=array_filter($a,fn($val)=>$val%2==0);
// print_r($b);

#18 array_map: return new array with same size of array.It assocated a callback function to all array elements
// $a=[4,3,46,7,8,1];
// //  $b=array_map(fn($val)=>$val+2,$a);
// $b = array_map(function($val){
//     return  $val * 2;
// }, $a);

// print_r($b);
#15 array_push: insert new element in end of array
#16 array_pop : delete last element from array
#17 array_sum : sum all element of array
// $a=[5,2,4];
// array_push($a,55);
// array_pop($a);
// print_r($a);
// $tot=array_sum($a);
// echo $tot;
#14 compact: convert variable into array key
// $product="Dove";
// $price=80;
// $discount=10;
// $x=compact('product','price','discount');
// print_r($x);
#13 extract : convert array key elements into variables
// $a=['rajesh'=>36,'tej'=>42,'ekor'=>55];
// extract($a);
// echo $rajesh;
// echo $tej;
// echo $ekor;
#12 array_chunk : Split an array into chunks
// $x=[12,32,34,5,6,7,88,9,0,8,76,5,6];
// $b= array_chunk($x,3);
// print_r($b);
#11 explode : covert string into array
// $a="raju,faran,rancho";
// $b=explode(',',$a);
// print_r($b);
#10 implode :convert array into string
// $a=['Ram','Shyam','Mohan'];
// $b=implode(' ~ ',$a);
// echo $b;
#9 find key in array exist or not
// $friends=['prem'=>22,'Ashish'=>21,'Karan'=>18,'Tej'=>17,'Jainam'=>19,'sumit'=>19,'Hemant'=>18];
// if(array_key_exists('Karan',$friends)){
//     echo "found";
// }else{
//     echo "not found";
// }
#7 ksort: it sort keys rather then value in asc
#8 krsort: it sort keys rather then value in desc
// $a=[66=>5,4,52,99=>1,2,4,7];
// // ksort($a);
// krsort($a);
// print_r($a);

#5  asort: associative array sort only values in asc
#6  arsort: associative array sort only values in des
// $a=[66=>5,4,52,99=>1,2,4,7];
// arsort($a);
// // asort($a);
// print_r($a);
#3  sort: indexed array sort only values in asc
#4  rsort: indexed array sort only values in des
// sort and rsort both convert array into indexed array
// $a=[66=>5,4,52,99=>1,2,4,7];
// rsort($a);
// print_r($a);
#2 in_array: retrun true if value found in array
// $a=[23,"Ram","Rajesh",5,3];
// if(in_array('Rajesh',$a)){
//     echo "yes element found";
// }else{
//     echo "element not found";
// }
//#1 is_array : return bool result. return true when value type is array
// $a=[];
// if(is_array($a)){
//     echo "yes it is array";
// }else {
//     echo "this is not array";
// } 
/* 
is_array
in_array
array_key_exists
implode 
explode 
array_chunck
array_map
array_filter
extract
compact
array_push
array_pop
array_sum
sort 
rsort 
ksort 
krsort
asort
arsort
*/
?>