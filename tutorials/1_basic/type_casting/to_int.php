<?php
/*
PHP takes care of converting between data types transparently when a datum is used in a expression. It is however, possible to force the converion of a value to specific type using type conversion operators. 
 */

//declaring a variable
$x = 19.9992;


//here float is type casted to integer
//outputs 19
echo (int)$x;

/*
 A value can not be converted to special types for example we can not convery any value to a resource. However, a resource can be converted to a numberic or string data types. 
 */