<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>EJERCICIOS</h1>
    <?php

    $dato1 = 8;
    if ($dato1>= 0) {
      echo "el numero es positivo";
      echo "</br>";
    }

      $dato2 = 5;
      if ($dato2> 1 & $dato2<10) {
        echo "dato 2 es mayor a 1 y menor que 10";
        echo "</br>";

    }
    $dato3 = 15;
    if ($dato3 > 10 || $dato3 <2 ) {
      echo "DATO 3 ES MAYOR A 10  o MENOR A 2";
      echo "</br>";

    }
    $numero1 = 100;
    $numero2 = 20;
    if ($numero1 >$numero2) {
      echo $numero1 + $numero2;
      echo $numero1 - $numero2;
    }
    elseif ($numero1 < $numero2) {
        echo $numero1 / $numero2;
        echo $numero1 % $numero2;
        echo $numero1 * $numero2;
      }
    else {
      echo "Los numeros ingresados son iguales";

  }
     ?>







  </body>
</html>
