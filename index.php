<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>Ejercicios PHP</title>  
    </head>
    <body>
        <h1>Calcular nota final</h1>
        <br>

        <form name="form1" method="POST" action="definitiva.php">

            Taller 1(20%): <input type="text" name="txttaller1">
            <br>
            Taller 2(15%): <input type="text" name="txttaller2">
            <br>
            Cuestionario 1(22%): <input type="text" name="txtcuestionario1">
            <br>
            Cuestionario 2(10%): <input type="text" name="txtcuestionario2">
            <br>
            Proyecto Final(33%): <input type="text" name="txtproyecto">
            <br>
            <input type="submit" name="calcular" value="Calcular">

        </form>

        <h2>Ejercicio 2</h2>
        <p>
            Elaborar un algoritmo que muestre un mensaje de acuerdo a la edad de una persona:
            <br>
            -Si la edad es de 0 a 10 años "niño".
            <br>
            -Si la edad es de 11 a 14 años "pre-adolescente".
            <br>
            -Si la edad es de 15 a 18 años "adolescente".
            <br>
            -Si la edad es de 19 a 25 años "joven".
            <br>
            -Si la edad es de 26 a 64 años "adulto".
            <br>
            -Si la edad es mayor de 65 años "anciano".
        </p>

        <form name="form2" method="POST" action="edad.php">

            Edad: <input type="text" name="txtedad">

            <input type="submit" name="evaluar" value="Evaluar">


        </form>

    </body>
</html>