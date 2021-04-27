<?php
include_once('funciones.php');
include_once('./persistencia/resultados_imc.php');

$peso = 0;
$estatura = 0;

if (isset($_POST['estatura']) && isset($_POST['peso'])) {

    if ($_POST['estatura'] == '') {
        echo 'La estatura es obligatoria';
    }

    if ($_POST['peso'] == '') {
        echo 'El peso es obligatorio';
    }

    $estatura = strip_tags($_POST['estatura']);
    $peso = strip_tags($_POST['peso']);

    echo 'Estatura: '.$estatura;
    echo '<br>';
    echo 'Peso: '.$peso;
    echo '<br>';
    try {
        $resultado = calcularIMC($peso, $estatura);
    } catch (Exception $e) {
        die('Error: '.$e->GetMessage());
    }
    
    echo 'Resultado:'.$resultado;

    saveResultadosIMC($peso, $estatura);

}

?>