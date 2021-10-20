<?php
session_start();
?>
<html>
    <head>
        <title>Mi pagina</title>
    </head>
    <body>
    <?php
    //comprobar permisos
    
    if(($_COOKIE['user']??0) !="1"){
        echo "Lo siento, pero no tiene permisos para ver esta pagina ";
        echo "<a href='comentario.php'>";
        echo "Haz click aqui para ver mis comentarios</a>";
        exit();
    }else{
        
        echo "bienvenido a nuestra pagina, ";
        echo $_SESSION['username'];
        echo "<br>";

        echo "Mi pelicula favorita es ";
        echo $_GET['favmovie'];
        $movierate =5;
        echo "<br>";
        echo "Mi nota para esta pelicula es: ";
        echo $movierate;
        echo "/5<br>";
        date_default_timezone_set('America/New_York');
        echo "hoy es ";
        $dia = date("l");
        if($dia=="Monday"){echo "lunes";}
        if($dia=="Tuesday"){echo "martes";}
        if($dia=="Wednesday"){echo "miercoles";}
        if($dia=="Thursday"){echo "jueves";}
        if($dia=="Friday"){echo "viernes";}
        if($dia=="Saturday"){echo "sabado";}
        if($dia=="Sunday"){echo "domingo";}
    }
        
        ?>
    </body>
</html>