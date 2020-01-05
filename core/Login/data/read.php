<?php

$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__) . $ds . '..') . $ds;

require_once "{$base_dir}User.php";

$user = new Login();

$data['login'] = $_POST['login'];
$data['password'] = $_POST['password'];

$result = $user->getUser($data);
echo json_encode($result);