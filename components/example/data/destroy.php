<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/as/components/example/Example.php";

if (isset($_POST["id"])) {

    $id = $_POST['id'];

    $data = new Example();
    $row = $data->destroy($id);
}
