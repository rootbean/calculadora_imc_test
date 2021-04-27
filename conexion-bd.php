<?php

/**
 * Realizar conexión con la BD
 * @author Ruber Rodríguez <ruber19@gmailcom>
 * @version 1.0
 * @return string configuración de la conexión
 */
function conexionBD () {
    try {
        $conexion_bd = new PDO('mysql:host=localhost;dbname=imc_test_celia', 'root', '123456');
        $conexion_bd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion_bd -> exec('SET CHARACTER SET utf8');
        return $conexion_bd;
    } catch (Exception $e) {
        die('Error: '.$e->GetMessage());
    }
}

?>
