<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/as/components/example/Example.php";

$obj = new Example();
$insert = $obj->insert();

echo "DATA_INSERT:";
//var_dump($insert);