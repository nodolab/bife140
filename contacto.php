<?php
if($_POST==null) exit();

function Error($msj){
	echo '{"status": "0", "msj": "'.$msj.'"}';
	exit;
}
	

function ValDato($dato){
	$dato = trim($dato);
	$dato = strip_tags($dato);
	$dato = addslashes($dato);
	return $dato;
}
	
//Recolectando valores de POST
//Verificar que los valores existan y validarlos
if(isset($_POST['nombre']))
	$nombre = ValDato($_POST['nombre']);
else
	Error('Error');
	
if(isset($_POST['email']))
	$email = ValDato($_POST['email']);
else
	Error('Error');
	
if(isset($_POST['fecha']))
	$fecha = ValDato($_POST['fecha']);
else
	Error('Error');

if(isset($_POST['hora']))
	$hora = ValDato($_POST['hora']);
else
	Error('Error');


$para = 'gaona1526@gmail.com';
$titulo = 'Reservación desde sitio web';
$header = 'From: '. $nombre;
$msjCorreo = "Se ha realizado un solicitud para reservación con los siguientes datos:\n\nNombre: $nombre\nE-Mail: $email\nFecha: $fecha\nHora: $hora";


if (mail($para, $titulo, $msjCorreo, $header)) {
        echo '{"status": "1", "msj": "ok"}';
} else {
	Error('Error');
}
	
?>