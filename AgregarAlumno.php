<?php
include_once "conexion.php";

$sql="SELECT id_pago, descripcion_pago from catalogopago";
$result =  mysql_query($sql); 

    $combobit=" <option value='0'></option>";
    $numero =0;
    while ($row = mysql_fetch_row($result)){ 
        $combobit .=" <option value='".$row[0]."'>".$row[1]."</option>";
    }
?>
<?php include("cabecera.php"); ?>
<title>Agreagar Alumno</title>
<h1>Agregar Alumno</h1>
<form  action="alumno.php" method="post" class="Alumno">
    <div><label>Nombre</label></div>
    <div><input name="Nombre"          type="text"></div>
    <div><label>Apellido</label></div>
    <div><input name="Apellido"        type="text"></div>
    <div><label>Calle</label></div>
    <div><input name="calle"           type="text"></div>
    <div><label>Numero Exterior:</label></div>
    <div><input name="Numero_Exterior" type="text"></div>
    <div><label>Numero Interior:</label></div>
    <div><input name="Numero_Interior" type="text"></div>
    <div><label>Colonia</label></div>
    <div><input name="Colonia"         type="text"></div>
    <div><label>Codigo Postal</label></div>
    <div><input name="Codigo_Postal"   type="text"></div>
    <div><label>Estado</label></div>
    <div><input name="Estado"          type="text"></div>
    <div><label>Municpio</label></div>
    <div><input name="Municpio"        type="text"></div></br>
    <div><label>Tipo de Pago</label></br>
        <select name="pago" id="pago">
        <option value=0></option>
        <option value=1>Pago Semanal</option>
        <option value=2>Pago Quincenal</option>
        <option value=3>Pago Mensual</option>
        </select>
        <input id="idpago" type="text" value="" name="idpago" hidden="">
        </div></br>

        <script >
             $('select#pago').on('change',function(){
                     valor = $(this).val();
                     $("#idpago").val(valor);
             });
        </script>
    <div><label>Cuota Mensual</label></div>
    <div><input name="cantidad"  type="text"></div></br>
   <div><label>Area del alumno</label></br>
        <select name="area" id="area">
        <option value=0></option>
        <option value=1>Preparatoria</option>
        <option value=2>Profesional</option>
        <option value=3>Secretariado</option>
        </select>
        <input id="idarea" type="text" value="" name="idarea" hidden="">
        </div></br>

        <script >
             $('select#area').on('change',function(){
                       $("#idarea").val($('select#area option:selected').html());
             });
        </script>
    <div><input name="Alumno" type="submit" value="Agregar Alumno"></div>
</form>
<form method="" action="inicio.php">
    <div><input name="Alumno" type="submit" value="Regresar a inicio"></div>
</form>
<?php include("pie.php"); ?>