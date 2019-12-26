<?php

define("ROOT", $_SERVER['DOCUMENT_ROOT']);

$component = "todo";

if(isset($_GET['component'])){
    $component = $_GET['component'];
}else{
    $component = "todo";
}

require_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/main.php";