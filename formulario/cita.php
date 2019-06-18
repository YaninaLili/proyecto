<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Llene el formulario siguiente, cuidado al momento de  llenarlas, ponga los datos correctos, Gracias</h2>
    <form action="procesarCita.php" method="post">
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
            <label for="sexo">Sexo</label>
            <input type="text" placeholder="Sexo" name="s">
        </div>
        <div>
            <select name="fecha" >
                <option value="1">2019/07/30</option>
                <option value="2">2019/10/19</option>
            </select>
        </div>
        <button>Aceptar</button>
    </form>
</body>
</html>