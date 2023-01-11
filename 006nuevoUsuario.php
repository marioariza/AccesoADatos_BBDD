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

    $conexion = null;

    try {
        $conexion = new PDO('mysql:host=localhost; dbname=lol', 'root', '');
    } catch (PDOException $e) {
        echo $e->getMessage();
    } 

    try {
    
        $id = $_POST['id2'];
        $name = $_POST['name'];
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $email = $_POST['mail'];

        $datos = "SELECT * FROM `user`";
        $query = $conexion->prepare($datos);
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute();

        $results = $query->fetchAll();

        foreach ($results as $dato) {
            if ($dato["username"] == $user) {
                header("Location: 005registro.php?error=user");
            } else if ($dato["email"] == $email) {
                header("Location: 005registro.php?error=email");
            }
        }

        $sql = "INSERT INTO `user` VALUES (:id, :nombre, :usuario, :contrasenia, :email)";

        $sentencia = $conexion->prepare($sql);
        $finish = $sentencia -> execute( [
            "id" => $id,
            "nombre" => $name,
            "usuario" => $user,
            "contrasenia" => password_hash($pass, PASSWORD_BCRYPT),
            "email" => $email
        ]);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conexion = null;

    ?>
</body>
</html>