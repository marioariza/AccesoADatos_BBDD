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
$orden = $_GET['orden'];

if ($row == 'rol') {
    $consulta = "SELECT * FROM `champ` ORDER BY CONCAT($row) $orden";
} else {
    $consulta = "SELECT * FROM `champ` ORDER BY $row $orden";
}

$listaChamp = mysqli_query($conexion, $consulta);

if ($listaChamp) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#
                    <a href='003orderby.php?row=id&orden=ASC' class='text-decoration-none'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-up' viewBox='0 0 16 16'>
                        <path fill-rule='evenodd' d='M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z'/>
                    </svg>
                    </a>
                    <a href='003orderby.php?row=id&orden=DESC'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-down' viewBox='0 0 16 16'>
                        <path fill-rule='evenodd' d='M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z'/>
                    </svg>
                    </a>
                    </th>
                    <th scope='col'>Nombre
                    <a href='003orderby.php?row=name&orden=ASC' class='text-decoration-none'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-up' viewBox='0 0 16 16'>
                        <path fill-rule='evenodd' d='M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z'/>
                    </svg>
                    </a>
                    <a href='003orderby.php?row=name&orden=DESC'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-down' viewBox='0 0 16 16'>
                        <path fill-rule='evenodd' d='M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z'/>
                    </svg>
                    </a>
                    </th>
                    <th scope='col'>Rol
                    <a href='003orderby.php?row=rol&orden=ASC' class='text-decoration-none'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-up' viewBox='0 0 16 16'>
                        <path fill-rule='evenodd' d='M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z'/>
                    </svg>
                    </a>
                    <a href='003orderby.php?row=rol&orden=DESC'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-down' viewBox='0 0 16 16'>
                        <path fill-rule='evenodd' d='M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z'/>
                    </svg>
                    </a>
                    </th>
                    <th scope='col'>Dificultad
                    <a href='003orderby.php?row=difficulty&orden=ASC' class='text-decoration-none'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-up' viewBox='0 0 16 16'>
                        <path fill-rule='evenodd' d='M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z'/>
                    </svg>
                    </a>
                    <a href='003orderby.php?row=difficulty&orden=DESC'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-down' viewBox='0 0 16 16'>
                        <path fill-rule='evenodd' d='M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z'/>
                    </svg>
                    </a>
                    </th>
                    <th scope='col'>Descripci??n
                    <a href='003orderby.php?row=description&orden=ASC' class='text-decoration-none'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-up' viewBox='0 0 16 16'>
                        <path fill-rule='evenodd' d='M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z'/>
                    </svg>
                    </a>
                    <a href='003orderby.php?row=description&orden=DESC'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-down' viewBox='0 0 16 16'>
                        <path fill-rule='evenodd' d='M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z'/>
                    </svg>
                    </a>
                    </th>
                </tr>
            </thead>
            <tbody>";

    foreach($listaChamp as $champs) {

        echo"<tr>
                <th scope='row'>$champs[id]</th>
                    <td>$champs[name]</td>
                    <td>$champs[rol]</td>
                    <td>$champs[difficulty]</td>
                    <td>". substr($champs['description'], 0 ,20) ." ... 
                    <a class='btn btn-primary boton' data-bs-toggle='modal' data-bs-target='#exampleModal$champs[id]'>Leer descripci??n</a>
                    </td>
            </tr>
             
        <div class='modal fade' id='exampleModal$champs[id]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h1 class='modal-title fs-5' id='exampleModalLabel'>Descripci??n de $champs[name]</h1>
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
    </table><br>
    
    <div class='mb-3 w-100 d-flex justify-content-center'>
        <a href='003campeones.php' class='btn btn-primary'>Restaurar orden</a>
    </div>";
}

?>
</body>
</html>