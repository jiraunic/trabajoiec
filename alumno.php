<?php
include_once "conexion.php";

if(isset($_POST['Alumno']))
{
    if($_POST['Nombre'] == '' or $_POST['Apellido'] == '' or $_POST['calle'] == '' or $_POST['Numero_Exterior'] == '' or $_POST['Colonia'] == '' or $_POST['Codigo_Postal'] == '' or $_POST['Estado'] == '' or $_POST['Municpio'] == '' or $_POST['idpago']=='' or $_POST['idpago']=='0' or $_POST['cantidad']=='' or $_POST['idarea']=='' or $_POST['idarea']=='0')
    {
        echo "Algo salio mal, vefique los datos";
    }
    else
    {   
        $año= DATE('Y');
        $sql2 = "SELECT id_Alumno from alumnos where id_Alumno like '$año%' ORDER BY id_Alumno Desc" ;
        $alum=mysql_query($sql2);
        $row = mysql_fetch_row($alum);
       
        if($row[0]!=null)
        {
            $nocontrol = $row[0]+1;
        }
        else
        {
            $nocontrol = (DATE('Y')*10000)+"0001";
        }
        //datos a agregar a la tabla alumnos
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $calle = $_POST['calle'];
        $no_exterior = $_POST['Numero_Exterior'];
        $no_interior = $_POST['Numero_Interior'];
        $colonia = $_POST['Colonia'];
        $codigo = $_POST['Codigo_Postal'];
        $esta = $_POST['Estado'];
        $muni = $_POST['Municpio'];
        $area = $_POST['idarea'];
        // datos a agregar a la tabla convenio
        $pag= $_POST['idpago'];
        $cout=$_POST['cantidad'];
        $sql = "INSERT INTO `Alumnos` (`Id_alumno`, `nombre_alumno`, `apellido_alumno`, `calle`, `no_exterior`, `no_interior`, `colonia`, `codigo_postal`, `estado`, `municipio`, `area`) VALUES ('$nocontrol','$nombre', '$apellido', '$calle', '$no_exterior', '$no_interior', '$colonia', '$codigo', '$esta', '$muni', '$area')";
        mysql_query($sql);
        $sql2 = "INSERT INTO `convenio` (`id_alumno`, `cuota`, `id_pago`) VALUES ('$nocontrol', '$cout', '$pag')";
        mysql_query($sql2);
        echo "Registro realizado correctamente, alumno agregado con numero de control: '$nocontrol'.";  
                
    }
}
?>
<?php include("cabecera.php"); ?>
<form method="" action="AgregarAlumno.php">
</br>
    <div><input name="Alumno" type="submit" value="Regresar"></div>
</form>
<form method="" action="inicio.php">
    <div><input name="Alumno" type="submit" value="Regresar a inicio"></div>
</form>
<?php include("pie.php"); ?>
</body>
</html>