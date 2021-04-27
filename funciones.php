<?php

/**
 * Calcula el IMC de un usuario
 * @param int $peso
 * @param int $estatura
 * @return int resultado IMC
 * @author Ruber Rodríguez <ruber19@gmailcom>
 * @version 1.0
 */
function calcularIMC ($peso, $estatura) {

    // IMC -> peso / (estatura)2
    if ($estatura == 0) {
        throw new Exception('División por cero.');
    }
    
    $resultado = round($peso / ($estatura * $estatura), 2);
    return $resultado;
}

?>