<?php
/*
PHP is loosely typed meaning that iw will implicity change the type of varialbes as needed depending upon the operation being performed. 
 */


//valid way of naming
$name = "valid";

//valid
$_name = "Valid";

//valid
$NAME = "valid";

//invalid, must start with letter
//$1name = "invalid";

//assigned the string 123 to variable $name
$name = '123';

//again this string is assigned another value
$$name = '456';

//using curly braces we can output the value of 456 as string
echo ${'123'};


