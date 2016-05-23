<?php 
include_once "conexion.php";

if(isset($_POST['relacionar']))
{	
	if($_POST['maestro'] == '' or $_POST['maestro']=='0' or $_POST['materia'] == '' or $_POST['materia']=='0' )
            {
                echo 'Por favor llene todos los campos.';
            }
        else
            {
                $maest = $_POST['maestro'];
                $mater = $_POST['materia'];
                              
                $sql = "INSERT INTO maestromateria(id_materia, id_maestro) VALUES ('$mater', '$maest')";
                mysql_query($sql);
                echo 'Registro agregado con exito.';   
            }
}

?> 
<?php include("cabecera.php"); ?>
<link rel="stylesheet" type="text/css" href="css\Estilo.css">
<form method="post" action="inicio.php">
</br>
    <div><input name="Alumno" type="submit" value="Regresar a inicio"></div>
</form>
<?php include("pie.php"); ?>