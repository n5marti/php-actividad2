<?php
// Creamos la funcion para contar la frecuencia de caracteres
function frecuenciaCaracteres($cadena) {
    $frecuencia = []; // Array asociativo para almacenar la frecuencia

    // Recorrer cada carácter de la cadena
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i]; // Obtener el carácter actual

        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++; // Incrementar la frecuencia si ya existe
        } else {
            $frecuencia[$caracter] = 1; // Inicializar frecuencia en 1
        }
    }

    return $frecuencia; // Retornar el array asociativo
}

// Probe la función mi nombre "Noe Martinez Martinez"
  
$texto = "Noe Martinez Martinez";
print_r(frecuenciaCaracteres($texto)); 

/* RESULTADO
    [N] => 1
    [o] => 1
    [e] => 3
    [ ] => 2
    [M] => 2
    [a] => 2
    [r] => 2
    [t] => 2
    [i] => 2
    [n] => 2
    [z] => 2
*/
?>
