<?php
include_once "conexion.php";

$sql="SELECT id_alumno, concat(nombre_alumno, ' ', apellido_alumno) FROM `alumnos` WHERE area='Profesional'";
    $result =  mysql_query($sql); 

    $combobit3 =" <option value='0'></option>";
    $numero =0;
    while ($row = mysql_fetch_row($result)){ 
        $combobit3 .=" <option value='".$row[0]."'>".$row[1]."</option>";
    }
?>
<?php include("cabecera.php"); ?>
<link rel="stylesheet" type="text/css" href="css\Estilo.css">
<script src="jquery-2.2.3.js" type="text/javascript"></script> 
<title>relacionar maestro con materia</title>
<form action="documentos.php" method="post" class="relacionar">
		<div><label>Alumno</label></br>
        <select id = 'alumno' name='alumno'>
        <?php echo $combobit3; ?>
        </select>
        <input id="nocontrol" type="text" value="" name="nocontrol" hidden="">
        </div></br> 
            <script>
            $('select#alumno').on('change',function(){
                     valor = $(this).val();
                     $("#nocontrol").val(valor);
                        });
            </script>

      <div><input name="relacionar" type="submit" value="Buscar documentacion alumno"></div>

</form>
<form method="post" action="relacionalumnodocuemnto.php">
    <div><input name="Alumno" type="submit" value="Menu Anterior"></div>
</form>
<form method="post" action="inicio.php">
    <div><input name="Alumno" type="submit" value="Regresar a inicio"></div>
</form>
<?php include("pie.php"); ?>