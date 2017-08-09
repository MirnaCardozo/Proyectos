<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Numeros impares</title>
  </head>
  <body>
    <p>Algoritmo que muestre los números impares del 1 hasta el 100.</p>
    <?php
  $i=1;
  while ($i <= 100) {
    if (($i%2) ==1){
      echo " Númros impares son: $i</br>";
    }
    $i++;
  }

     ?>


  </body>
</html>
