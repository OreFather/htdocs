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
    
    <h1 id="pageTitle">Login</h1>
    
    <div id="homePage"></div>
    <div id="mainContent">
        
        
        <form action="../acounts/index.php?action=login">
  Email:<br>
  <input type="text" name="firstname" required>
  <br>
  Password:<br>
  <input type="text" name="lastname" required>
  <br><br>
  <input type='submit' id="signinButton" value="Login">
  <!--  <input type="submit" value="Login">-->
</form> 
        
        <br>
  <!--<a type="button" href='../acounts/index.php?action=register' id="registerButton">Register</a>-->
        
  <form action="../acounts/index.php">
        <button type='submit' name='action' value='register' id="registerButton">Register</button>
       </form>
    </div>
    <footer>
        <?php include$_SERVER['DOCUMENT_ROOT'].'/acme/addons/acmeFooter.php'; ?>
    </footer>
    
    </section>
    
    
   <script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>    
<!--  <script src="js/acme.js"></script>-->
</body>
</html>