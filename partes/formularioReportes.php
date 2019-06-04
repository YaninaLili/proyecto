<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Reportar mascotas abandonadas</h1>
    <form action="procesarReportes.php" method = "post">
        <div>
            <label>Nombre:</label>
            <input type="text" name="nombre">
        </div>
    
        <div>
            <label>Tipo de mascota:</label>
            <select name="tipo" id="tipo">
                <option value="S">Seleccionar</option>
                <option value="P">Perro</option>
                <option value="G">Gato</option>
                <option value="O">Otro</option>
            </select>
            <label>Especificar</label>
            <input type="text" name="tipo">
        </div>

        <div>
            <label>Sexo de mascota:</label>
            <select name="sexo" id="sexo">
                <option value="E">Seleccionar</option>
                <option value="M">Macho</option>
                <option value="H">Hembra</option>
            </select>
        </div>

        <div>
            <label>Tamaño de mascota:</label>
            <input type="text" name="tamaño">
        </div>

        <div>
            <label>Lugar donde fue encontrada la mascota:</label>
            <input type="text" name="lugar">
        </div>

        <div>
            <label>Descripción de estado de mascota:</label><br>
            <textarea name="" id="" cols="30" rows="5"></textarea>
        </div>
    </form>
</body>
</html>