<?php
# IIFE (Immediated Invoke function exrpession )
(function(){
    echo "I a iife";
})();
echo (fn()=> "I a iife")();
exit;
#anonymous arrow function (which do not have name. use as single line expression)
$a = fn()=>"this is anonymous arrow function";
echo $a();
#anonymous function (which do not have name. use as expression)
$a=function(){
    echo "this is anonymous function";
};
$a();
#named function
// function show(){
//     echo "this is show function! \n";
// }
// show();
// $a='show';
// $a();
// var_dump($a);
?>