<?php
    $nombre = $_POST["n"];
    $telefono = $_POST["te"];
    $tipo = $_POST["t1"];
    $sexo =$_POST["s"];
    $tamaño = $_POST["ta"];
    $lugar = $_POST["l"];
    $descripcion = $_POST["d"];

    if ($tipo == "O")
    {
        $tipo = $_POST["t2"];
        $pdo=new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");

    }
        

    $sql="INSERT INTO reportes VALUES (NULL,'$nombre','$telefono','$tipo, '$sexo', '$tamaño', '$lugar', '$descripcion')";
    $pdo->query($sql);    
    header("Location: index.php")  
?>