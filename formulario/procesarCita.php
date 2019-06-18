<?php
    $nombre = $_POST["n"];
    $apellido = $_POST["a"];
    $dni = $_POST["d"];
    $direccion =$_POST["dir"];
    $tipo = $_POST["t1"];
    $sexo = $_POST["s"];
    $fecha = $_POST["fecha"];

    if ($tipo == "otro")
    {
      $tipo = $_POST["t2"];
      
    }
    $pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");
    $sql="INSERT INTO cita VALUES (NULL,'$nombre','$apellido','$dni','$direccion','$tipo','$sexo','$fecha' )";
    $pdo->query($sql);    
    header("Location: ../esterilizacion.php");    
?>