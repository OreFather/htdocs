<?php


//require_once 'acme/library/connections.php';
require_once 'C:\xampp\htdocs\acme\library\connections.php';
require_once 'C:\xampp\htdocs\acme\model\acme-model.php';
require_once 'C:\xampp\htdocs\acme\model\product-model.php';

$categories = getCategories();

$_SESSION['navList'] = ""; 

$navList = '<ul>';
$navList .= "<li><a href='/acme/view/home.php' title='View the Acme home page'>Home</a></li>";
foreach ($categories as $category) {
$navList .= "<li><a href='../index.php?action=".urlencode($category['categoryName'])."' title='View our $category[categoryName] product line'>$category[categoryName]</a></li>";
}
$navList .= '</ul>';

$_SESSION['navList'] = $navList;



function catIdGet(){
$catList = '<select name="catId" form="productSubmit">' ;
foreach ($categories as $category) {
    $catList .= "<option value='$category[categoryId]'";
        
    if(isset($catId)){
        
        if(category['categoryId'] === $catId){
            $catList .= ' selected ';
        }
    }

$catList .= ">$category[categoryName]</option>";
}
$catList .= '</select>';

$_SESSION['catList'] = $catList;

}