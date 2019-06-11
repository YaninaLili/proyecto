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
      
        <h1>Iniciar sesión</h1>

        
            <label >Nombre de usuario:</label>
            <input type="text" name="username">
            <label >Password:</label>
            <input type="password" name="password">
            <input type="submit" value="Iniciar Sesión">
        
        
      
       
    </form>


</body>
</html>