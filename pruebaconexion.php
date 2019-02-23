<?php
$dbuser="fundasam";
$dbpass="vyvwKHr6ErqD5";
$dbname="fundasam_usuarios";
$chandle = mysql_connect("localhost", $dbuser, $dbpass) or die("Error conectando a la BBDD");
echo "Conectado correctamente
";
mysql_select_db($dbname, $chandle) or die ($dbname . " Base de datos no encontrada." . $dbuser);
echo "Base de datos " . $database . " seleccionada";
mysql_close($chandle);


?>