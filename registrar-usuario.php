<?php
include_once('./persistencia/usuarios.php');

$nombres = '';
$apellidos = '';
$email = '';
$password = '';
$repite_password = '';
$mensaje_error = '';

if (isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['repite_password'])) {

    if ($_POST['nombres'] == '') {
        $mensaje_error = 'El nombre es requerido <br>';
    }

    if ($_POST['apellidos'] == '') {
        $mensaje_error =  $mensaje_error.'El apellido es requerido <br>';
    }

    if ($_POST['email'] == '') {
        $mensaje_error =  $mensaje_error.'El email es requerido';
    }

    if ($_POST['password'] == '') {
        $mensaje_error =  $mensaje_error.'Password es requerido';
    }

    if ($_POST['repite_password'] == '') {
        $mensaje_error =  $mensaje_error.'Repetir password es requerido';
    }

    $nombres = strip_tags($_POST['nombres']);
    $apellidos = strip_tags($_POST['apellidos']);
    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);
    $repite_password = strip_tags($_POST['repite_password']);

    if ($password == $repite_password) {
        // $password = sha1($password);

        $password = password_hash($password, 1);

        guardarUsuario($nombres, $apellidos, $email, $password, 1);
    } else {
        $mensaje_error =  $mensaje_error.'Las contraseñas no coinciden!';
    }

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Registrar Usuario</title>
</head>
<body>
    <!-- HEADER -->

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">IMC</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registrar-imc.php">Registrar IMC</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="resultados-imc.php" tabindex="-1">Resultados</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a class="nav-link" href="#" tabindex="-1">Registrarse</a>
                    <a class="nav-link" href="#" tabindex="-1">Iniciar Sesión</a>
                    <a class="nav-link" href="#" tabindex="-1">Perfil</a>
                    <a class="nav-link" href="#" tabindex="-1">Salir</a>
                </form>
                </div>
            </div>
        </nav>

    </header>

    <!-- END HEADER -->

    <!-- START SECTIONS -->

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-4">
                    <form action="registrar-usuario.php" method="POST">
                        <div class="mb-3">
                            <label for="formNombres" class="form-label">Nombres</label>
                            <input type="text" name="nombres" class="form-control" 
                                id="formNombres" placeholder="Nombres" required>
                        </div>
                        <div class="mb-3">
                            <label for="formApellidos" class="form-label">Apellidos</label>
                            <input type="text" name="apellidos" class="form-control" 
                                id="formApellidos" placeholder="Apellidos" required>
                        </div>
                        <div class="mb-3">
                            <label for="formEmail" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" 
                                id="formEmail" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="formPassword" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" 
                                id="formPassword" placeholder="Password" required>
                        </div>
                        <div class="mb-3">
                            <label for="formRepitePassword" class="form-label">Repite Password</label>
                            <input type="password" name="repite_password" class="form-control" 
                                id="formRepitePassword" placeholder="RepitePassword" required>
                        </div>
                        <button type="submit" class="btn btn-success">Registrar</button>  
                        <div>
                            <p class="text-danger"> <?php echo $mensaje_error ?></p>
                        </div>
                    
                    </form>
                 
                </div>
                <div class="col-7"></div>
            </div>
        
        </div>
    
    </section>

    <!-- END SECTIONS -->


    <!-- START FOOTER -->

    <footer></footer>

    <!-- END FOOTER -->

    <!-- START JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- END JS -->

</body>
</html>
