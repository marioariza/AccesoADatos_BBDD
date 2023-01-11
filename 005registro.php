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

    $error = $_GET["error"];

    if ($error == "user") {
        echo "<div class='modal' tabindex='-1'>
        <div class='modal-dialog'>
          <div class='modal-content'>
            <div class='modal-header'>
              <h5 class='modal-title'>ERROR</h5>
              <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
              <p>¡Este nombre de usuario ya esta en uso!</p>
            </div>
          </div>
        </div>
      </div>";
    } else if ($error == "email") {
        echo "<div class='modal' tabindex='-1'>
        <div class='modal-dialog'>
          <div class='modal-content'>
            <div class='modal-header'>
              <h5 class='modal-title'>ERROR</h5>
              <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
              <p>¡Este nombre de usuario ya esta en uso!</p>
            </div>
          </div>
        </div>
      </div>";
    }

    ?>

    <h1 class="titulo005 text-center m-3">Bienvenido al formulario de registro de jugadores de League of Legends.</h1>
    <br>

    <div class="formulario d-flex justify-content-center">
        <form action="006nuevoUsuario.php" method="post" class="formulario3">
            <div class="mb-3 w-100">
                <!-- <input type="number" name="id2" value="<?=$id?>" hidden> -->
                <input type="number" name="id" value="0" hidden>
                <label for="name" class="form-label"><b>Nombre y apellidos:</b></label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Nombre y apellidos..." required>
                <br>
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
                <label for="mail" class="form-label"><b>Email:</b></label>
                <input type="email" class="form-control" id="exampleFormControlInput1" name="mail" placeholder="Email..." size="30" required>
            </div>
            <div class="mb-3 w-100 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Enviar datos</button>
            </div>
        </form>
    </div>
</body>
</html>