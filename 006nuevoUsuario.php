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

    $conexion = mysqli_connect("localhost", "root", "", "lol");

    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    $id = $_POST['id'];
    $name = $_POST['name'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['mail'];

    $consulta = "INSERT INTO `user` VALUES ($id,'$name','$user','$pass','$email')";
    $listaChamp = mysqli_query($conexion, $consulta);       

    ?>
</body>
</html>