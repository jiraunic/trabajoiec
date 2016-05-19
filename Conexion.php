<?php
// Using MySQL API (connecting from App Engine)
$conn = mysql_connect(
  '173.194.225.117:3306', // host
  'root', // username
  'toor',     // password
  'iec', // database name
  null
  ) or die(echo 'error de conexion');
?>