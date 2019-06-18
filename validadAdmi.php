#PARA ADMINISTRAR
<?php $admin= $_POST["u"];
$pass= $_POST["p"];
if($admin =="admin" && $pass ="123")
{
    session_start();
    $_SESSION["usuario"] = $admin;
    header("Location:administrador/administrar.php");
}
?>