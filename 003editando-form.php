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

    $id = $_GET['id'];
    $consulta = "SELECT * FROM `champ` WHERE id = $id";
    $listaChamp = mysqli_query($conexion, $consulta);
    $row = mysqli_fetch_assoc($listaChamp);
    $name = $row["name"];
    $rol = $row["rol"];
    $diff = $row["difficulty"];
    $des = $row["description"];

    ?>
    
    <form action="003editando.php" method="post" class="formulario3">
        <div class="mb-3 w-25">
            <input type="number" name="id" value="<?=$id?>" hidden>
            <label for="champ" class="form-label"><b>Campeón:</b></label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="champ" value="<?=$name?>">
        </div>
        <div class="mb-3 w-50">
            <p><b>Rol:</b></p>
            <p><input class="form-check-input" type="radio" name="rol[]" id="rol" value="Assasin" <?php if($rol=='Assasin'){echo "checked=checked";}?> id="flexCheckDefault">Assasin</p>
            <p><input class="form-check-input" type="radio" name="rol[]" id="rol" value="Fighter" <?php if($rol=='Fighter'){echo "checked=checked";}?> id="flexCheckDefault">Fighter</p>
            <p><input class="form-check-input" type="radio" name="rol[]" id="rol" value="Mage" <?php if($rol=='Mage'){echo "checked=checked";}?> id="flexCheckDefault">Mage</p>
            <p><input class="form-check-input" type="radio" name="rol[]" id="rol" value="Marksman" <?php if($rol=='Marksman'){echo "checked=checked";}?> id="flexCheckDefault">Marksman</p>
            <p><input class="form-check-input" type="radio" name="rol[]" id="rol" value="Support" <?php if($rol=='Support'){echo "checked=checked";}?> id="flexCheckDefault">Support</p>
            <p><input class="form-check-input" type="radio" name="rol[]" id="rol" value="Tank" <?php if($rol=='Tank'){echo "checked=checked";}?> id="flexCheckDefault">Tank</p>
        </div>
        <div class="mb-3 w-50">
            <p><b>Dificultad:</b></p>
            <p><input class="form-check-input" type="radio" name="diff[]" id="diff" value="Baja" <?php if($diff=='Baja'){echo "checked=checked";}?> id="flexCheckDefault">Baja</p>
            <p><input class="form-check-input" type="radio" name="diff[]" id="diff" value="Moderada" <?php if($diff=='Moderada'){echo "checked=checked";}?> id="flexCheckDefault">Moderada</p>
            <p><input class="form-check-input" type="radio" name="diff[]" id="diff" value="Alta" <?php if($diff=='Alta'){echo "checked=checked";}?> id="flexCheckDefault">Alta</p>
        </div>
        <div class="mb-3 w-75">
            <label for="des" class="form-label"><b>Descripción:</b></label>
            <input type="text-area" class="form-control" id="exampleFormControlInput1" name="des" value="<?=$des?>">
        </div>
        <div class="mb-3 w-25">
            <button type="submit" class="btn btn-primary">Enviar datos</button>
        </div>
    </form>
</body>
</html>