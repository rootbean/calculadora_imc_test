<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>IMC</title>
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
                    <form action="calculadora-imc.php" method="POST">
                        <div class="mb-3">
                            <label for="formEstatura" class="form-label">Estatura (Mts)</label>
                            <input type="number" step="0.01" name="estatura" class="form-control" id="formEstatura" placeholder="Estatura">
                        </div>
                        <div class="mb-3">
                        <label for="formPeso" class="form-label">Peso (Kgs)</label>
                            <input type="number" step="0.01" name="peso" class="form-control" id="formPeso" placeholder="Peso">
                        </div>
                        <button type="submit" class="btn btn-success">Calcular</button>  
                    
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
