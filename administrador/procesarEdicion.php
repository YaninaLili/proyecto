<?php 
    $id= $_POST["id"];
    $nick = $_POST["n"];
    $desc = $_POST["d"];

    $pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");
    $pdo -> query("UPDATE reporte SET nick='$nick', descripcion='$desc' WHERE id='$id'  ");
    header("Location:administrar.php")
?>
