<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/styleCita.css">
    <style>
        div > label {
            display: block;
            margin: 5px;
            font-weight: bold;
        }

        label {
            margin: 3px;
            width: 180%;
            color: black;
        }

        input {
            border-radius: 10px;
            margin: 3px;
            height: 25px;
            width: 180%;
        }

        button {
            border-radius: 10px;
            width: 60%;
            border-radius: 10px;
            margin: 10px;
            height: 40px;
            font-weight: bold;
        }

        select {
            border-radius: 10px;
            margin: 5px;
            height: 30px;
            width: 90%;
        }

        .padre {
            display: flex;
            justify-content: space-around;   
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h2>Llene el formulario siguiente, cuidado al momento de  llenarlas, ponga los datos correctos, Gracias</h2>
    <form action="procesarCita.php" method="post">
<<<<<<< HEAD
        <h2>Datos del usuario</h2>
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Nombres" name="n">
        </div>
        <div>
            <label for="apellido">apellido</label>
            <input type="text" placeholder="Apellidos Completos" name="a">
        </div>
        <div>
            <label for="dni">DNI</label>
            <input type="number" placeholder="DNI" name="d">
        </div>
        <div>
            <label for="direccion">Direccion</label>
            <input type="text" placeholder="Direccion" name="dir">
        </div>
            <h2>Datos de su mascota</h2>
        <div>
            <label>Tipo:</label>
            <select name="t1" id="tipo">
                <option value="S">Seleccionar</option>
                <option value="Perro">Perro</option>
                <option value="Gato">Gato</option>
                <option value="otro">Otro</option>
            </select>
            <label>Especificar:</label>
            <input type="text" name="t2">
        </div>
        <div>
            <label for="sexo">Sexo</label>
            <input type="text" placeholder="Sexo" name="s">
        </div>
        <div>
            <label for="fecha">Fecha</label>
            <select name="f">
                <option value="2019-07-30">2019-07-30</option>
                <option value="2019-10-19">2019-10-19</option>
            </select>
=======
    <div class="padre">
        <div>   
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" placeholder="Nombres" name="n">
            </div>
            <div>
                <label for="apellido">Apellidos:</label>
                <input type="text" placeholder="Apellidos Completos" name="a">
            </div>
            <div>
                <label for="dni">DNI:</label>
                <input type="number" placeholder="DNI" name="d">
            </div>
            <div>
                <label for="direccion">Dirección:</label>
                <input type="text" placeholder="Direccion" name="dir">
            </div>
            <div>
                <label>Tipo:</label>
                <select name="t1" id="tipo">
                    <option value="S">Seleccionar</option>
                    <option value="Perro">Perro</option>
                    <option value="Gato">Gato</option>
                    <option value="Otro">Otro</option>
                </select>
                <label>Especificar:</label>
                <input type="text" name="t2">
            </div>
            <div>
                <label for="sexo">Sexo:</label>
                <input type="text" placeholder="Sexo" name="s">
            </div>
            <div>
                <label>Fecha:</label>
                <select name="fecha" >
                    <option value="1">2019/07/30</option>
                    <option value="2">2019/10/19</option>
                </select>
            </div>
            <button>Aceptar</button>
        </div>
        <div>
            <img src="https://misanimales.com/wp-content/uploads/2016/07/perro-callejero.jpg" width="800" height="600" >
>>>>>>> 7298f7d59572628fc5fad661d6c01b1dc836167d
        </div>
    </div>
    </form>
</body>
</html>