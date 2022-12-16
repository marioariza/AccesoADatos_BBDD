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

$row = $_GET['row'];

$consulta = "SELECT * FROM `champ` ORDER BY $row DESC";
$listaChamp = mysqli_query($conexion, $consulta);

if ($listaChamp) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Nombre
                    <a href='003asc.php?row=name' class='text-decoration-none'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-up' viewBox='0 0 16 16'>
                        <path fill-rule='evenodd' d='M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z'/>
                    </svg>
                    </a>
                    <a href='003desc.php?row=name' class='text-decoration-none'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-down' viewBox='0 0 16 16'>
                        <path fill-rule='evenodd' d='M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z'/>
                    </svg>
                    </a>
                    <a href='003campeones.php' class='text-decoration-none'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-counterclockwise' viewBox='0 0 16 16'>
                        <path fill-rule='evenodd' d='M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z'/>
                        <path d='M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z'/>
                    </svg>
                    </a>
                    </th>
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