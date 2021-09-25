<?php 

	require_once "../configura/config.php";
	$conexion=conex();

	$id=$_POST['idninio'];
	$sql="CALL sp_obtener_regNinio($id)";

	$result=mysqli_query($conexion,$sql);

	$ver=mysqli_fetch_row($result);

	$datos=array(
			'id_ninio'=>$ver[0],
              'nombrenU'=>$ver[1],
              'apellidonU'=>$ver[2],
              'fechanU'=>$ver[3]
					);
	echo json_encode($datos);
 ?>