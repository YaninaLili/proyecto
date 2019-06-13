<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/form.css">
 
</head>
<body>
    <div class="padre1">
    <h1>Crear una cuenta</h1>
    
    
    <form action="formulario/procesarRegistro.php" method ="post">
   
        <div>
        <label >Nombre</label>
        <input type="text" name="n" >
        </div>
        <div>     <label >Apellido</label>
        <input type="text" name="a" >
        </div>

        <div>
            <label >Nombre de Usuario</label>
            <input type="text" name="u" >
        </div>
        
        <div>
        <label >Correo Electronico</label>
        <input type="text" name="e" >
        </div>

        <div>
        <label >sexo</label>
        <select name="s" id="tipoSexo">
            <option >Seleccionar</option>
            <option value="f">Femenino </option>
            <option value="m">Masculino </option>
        </select>
        </div>
        
        <div>
        <label >DNI</label>
        <input type="text" name="d">
        </div>
        
        <div>
        <label >Direccion</label>
        <input type="text" name="dir">
        </div>

        

        <div>
        <label >Telefono</label>
        <input type="text" name="t">
        </div>

        <div>
        <label >Contraseña</label>
        <input type="password" name="c">
        </div>

        <div>
        <label >Confirmar Contraseña</label>
        <input type="password" name="c2" >
        </div>

        

        <button>Registrarte</button>
   
    
    </form>
    </div>

</body>
</html>