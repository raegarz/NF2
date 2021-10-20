<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>UF1 NF2</title>
    </head>
    <body>
        <p>10 conceptos mas importantes</p>
        <ol>
            <li>Si pones un checkbox recordar que el valor que devuelve es true o false</li>
            <li>en la funcion date hay que saber con que zona horaria trabajas</li>
            <li>una cookie se tiene que grabar en la pagina anterior a donde la grabes, si no se grabara constantemente</li>
            <li>depende de la letra que pongas dentro de date tendras que fijarte por donde empieza/acaba</li>
            <li>tener en cuenta que si quieres poner una comilla dentro tiene que ir con una \ antes para que no se confunda al interpretarlo</li>
            <li>al crear una cookie tienes que darle un tiempo extra</li>
            <li>si vas a poner una variable por url ten en cuenta que afecta si tiene espacios o no</li>
            <li>puedes usar ?? para dar otro valor a una variable</li>
            <li>el urlencode codifica una variable como una cadena para poder paar datos de una pagina a otra</li>
            <li>hay que dar un valor alternativo a la cookie para cuando se elimine no de error</li>
        </ol>
        <div style="border:1px solid black; width:12%;">
            <?php
            echo "Nota del documento: ";
            echo rand(1,10);
            ?><br><?php
            echo "Nota del profesor: ";
            echo rand(1,10);
            ?><br><?php
            echo "Mi nota : ";
            echo rand(1,10);
            ?>
        </div>
    </body>
</html>