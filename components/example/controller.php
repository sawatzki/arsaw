<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/components/$component/Example.php";

$data = new Example();
//$examples = $data->index();

require_once "components/$component/view/index.php";
