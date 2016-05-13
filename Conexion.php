<?php


$enlace =  mysql_connect('173.194.225.117', 'root', 'toor');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_select_db('iec',$enlace)
?>