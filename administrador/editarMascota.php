<?php
    $id = $_GET["id"];
    $pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");
    $resultado = $pdo -> query("SELECT * FROM reporte WHERE id='$id'");
    $fila = $resultado -> fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar mascota</h1>
    <form action="procesarEdicion.php" method="post">
        <div>
            <input type="text" name="n" value="<?php echo $fila["nick"]?>">
        </div>
        <div>
            <input type="text" name="d" value="<?php echo $fila["descripcion"]?>">
        </div>
        <input type="hidden" name="id" value=" <?php echo $id ?>">
        <div>

        </div>
        <button>Editar</button>
    </form>
</body>
</html>