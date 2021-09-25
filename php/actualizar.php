<?php 

	require_once "../configura/config.php";

	$conexion=conex();

	$id_ninio=$_POST['id_ninio'];
	$nombrenU=$_POST['nombrenU'];
	$apellidonU=$_POST['apellidonU'];
	$fechanU=$_POST['fechanU'];

	$sql="CALL sp_actualizar_datos('$nombrenU',
									'$apellidonU',
									'$fechanU',
									'$id_ninio')";
									
	echo mysqli_query($conexion,$sql);
 ?>