<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Iniciar sesion</h1>
    <form action="">

        <div>
        <label >Correo Electronico o Telefono</label>
        <input type="text" name="correoTelefono">
        </div>

        <div>
        <label >Contraseña</label>
        <input type="password" name="contraseña">
        </div>

        <button>Iiniciar sesión</button>
    </form>

    <h1>Crear una cuenta</h1>


    <form action="procesarRegistro.php" method ="post">
        <div>
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="apellido" placeholder="Apellido">
        </div>
        
        <div>
        <input type="text" name="email" placeholder="Correo Electronico">
        </div>

        <div>
        <label >sexo</label>
        <select name="sexo" id="tipoSexo">
            <option >Seleccionar</option>
            <option value="f">Femenino </option>
            <option value="m">Masculino </option>
        </select>
        </div>
        
        <div>
        <label >DNI</label>
        <input type="text" name="dni">
        </div>
        
        <div>
        <label >Direccion</label>
        <input type="text" name="direccion">
        </div>

        

        <div>
        <label >Telefono</label>
        <input type="text" name="telefono">
        </div>

        <div>
        <label >Contraseña</label>
        <input type="password" name="contraseña">
        </div>

        <div>
        <label >Confirmar Contraseña</label>
        <input type="password" name="confirCon">
        </div>

        

        <button>Registrarte</button>

    
    </form>
</body>
</html>