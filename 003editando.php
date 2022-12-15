<?php
    
$conexion = mysqli_connect("localhost", "root", "", "lol");

if(mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

    $id = $_GET['id'];
    $nombre = $_GET['champ'];
    $roles = $_GET['rol'];
    $dificultades = $_GET['diff'];
    $rol = '';
    $diff = '';

    foreach ($roles as $role) {
        $rol = $role;
    }

    foreach ($dificultades as $dificultad) {
        $diff = $dificultad;
    }

    $consulta = "UPDATE `champ`
    SET `name`='$nombre' ,rol='$rol', difficulty='$diff'
    WHERE id = $id";
    $actualizarChamp = mysqli_query($conexion, $consulta);

?>