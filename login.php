<?php
session_unset();
?>
<html>
    <head>
        <title>Inicia sesion</title>
    </head>
    <body>
        <form method="post" action="enlace.php">
            <p>Introduce tu user:
                <input type="text" name="user"/>
            </p>
            <p>Introduce tu contraseña:
                <input type="password" name="pass"/>
            </p>
            <p>No soy un robot:
                <input type="checkbox" name="captcha"/>
            </p>
            <p><input type="submit" name="submit" value="Submit"/></p>
        </form>
    </body>
</html>