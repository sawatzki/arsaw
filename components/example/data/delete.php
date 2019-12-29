<?php

$file_path = explode("www", __DIR__);
if (isset($file_path[1])){
    include_once $_SERVER['DOCUMENT_ROOT'] . $file_path[1] . "/../Example.php";
}else{
    include_once $_SERVER['DOCUMENT_ROOT'] . "/components/example/Example.php";
}


if (isset($_POST["id"])) {

    $id = $_POST['id'];
    $active = $_POST['active'];

//    echo ":::-:::" . $_POST['active'] . " !!!";

    if($active == "0"){
        $active = 1;
    }else{
        $active = 0;
    }


    $data = new Example();

    $delete = $data->delete($id, $active);

    if($delete){
        echo true;
    }else{
        echo false;
    }
}
