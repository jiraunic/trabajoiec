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
$sql="select * from usuarios; ";
echo "vamos bien, antes de entrar en if : ";
$result = mysqli_prepare($con, $sql);
$count =  mysqli_stmt_execute($result);
echo $count;


if ($count==1) {
    //header("location:inicio.php");  
}
else
{
 // header("location:inde.php"); 
}

?>