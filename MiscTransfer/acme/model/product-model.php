<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/acme/library/connections.php';

function newCatigory($joe) {
$db = acmeConnect();
$prep = $db->prepare('INSERT INTO categories(categoryName) VALUES (:qaz)');
$prep->bindValue(':qaz', $joe);
$prep->execute();
$prep->closeCursor();
header('Location: ../index.php?action=home');
}

$action = filter_input(INPUT_POST, 'action');
//newCatigory('Sword');
//newCatigory($action);echo $action;
if($action){
    newCatigory($action);
}

function newProduct($invName, $invDesc, $invImage, $invThumb, $invPrice, $invStock, $invSize, $invWeight, $invLoca, $catId, $invVendor, $invStyle) {
    print_r($_POST);

    $db = acmeConnect();
    
    $prep = $db->prepare('INSERT INTO inventory(invName, invDescription, invImage, invThumbnail, invPrice, invStock, invSize, invWeight, invLocation, categoryId, invVendor, invStyle) VALUES (:invName, :invDesc, :invImage, :invThumb, :invPrice, :invStock, :invSize, :invWeight, :invLoca, :catId, :invVendor, :invStyle)');
    
    $prep->bindValue(':invName', $invName);
    $prep->bindValue(':invDesc', $invDesc);
    $prep->bindValue(':invImage', $invImage);
    $prep->bindValue(':invThumb', $invThumb);
    $prep->bindValue(':invPrice', $invPrice);
    $prep->bindValue(':invStock', $invStock);
    $prep->bindValue(':invSize', $invSize);
    $prep->bindValue(':invWeight', $invWeight);
    $prep->bindValue(':invLoca', $invLoca);
    $prep->bindValue(':catId', $catId);
    $prep->bindValue(':invVendor', $invVendor);
    $prep->bindValue(':invStyle', $invStyle);
    
    
    $prep->execute();
    
    $prep->closeCursor();
    header('Location: ../view/succes.php');
}

//newProduct("Saber", "A light sword built for quick movement", "/acme/images/products/saber.png", "/acme/images/products/saber.png", 50, 300, 24, 5, "France I think", 1, "Sensai", "Metal");






$invName = filter_input(INPUT_POST, 'invName');
$invDesc = filter_input(INPUT_POST, 'invDesc');
$invImage = filter_input(INPUT_POST, 'invImage');
$invThumb = filter_input(INPUT_POST, 'invThumb');
$invPrice = filter_input(INPUT_POST, 'invPrice');
$invStock = filter_input(INPUT_POST, 'invStock');
$invSize = filter_input(INPUT_POST, 'invSize');
$invWeight = filter_input(INPUT_POST, 'invWeight');
$invLoca = filter_input(INPUT_POST, 'invLoca');

$invVendor = filter_input(INPUT_POST, 'invVendor');
$invStyle = filter_input(INPUT_POST, 'invStyle');
$catId = filter_input(INPUT_POST, 'catId');






if($invDesc){
newProduct($invName, $invDesc, $invImage, $invThumb, $invPrice, $invStock, $invSize, $invWeight, $invLoca, $catId, $invVendor, $invStyle);
}














//$getuser = $db->query('SELECT * FROM userdata WHERE username='' . $user . ''');
//also this $stmt = $db->prepare('INSERT INTO post(title, content, submitted_by) VALUES(:title, :content, :uid)');
//$stmt->bindValue(':title',$title);
//$stmt->bindValue(':content', $content);
//$stmt->bindValue(':uid', $id);
//$stmt->execute();