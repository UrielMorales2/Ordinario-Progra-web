<?php
session_start();
session_destroy();// Destruye la sesion o cierra la sesion

header("location:index.php");// Redireccionamiento

?>