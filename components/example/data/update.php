<?php
$file_path = explode("www", __DIR__);
if (isset($file_path[1])){
    include_once $_SERVER['DOCUMENT_ROOT'] . $file_path[1] . "/../Example.php";
}else{
    include_once $_SERVER['DOCUMENT_ROOT'] . "/components/example/Example.php";
}

$obj = new Example();


$data['id'] = $_POST['id'];
$data['title'] = $_POST['title'];
$data['description'] = $_POST['description'];

$update = $obj->update($data);

//echo $update;
echo json_encode($data);