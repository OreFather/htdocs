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
    
    <h1 id="pageTitle">Welcome to ACME</h1>
    
    <div id="homePage"></div>
    <div id="mainContent">
        
        
        <form action="../model/product-model.php" method="post">
            Category Name:<br>
            <input type="text" name="action" required>
                <br>
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
