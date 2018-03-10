<?php
/*
If we call the function setHeight() without arguments it takes the default value as argument:
*/

function test($name = 'No Name')
{
	echo 'My friend: '. $name;
	echo '<br>';
}

test('Anju'); // call the function
test();
test('Deepa');
test('Vivek');
test('Shoeb');
test();
?>