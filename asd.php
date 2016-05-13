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
$sql="SELECT Nombre_usuario, pass from usuarios where Nombre_usuario='$user' and pass='$password';";
echo "vamos bien, antes de entrar en if : ";

$result=mysql_query($sql);
echo mysql_num_rows($result);

if ($result=mysql_query($sql))
  {printf("Entramos al if : ");
  while ($obj=mysql_fetch_object($result))
    { echo "Entramos al while : ";
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