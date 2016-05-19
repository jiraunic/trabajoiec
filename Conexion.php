<?php
// Using MySQL API (connecting from App Engine)
$conn = mysql_connect(':/cloudsql/serviciosnubetec:basededatosiec',
  'root', // username
  'toor'      // password
  ) or die(mysql_error());
mysql_select_db('iec', $conn) or die (mysql_error());
?>