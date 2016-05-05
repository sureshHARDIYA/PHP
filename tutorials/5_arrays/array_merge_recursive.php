<?php
/**
 * Created by PhpStorm.
 * User: sureshkumarmukhiya
 * Date: 5/5/16
 * Time: 1:31 PM
 */

echo "<pre>";
$ar1 = array("color" => array("favorite" => "red"), 5);
$ar2 = array(10, "color" => array("favorite" => "green", "blue", "yellow", "moon"), "pink");
$result = array_merge_recursive($ar1, $ar2);
print_r($result);
?>