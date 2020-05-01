<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login KDE-INVENTARY</title>
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resources/css/shards.min.css">
    <link rel="stylesheet" href="../../resources/icons/css/all.min.css">
</head>

<body style="overflow-y:hidden;overflow-x:hidden">

    <div class="row">
        <div class="col-lg-5 d-flex justify-content-end">
            <img src="../../Resources/img/login.png" height="590" class="d-none d-sm-none d-md-block">
        </div>
        <div class="col-lg-5 ml-lg-5 mt-lg-5 pt-lg-3" style="background-color: White">
            <div class="mt-5 pt-5">
                <form class="container">
                    <div class="my-3 mb-5">
                        <h2 class="text-center">Login KDE</h2>
                        <small id="emailHelp" class="form-text text-muted text-center">Bienvenido administrador, ingrese aqui sus credenciales para poder hacer uso del sistema.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Correo</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="d-flex justify-content-between">

                            <div class="custom-control custom-checkbox mt-4 mb-4">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">Recordar</label>
                            </div>
                            <small id="emailHelp" class="form-text text-muted mt-4"><a href="recuperarpaso1.php" style="text-decoration: none;">Recuperar Contraseña</a></small>
                        </div>
                        <a class="btn btn-success" href="inicio.php" role="button">Iniciar Sesion</a>
                </form>
            </div>
        </div>
    </div>


    <script src="../../resources/js/bootstrap.min.min.js"></script>
    <script src="../../resources/js/jquery-3.4.1.min.min.js"></script>
    <script src="../../resources/js/shards.min.js"></script>
</body>

</html>