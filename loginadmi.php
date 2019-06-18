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
    <link rel="stylesheet" href="style/styleAdm.css">
</head>
<body>
    <form action="validadAdmi.php" method="POST">
    
    <div class="padre">
       
        <div class="hijo">
            <h1 >Patitas en Acción</h1>
            <div>
                <label >Nombre de usuario:</label>
                <input type="text" name="u">
            </div>

            <div>
                <label >Password:</label>
                <input type="password" name="p">
            </div>
            <button>Iniciar sesión</button>
        </div>
        
        <div>
            <img src="https://www.publico.es/uploads/2018/04/12/5acf09ecd664b.jpg" width="900" height="00">
        </div>
        
    </div>
    </form>
</body>
</html>
