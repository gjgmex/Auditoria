<?php
$serverName= '200.66.68.170';
$connectionInfo=array("Database"=>"REG_INVENTARIO","UID"=>"RegInventario", "PWD"=>"N1R3G0V19$","CharacterSet"=>"UTF-8");
$conn_sis = sqlsrv_connect($serverName, $connectionInfo);

if($conn_sis){
	echo "conexión exitosa";
}else{
	echo "fallo en la conexión";
	die (print_r(sqlsrv_errors(),true));
}
?>