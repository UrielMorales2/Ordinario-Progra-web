<?php
include_once('conexion.php');// invoca al archivo conexion.php

$fecha = $_POST["fecha"];
$tipo = $_POST["cosa"];
$precio = $_POST["opt"];
$litros = $_POST["litros"];
$des = $_POST["descuento"];
$totalPagar = $_POST["totalP"];

$insertar = "INSERT INTO ventas (fecha, tipo, precio, cantidad, descuento, total) VALUES ('$fecha', '$tipo', '$precio', '$litros', '$des', '$totalPagar')";
$resultado = mysqli_query($conn, $insertar);
if($resultado){
    echo "<script>alert('VENTA REALIZADA');</script>";
    echo "<script>location.href='home.php';</script>";
    //echo "<script>location.href='totalPagar.php';</script>";
    //echo "<script>location.href='ventasTotales.php';</script>";
}
/*function descu($precio, $litros, $des){

    $val = $precio * $litros;
    $descue = ($val * $des)/100;
    $totalPagar = $val - $descue;
    return $totalPagar;
}

onclick="alert (suma(precio,litros, descuento));"

*/


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gasolineras VIP</title>
    <link rel="icon" type="image/jpg" href="img/banner.jpg"> 
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estiloss.css">
   <link rel="stylesheet" href="css/font.css">
 </head>
<body>

<form name="formulario123" action="home.php" method="" class="container__form">
<div class="table__item">FECHA DE COMPRA : <?php echo $fecha ?></div><hr>
<div class="table__item">TIPO DE GASOLINA : <?php echo $tipo ?></div><hr>
<div class="table__item">PRECIO POR LITRO : $<?php echo $precio ?>.00</div><hr>
<div class="table__item">CANTIDAD DE LITRO : <?php echo $litros ?>LITROS</div><hr>
<div class="table__item">Descuento : <?php echo $des ?>%</div><br>
<div class="table__item btn">Total a pagar : $<?php echo $totalPagar ?></div>
        <input  name="" class="btn" type="submit" value="PAGAR">
    </form>
</body>
</html>