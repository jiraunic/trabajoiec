<?php
include_once "Conexion.php";
$user=$_POST['user'];
$password = $_POST['password'];

$count=0;
$sql="SELECT * from usuarios";
if ($result=mysql_query($sql))
  {
  while ($obj=mysql_fetch_object($result))
    {
      $count=$count+1;
    }

}
if ($count==1) {
	echo "Entramos al if correctamente";
   header('Location: Inicio.php');
}
else
{
 header("location:inde.php"); 
}

?>