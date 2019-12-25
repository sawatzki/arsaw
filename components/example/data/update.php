<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/as/components/example/Example.php";

$obj = new Example();


$data['id'] = $_POST['id'];
$data['title'] = $_POST['title'];
$data['description'] = $_POST['description'];

$update = $obj->update($data);

//echo $update;
echo json_encode($data);