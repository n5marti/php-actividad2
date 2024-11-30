<?php
// Creamos la función para invertir un array
function listaInvertida($array) {
    // Usamos la función array_reverse para invertir el array
    return array_reverse($array);
}

// Probamos la función
$numeros = [1, 2, 3, 4, 5];
$resultado = listaInvertida($numeros);
print_r($resultado); // Salida: [5, 4, 3, 2, 1]
?>
