<?php 
include('bdpf.php');
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$pedido=$_POST['pedido'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];



$insertar = " INSERT INTO formulario(nombres, apellidos, pedido, correo, telefono) VALUES ('$nombres','$apellidos', '$pedido', '$correo', '$telefono' ) ";

$resultado =mysqli_query($conexion, $insertar);

include ("index.html");

mysqli_close($conexion);

?>