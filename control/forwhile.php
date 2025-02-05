<?php 
$a=12521;
$n=0;
$val=$a;
while($val){
    $n=$n*10+$val%10;
    $val=(int)($val/10);
}
if($a==$n){
    echo "$a this is palindrome value";
}else{
    echo "$a this is not a palindrome value";
}
?>