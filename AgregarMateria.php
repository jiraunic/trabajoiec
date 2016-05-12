<?php include("cabecera.php"); ?>
<link rel="stylesheet" type="text/css" href="css\Estilo.css">
<title>Agreagar Materia</title>
<h1>Agregar Materia</h1>
<form action="materia.php" method="post" class="Materia">
    <div><label>Nombre de la materia </label></div>
    <div><input name="Nombre" type="text"></div></br>
    <div><label>Modulo de la materia  </label></div>
    <div><input name="Modulo" type="text"></div></br>
    <div><label>Area de la materia</label></br>
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
    <div><input name="Materia" type="submit" value="Agregar Materia"></div>
</form>
<form method="post" action="inicio.php">
    <div><input name="Alumno" type="submit" value="Regresar a inicio"></div>
</form>
<?php include("pie.php"); ?>