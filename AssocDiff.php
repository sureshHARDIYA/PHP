<?php
/**
 * This is PHP program to find difference between associative array.
 * It preserves the key.
 */

$required =  [
   0 => [
     1 => 1,
     2 => 4
 ],
   1 => [
     1 => 1,
     2 => 5
 ],
   2 => [
     1 => 1,
     2 => 6
 ],
   3 => [
     1 => 2,
     2 => 4
 ],
   4 => [
     1 => 2,
     2 => 5
 ],
   5 => [
     1 => 2,
     2 => 6
 ],
   6 => [
     1 => 3,
     2 => 4
   ],
   7 => [
     1 => 3,
     2 => 5
   ],
   8 => [
     1 => 3,
     2 => 6
   ]
 ];

$existing =  [
   0 => [
     1 => 1,
     2 => 4
   ],
   1 => [
     1 => 1,
     2 => 5
   ],
   2 => [
     1 => 2,
     2 => 4
   ],
   3 => [
     1 => 2,
     2 => 5
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
        [1] => 1
        [2] => 6
    )

    [5] => Array
    (
    [1] => 2
    [2] => 6
    )

    [6] => Array
    (
    [1] => 3
    [2] => 4
    )

    [7] => Array
    (
    [1] => 3
    [2] => 5
    )

    [8] => Array
    (
    [1] => 3
    [2] => 6
    )
)
*/