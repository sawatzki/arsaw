<?php

$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__) . $ds . '..') . $ds;

include_once "{$base_dir}Example.php";

$startFrom = $_POST['startFrom'];

$data = new Example();
$rows = $data->index($startFrom);

echo json_encode($rows);
