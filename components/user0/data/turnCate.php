<?php

$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__) . $ds . '..') . $ds;

include_once "{$base_dir}User.php";

$obj = new User();
$insert = $obj->turncate();

echo $insert;


