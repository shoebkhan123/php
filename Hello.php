<?php
function test()
{ 
	static $x = 10;
	echo $x.'<br>';
	$x++;

}

test();
test();
test();

?>

