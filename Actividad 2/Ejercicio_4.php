<?php
// Creamos la función para imprimir una pirámide de asteriscos
function piramide($altura) {
    for ($i = 1; $i <= $altura; $i++) {
        // Imprimir espacios en blanco antes de los asteriscos
        echo str_repeat(" ", $altura - $i);

        // Imprimir los asteriscos
        echo str_repeat("*", 2 * $i - 1);

        // Agregamos un salto de línea después de cada fila
        echo PHP_EOL;
    }
}

// Probamos la función
piramide(5);
/* Resultado:
    *
   ***
  *****
 *******
*********
*/
?>
