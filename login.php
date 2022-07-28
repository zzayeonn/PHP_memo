<!DOCTYPE html>
<html>
    <head>
        <title>php-sea Login</title>
    </head>
    <body>
        <?php 
            require_once("inc/header.php"); 
            if(isset($_COOKIE['login_id'])){
                $login_id = $COOKIE['login_id'];
                $login_save = "checked";
            }
        ?>
        <h1>php-sea Login</h1>
        <form method="POST" action="login.post.php">
        <p>
            ID  
            <input type="text" name="login_id" id="login_id" />
        <p>
        <p>
            PASSWORD  
            <input type="password" name="login_pw" />
        <p>
        <div>
            <input type="checkbox" name="login_save" id="login_save">Remember ID
        </div>
        <div>    
            <input type="submit" value="Login">
        </div>
        </form>
    </body>
</html>
