<?php include("cabecera.php"); ?>
<h1>Agregar Maestro</h1>
<form action="maestro.php" method="post" class="Maestro">
    <div><label>Nombre  </label></div>
    <div><input name="Nombre"   type="text"></div></br>
    <div><label>Apellido</label></div>
    <div><input name="Apellido" type="text"></div></br>
    <div>
    	<div><label>Tipo de mestro</label></div>
    	<select id="tipom" name="tipom">
    		<option value="0"></option>
    		<option value="1">Preparatoria</option>
    		<option value="2">Profesional</option>
    		<option value="3">Secretariado</option>
    	</select>
    	  <input id="tipoma" type="text" value="" name="tipoma" hidden="">
    </div>

<script >
             $('select#tipom').change(function(){
                     $("#tipoma").val($('select#tipom option:selected').html());
                    });
</script>
<br>
    <div><input name="Maestro" type="submit" value="Agregar Maestro"></div>
</form>
<form method="post" action="inicio.php">
    <div><input name="Alumno" type="submit" value="Regresar a inicio"></div>
</form>
<?php include("pie.php"); ?>