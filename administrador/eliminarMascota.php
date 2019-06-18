<?php
    $id = $_GET["id"];
    $pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");
    $pdo -> query("DELETE FROM reporte WHERE id='$id' ");
    header("Location:administrar.php");
?>