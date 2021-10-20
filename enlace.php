<?php
session_start();
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['captcha'] = $_POST['captcha']??0;
$_SESSION['authuser'] = 0;
setcookie('user','1',time()+15);

//comprobar user y password
if(($_SESSION['username'] == 'chema') and 
($_SESSION['userpass'] == 'betis') and 
($_SESSION['captcha'] == true)){
    $_SESSION['authuser']=1;
}else{
    $error = $_GET['usuario'] ?? 'error, el  nombre de usuario o la contraseña no es valida';
    echo $error;
    echo 'lo siento, pero no tienes permisos para ver esta pagina';
    exit();
}
?>
<html>
    <head>
        <title>Encuentra mi pelicula favorita</title>
    </head>
    <body>
        <?php
        echo "Bienvenido a nuestra pagina, ";
        echo $_SESSION["username"];
        echo "! <br>";
        $myfavmovie = urlencode("El ilusionista");
        echo "<a href='pagina.php?favmovie=$myfavmovie'>";
        echo "Click here to see information about my favorite movie!";
        echo "</a>";
        ?>
    </body>
</html>