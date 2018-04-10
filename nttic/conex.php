<?php 

include "config.php";

$query = "SELECT * FROM usuario WHERE usuario = '".$_POST['usuario']."' AND contrasena = '".MD5($_POST['contrasena'])."'";

$res = $mysqli->query($query);

if ($res->num_rows == 1) {
	header ("Location: index.php");
} else {
	header ("Location: login.php");
}

 ?>