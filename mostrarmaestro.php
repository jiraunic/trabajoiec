<?php 
include_once "conexion.php";
 
if(isset($_POST['buscar']))
{	
	$nomb=$_POST['nombre'];
	$result = mysql_query("SELECT id_maestro, CONCAT(nombre_maestro,' ', apellido_maestro) AS nombrecompleto FROM maestros where nombre_maestro like '%$nomb%'"); 
	echo "<table border = '1'> \n"; 
	echo "<tr><td>ID Maestro</td><td>Nombre Maestro</td></tr> \n"; 
	while ($row = mysql_fetch_row($result)){ 
       echo "<tr><td>$row[0]</td><td>$row[1]</td></tr> \n"; 
} 
	echo "</table></br> \n";
}

?> 
<?php include("cabecera.php"); ?>
<link rel="stylesheet" type="text/css" href="css\Estilo.css">
<title>Mostrar alumno</title>
<form action="" method="post" class="buscar">
    <div><label>Nombre maestro</label></br><input name="nombre" type="text" ></div></br>
    <div><input name="buscar" type="submit" value="buscar por Nombre"></div>
</form>
</form>
<form method="post" action="inicio.php">
    <div><input name="Alumno" type="submit" value="Regresar a inicio"></div>
</form>
<?php include("pie.php"); ?>