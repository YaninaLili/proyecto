<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="style/login.css">
    <style>
        body
        {
            background-image: url(https://www.abogacia.es/wp-content/uploads/2017/05/Tips-que-hacer-con-tu-mascota-cuando-sales-de-viaje-1500x1000.jpg);
        }
    </style>
</head>
<body>



    <form action="" method="POST">
       <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
       ?>
        <div class="padre">

        <h1><h1 >Patitas en Acción</h1></h1>
    
            <div class="hijo ">
            <label >Nombre de usuario:</label>
            <input type="text" name="username">
            <label >Password:</label>
            <input type="password" name="password">
            <button>Iniciar sesión</button>
            </div>
            
        </div>
        
      
       
    </form>


</body>
</html>