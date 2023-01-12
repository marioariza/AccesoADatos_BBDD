<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/custom.js"></script>
</head>
<body>

    <?php

    $error = $_GET["error"] ?? "";

    if ($error == "user" || $error == "email") {
        echo '<div class="alert alert-danger" role="alert">¡Este ' . $error . ' ya esta en uso! Cambialo y vuelve a intentarlo.</div>';
    }

    ?>

    <h1 class="titulo005 text-center m-3">Bienvenido al inicio de sesión de jugadores de League of Legends.</h1>
    <br>

    <div class="formulario d-flex justify-content-center">
        <form action="006comprobarUsuario.php" method="post" class="formulario3">
            <div class="mb-3 w-100">
                <input type="number" name="id" value="0" hidden>
                <label for="username" class="form-label"><b>Nombre de usuario:</b></label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="username" placeholder="Nombre de usuario..." minlength="5" maxlength="15" required>
                <p>El nombre de usuario debe tener al menos 5 carácteres y un máximo de 15 carácteres.</p>
                <label for="password" class="form-label"><b>Contraseña:</b></label>
                <input type="password" class="form-control" id="exampleFormControlInput1 password" name="password" placeholder="Contraseña..." minlength="5" maxlength="15" required>
                <a onclick="mostrarCon()" id="boton_contraseña">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg>
                </a>
                <p>La contraseña debe tener al menos 5 carácteres y un máximo de 15 carácteres.</p>
            </div>
            <div class="mb-3 w-100 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            </div>
        </form>
    </div>
    <br><br>
    <div class="m-3">
        <p>¿No tienes una cuenta? Registrate en <a href="005registro.php" class="btn btn-primary">Registro</a></p>
    </div>
</body>
</html>