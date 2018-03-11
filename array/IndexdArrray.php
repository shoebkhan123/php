<?php
/*
An array stores multiple values in one single variable:
An array is a special variable, which can hold more than one value at a time.


*/

$names = array('Shoeb', 'Anju', 'vivek', 'pria');
echo 'Hi! '.$names[0].'<br>';
echo 'Hi! '.$names[1].'<br>';
echo 'Hi! '.$names[3].'<br>';
echo 'Hello! '.$names[2].'<br>';

//anthor way of defining an Indexed array.....
$city= array();
$city[2] = 'Chennai'; 
$city[3] = 'Mumbai'; 
$city[1] = 'Bangalore'; 
$city[0] = 'Delhi';

echo "Capital City: ". $city[0].'<br>';
echo "Silicon City: ". $city[1];




?>