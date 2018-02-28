

<div id="logo">
        <img src="../images/site/logo.png" alt="Logo">
        
            
            <link rel="stylesheet" href="../css/acmeStyle.css">
    
    <!--<a type="button" href='../acounts/index.php?action=login' id="loginButton">Login</a>-->
    
    
    <form action="../acounts/index.php">
        <button type='submit' name='action' value='login' id="loginButton">Login</button>
       </form>
<!--    <form acton="../acme/acounts/index.php?action=login">
        <input type="submit" value="Login1">
    </form>-->
    
    </div>
    
    <nav>
        <noscript>Javascript is needed for this site to function. Either enable it or switch to a real browser.</noscript>
        
        <?php   echo $navList;  ?>
    </nav>

