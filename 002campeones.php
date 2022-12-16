<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>
<?php

$conexion = mysqli_connect("localhost", "root", "", "lol");

if(mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$consulta = "SELECT * FROM `champ`";
$listaChamp = mysqli_query($conexion, $consulta);

if ($listaChamp) {
    foreach($listaChamp as $champs) {
        echo "<b>Campeón $champs[id] = </b><b>Name: </b> $champs[name] - <b>Rol: </b> $champs[rol] - <b>Difficulty: </b> $champs[difficulty] <b>|||  OPCIONES ----></b><a class='btn btn-danger' href='003editando-form.php?id=$champs[id]'>EDITAR</a>
        <a class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal$champs[id]'>BORRAR</a><br><br>
        
        <div class='modal fade' id='exampleModal$champs[id]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h1 class='modal-title fs-5' id='exampleModalLabel'>Borrar campeón League Of Legends</h1>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        <p>¿Estás seguro de que quieres eliminar a $champs[name]?</p>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>
                        <a type='button' class='btn btn-primary' href='003borrar.php?id=$champs[id]'>Borrar</a>
                    </div>
                </div>
            </div>
        </div>";

    }
}
?>
</body>
</html>