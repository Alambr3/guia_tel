<?php

$Chost = "localhost";
$Cuser = "root";
$Cpass = "";
$Cdb = "chat";

$con = new mysqli($Chost,$Cuser, $Cpass, $Cdb);

if($con->connect_errno) {
    die("Ha ocurrido un error");
}

if(isset($_GET['enviar'])) {
	$busqueda = $_GET['busqueda'];

$consulta = $con->query("SELECT * FROM bodges WHERE porque LIKE '%$busqueda%'");

while ($row = $consulta->fetch_array()) {
	echo $row['porque'].'<br>';
	}
}
