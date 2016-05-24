<?php
include_once "Conexion.php";

if(isset($_POST['Materia']))
{
    if($_POST['Nombre'] == '' or $_POST['Modulo'] == '' or $_POST['idarea']=='' or $_POST['idarea']=='0')
    {
        echo 'Por favor llene todos los campos.';
    }
    else
    {   
        $nombre = $_POST['Nombre'];
        $modulo = $_POST['Modulo'];
        $area   = $_POST['idarea'];
        $sql = "INSERT INTO materias (Nombre_Materia, Modulo, area) VALUES ('$nombre', '$modulo', '$area')";
        mysql_query($sql);
 
        echo 'Materia registrada correctamente.'; 
        
    }
}
?>
<?php include("cabecera.php"); ?>
<link rel="stylesheet" type="text/css" href="css\Estilo.css">
<form method="post" action="AgregarMateria.php">
    </br>
    <div><input name="Alumno" type="submit" value="Regresar a Menu Anterior"></div>
</form>
<form method="post" action="inicio.php">
    </br>
    <div><input name="Alumno" type="submit" value="Regresar a inicio"></div>
</form>
<?php include("pie.php"); ?>