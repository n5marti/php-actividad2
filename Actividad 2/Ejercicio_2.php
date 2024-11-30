<?php
// Creamos la función para sumar números pares
function sumaPares($array) {
    $suma = 0; // Inicializamos  la suma en 0

    // Recorremos cada número del array
    foreach ($array as $numero) {
        if ($numero % 2 === 0) { // Verificamos si el número es par
            $suma += $numero; // Agregamos el número par a la suma
        }
    }

    return $suma; // Retornar la suma total
}

// Probamos la función
$numeros = [1, 2, 3, 4, 5, 6];
echo sumaPares($numeros); // Salida: 12 (2 + 4 + 6)
?>
