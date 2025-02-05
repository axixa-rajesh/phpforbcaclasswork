<?php 
$per=50;
switch(true):
    case ($per>=60 && $per<=100): echo "First"; break;
    case ($per>=50 && $per<60): echo "Second"; break;
    case ($per>=36 && $per<50): echo "third"; break;
    case ($per>=0 && $per<36): echo "fail"; break;
    default: echo "Invalid";
endswitch;
?>