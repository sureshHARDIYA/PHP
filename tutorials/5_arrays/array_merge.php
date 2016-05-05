<?php
/**
 * Created by PhpStorm.
 * User: sureshkumarmukhiya
 * Date: 5/5/16
 * Time: 12:37 PM
 */

$post1 = ["This is title", "This is body", "tag1", "New Comment"];

$post2 = ["This is title", "This is body", "tag1", "New Comment"];

$post = array_merge($post1, $post2);


print_r($post);