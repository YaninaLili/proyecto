<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear una cuenta</h1>
    <form action="formulario/procesarRegistro.php" method ="post">
        <div>
        <input type="text" name="n" placeholder="Nombre">
        <input type="text" name="a" placeholder="Apellido">
        </div>
        <div>
            <input type="text" name="u" placeholder="Nombre de Usuario">
        </div>
        
        <div>
        <input type="text" name="e" placeholder="Correo Electronico">
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
        <input type="password" name="c" placeholder="contraseña">
        </div>

        <div>
        <label >Confirmar Contraseña</label>
        <input type="password" name="c2" placeholder="Confrmar contraseña">
        </div>

        

        <button>Registrarte</button>

    
    </form>
</body>
</html>