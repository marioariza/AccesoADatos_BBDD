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
}

$consulta = "SELECT * FROM `champ`";
$listaChamp = mysqli_query($conexion, $consulta);

if ($listaChamp) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Nombre</th>
                    <th scope='col'>Rol</th>
                    <th scope='col'>Dificultad</th>
                </tr>
            </thead>";

    foreach($listaChamp as $champs) {
        // echo "<b>Campeón $champs[id] = </b><b>Name: </b> $champs[name] - <b>Rol: </b> $champs[rol] - <b>Difficulty: </b> $champs[difficulty] <br><br>";


        echo "<tbody>
          <tr>
            <th scope='row'>$champs[id]</th>
            <td>$champs[name]</td>
            <td>$champs[rol]</td>
            <td>$champs[difficulty]</td>
          </tr>
        </tbody>";
    }

    echo "</table>";
}

?>
</body>
</html>