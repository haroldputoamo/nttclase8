<?php 
$servidor = "localhost";
$usuario  = "root";
$base	  = "nttic";
$clave	  = "";

$mysqli =new mysqli($servidor,$usuario,$clave,$base);

if ($mysqli->connect_errno) {
  echo "error al conectarse con Mysql debido a: ".$mysqli->connect_errno;
}

?>