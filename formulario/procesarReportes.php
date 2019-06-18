<?php
    $nombre = $_POST["n"];
    $telefono = $_POST["te"];
    $tipo = $_POST["t1"];
    $sexo =$_POST["s"];
    $tamaño = $_POST["ta"];
    $lugar = $_POST["l"];
    $foto = addslashes(file_get_contents($_FILES["fotoMascota"]["tmp_name"]));
    $descripcion = $_POST["d"];

    if ($tipo == "otro")
    {
      $tipo = $_POST["t2"];
      
    }
    $pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");    

    $sql="INSERT INTO reporte VALUES (NULL,'$nombre','$telefono','$tipo','$sexo','$tamaño','$lugar','$foto','$descripcion')";
    $pdo->query($sql);    
    header("Location: ../index.php");  
?>