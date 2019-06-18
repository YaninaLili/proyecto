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
    
    <marquee behavior="alternate" direction="left">
    <?php
        foreach($pdo->query("SELECT * FROM reporte" ) as $fila)
        { ?>
        <nav>
                <p><?php echo $fila["nick"]?></p> 
                <p><?php echo $fila["descripcion"]?></p> 
            <a href="formulario/solicitud.php">
            <p><?php echo $fila["tipo"]?></p> 
            <img src="data:image/png;base64,<?php echo base64_encode($fila["foto"]);?> " width="630" height="634">
            </a>
        </nav>  <?php  
        } ?>
    </marquee>
</body>
</html>