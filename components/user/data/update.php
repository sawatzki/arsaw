<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__) . $ds . '..') . $ds;

include_once "{$base_dir}User.php";

$obj = new User();


$data['id'] = $_POST['id'];
$data['title'] = $_POST['title'];
$data['description'] = $_POST['description'];

$update = $obj->update($data);

//echo $update;
echo json_encode($data);