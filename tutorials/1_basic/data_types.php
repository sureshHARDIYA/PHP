<?php 
/*
There are two major types of data types in PHP. They are scalar and composite.
 */

/*
There are 4 types of scalar data types. 
1. boolean: either true or false
2. int: integer value
3. string: a collecton of binary data
4. float: a signed floating point value
*/

/*
Numeric Values: There are two types of numbers: integers and floating point values. The int type is used to represent signed integers. Floating numbers are used for decimal numbers. Since PHP is scripting language we dont have to declare variable types. This is one of the reason why PHP is called scripting language. 
 */

echo "SCALAR data types."."<hr/>";

$a = 1;
$b = "A";
$c = "Apple";
$d = 3.124857143;
$e = TRUE;


echo "Integer: ";
echo $a;
echo "<br/>";

echo "Character: ";
echo $b;
echo "<br/>";

echo "String: ";
echo $c;
echo "<br/>";

echo "Float: ";
echo $d;
echo "<br/>";

echo "Boolean: ";
echo $e;
echo "<br/>";


echo "Composite data types."."<hr/>";
/*
 In addition to scalar data types , there are two composite data types or compund data types. They are arrays and objects. 
 */


//Arrays are ordered data elements

//Objects are containers of both data and code. They form the basic of Object oriented programming. We will take a separate tutorials for object oriented programming. 