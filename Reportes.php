<?php
    $pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/styleReg.css">
</head>
<body>
<h1>Reportar mascotas abandonadas</h1>
    <div class=padre>
        <div class="hijo1">
            <form action="formulario/procesarReportes.php" method = "post" enctype="multipart/form-data">
                
                <h3>Datos de persona que encontró a la mascota:</h3>
                <div>
                    <label>Nombres y Apellidos:</label>
                    <input type="text" name="n">
                </div>

                <div>
                    <label>Teléfono:</label>
                    <input type="text" name="te">
                </div>

                <h3>Datos de mascota:</h3>
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
                    <label>Sexo:</label>
                    <select name="s" id="sexo">
                        <option value="E">Seleccionar</option>
                        <option value="M">Macho</option>
                        <option value="H">Hembra</option>
                    </select>
                </div>

                <div>
                    <label>Tamaño:</label>
                    <input type="text" name="ta">
                </div>

                <div>
                    <label>Lugar donde fue encontrada:</label>
                    <input type="text" name="l">
                </div>

                <div>
                    <label>Foto:</label>
                    <input id="foto" type="file" name="fotoMascota" >
                </div>

                <div>
                    <label>Descripción de estado:</label>
                    <textarea name="d" id="" cols="30" rows="5"></textarea>
                </div>
                <button>Guardar</button>              
            </form>
        </div>

        <div class="hijo2">
            <img src="imagen/perrito.jpg"><br>
            <img src="imagen/perro.jpg">
        </div>
    </div>
</body>
</html>