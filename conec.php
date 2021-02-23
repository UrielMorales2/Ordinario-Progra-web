<?php
class conexion{
	private $user="root";
	private $pass="";
	function conectar(){
		try{
			$pdo = new PDO('mysql:host=localhost;dbname=ordinarioweb',$this->user,$this->pass);
			
		}catch(PDOException $error){
			echo "No se establecio conexion".$error->getMessage();
		}
	}	
}
$nuevaconexion = new conexion();
$nuevaconexion->conectar();
?>