<?php
//Products Controller

require_once '../addons/functions.php';
session_start();
 $navList = $_SESSION['navList'];
 $catList = $_SESSION['catList'];

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = "filler";
    }
}

switch ($action){
    case 'product':
        //include '../view/addProduct.php';
        header ('Location: ../view/addProduct.php');
        break;
    case 'category':
        header ('Location: ../view/addCategory.php');
        break;
    default :
        header ('Location: ../view/manageProducts.php');
        //include '../view/manageProducts.php';
        break;
}