<?php
    $actividad = $_POST["ac"];
    $nombre =$_POST["n"];
    $apellido = $_POST["a"];
    $archivo = addslashes(file_get_contents($_FILES["c"]["tmp_name"]));

    $pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");  
    $sql="INSERT INTO voluntario VALUES (NULL,'$actividad','$nombre','$apellido','$archivo')";
    $pdo->query($sql);    
    header("Location: ../esterilizacion.php?n=2");  
?>