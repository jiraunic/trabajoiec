<?php
// Using mysqli (connecting from App Engine)
$link = mysql_connect('173.194.225.117', 'root', 'toor') or die( mysql_error());
mysql_select_db('iec');
?>