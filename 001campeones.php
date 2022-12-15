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
        echo "<b>Campeón $champs[id] = </b><b>Name: </b> $champs[name] - <b>Rol: </b> $champs[rol] - <b>Difficulty: </b> $champs[difficulty] <br><br>";
    }
}

?>