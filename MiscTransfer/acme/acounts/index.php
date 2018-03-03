<?php

//Acounts Controller
require_once '../addons/functions.php';

session_start();
 $navList = $_SESSION['navList'];

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = "home";
    }
}


switch ($action){
    case 'register':
        //header('Location: view/.php');
        include '../view/register.php';
        break;
    case "login":
        include '../view/login.php';
        break;
    default :
        include 'view/home.php;';
        break;
}