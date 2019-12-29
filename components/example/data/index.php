<?php

$file_path = explode("www", __DIR__);
if (isset($file_path[1])){
    include_once $_SERVER['DOCUMENT_ROOT'] . $file_path[1] . "/../Example.php";
}else{
    include_once $_SERVER['DOCUMENT_ROOT'] . "/components/example/Example.php";
}

$startFrom = $_POST['startFrom'];

$data = new Example();
$rows = $data->index($startFrom);

echo json_encode($rows);
