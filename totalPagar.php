<?php
session_start();// variable de sesion
if (!isset($_SESSION['NombreCompleto'])) {
	header('location: index.php');// tambien hace un direccionamiento hacia una pagina.
}else{
	$usuacrioactivo=$_SESSION['NombreCompleto'];
	$idusuario=$_SESSION['id_usuario'];
}
include_once('conexion.php');// invoca al archivo conexion.php



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
                <p class="main-header__contactInfo__phone">
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
                <li class="menu__item"><a href="home.php" class="menu__link">HOME</a></li>
                 <li class="menu__item submenu"><a href="totalPagar.php" class="menu__link  menu__link--select ">VENTAS TOTALES</a> </li>
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