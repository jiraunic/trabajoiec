<?php
include_once "conexion.php";
if(isset($_POST['enviar']))
	{	
		$nocont = $_POST['idalum'];
		$doc = $_POST['documen'];
		$est = $_POST['esta'];
		if ($doc=='0' or $doc =='' or $est=='0' or $est=='')
		{
			echo "Debe de seleccionar todos los valores que se requieren";
		}
		else
		{
	    $sql="SELECT * FROM alumnodocumento where id_alumno = '$nocont' and id_documento='$doc'";
		 $numero = mysql_num_rows(mysql_query($sql));
		 if($numero!=0)
		 {
		 	$sql="UPDATE alumnodocumento SET `id_estatus`='$est' WHERE id_alumno='$nocont' and id_documento='$doc' ";
		 	 mysql_query($sql);
		 	echo "Documento actualizado exitosamente";

		 	
		 }
		 else
		 {
		 	$sql="INSERT INTO alumnodocumento(id_alumno, id_documento, id_estatus) VALUES ('$nocont', '$doc', '$est')";
		 	 mysql_query($sql);
		 	echo "Documento agregado exitosamente";
		 
		 }
		}

	}	
	?>
<?php include("cabecera.php"); ?>
<link rel="stylesheet" type="text/css" href="css\Estilo.css">
		<form method="post" action="documentos.php">
			</br>
			<input id="nocontrol" type="text" value="<?=$nocont?>" name="nocontrol"  hidden="" >
              <div><input type="submit" name="docu" value="documentacion alumnos"></div></br>
         </form>
         <form method="" action="inicio.php">
              <div><input type="submit" name="docu" value="Regresar a Inicio"></div></br>
         </form>
         <?php include("pie.php"); ?>