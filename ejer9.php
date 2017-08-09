<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Suma de pares y cuantos hay</p>
    <?php

$i=1;
$suma=0;
$cont=0;
while ($i <= 100) {

if ($i % 2 ==0) {
$suma=$suma+$i;
$cont++;

}
$i++;
}
echo "La suma de los números es: $suma</br>";
echo " Los números son: $cont</br>";



    ?>

  </body>
</html>
