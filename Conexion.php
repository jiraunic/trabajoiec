<?php
// Using MySQL API (connecting from App Engine)
$conn = mysql_connect(':/cloudsql/serviciosnubetec:basededatosiecdos',
  'root', // username
  ''      // password
  ) or die( mysql_error());
mysql_select_db('iec')  or die( mysql_error());
?>