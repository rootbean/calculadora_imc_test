<?php

include_once('conexion-bd.php');

/**
 * Registrar usuarios en la bd
 * @author Ruber Rodríguez <ruber19@gmailcom>
 * @version 1.0
 * @param string $nombre
 * @param string $apellidos
 * @param string $email
 * @param string $password
 * @param string $id_tipo_documento
 */
function guardarUsuario($nombres, $apellidos, $email, $password, $id_tipo_documento) {
    try {
        $result_bd = conexionBD();
        $insert_datos = "INSERT INTO usuarios(nombres, apellidos, email, password, id_tipo_documento) VALUES (?, ?, ?, ?, ?)";
        $result = $result_bd -> prepare($insert_datos);
        $result -> execute(array($nombres, $apellidos, $email, $password, $id_tipo_documento));
    } catch (Exception $e) {
        die('Error: '.$e->GetMessage());
        // throw new Exception('Error al guardar el registro.');
    }

    echo 'El registro fue guardado';
}


?>