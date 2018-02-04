<?php
require_once 'library/connections.php';
require_once 'model/acme-model.php';

$catigories = getCategoires();

var_dump($categories);
exit;

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = "home";
    }
}


switch ($action){
    case 'home':
        include 'view/home.php';
        break;
}