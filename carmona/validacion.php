<?php
include('basdat.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","alumsistem");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:formulario1.php");

}else{
    ?>
    <?php
    include("index1.html");

  ?>
  <h1 class="bad">Por favor ingrese bien el usuario y contraseña</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);           