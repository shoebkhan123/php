<?php
/*
A string is a sequence of characters, like "Hello world!".

*/

$str = 'this is string.';
echo $str.'<br>';
echo('length of the str is: '.strlen($str)).'<br>';
echo('the number of words in  str is: '.str_word_count($str)).'<br>';
echo('Reverse of the str is: '.strrev($str)).'<br>';
echo('Possition if the is in str: '.strpos($str, 'is')).'<br>';




?>