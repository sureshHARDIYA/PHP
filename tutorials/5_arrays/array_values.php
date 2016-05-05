<?php
/**
 * Created by PhpStorm.
 * User: sureshkumarmukhiya
 * Date: 5/5/16
 * Time: 1:23 PM
 */

$array = [
    'name' => 'Size',
    'translations' => [
        ["name" => 'Storrles', "locale" => 'nb-NO'],
        ["name" => "Size", "locale" => "en-GB"]
    ],
    "values" => [
        ["id" => 1, "name" =>"Small", "locale" =>"en-GB"],
        ["id" => 1, "name" =>"Medium", "locale" =>"en-GB"],
        ["id" => 1, "name" =>"Large", "locale" =>"en-GB"]
    ]
];

echo "<pre>";

$values = array_values($array);

$keys = array_keys($array);


print_r($values);

echo "<hr/>";

print_r($keys);