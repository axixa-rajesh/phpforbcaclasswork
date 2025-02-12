<?php
/* 
arrow and anonymous both are object of closure class. both use as callback and function returning function
arrow default return type function we did not use explicit return keyword. It's do not have function body {}. Its a one line function.
*/
//arrow function 
$x=fn()=>"this is arrow function";
echo $x();
//anonymous function (function which do not have name)
// $x=function(){
//     echo "this is anonymous function";

// } ;
// $x();
// function myfun(){
//     echo "my fun";
// }
// myfun();
?>