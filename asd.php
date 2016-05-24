<?php
include_once "Conexion.php";
//Check connection
$user=$_POST['user'];
$password = $_POST['password'];

$count=0;
$sql="SELECT * from usuarios where Nombre_usuario = '$user' and pass = '$password'";
if ($result=mysql_query($sql))
  {
  while ($obj=mysql_fetch_object($result))
    {
      $count=$count+1;
    }

}

if ($count==1) {
	echo $count;
    header("location:inicio.php");  
}
else
{
  header("location:inde.php"); 
}

?>