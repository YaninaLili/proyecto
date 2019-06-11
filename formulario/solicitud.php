<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitud</title>
</head>
<body>
    <p>Suba el archivo de contancia psicologica</p>
    <form action="procesarCarga.php" method="post" enctype="multipart/form-data">
        <b>Enviar un nuevo archivo: </b>
        <input name="f" type="file">
        <button>Enviar</button>
</form>
</body>
</html>