<?php
include_once('conexion.php');// invoca al archivo conexion.php

$fecha = $_POST["fecha"];
$tipo = $_POST["cosa"];
$precio = $_POST["opt"];
$litros = $_POST["litros"];
$des = $_POST["descuento"];

$total = $precio * $litros;
$dct = ($total * $des)/100;
$totalPagar = $total - $dct;


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

<div class="container-add">
<h2 class="container__titlee">CONFIRMAR VENTA</h2>
<form name="formulario12" action="insertar.php" method="post" class="container__form">
<label for="" class="container__label">FECHA:</label>
            <input value="  <?php echo $fecha ?> " name="fecha" type="text" class="container__input" > 
            <label for="" class="container__label">TIPO:</label>
            <input value=" <?php echo $tipo ?>" name="cosa" id="tipo" type="text" class="container__input" >
            <label for="" class="container__label">PRECIO POR LITRO:</label>
            <input value=" <?php echo $precio ?>" name="opt" id="precio" type="text" class="container__input" >
            <label for="" class="container__label">CANTIDAD DE LITROS:</label>
            <input value=" <?php echo $litros ?>" name="litros" id="litros" type="text" class="container__input" >
            <label for="" class="container__label">DESCUENTO:</label>
            <input value=" <?php echo $des ?>" name="descuento" id="descuento" type="text" class="container__input" >%
            <label for="" class="container__label">TOTAL A PAGAR:</label>
            <input value=" <?php echo $totalPagar ?>" name="totalP" id="totalP" type="text" class="container__input" >
            <br>
            <a href="home.php" class="btn">CANCELAR</a>
            <input  name="enviar" class="bt" type="submit" value="CONFIRMAR">

    </form>
</div>
   

   
    <script src="js/menu.js"></script>
     <script src="js/submenu.js"></script>
</body>
</html>