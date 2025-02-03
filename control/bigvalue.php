<?php
$a = readline("enter value for a : ");
$b = readline("enter value for b : ");
$c = readline("enter value for c : ");
if($a>$b){
    if($a>$c)
        echo "a =$a is big";
    else{
        if($a==$c)
            echo "a and c ($a) are equal and big from b($b)";
       else
        echo "c =$c is big";
    }
}else{
    if ($b > $c){
        if($b==$a)
            echo "a and b ($a) are equal and big from c($c)";
        else
            echo "b =$b is big";
    }
    else{
        if($b==$c){
            if($a==$c)
                echo "all are equal";
            else
                echo "c and b ($b) are equal and big from a($a)";
        }else
              echo "c =$c is big";
    }
}
/* if($a>$b && $a>$c):
    echo "a =$a is big";
elseif($b > $a && $b > $c):
    echo "b =$b is big";
elseif($c > $a && $c > $b):
    echo "c =$c is big";
elseif ($a== $b && $a > $c):
    echo "a and b ($a) are equal and big from c($c)";
elseif ($b == $c && $b> $a):
    echo "c and b ($b) are equal and big from a($a)";
elseif ($a == $c && $a > $b):
    echo "a and c ($a) are equal and big from b($b)";
else:
    echo "all are equal";
endif; */