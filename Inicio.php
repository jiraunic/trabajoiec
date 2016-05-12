<?php include("cabecera.php"); ?>
    <div><h1>Bienvenido al sistema</h1></div>
          <form method="" action="AgregarAlumno.php">
             <div><input type="submit" name="agregaralumno" value="Agregar Alumno"></div>
         </form>

         <form method="" action="AgregarMaestro.php">
            <div><input name="Maestro" type="submit" value="Agregar Maestro"></div>
         </form>

         <form method="" action="AgregarMateria.php">
              <div><input name="Materia" type="submit" value="Agregar  Materia"></div>
         </form>

         <form method="" action="relacion.php">
              <div><input type="submit" name="maesmate" value="Relacionar maestro con materia"></div>
          </form>

         <form method="" action="agregardocumentacion.php">
             <div><input type="submit" name="agregardocumento" value="Agregar documentacion"></div>
         </form>

         <form method="" action="relacionalumnodocuemnto.php">
              <div><input type="submit" name="docu" value="Documentacion alumnos"></div>
         </form>

         <form method="" action="tipocalificaion.php">
              <div><input type="submit" name="calif" value="Agregar Calificacion"></div>
         </form>

         <form method="" action="reportes.php">
              <div><input type="submit" name="reporte" value="Generar Reporte"></div>
         </form>

          <form method="" action="Logout.php">
          <input type="submit" name="cerrar" value="Cerrar    Sesion">
         </form>

</body>
<footer>
  <p>Creado y Desarrollado por: </p>
  <p>Juan Ignacio Rodriguez Aguilar</p>
  <p>Contacto: <a href="https://www.facebook.com/JUIGROAG">
  Facebook</a>.</p>
</footer>
</html>