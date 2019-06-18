<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <h1>Inscribete, se voluntario</h1>
    <p>Puedes realizar actividad de voluntariado, para ello debes contar con algunas especificaciones que requerimos(*)</p>
    <p>* ser veterinario o practicante</p>
    <p>* Gustar de animales y ser proactivo(Solo secundaria completa a mas)</p>
    <form action="procesarVoluntario.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="Actividad">Actividad</label>
            <select name="ac">
                <option value="veterinario">veterinario</option>
                <option value="tecnicoVeterinario">Técnico veterinario</option>
                <option value="cuidador">Cuidador</option>
            </select>
        </div>
        <div>
            <label for="nombres">Nombres Completos</label>
            <input type="text" placeholder="Nombres" name="n">
        </div>
        <div>
            <label for="Apellidos">Apellidos</label>
            <input type="text" placeholder="Apellidos" name="a">
        </div>
        <div>
            <label>Adjuntar Documento(DNI y Constancias de estudio):</label>
            <input id="c" type="file" name="c" >
        </div>
        <button>Enviar</button>
    </form>
</body>
</html>