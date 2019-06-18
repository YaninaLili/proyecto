<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<<<<<<< HEAD
=======
    <style>

        body {
            background-color: skyblue;
        }
        div > label {
            display: block;
            margin: 5px;
            font-weight: bold;
        }

        label {
            margin: 3px;
            width: 70%;
            color: black;
        }

        input {
            border-radius: 10px;
            margin: 3px;
            height: 25px;
            width: 70%;
        }

        button {
            border-radius: 10px;
            width: 30%;
            border-radius: 10px;
            margin: 10px;
            height: 40px;
            font-weight: bold;
        }

        select {
            border-radius: 10px;
            margin: 5px;
            height: 30px;
            width: 70%;
        }

        .padre {
            display: flex;
            justify-content: space-around;   
            font-size: 20px;
        }
    </style>

>>>>>>> 7298f7d59572628fc5fad661d6c01b1dc836167d
</head>
<body>

    <form action="procesarVoluntario.php" method="post" enctype="multipart/form-data">
        <div class="padre">
            <div>
                <img src="https://img.elcomercio.pe/files/ec_article_multimedia_gallery/uploads/2017/05/16/591aa86ee9bb4.jpeg"   width="850" height="650">
            </div>

            <div>   
                <div>
                    <h1>Inscríbete, sé voluntario</h1>
                    <p>Puedes realizar actividad de voluntariado, para ello debes contar</p>
                    <p>con algunas especificaciones que requerimos(*)</p>
                    <p>* Ser veterinario o practicante</p>
                    <p>* Gustar de animales y ser proactivo (Solo secundaria completa a más)</p>
                </div>

                <div>
                    <label for="Actividad">Actividad</label>
                    <select name="ac">
                        <option value="veterinario">Veterinario</option>
                        <option value="tecnicoVeterinario">Técnico veterinario</option>
                        <option value="cuidador">Cuidador</option>
                    </select>
                </div>
                <div>
                    <label for="nombres">Nombres:</label>
                    <input type="text" placeholder="Nombres" name="n">
                </div>
                <div>
                    <label for="Apellidos">Apellidos:</label>
                    <input type="text" placeholder="Apellidos" name="a">
                </div>
                <div>
                    <label>Adjuntar Documentos (DNI y Constancia de Estudios):</label>
                    <input id="c" type="file" name="c" >
                </div>
                <button>Enviar</button>
            </div>
        </div>
    </form>
</body>
</html>