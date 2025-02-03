<?php 
/* 
1) echo can accepts multiple arguments using "," seprator(But it shound not be enclosed in"()"). Print accepts only single argument
*/
// $a=10;
// $b="Rajesh";
// print $a, $b; //error
// echo $a,$b; //10Rajesh
/* 
2) print always return int(1) where as echo is like statment return nothing(so we can't use echo in expression)
*/
print print "hello"; //hello1
//  echo echo "hello"; // error
/* 
echo and print both are not a function these are language constructor
when argument type is not string then echo /print type cast in string
so 
5 = string(1) "5"
true = string(1) "1"
5.3 = string(3) "5.3"
false = string(0) ""
null = string(0) ""
*/
/* echo and print both print string result */
// echo "Rajesh"; //Rajesh
// echo 5; //5
// echo true; // 1 
// echo 5.3; //5.3
// echo false; // 
// echo null; // 
?>