$conexion = mysqli_connect("localhost", "root", "", "lol");

//     if(mysqli_connect_errno()) {
//         echo "Failed to connect to MySQL: " . mysqli_connect_error();
//         exit();
//     }

//     $consulta = "SELECT * FROM `champ`";
//     $listaChamp = mysqli_query($conexion, $consulta);

//     if ($listaChamp) {
//         foreach($listaChamp as $champs) {
//             $consulta = "DELETE FROM `champ` WHERE id = $champs[id]";
//             $borrarChamp = mysqli_query($conexion, $consulta);
//             if ($borrarChamp) {
//                 echo "fgdgdf";
//             }
//         }
//     }