<?php
include_once "Conexion.php";


if(isset($_POST['documentacion']))
{
    if($_POST['documento'] == '')
    {
        echo 'Por favor llene todos los campos.';
    }
    else
    {
        $desc = $_POST['documento'];
        $sql = "INSERT INTO documentos (descripcion_documento) VALUES ('$desc')";
        mysql_query($sql);
        echo 'Documento agregado con exito.';   
    }
}
?>
<?php include("cabecera.php"); ?>
<link rel="stylesheet" type="text/css" href="css\Estilo.css">
<title>Agreagar Documentacion al sistema</title>
<h1>Agregar Documentacion alumnos</h1>
<form action="" method="post" class="documentacion">
    <div><label>Descripcion del documento</label></div>
    <div><input name="documento"   type="text"></div></br>
    <div><input name="documentacion" type="submit" value="Agregar documento"></div>
</form>
<form method="post" action="inicio.php">
    <div><input name="Alumno" type="submit" value="Regresar a inicio"></div>
</form>
<?php include("pie.php"); ?>