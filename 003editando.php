<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
    
$conexion = mysqli_connect("localhost", "root", "", "lol");

if(mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
} else {
    echo "<h1>Datos actualizados correctamente !!!</h1><br><br>";
    echo "<button><a href='002campeones.php'>Ver resumen</a></button>";
}

    $id = $_POST['id'];
    $nombre = $_POST['champ'];
    $roles = $_POST['rol'];
    $dificultades = $_POST['diff'];
    $rol = '';
    $diff = '';
    $desc = $_POST['des'];

    foreach ($roles as $role) {
        $rol = $role;
    }

    foreach ($dificultades as $dificultad) {
        $diff = $dificultad;
    }

    $consulta = "UPDATE `champ`
    SET `name`='$nombre' ,rol='$rol', difficulty='$diff', `description`='$desc'
    WHERE id = $id";
    $actualizarChamp = mysqli_query($conexion, $consulta);

?>
</body>
</html>