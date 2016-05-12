<?php
include_once "conexion.php";

$sql="SELECT id_alumno, CONCAT(nombre_alumno, ' ', apellido_alumno) from alumnos where area='Preparatoria';";
$result =  mysqli_query($con, $sql); 

    $combobit=" <option value='0'></option>";
    $numero =0;
    while ($row = mysqli_fetch_row($result)){ 
        $combobit .=" <option value='".$row[0]."'>".$row[1]."</option>";
    }

    ?>
<?php include("cabecera.php"); ?>
<h1>Reporte de pago alumno</h1>
<form  action="reportealumno.php" target="_blank" method="post" class="Alumno" id="alumno">

        <div><label>Nombre del alumno</label></br>
        <select name="alumno" id="alumno">
            <?php echo $combobit; ?>
        </select>
        <input id="idalumno" type="text" value="" name="idalumno" hidden="">
        </div></br>
        <script >
             $('select#alumno').on('change',function(){
                     valor = $(this).val();
                     $("#idalumno").val(valor);
             });
        </script>
<div><label>Tipo de pago</label></br>
<select id="pago" name="pago">
    <option value="0"></option>
    <option value="1">Colegiatura</option>
    <option value="2">Cuatrimestre</option>
    <option value="3">Examen ExraOrdinario</option>
    <option value="4">Documento</option>
</select>
<select id="mes" name="mes" hidden="">
    <option value="0"></option>
    <option value="1">Enero</option>
    <option value="2">Febrero</option>
    <option value="3">Marzo</option>
    <option value="4">Abril</option>
    <option value="5">Mayo</option>
    <option value="6">Junio</option>
    <option value="7">Julio</option>
    <option value="8">Agosto</option>
    <option value="9">Septiembre</option>
    <option value="10">Octubre</option>
    <option value="11">Noviembre</option>
    <option value="12">Diciembre</option>
</select>
  <input id="tipopago" type="text" value="" name="tipopago" hidden="">
  <input id="dtipopago" type="text" value="" name="dtipopago" hidden="">
  <input id="maestra" type="text" value="" name="maestra" hidden="">
  <input id="smes" type="text" value="" name="smes" hidden="">
 </div></br>

<script >
             $('select#pago').change(function(){
                     valor = $(this).val();
                     $("#tipopago").val(valor);
                     $("#dtipopago").val($('select#pago option:selected').html());
                     $("#maestra").val("Elena Sánchez Puente");
                    if(valor == 1){
                          $("#mes").show();
                     }
                     else
                     {
                        $("#mes").hide();
                     }
                     
             });
</script>
<script>
    $('select#mes').change(function(){
       $("#smes").val($('select#mes option:selected').html());
    });
</script>
<div>
     <label>Importe</label></Br>
  <input id="importe" type="text" value="" name="importe" ></Br>
</div>
   </Br> <div><input name="Alumno" type="submit" value="Generar recibo"></div>
</form>
<form action="areadepago.php">
    <div><input name="Alumno" type="submit" value="Regresar Menu Anterior"></div>
    </form>

<form method="" action="inicio.php">
    <div><input name="Alumno" type="submit" value="Regresar a inicio"></div>
</form>
<?php include("pie.php"); ?>