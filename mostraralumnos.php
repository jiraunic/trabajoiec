
<?php 
include_once "conexion.php";
 
if(isset($_POST['buscaralumnocontrol']))
{	
	$nocon= $_POST['nocontrol'];
	$result = mysql_query("SELECT id_alumno, nombre_alumno, apellido_alumno FROM alumnos where id_alumno like '$nocon%'"); 
	echo "<table border = '1'> \n"; 
	echo "<tr><td>Numero de control</td><td>Nombre</td><td>apellido</td></tr> \n"; 
	while ($row = mysql_fetch_row($result)){ 
       echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr> \n"; 
} 
	echo "</table></br> \n";
}


if(isset($_POST['buscaralumnonombre']))
{	
	$nomb= $_POST['nombre'];
	$result = mysql_query("SELECT id_alumno, nombre_alumno, apellido_alumno FROM alumnos where nombre_alumno like '$nomb%'"); 
	echo "<table border = '1'> \n"; 
	echo "<tr><td>Numero de control</td><td>Nombre</td><td>apellido</td></tr> \n"; 
	while ($row = mysql_fetch_row($result)){ 
       echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr> \n"; 
} 
	echo "</table></br> \n";
}


?> 
<?php include("cabecera.php"); ?>
<link rel="stylesheet" type="text/css" href="css\Estilo.css">
<title>Mostrar alumno</title>
<form action="" method="post" class="mostrar">
    <div><label>Numero de control</label></br><input name="nocontrol" type="text" ></div></br>
    <div><input name="buscaralumnocontrol" type="submit" value="buscar por NoControl"></div></br>
    <div><label>Nombre</label></br><input name="nombre" type="text" ></div></br>
    <div><input name="buscaralumnonombre" type="submit" value="buscar por Nombre"></div>
</form>
</form>
<form method="post" action="inicio.php">
    <div><input name="Alumno" type="submit" value="Regresar a inicio"></div>
</form>
<?php include("pie.php"); ?>