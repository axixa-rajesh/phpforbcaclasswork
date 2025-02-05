<?php 
$a="ok";
$x= match ($a) {
     1=>"Rajesh" ,
     true=>"hello",
    "ok" => "bye",
};
echo $x;