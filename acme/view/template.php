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
    
    <?php include$_SERVER['DOCUMENT_ROOT'].'/acme/addons/acmeHeader.php'; ?>
    
    <h1 id="pageTitle">Welcome to ACME</h1>
    
    <div id="homePage"></div>
    <div id="mainContent">
    
        
    </div>
    <footer>
        &copy;2017 ACME Inc., All rights reserved.
        <br/>
        All images used are belived to be in "Fair Use". Please notify the Webmaster if any are not and they will be removed.
    </footer>
    <?php include$_SERVER['DOCUMENT_ROOT'].'/acme/addons/acmeFooter.php'; ?>
    </section>
    
    
   <script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>    
  <script src="js/acme.js"></script>
</body>
</html>