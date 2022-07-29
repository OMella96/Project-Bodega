<?php
/** Recibe las Varibles desde el formulario de Login */
session_start();
require 'conexion.php';
$user = $_POST['usuario'];
$clave = $_POST['clave'];

/** Realiza la consulta con la BD */
$query = "SELECT COUNT(*) as contar FROM administrador where usuario = '$user' and clave = '$clave' ";
$query2 = "SELECT COUNT(*) as contar FROM profesores where usuario = '$user' and clave = '$clave' ";
$bdconect = mysqli_query($conectar,$query);
$parametros = mysqli_fetch_array($bdconect);
$bdconect2 = mysqli_query($conectar,$query2);
$parametros2 = mysqli_fetch_array($bdconect2);
/** Si el Login es Correcto Envia al Usuario a su pantalla correspondiente */
if($parametros['contar']>0){
   $_SESSION['username'] = $user;
  header("location: ../adm.php");
}if($parametros2['contar']>0){
   $_SESSION['username'] = $user;
  header("location: ../profesores.php");
} else {
   $var = "Error al ingresar datos, intente nuevamente";
   echo "<script> window.alert('".$var."');
   window.location.href='../index.php';</script>";
}
?>