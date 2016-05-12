<?php
include_once "conexion.php";
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}
// Check connection
$user=$_POST['user'];
$password = $_POST['password'];

$count=0;
$sql="select Nombre_usuario,pass from usuarios where Nombre_usuario='$user' and pass='$password'";

if ($result=mysqli_query($con,$sql))
  {
  while ($obj=mysqli_fetch_object($result))
    {
      $count=$count+1;
      echo $count;
    }

}
if ($count==1) {
    //header("location:inicio.php");  
}
else
{
 // header("location:inde.php"); 
}

?>