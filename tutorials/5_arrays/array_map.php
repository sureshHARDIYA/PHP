<?php
/**
 * Created by PhpStorm.
 * User: sureshkumarmukhiya
 * Date: 5/5/16
 * Time: 1:52 PM
 */

$numbers = [1, 2, 3, 4, 5, 6];


$squared = array_map(function($n){
    return $n * $n;
},$numbers);

print_r($squared);