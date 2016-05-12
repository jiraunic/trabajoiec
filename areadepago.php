<?php include("cabecera.php"); ?>
<form method="" action="catalogoreportealumno.php">
     <div><input type="submit" name="reporte" value="Preparatoria"></div>
</form>

<form method="" action="reporteprofesional.php">
     <input type="submit" name="cerrar" value="Profesional"> 
</form>
<form method="" action="reportesecretariado.php">
     <input type="submit" name="cerrar" value="Secretariado"> 
</form>
<form method="post" action="reportes.php">
    <div><input name="Alumno" type="submit" value="Regresar Menu Anterior"></div>
    </form>
<?php include("pie.php"); ?>