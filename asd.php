<?php
include_once "Conexion.php";
//$user=$_POST['user'];
//$password = $_POST['password'];

//$count=0;
$sql="SELECT * from usuarios";
echo "vamos bien, antes de entrar en if : ";


if ($result=mysql_query($sql))
  {printf("Entramos al if : ");
  while ($obj=mysql_fetch_object($result))
    { echo "Entramos al while : ";
      $count=$count+1;
      echo $count;
    }

}
if ($count==1) {
    header("location:inicio.php");  
}
else
{
 header("location:inde.php"); 
}

?>