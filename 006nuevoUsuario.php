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

    $conexion = null;

    try {
        $conexion = new PDO('mysql:host=localhost; dbname=lol', 'root', '');

        $id = $_POST['id'];
        $name = $_POST['name'];
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $email = $_POST['mail'];

        $datos = "SELECT * FROM `user`";
        $query = $conexion->prepare($datos);
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute();

        $results = $query->fetchAll();

        foreach ($results as $dato) {
            if ($dato["username"] == $user) {
                header("Location: 005registro.php?error=user");
            } else if ($dato["email"] == $email) {
                header("Location: 005registro.php?error=email");
            }
        }
        
        $sql = "INSERT INTO `user` VALUES (:id, :nombre, :usuario, :contrasenia, :email)";

        $sentencia = $conexion->prepare($sql);
        $finish = $sentencia -> execute( [
            "id" => $id,
            "nombre" => $name,
            "usuario" => $user,
            "contrasenia" => password_hash($pass, PASSWORD_BCRYPT),
            "email" => $email
        ]);

        echo "<h3 class='m-4'>Bienvenido $name</h3> 
        <b class='m-4'>-----------------------------------------------------------------------</b>
            <br>
            <div class='m-4'>
                <a type='button' class='btn btn-primary' href='003campeones.php'>Lista campeones LoL</a>
                <a type='button' class='btn btn-primary' href='002campeones.php'>Editar campeones LoL</a>
            </div>
            <h5 class='m-4'>Tu nombre de usuario es: </h5><h6 class='m-4'>$user</h6>
            <br>
            <h5 class='m-4'>Tu contrase??a es: </h5><h6 class='m-4'>$pass</h6>
            <b class='m-4'>-----------------------------------------------------------------------</b>
        <div class='m-4'>
            <a class='btn btn-primary boton' data-bs-toggle='modal' data-bs-target='#exampleModal'>Cerrar sesi??n</a><br><br>
        
            <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                <div class='modal-dialog'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h1 class='modal-title fs-5' id='exampleModalLabel'>Cerrar sesi??n</h1>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body'>
                            <p>??Est??s seguro de que quieres cerrar sesi??n en tu cuenta?</p>
                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>
                            <a type='button' class='btn btn-primary' href='005registro.php'>Cerrar sesi??n</a>
                        </div>
                    </div>
                </div>
            </div>

            <a class='btn btn-primary boton' data-bs-toggle='modal' data-bs-target='#exampleModal2'>Borrar cuenta</a><br><br>
        
            <div class='modal fade' id='exampleModal2' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                <div class='modal-dialog'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h1 class='modal-title fs-5' id='exampleModalLabel'>Borrar usuario</h1>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body'>
                            <p>??Est??s seguro de que quieres eliminar tu cuenta?</p>
                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>
                            <a type='button' class='btn btn-primary' href='005registro.php?borrar=si&usernow=$user'>Borrar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>";

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conexion = null;

    ?>
</body>
</html>