<?php 
    session_start();
    if(isset($_SESSION["usuario"]))
    {
      header("Location:administrador/administrar.php");
    }
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
    <form action="validadAdmi.php" method="POST">
    
    <div class="padre">
        <h1 >Patitas en Acción</h1>

        <div class="hijo">
            <label >Nombre de usuario:</label>
            <input type="text" name="u">
            <label >Password:</label>
            <input type="password" name="p">
            <button>Iniciar sesión</button>
        </div>
        
    </div>
    </form>
</body>
</html>
