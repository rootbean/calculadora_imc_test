<?php

include_once('conexion-bd.php');

/**
 * Registrar resultado IMC en la bd
 * @author Ruber Rodríguez <ruber19@gmailcom>
 * @version 1.0
 * @param float $peso
 * @param float $estatura
 * @return string configuración de la conexión
 */
function saveResultadosIMC($peso, $estatura) {
    try {
        $result_bd = conexionBD();
        $insert_datos = "INSERT INTO resultados_imc(peso, estatura, id_usuario) VALUES (?, ?, ?)";
        $result = $result_bd -> prepare($insert_datos);
        $result -> execute(array($peso, $estatura, 3));
    } catch (Exception $e) {
        die('Error: '.$e->GetMessage());
        // throw new Exception('Error al guardar el registro.');
    }

    echo 'El registro fue guardado';
}


?>