<!DOCTYPE html>
<html>
    <head>
        <title>php-sea Register</title>
    </head>
    <body>
        <?php #require_once("inc/header.php"); ?>
        <h1>php-sea Register</h1>
        <form method="POST" action="regist.post.php">
        <p>
            ID : 
            <input type="text" name="login_id" />
        <p>
        <p>
            PASSWORD : 
            <input type="password" name="login_pw" />
        <p>
        <p>
            NAME : 
            <input type="text" name="login_name" />
        <p>
        <p><input type="submit" value="Register"></p>
        </form>
    </body>
</html>
