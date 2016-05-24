<?php
include_once "Conexion.php";
$nocont = $_POST['nocontrol'];

function imprimir()
{   
	$nocont = $_POST['nocontrol'];
    $sql2="SELECT documentos.descripcion_documento, catalogoestatus.descripcion_estatus FROM documentos inner JOIN alumnodocumento on documentos.id_documento=alumnodocumento.id_documento inner JOIN catalogoestatus on alumnodocumento.id_estatus=catalogoestatus.id_estatus where alumnodocumento.id_alumno='$nocont' ORDER BY documentos.id_documento";
	$result =  mysql_query($sql2); 
    echo "<table border = '1'> \n"; 
    echo "<tr><td>Documento</td><td>Estatus del documento</td></tr> \n"; 
    while ($row = mysql_fetch_row($result)){ 
       echo "<tr><td>$row[0]</td><td>$row[1]</td></tr> \n"; 
} 
    echo "</table></br> \n";
}
	$sql2="SELECT CONCAT(nombre_alumno, ' ', apellido_alumno) FROM alumnos where id_alumno='$nocont'";
	$res =  mysql_query($sql2); 
	$row = mysql_fetch_row($res);
	$valor = $row[0];
	$valor2 = $nocont;

	$sql="SELECT * FROM catalogoestatus";
	$result =  mysql_query($sql); 

    $combobit=" <option value='0'></option>";
    $numero =0;
    while ($row = mysql_fetch_row($result)){ 
        $combobit .=" <option value='".$row[0]."'>".$row[1]."</option>";
    }

    $sql="SELECT * FROM documentos ";
    $result =  mysql_query($sql); 

    $combobit3 =" <option value='0'></option>";
    $numero =0;
    while ($row = mysql_fetch_row($result)){ 
        $combobit3 .=" <option value='".$row[0]."'>".$row[1]."</option>";
    }
	imprimir();    
?>
<?php include("cabecera.php"); ?>
<form action="doc.php" method="post" class="relacionar">
		 <div><label>Alumno</label></br>
        <input id="alum" type="text" value="<?=$valor?>" name="alum" size = "25" disabled >
        <input id="idalum" type="text" value="<?=$valor2?>" name="idalum" hidden="" >
        </div></br>

         <div><label>Documento</label></br>
        <select id = 'documento' name='documento'>
        <?php echo $combobit3; ?>
        </select>
        <input id="documen" type="text" value="" name="documen" hidden="" >
        </div></br>
            <script>
            $('select#documento').on('change',function(){
                     valor = $(this).val();
                     $("#documen").val(valor);
                        });
            </script>
		<div><label>Estatus</label></br>
        <select id = 'estatus' name='estatus'>
        <?php echo $combobit; ?>
        </select>
        <input id="esta" type="text" value="" name="esta" hidden="">
        </div></br> 
            <script>
            $('select#estatus').on('change',function(){
                     valor = $(this).val();
                     $("#esta").val(valor);
                        });
            </script>
         <div><input type="submit" name="enviar" value="Modificar o agregar estatus"></div>
</form>
<form method="" action="inicio.php">
    <div><input type="submit" name="docu" value="Regresar a Inicio"></div></br>
</form>
<?php include("pie.php"); ?>