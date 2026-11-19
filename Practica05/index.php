<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer pagina web en PHP - 250900</title>
</head>
<body>
    <?php

    $nombre = "Jeovany Cantellano Vargas";
    $carrera_estudiante="T.S.U En Desarrollo de Software Multiplatadorma";
    echo "<h1> Hola mundo desde PHP! </h1>";
    echo "<h2> Estas usando la version de PHP: " . phpversion(). "</h2>";
    ?>
    <hr>
    <?php
    echo "<h3> Mi nombre es: $nombre y estudio: $carrera_estudiante</h3>";
    ?>
    
    <?php
    $x = 10;
    $y = 5;
    $z = '3';

    echo "<h3> la suma de $x + $y es: " . ($x + $y) . "</h3>";
    echo "<h3> la suma de $x + $y + $z es: " . ($x + $y + $z) . "</h3>";

    function multiplicar($a, $b)
    {
        $resultado = $a * $b;
        echo "<h4> la multiplicacion de $a * $b es: $resultado </h4>";
        return $resultado;
    }
    echo "<h4> la multiplicacion de 3 x 3 es:" . multiplicar(3, 3) . "</h4>";
    echo "<h4> la multiplicacion de $x x $z es: " . multiplicar($x, $z) .  "</h4>";
    echo "<h4> la multiplicacion de 1250 x 325 es :" . multiplicar(1250, 325) .  "</h4>";
    echo "<hr>";
    echo "<p> el resultado de la ultima multiplicacion es: $resultado </p>";

    function myTest()
    {
        static $w = 0;
        echo "$w <br>";
        $w++;
    }
    myTest();
    myTest();
    myTest();
    myTest();
    myTest();

    echo "$w";
    myTest();
    myTest();

    #funcion para saber el tipo de dato de una variable 
    /* var_dump() es una funcion de nos permite conocer
    el tipo de dato de una variable y su valor no es necesario programarla por ya esta implementada en PHP */

    echo "<p> la variale <strong>nombre</strong> es de tipo: ";
    echo var_dump($nombre);
    echo "</p>";

    echo "<p> la variables <strong>nombre</strong> es de tipo:";
    var_dump($carrera_estudiante);
    echo "</p>"

    $fecha_nacimiento = date("2007/09/2007");

    echo "<p> la variables <strong>fecha_nacimiento</strong> es de tipo: ";
    var_dump($fecha_nacimiento);
    echo "</p>";

    $fecha_hoy = date(2026/11/09);
    $edad_actual = $fecha_hoy - $fecha_nacimiento;
    echo "<p> la edad actual es: $edad_actual </p>";
    ?>


</body>
</html>