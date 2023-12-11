<?php

// Declaramos las variables
$duracion = 9;
$costo = 0;

// Calculamos el costo de la llamada
if ($duracion <= 3) {
  $costo = 200;
} else {
  $costo = 200 + ($duracion - 3) * 30;
}

// Imprimimos el costo de la llamada
echo "El costo de la llamada es: $costo";

?>