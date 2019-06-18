<?php  $pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root",""); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php include 'menu.php'; 
        if(isset($_GET["m"]))
        {
            foreach($pdo->query("SELECT * FROM solicitud" ) as $fila)
            {?> 
             
            <nav>
                <p><?php echo $fila["nombres"]?></p> 
                <p><?php echo $fila["apellidos"]?></p> 
                <a href="cargado">Ver Doc</a>
            </nav>  <?php  
            } 
        }
        if(isset($_GET["n"]))
        {

        }
        if(isset($_GET["p"]))
        {
            foreach($pdo->query("SELECT * FROM reporte" ) as $fila)
            { ?>
            <nav>
                <p><?php echo $fila["nick"]?></p> 
                <p><?php echo $fila["descripcion"]?></p> 
                <p> <a href="editarMascota.php?id=<?php echo $fila["id"]?>">Editar</a></p>
                <img src="data:image/png;base64,<?php echo base64_encode($fila["foto"]);?> " width="630" height="634">
            </nav>  <?php  
            } 
        }
    ?>
</body>
</html>