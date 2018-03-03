<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ACME Template</title>
  <meta name="description" content="Template file">
  <meta name="author" content="Colby">

  <link rel="stylesheet" href="../css/acmeStyle.css">
</head>

<body>
    
    <section class="mainContainer">
    
    <?php 
    session_start();
    $navList = $_SESSION['navList'];
    include$_SERVER['DOCUMENT_ROOT'].'/acme/addons/acmeHeader.php'; ?>
    
    <h1 id="pageTitle">Create Product</h1>
    
    <div id="homePage"></div>
    <div id="mainContent">
    
        <?php
    $catList = $_SESSION['catList'];
    echo $catList;
    ?>
        
        <form action="../model/product-model.php" target="_blank" method="post" id="productSubmit">
            <input type='hidden' name='catId' value='<?php htmlentities($catList)?>'/> 
            Product Name:
            <input type="text" name="invName" value="" required/>
            <br>
            Product Description:
            <input type="text" name="invDesc" value="" required/>
            <br>
            Image Path:
            <input type="text" name="invImage" value="" required/>
            <br>
            Thumbnail Path:
            <input type="text" name="invThumb" value="" required/>
            <br>
            Product Price:
            <input type="number" name="invPrice" value="" required/>
            <br>
            Stock Amount:
            <input type="number" name="invStock" value="" required />
            <br>
            Product Size:
            <input type="number" name="invSize" value="" required/>
            <br>
            Product Weight:
            <input type="number" name="invWeight" value="" required/>
            <br>
            Build Location:
            <input type="text" name="invLoca" value="" required/>
            <br>
            Product Vendor:
            <input type="text" name="invVendor" value="" />
            <br>
            Product Material:
            <input type="text" name="invStyle" value="" />
            <br>
            <input type="reset" id="newButton" value="Reset">
            <input type="submit" id="newButton" value="Submit">
        </form>
        
        
        
    </div>
    <footer>
        <?php include$_SERVER['DOCUMENT_ROOT'].'/acme/addons/acmeFooter.php'; ?>
    </footer>
    
    </section>
    
    
   <script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>    
  <script src="js/acme.js"></script>
</body>
</html>