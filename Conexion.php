<?php
// Using mysqli (connecting from App Engine)
$link = mysql_connect('localhost', 'root', '') or die('No se pudo conectar: ' . mysql_error());
mysql_select_db('iec');
?>