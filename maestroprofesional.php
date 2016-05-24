<?php
include_once "Conexion.php";

$sql="SELECT id_materia, Nombre_Materia from materias where area = 'Profesional'";
$result =  mysql_query($sql); 

    $combobit=" <option value='0'></option>";
    $numero =0;
    while ($row = mysql_fetch_row($result)){ 
        $combobit .=" <option value='".$row[0]."'>".$row[1]."</option>";
    }

    $sql="SELECT id_maestro, concat(nombre_maestro, ' ', apellido_maestro) FROM maestros where tipo_maestro= 'Profesional'";
    $result =  mysql_query($sql); 

    $combobit2=" <option value='0'></option>";
    $numero =0;
    while ($row = mysql_fetch_row($result)){ 
        $combobit2 .=" <option value='".$row[0]."'>".$row[1]."</option>";
    }

 
?>

<?php include("cabecera.php"); ?>
<title>relacionar maestro con materia</title>
<h1>Relacionar Maestro con Materia</h1>
<form action="relacionmm.php" method="post" class="relacionar">
		<div><label>Maestro</label></br>
        <select name="maestro" id="maestro">
        <?php echo $combobit2; ?>
        </select>
        <input id="idmaestro" type="text" value="" name="idmaestro" hidden="">
        </div></br>

        <script >
             $('select#maestro').on('change',function(){
                     valor = $(this).val();
                     $("#idmaestro").val(valor);
                        });
        </script>

  		<div><label>Materia</label></div>
 		<select name="materia" id="materia">
        <?php echo $combobit; ?>
        </select>
        <input id="idmateria" type="text" value="" name="idmateria" hidden="">
        </div></br>
        <script>
             $('select#materia').on('change',function(){
                     valor1 = $(this).val();
                     $("#idmateria").val(valor1);
                        });
        </script>
        </br>
      <div><input name="relacionar" type="submit" value="Relcionar maestro con materia"></div>

</form>
<form method="post" action="relacion.php">
    <div><input name="Alumno" type="submit" value="Regresar a relacionar"></div>
</form>
<form method="post" action="inicio.php">
    <div><input name="Alumno" type="submit" value="Regresar a inicio"></div>
</form>
<?php include("pie.php"); ?>