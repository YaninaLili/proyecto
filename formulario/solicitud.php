<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitud</title>
</head>
<body>
    <p>Está cerca a conseguir el mejor amigo que puede esperar, solo necesitamos datos para saber que los angelitos estén en las manos correctas</p>
    <form action="procesarSolicitud.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="nombres">Nombres Completos</label>
            <input type="text" placeholder="Nombres" name="n">
        </div>
        <div>
            <label for="Apellidos">Apellidos</label>
            <input type="text" placeholder="Apellidos" name="a">
        </div>
        <div>
            <b>Suba el archivo de Certificado de Salud Mental: </b>
            <input name="f" type="file">
        </div>
        <button>Enviar</button>
    </form>
</body>
</html>