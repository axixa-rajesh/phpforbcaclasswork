<?php 
$info=[
    'name'=>['first'=>'Rakesh','last'=>'kumar'],
    'gender'=>'male',
    'city'=>['Bikaner','jaipur','Jodhpur'],
    'salary'=>120000
];
echo $info['name']['first'], "\n";
echo $info['gender'], "\n";
echo $info['city'][2], "\n";
echo $info['salary'],"\n";
?>