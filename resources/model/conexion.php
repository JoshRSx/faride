<?php 
$servername = "localhost";
$contrasena = "";
$usuario = "root";
$nombre_bd = "bd_faride";

$conn = mysqli_connect($servername, $usuario, $contrasena, $nombre_bd);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

try {
	$bd = new PDO (
	    'mysql:host=localhost;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		
	);
	
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}



echo "Connectado";
mysqli_close($conn);

?>