<?php
$sub = str_replace('index.php','', $_SERVER["PHP_SELF"]);
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root . $sub . "/components/$component/Appointment.php";

$data = new Appointment();


require_once "components/$component/view/index.php";
