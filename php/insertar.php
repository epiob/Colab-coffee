<?php 

	require_once "../configura/config.php";

	$conexion=conex();

	$nombre=$_POST['nombren'];
	$apellido=$_POST['apellidon'];
	$fecha=$_POST['fechan'];

	$sql="CALL sp_insertar_datos('$nombre','$apellido','$fecha')";

	echo mysqli_query($conexion,$sql);

 ?>