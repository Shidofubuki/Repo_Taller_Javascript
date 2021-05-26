<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 1</title>
</head>
<body>
    <?php
    echo "Actividad 1";
    echo "<br>";
    echo "<hr>";
    echo "Ejercio #1";
    echo "<hr>";
        
    $x = 4;
    $z = 6;
    $Resultado = $x * $z + $z + $x;
    echo ("El resultado de Y es: ".$Resultado); 
    echo "<hr>";
    echo "Ejercio #2";
    echo "<hr>";
    echo "Tabla de Multiplicar <br>";

    $Pedro = 2;

    for ( $i=1; $i <=10; $i++) {
        $total = $i * $Pedro;
        echo $Pedro. " * ". $i . " = " . $total. "<br>"; 
    }
    echo "<hr>";
    echo "Ejercicio #3";
    echo "<hr>";

    $Shido = 1;
    $valorminuto = 0 ;
    $total= 0;

    if ($Shido <=3) {
        $valorminuto = ($Shido + 200)-1;      
     }

    if ($Shido >3) {
        $total =($Shido * 30 + 200)-90;
    }
    echo ("El valor de la llamada es: ".$valorminuto + $total);     

    echo "<hr>";
    echo "Ejercicio #4";
    echo "<hr>";
   
    echo "<h2>Cuadrado</h2>";
    $lado= 7;
    $lado=5;
    $area = $lado * $lado;
    echo "El area del Cuadrado es: ".$area ;

    echo "<h2>Triangulo</h2>";
    $bas=7;
    $alt=5;
    $area = ($bas*$alt)/2; 
    echo "El area del Triangulo es: ".$area ;

    echo "<h2>Ciruculo</h2>";

    $are=1;
    $totall = ($are**2) * M_PI; 
    echo "El area del Circulo es: ".$totall ;
   
    
    ?>
    </body>
</html>