<!doctype html>
<html>
<head>
    <!-- <title>Conexion con base de datos de Niños </title> -->
     
</head>

<body>
    
<h1>Formulario</h1>
    <h2><?php echo $cata["titulo"]; ?> </h2> 

    <!-- Hacemos la tabla para desplegar datos -->
        <table>
            <thead>
                <tr>
                    <th>Id_ninio </th>
                    <th>Nombre </th>
                    <th>Apellido </th>
                    <th>Fecha Nacimiento </th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    foreach($cata["ninios"] as $cato){
                    echo "<tr>";
                    echo "<td>".$cato["id_ninio"]."</td>";
                    echo "<td>".$cato["nombre"]."</td>";
                    echo "<td>".$cato["apellido"]."</td>";
                    echo "<td>".$cato["fecha"]."</td>";
                    echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table> 
</body>

</html>