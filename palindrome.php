<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>
    <style>
        
        #palabra{
            border: 2px solid black;
            width: 200px;
            height: 37px; 
        }
        #procesar{
            background-color:forestgreen;
            color:aliceblue;
            width: 80px;
            height: 40px;
        }
        #limpiar{
            background-color:brown;
            color:cornsilk;
            width: 80px;
            height: 40px;
        }
    </style>
</head>
<body style="background-color:dimgray;">
    <div style="float: left; width: 600px; height: 400px; margin-left:2em; background-color:gainsboro; color:black; padding:2em;">
        <h1 style="text-align: center;">Saber si una palabra es palindrome</h1>
        <p style="font-size:large; text-align:justify;">Palindrome: Palabra o frase cuyas letras están dispuestas de tal manera que resulta la misma leída de izquierda a derecha que de derecha a izquierda ; p. ej., anilina ; oso, etc.
        .. <br> <br> Con esta pagina web puedes escribir la palabra que quieras y te dira si es palindrome o no. </p>
        <br>
        <br>
        <br>
        <!--Formulario con el metodo get-->
        <form action="">
            <label for="palabra">Escribe una palabra:</label>
            <input type="text" name="palabra" id="palabra">
            <input type="submit" value="Procesar" id="procesar">
            <input type="reset"  value="Limpiar" id="limpiar">
        </form>
    </div> 

    <div style="float: right; width: 600px; height: 400px; margin-right:2em; background-color:gainsboro; color:black; padding:2em;">
        <h2 style="text-align: center;">Resultados</h2>
    <?php
        
        require 'palabra.php';

    ?>

    </div>
    

</body>
</html>

