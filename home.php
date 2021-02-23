<?php
session_start();// variable de sesion
if (!isset($_SESSION['NombreCompleto'])) {
	header('location: index.php');// tambien hace un direccionamiento hacia una pagina.
}else{
	$usuacrioactivo=$_SESSION['NombreCompleto'];
	$idusuario=$_SESSION['id_usuario'];
}
include_once('conexion.php');// invoca al archivo conexion.php
$ventas = "SELECT * FROM ventas";

/*require 'conec.php';
$objData = new conexion();
if(isset($_GET['opcion'])){
    
}
$sth = $objData->prepare("SELECT tipo FROM tipogas");
$sth->execute();

 $result = $sth->fetchAll();

print_r($result);*/

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
    <header class="main-header">
        <div class="container container--flex">
            <div class="logo-container column column--50">
                <h1 class="logo">Gasolineras VIP </h1>
            </div>
            <div class="main-header__contactInfo column column--50">
                <p class="main-header__contactInfo__phone">Bienvenido:
                <?php echo $usuacrioactivo ?>
                </p>
                    <a class="main-header__contacInfo__address" href="cerrar.php"> Cerrar Sesion </a>
            </div>
        </div>
    </header>
    <nav class="main-nav">
        <div class="container container--flex">
            <span class="icon-menu" id="btnmenu"></span>
            <ul class="menu" id="menu">
                <li class="menu__item"><a href="home.php" class="menu__link menu__link--select">HOME</a></li>
                <li class="menu__item"><a href="ventasDia.php" class="menu__link">VENTAS</a></li>
                 <li class="menu__item submenu"><a href="ventasTotales.php" class="menu__link  ">VENTAS TOTALES</a> </li>
            </ul>
            <div class="social-icon">
                <a href="https://www.facebook.com/" class="social-icon__link"><span class="icon-facebook"></span></a>
                <a href="https://www.instagram.com/" class="social-icon__link"><span class="icon-instagram"></span></a>
                <a href="" class="social-icon__link"><span class="icon-mail"></span></a>
            </div>
        </div>
    </nav>
    <section class="banner">
        <img src="img/banner.jpg" alt="" class="banner__img">
        <div class="banner__content">HOLA GAS, ¿A DONDE VAS? <br> ¡SI GASOLINA QUIERES COMPRAR, PIDELA DESDE TU GARAGE! </div>
    </section>

    <div class="container-add">
   <!-- <script src="js/autocompletar.js"></script>-->
    <script type="text/javascript">
    function buscar(){
    var opcion = document.getElementById('tipo').value;
    window.location.href = 'http://localhost/ordiPrograWeb/home.php?opcion='+opcion;
}
</script>

        <h2 class="container__title">CONTROL DE VENTA DE GASOLINA</h2>
        <form name="formulario1" action="calcular.php" method="post" class="container__form">
            <label for="" class="container__label">FECHA:</label>
            <input name="fecha" type="date" class="container__input"  required> 
            <label for="" class="container__label">TIPO:</label>
           <!-- <select name="tipo" onchange="return buscar();" id="tipo" class="container__input" name="estado" zise="1" id="">  -->           
           <select name="cosa" id="tipo" class="container__input"  zise="1" onchange="cambia()" required>
                <option value="0">SELECCIONE</option>
                <option value="1" name="magna">MAGNA</option>
                <option value="2" name="premium">PREMIUM</option>
            </select>
            <label for="" class="container__label">PRECIO POR LITRO:</label>
            $<select name="opt" id="precio" class="container__input"  zise="1" required>
            <option value="-">- </option>          
            </select>
            <!--<input name="precio" type="number" class="container__input"> -->
            <label for="" class="container__label">CANTIDAD DE LITROS:</label>
            <input name="litros" id="litros" type="number" class="container__input" required>
            <label for="" class="container__label">DESCUENTO:</label>
            <input name="descuento" id="descuento" type="number" class="container__input" required>%
            <input class="btn" type="reset" value="CANCELAR">
            <input  name="enviar" class="bt" type="submit" value="PAGAR">
        </form>
        <script type="text/javascript">
			//Definicion  Variables Correspondintes
			var opt_1 = new Array ("19");
			var opt_2 = new Array ("21");
			//funcion que permite ejecutar el cambio dinamico
			function cambia(){
				var cosa;
				//Se toma el vamor de la "cosa seleccionada"
				cosa = document.formulario1.cosa[document.formulario1.cosa.selectedIndex].value;
				//se chequea si la "cosa" esta definida
				if(cosa!=0){
					//selecionamos las cosas Correctas
					mis_opts=eval("opt_" + cosa);
					//se calcula el numero de cosas
					num_opts=mis_opts.length;
					//marco el numero de opt en el select
					document.formulario1.opt.length = num_opts;
					//para cada opt del array, la pongo en el select
					for(i=0; i<num_opts; i++){
						document.formulario1.opt.options[i].value=mis_opts[i];
						document.formulario1.opt.options[i].text=mis_opts[i];
					}
					}else{
						//si no habia ninguna opt seleccionada, elimino las cosas del select
						document.formulario1.opt.length = 1;
						//ponemos un guion en la unica opt que he dejado
						document.formulario1.opt.options[0].value="-";
						document.formulario1.opt.options[0].text="-";
					}
					//hacer un reset de las opts
					document.formulario1.opt.options[0].selected = true;
					
				} 
            </script>
           <?php
            
           ?>
        <!-- <script type="text/javascript">
            var descu = function(precio,litros, descuento){
                var precio = parseFloat(document.getElementById("precio").value);
                var litros = parseFloat(document.getElementById("litros").value);
                var descuento =parseFloat(document.getElementById("descuento").value);

                var val = precio * litros;
                var descue = (val * descuento)/100;
                var totalPagar = val - descue;
                return totalPagar;
            }
            </script>  -->
    </div>
    
<?php


?>

    <footer class="main-footer">
            <div class="container container--flex">
                <div class="column column--33">
                   <h2 class="column__title">¿Por qué visitarnos?</h2>
                   <p class="column__txt">GASOLINERS VIP es una opcion nueva y eficas para la venta de gasolina a domicilio</p> 
                </div>
                 <div class="column column--33">
                   <h2 class="column__title">Contactanos</h2>
                  <p class="column__txt" >Leona Vicario #4 San Jacinto Amilpas, Oaxaca, Oax.</p> 
                   <p class="column__txt">Telefono: 951-557-26-97</p> 
                   <p class="column__txt">E-mail: gasolina@gasVIP.com</p> 
                </div>
                <div class="column column--33">
                    <h2 class="column__title">Siguenos en nuestras redes Sociales</h2>
                    <p class="column__txt"><a href="https://www.facebook.com/" class="icon-facebook">Gasolineras VIP</a></p>
                    <p class="column__txt"><a href="https://www.instagram.com/" class="icon-instagram">@GasolinerasVIP</a></p>
                    
                </div>
                <p class="copy">© 2021 GASOLINERAS VIP | Todos los derechos reservados</p>
            </div>
        </footer>
    <script src="js/menu.js"></script>
     <script src="js/submenu.js"></script>
</body>
</html>