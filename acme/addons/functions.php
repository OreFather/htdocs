<?php

session_start();
require_once '../library/connections.php';
require_once '../model/acme-model.php';
require_once '../model/product-model.php';

$categories = getCategories();



$navList = '<ul>';
$navList .= "<li><a href='/acme/view/home.php' title='View the Acme home page'>Home</a></li>";
foreach ($categories as $category) {
$navList .= "<li><a href='../index.php?action=".urlencode($category['categoryName'])."' title='View our $category[categoryName] product line'>$category[categoryName]</a></li>";
}
$navList .= '</ul>';

$_SESSION['navList'] = $navList;

$catList = '<select name="catId" form="productSubmit">' ;
foreach ($categories as $category) {
    $catList .= "<option value=".urlencode($category['categoryId']).">$category[categoryName]</option>";
}
$catList .= '</select>';

$_SESSION['catList'] = $catList;