<?php 
class Abc{

}
class Xyz extends Abc{

}
$obj=new Xyz();
var_dump($obj instanceof Abc);
/* 
if,for,while,dowhile,foreach switch all statment not expression
*/
// $age=11;
// $name="Raju";
// echo "Hello $name you are ".(($age>=18)?"ele. ":"not ele. ")."for vote";
// $a=10;
// $b=10;
// $c=($a>$b)?"a = $a is big":(($a==$b)?"both are equal":"b=$b is big");
// $c=false?"if frist operand is true then return second operand": "if frist operand is false then return third operand";
// echo $c;
?>