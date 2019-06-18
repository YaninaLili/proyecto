<?php
$ubicacion = "cargado/";
$maxlimit = 50000000;
$allowed_ext = "rar,jpg,png,mp3,gif,pdf,wma,docx";
$overwrite = "no";

$match = "";
$filesize = $_FILES['f']['size'];
$filename = strtolower($_FILES['f']['name']);
   

if(!$filename || $filename=="")
{
    $error = "-No haz seleccionado ningun archivo para subir.";
}
elseif(file_exists($ubicacion.$filename) && $overwrite =="no")
{
    $error = "El archivo $filename ya existe.";
}
if($filesize < 1)
{
    $error= "-Archivo vacío";
}
elseif($filesize > $maxlimit)
{
    $error="-Este archivo supera el maximo tamaño permitido";
}

$file_ext = preg_split("/\./",$filename);
$allowed_ext = preg_split("/\./",$allowed_ext);
foreach ($allowed_ext as $ext) 
{
    if($ext == $file_ext) 
    {
        $match = "1";
    }
}

if(!$allowed_ext)
{
    $error="-Este tipo de archivo no esta permitido: $filename";
}
if(isset($_GET['$error']))
{
    print "Se ha producido el siguiente error al subir el archivo: $error";
}
else
{
    if(move_uploaded_file($_FILES['f']['tmp_name'],
    $ubicacion.$filename))
    print "$filename se ha subido correctamente";
    else
    {
        print "ERROR! No ha seleccionado archivo a subir o Puede que el tamaño supere el maximo permitido. Intentelo de nuevo.";
    }
}
$nombre =$_POST["n"];
$apellido = $_POST["a"];
$archivo = addslashes(file_get_contents($_FILES["f"]["tmp_name"]));

$pdo = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8","root","");  
$sql="INSERT INTO solicitud VALUES (NULL,'$nombre','$apellido','$archivo')";
$pdo->query($sql);    
header("Location: ../index.php?n=3");  

?>
<title>Subir Archivos</title>
<form>
    <INPUT TYPE="button" VALUE="atrás" onclick="history.back()">
</form>