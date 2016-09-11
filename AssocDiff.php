<?php
/**
 * This is PHP program to find difference between associative array.
 * It preserves the key.
 */

$required =  [
   0 => [
     1 => 10,
     2 => 40
 ],
   1 => [
     1 => 10,
     2 => 50
 ],
   2 => [
     1 => 10,
     2 => 60
 ],
   3 => [
     1 => 20,
     2 => 40
 ],
   4 => [
     1 => 20,
     2 => 50
 ],
   5 => [
     1 => 20,
     2 => 60
 ],
   6 => [
     1 => 30,
     2 => 40
   ],
   7 => [
     1 => 30,
     2 => 50
   ],
   8 => [
     1 => 30,
     2 => 60
   ]
 ];

$existing =  [
   0 => [
     1 => 10,
     2 => 40
   ],
   1 => [
     1 => 10,
     2 => 50
   ],
   2 => [
     1 => 20,
     2 => 40
   ],
   3 => [
     1 => 20,
     2 => 50
   ]
 ];


$difference = array_udiff($required, $existing, function (array $var1, array $var2) {
    return implode('-', $var1) <=> implode('-', $var2);
});

echo "<pre>";
print_r($difference);

//Output
/*
Array
(
    [2] => Array
    (
        [1] => 10
        [2] => 60
    )

    [5] => Array
    (
    [1] => 20
    [2] => 60
    )

    [6] => Array
    (
    [1] => 30
    [2] => 40
    )

    [7] => Array
    (
    [1] => 30
    [2] => 50
    )

    [8] => Array
    (
    [1] => 30
    [2] => 60
    )
)
*/