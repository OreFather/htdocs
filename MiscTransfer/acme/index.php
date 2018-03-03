<?php


//Main Controller

session_start();
require_once 'addons/functions.php';
 $navList = $_SESSION['navList'];




$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = "home";
    }
}


switch ($action){
    case 'home':
        //include 'view/home.php';
        header('Location: view/home.php');
        break;
    default:
        header('Location: view/home.php');
}
