<?php 

	require_once "../configura/config.php";

	$conexion=conex();
	$id=$_POST['idninio'];
	$sql="CALL sp_eliminar_datos('$id')";
	echo mysqli_query($conexion,$sql);
 ?>