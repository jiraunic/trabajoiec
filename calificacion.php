<?php
include_once "conexion.php";

      if(isset($_POST['Calificacion']))
    {
        if($_POST['calif'] == '' or $_POST['periodo']=='' or $_POST['idmateria']=='0' or $_POST['idmateria']=='' or $_POST['idmaestro']=='0' or $_POST['idmaestro']=='' or $_POST['nocontrol']=='0' or $_POST['nocontrol']=='')
            {
                echo 'Por favor llene todos los campos.';
            }
        else
            {
                $calific = $_POST['calif'];
                $per     = $_POST['periodo'];
                $idmaes  = $_POST['idmaestro'];
                $idalum  = $_POST['nocontrol'];
                $idmate  = $_POST['idmateria'];
                $sql = "SELECT * FROM maestromateria where id_maestro = '$idmaes' and id_materia ='$idmate'";
                $numero = mysql_num_rows(mysql_query($sql));
                if($numero == 0)
                {
                    echo 'El maestro seleccionado no imparte la materia seleccionada';
                }
                else
                {

                $sql = "INSERT INTO calificaciones(id_materia, id_maestro, id_alumno, calificacion, periodo) VALUES ('$idmate', '$idmaes', '$idalum', '$calific', '$per')";
                mysql_query($sql);
                echo 'Calificacion agregada con exito.';   
                }
            }
    }
?>
<?php include("cabecera.php"); ?>
<link rel="stylesheet" type="text/css" href="css\Estilo.css">
     <form method="post" action="agregarcalificacion.php">
    <div><input name="calif" type="submit" value="Agregar mas calificaciones"></div>
    </form>

    <form method="" action="inicio.php">
    <div><input name="inicio" type="submit" value="Regresar a inicio"></div>
    </form>
<?php include("pie.php"); ?>