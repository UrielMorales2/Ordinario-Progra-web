<?php
include_once('conexion.php');// invoca al archivo conexion.ph


    $salida = "";

    $query = "SELECT * FROM ventas  ";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT fecha, tipo, precio, cantidad,descuento, total FROM ventas WHERE fecha LIKE '%".$q."%' ";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr>
                        <td>fecha</td>
    					<td>tipo</td>
    					<td>precio</td>
    					<td>cantidad</td>
						<td>descuento</td>
						<td>total</td>
    				</tr>

    			</thead>
            <tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['fecha']."</td>
    					<td>".$fila['tipo']."</td>
    					<td>$".$fila['precio'].".00</td>
    					<td>".$fila['cantidad']." Litros</td>
						<td>".$fila['descuento']."%</td>
						<td>$".$fila['total']."</td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }

/*$calculaLitros = "SELECT SUM(litros) FROM ventas;"
$hola=$conn -> query($calculaLitros);
$filaa=$hola->fetch_assoc(); 

$TotalPrecios=$filaa['TotalPrecios']; /

$salida.=$TotalPrecio;*/

    echo $salida;

    $conn->close();



?>
