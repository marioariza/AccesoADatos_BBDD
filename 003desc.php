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
                    <a href='003desc.php?row=name'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-down' viewBox='0 0 16 16'>
                        <path fill-rule='evenodd' d='M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z'/>
                    </svg>
                    </a>
                    </th>
                    <th scope='col'>Rol</th>
                    <th scope='col'>Dificultad</th>
                    <th scope='col'>Descripción</th>
                </tr>
            </thead>
            <tbody>";

    foreach ($listaChamp as $champs) {

        echo "<tr>
                <th scope='row'>$champs[id]</th>
                    <td>$champs[name]</td>
                    <td>$champs[rol]</td>
                    <td>$champs[difficulty]</td>
                    <td>
                    <a class='btn btn-primary boton' data-bs-toggle='modal' data-bs-target='#exampleModal$champs[id]'>Leer descripción</a>
                    </td>
            </tr>
             
        <div class='modal fade' id='exampleModal$champs[id]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h1 class='modal-title fs-5' id='exampleModalLabel'>Descripción de $champs[name]</h1>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        <p>$champs[description]</p>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>
                    </div>
                </div>
            </div>
        </div>";
    }

    echo "</tbody>
    </table>";
}
?>
</body>
</html>