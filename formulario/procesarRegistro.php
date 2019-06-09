<?php
    $nombre = $_POST["n"];
    $apellido = $_POST["a"];
    $nusuario =$_POST["u"];
    $dni = $_POST["d"];
    $sexo = $_POST["s"];
    $direccion = $_POST["dir"];
    $telefono = $_POST["t"];
    $email = $_POST["e"];
    $contraseña = $_POST["c"];
    $confirmar = $_POST["c2"];

    if($contraseña == $confirmar)
    {
        $contraseña =md5($contraseña);
        $pdo = new PDO("mysql:hot=loclahost;dbname=proyecto;charset=utf8","root","");
    }
    else
    {
        header("Location:../login.php?m=1");
    }
   
    $sql="INSERT INTO usuario VALUES(null,'$nombre','$nusuario','$apellido','$dni','$sexo','$direccion','$telefono','$email','$contraseña')";
    $pdo->query($sql);
    header("Location: ../login.php?n=1");
?>