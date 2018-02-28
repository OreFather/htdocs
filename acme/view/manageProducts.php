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
 $navList = $_SESSION['navList'];include$_SERVER['DOCUMENT_ROOT'].'/acme/addons/acmeHeader.php'; ?>
    
    <h1 id="pageTitle">Manage Products</h1>
    <div id="mainContent">
        
 
        
        <form action="../products/index.php">
            <button type='submit' name='action' value='product' id="newButton">Create Product</button>
        </form>
        
        
        <form action="../products/index.php">
            <button type='submit' name='action' value='category' id="newButton">Create Category</button>
        </form>
        
    </div>
    <footer>
         <?php include$_SERVER['DOCUMENT_ROOT'].'/acme/addons/acmeFooter.php'; ?>
    </footer>
   
    </section>
    
    
   <script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>    
  <script src="../js/acme.js"></script>
</body>
</html>