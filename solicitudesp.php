<?php
/**Recibe los datos desde el Formulario */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$id=$_POST["id"];
$estudiante=$_POST["estudiante"];
$rut=$_POST["rut"];
$fecha=$_POST["fecha"];
$materiales=$_POST["materiales"];

/**Relaciona los Datos con la opcion seleccionada por el usuario */
if (isset($_POST['btnSubmit1'])) {
    /**Conecta con la BD y posteriormente Realiza la insercion en la tabla */
$mysqli= new mysqli("localhost", "root","", "pañol");
$insertar ="insert into solicitudesp values('$id', '$estudiante','$rut','$fecha','$materiales')";
$final=mysqli_query($mysqli, $insertar);
/** Envia Mensaje de confirmacion o Error dependiendo si se ingreso correctamente los datos */
if($final){
    echo "<script>alert('Los Datos an sido registrados correctamente'); window.location='profesores.php';</script>";
}else{
    echo "<script>alert('ya existe, intente nuevamente'); window.history.go(-1);</script>";
}
  } else if (isset($_POST['btnSubmit3'])) {
    $mysqli= new mysqli("localhost", "root","", "pañol");
	$eliminar="delete from inventario where id='$id'";
    $final=mysqli_query($mysqli,$eliminar);
	if($final){
		echo "<script>alert('Datos Eliminados'); window.location='adm.php';</script>";
	}else{
		echo "<script>alert('El Id igresado es incorrecto'); window.history.go(-1);</script>";
	}
    } else {
        $mysqli= new mysqli("localhost", "root","", "pañol");
        $actualizar="UPDATE INVENTARIO SET producto = '$producto',cantidad='$cantidad' WHERE  id = '$id'";
        $final=mysqli_query($mysqli,$actualizar);
       if($final){
           echo "<script>alert('Datos Actualizados'); window.location='adm.php';</script>";
       }else{
           echo "<script>alert('Los Datos no se pudieron actualizar'); window.history.go(-1);</script>";
       }
    }
  }

?>