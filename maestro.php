<?php
include_once "conexion.php";

if(isset($_POST['Maestro']))
{
    if($_POST['Nombre'] == '' or $_POST['Apellido'] == '' or $_POST['tipoma']=='')
    {
        echo 'Por favor llene todos los campos.';
    }
    else
    {   
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $tipomaestro = $_POST['tipoma'];
        $sql = "INSERT INTO maestros (nombre_maestro, apellido_maestro, tipo_maestro) VALUES ('$nombre', '$apellido', '$tipomaestro')";
        mysqli_query($con, $sql);
 
        echo 'Maestro agregado correctamente.';           
    }
}
?>
<?php include("cabecera.php"); ?>
<link rel="stylesheet" type="text/css" href="css\Estilo.css">
<form method="post" action="AgregarMaestro.php">
    </br>
    <div><input name="Alumno" type="submit" value="Regresar Menu Anterior"></div>
</form>
<form method="post" action="inicio.php">
    </br>
    <div><input name="Alumno" type="submit" value="Regresar a inicio"></div>
</form>
<?php include("pie.php"); ?>