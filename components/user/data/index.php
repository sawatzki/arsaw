<?php

$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__) . $ds . '..') . $ds;

include_once "{$base_dir}User.php";

$startFrom = $_POST['startFrom'];
$rowsCount = $_POST['rowsCount'];

$data = new User();
$rows = $data->index($startFrom, $rowsCount);

echo json_encode($rows);
