<?php
//echo "CONTROLLER:" . $view;
require_once $_SERVER['DOCUMENT_ROOT'] . "/as/components/$view/Model.php";

$data = new Model();
$notes = $data->index();

require_once "components/$view/view/index.php";
